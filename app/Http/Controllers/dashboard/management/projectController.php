<?php

namespace App\Http\Controllers\dashboard\management;

use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function Couchbase\defaultDecoder;
use Illuminate\Support\Arr;
use Carbon\Carbon;

class projectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $counter = 0;
        $date = array();
        $now = date('Y-m-d H:i:s');
        foreach ($projects as $project) {
            $create = \Carbon\Carbon::parse($project->created_at)->timestamp;
            $update = \Carbon\Carbon::parse($project->updated_at)->timestamp;
            if ($update - $create > 0) {
                $temp = $project->updated_at;
                $str = "آپدیت شده در";
            } else {
                $temp = $project->created_at;
                $str = "ایجاد شده در";
            }
            $diff = $temp->diffForHumans($now);

            $date[$counter] = $str . str_replace("از", "", $diff);
            $counter++;

        }
        return view('management.project.index', compact('projects', 'date'));;
    }

    public function autocompleteSearch(Request $request)
    {
//        $search = $request->search;
//
//        if($search == ''){
//            $employees = Tag::orderby('tag','asc')->select('id','name')->limit(5)->get();
//        }else{
//            $employees = Tag::orderby('tag','asc')->select('id','name')->where('tag', 'like', '%' .$search . '%')->limit(5)->get();
//        }
//
//        $response = array();
//        foreach($employees as $employee){
//            $response[] = array("value"=>$employee->id,"label"=>$employee->name);
//        }
//
//        return response()->json($response);

//        $query = $request->get('query');
//        $filterResult = Tag::where('tag', 'LIKE', '%'. $query. '%')->get();
//        return response()->json($filterResult);

//        $data = Tag::select("tag")
//            ->where("tag", "LIKE", "%{$request->term}%")
//            ->get()->toArray();
//        return response()->json($data);
        $data = Tag::select("tag")
            ->where("tag", "LIKE", "%{$request->input}%")
            ->get()->toArray();
        return response()->json($data);
    }

    public function add()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('management.project.add', ['categories' => $this->categories(), 'tags' => $this->tags()]);
    }

    public function create(CreateProjectRequest $request)
    {

        $input = $request->all();
        $file = $request->file('file');
        $file_name = time() . '-' . $file->getClientOriginalName();
        $file_path = $file->storeAs('public\files', $file_name);

        $img = $request->file('banner_img');
        $img_name = time() . '-' . $img->getClientOriginalName();
        $img_path = $img->storeAs('public\images', $img_name);

        $input = Arr::set($input, "banner_img", $img_name);
        $input = Arr::set($input, "file", $file_name);
        $input = Arr::add($input, "user_id", 1);

        $project = Project::create($input);

        $cats = $request['cats'];
        if (isset($cats)) {
            foreach ($cats as $cat)
                $project->categories()->attach($cat);
        }
        $tags = $request['tags'];
        if (isset($tags)) {
            foreach ($tags as $tag)
                $project->tags()->attach($tag);
        }
        Alert::success('پروژه ایجاد شد !');
        return redirect()->route('projects.index');

    }

    public function edit($id)
    {
        $project = Project::find($id);
        $project_categories = $project->categories()->pluck('category_id')->toArray();
        $project_tags = $project->tags()->pluck('tag_id')->toArray();

        return view('management.project.edit', ['project' => $project, 'categories' => $this->categories(), 'tags' => $this->tags()
            , 'project_tags' => $project_tags, 'project_categories' => $project_categories]);
    }

    public function update(UpdateProjectRequest $request, $id)
    {
        $input = $request->all();
        $project = Project::find($id);

        $project->title = $input['title'];
        $project->article = $input['article'];
        $project->featured = $input['featured'];
        $project->enabled = $input['enabled'];
        $project->comments_enabled = $input['comments_enabled'];

        $flag = false;

        if ($request->has('file')) {
            $file = $request->file('file');
            $old_file_name = $project->file;
            Storage::delete('public/files/' . $old_file_name);
            $new_file_name = time() . '-' . $file->getClientOriginalName();
            $file->storeAs('public\files', $new_file_name);
            $input = Arr::set($input, "file", $new_file_name);
            $flag = true;
        }

        if ($request->has('banner_img')) {
            $img = $request->file('banner_img');
            $old_img_name = $project->banner_img;
            Storage::delete('public/images/' . $old_img_name);
            $new_img_name = time() . '-' . $img->getClientOriginalName();
            $img->storeAs('public\images', $new_img_name);
            $input = Arr::set($input, "banner_img", $new_img_name);
            $flag = true;
        }

        $cats = $request['cats'];
        $tags = $request['tags'];

        $cat_tag_flag = false;

        if (isset($cats)) {
            $categories_id = array();
            foreach ($project->categories as $category)
                array_push($categories_id, $category->pivot->category_id);

            foreach ($cats as $cat) {
                if (!in_array($cat, $categories_id)) {
                    $project->categories()->attach($cat);
                    $cat_tag_flag = true;
                }
            }
            if (count($categories_id) != count($cats)) {
                foreach ($categories_id as $cat) {
                    if (!in_array($cat, $cats))
                        $project->categories()->detach($cat);
                }
                $cat_tag_flag = true;
            }
        }

        if (isset($tags)) {
            $tags_id = array();
            foreach ($project->tags as $tag)
                array_push($tags_id, $tag->pivot->tag_id);

            foreach ($tags as $tag) {
                if (!in_array($tag, $tags_id)) {
                    $project->tags()->attach($tag);
                    $cat_tag_flag = true;
                }
            }

            if (count($tags_id) != count($tags)) {
                foreach ($tags_id as $tag) {
                    if (!in_array($tag, $tags))
                        $project->tags()->detach($tag);
                }
                $cat_tag_flag = true;
            }
        }
//        dd(Carbon::now(), $project->updated_at);
        if ($cat_tag_flag)
            $input = Arr::set($input, "updated_at", Carbon::now()->format('Y-m-d H:i:s'));
        if ($project->isDirty() || $flag || $cat_tag_flag) {
            $project->update($input);
            $flag = true;
        }


        if (!$flag)
            Alert::success(' اطلاعات  تغییر نکرد !');
        else
            Alert::success(' اطلاعات  ویرایش  شد !');

        return redirect()->route('projects.index');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);
            // move(public_path('images')
//            storeAs('public\images'
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'عکس با موفقیت بارگذاری شد';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function show($id)
    {
        $project = Project::find($id);

        $project_categories = $project->categories()->pluck('category_id');
        $project_tags = $project->tags()->pluck('tag_id');

        $categories = array();
        foreach ($project_categories as $category)
            array_push($categories, Category::find($category));

        $tags = array();
        foreach ($project_tags as $tag)
            array_push($tags, Tag::find($tag));

        return view('management.project.detail', ['project' => $project, 'categories' => $categories, 'tags' => $tags]);
    }

    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $project = Project::find($request['id']);
            $project->categories()->detach();
            $project->tags()->detach();
            $project->delete();
        }
    }

    public function categories()
    {
        $categories = Category::all();
        return $categories;
        $tags = Tag::all();
    }

    public function tags()
    {
        $tags = Tag::all();
        return $tags;

    }
}
