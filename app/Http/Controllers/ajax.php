<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ajax extends Controller
{
    public function index(Request $request)
    {
//        $tags = Tag::all();
//        return view('management.tag.index', compact('tags'));;

        return view('management.tag.create');

    }
    function fetch_data(Request $request)
    {

        if($request->ajax()) {
            $data = Tag::all();
            return json_encode($data);
        }

    }

    public function add()
    {
        return view('management.tag.add');
    }
    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $request->validate([
                'tag' => 'required',
            ]);
            $title = $request['tag'];
            $tag = new Tag();
            $tag->tag = $title;
            $tag->tag_slug = str::slug($title);
            $tag->save();
            Alert::success('تگ ایجاد شد !');



        }
    }


    public function show($id)
    {
        $tag = Tag::find($id);
        return view('management.tag.detail', compact('tag'));
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('management.tag.edit', compact('tag'));
    }

    public function update(Request $request)
    {
        if($request->ajax()) {
            $title = $request->column_value;
            $tag = Tag::find($request->id);
            $tag->tag = $title;
            $tag->tag_slug = str::slug($title);
            $tag->save();
            Alert::success(' اطلاعات  ویرایش  شد !');
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()) {
            Tag::where('id', $request->id)->delete();
            Alert::success(' حذف شد !');
        }
    }
}
