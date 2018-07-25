<?php

namespace App\Http\Controllers;

use App\Post;

use App\Comment;

use App\CommentReply;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post) {
        $this->validate($request, [
            'body' => 'required',
        ]);


        $comment = new Comment;
        $comment->body = $request->input('body');
        $comment->post_id =  $post->id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        return back()->with('success', 'Post uploaded');
    }

    public function reply(Request $request, Comment $comment) {

        $this->validate($request, [
            'body' => 'required',
        ]);


        $reply = new CommentReply;
        $reply->body = $request->input('body');
        $reply->comment_id =  $comment->id;
        $reply->user_id = auth()->user()->id;
        $reply->save();
        return back()->with('success', 'Post uploaded');
    }
}
