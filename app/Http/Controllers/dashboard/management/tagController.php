<?php

namespace App\Http\Controllers\dashboard\management;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\String_;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class tagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('management.tag.index' ,  compact('tags'));;
    }


    public function create(Request $request)
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
            return response()->json($tag);
        }
    }

    public function update(Request $request)
    {
        if($request->ajax()) {
            $title = $request->column_value;
            $tag = Tag::find($request->id);
            $tag->tag = $title;
            $tag->tag_slug = str::slug($title);
            $tag->save();
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()) {
            Tag::where('id', $request->id)->delete();
        }
    }

}
