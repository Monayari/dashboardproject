<?php

namespace App\Http\Controllers;

use App\Http\Requests\commentrequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {

        $comment=auth()->user()->comment;

        return view('dashboard.content.comment.index', [
'comment'=>$comment
        ]);

    }

    public function create()
    {

        return view('dashboard.content.comment.create', [

            'user' => auth()->user()
        ]);
    }

    public function store(commentrequest $request)
    {


        $request->validated();

 $comment=Comment::query()->create([

            'is_replay_to_id' => $request->is_replay_to_id,

            'comment' => $request->comment,
            'enable' => $request->enable,
            'user_id' => auth()->user()->id,

        ]);
        alert()->success('رکورد با موفقیت ثبت شد');

         return response()->json($comment);
    }


    public function edit($id)
    {

        $comment = Comment::find($id);
        return response()->json($comment);
        // return view('dashboard.content.comment.edit', compact('comment'));
    }

    public function update(commentrequest $request)
    {
        $request->validated();
        $comment =Comment::find($request->id);

       $comment->update([

            'is_replay_to_id' => $request->is_replay_to_id,

            'comment' => $request->comment,
            'enable' => $request->enable,
        ]);

        alert()->success('رکورد با موفقیت اپدیت شد');
        // return redirect()->route('comment.index');
return response()->json($comment);
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return response()->json([

            'success'=>'Record deleted successfully!'
        ]);
    }


}
