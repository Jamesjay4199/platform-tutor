<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use App\Post;

use App\Comment;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog/index', compact('posts'));
    }

    public function create()
    {
       return view('blog/create');
    }

    public function store(Request $request) {
    // return($request);
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required|min:20'

        ]);

        if(INPUT::hasFile('image')){
        $file = Input::file('image');
        $file->move(public_path().'/uploads/',$file->getClientOriginalName());
        $url = '/uploads/'.$file->getClientOriginalName();
        }


        $post = new Post;
        $post->title = $request->input('title');
        $post->category_id = $request->input('category');
        $post->description = $request->input('description');
        $post->body = $request->input('body');
        $post->image = $url;
        $post->user_id = auth()->user()->id;
        $post->save();
        return back()->with('success', 'Post uploaded');
    }

    public function show(Post $post)
    {
       return view('blog/show', compact('post'));
    }
}
