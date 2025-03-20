<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $postsFromDB = Post::all();
        return view('posts.index', ['posts' => $postsFromDB]);
    }

    function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }

    function create(){
        $users = User::all();
        return view('posts.create', ['users' => $users]);
    }

    function store(){
        Post::create([
            'title' => request()->title,
            'description' => request()->description,
            'user_id' => request()->post_creator
        ]);

        return to_route('posts.index');
    }
    function edit(Post $post){
        $users = User::all();
        return view('posts.edit', ['post' => $post, 'users' => $users]);
    }

    function update(Post $post){

        $post->update([
            'title' => request()->title,
            'description' => request()->description,
            'user_id' => request()->post_creator,
        ]);

        return to_route('posts.show',$post->id);
    }

    function destroy(Post $post){
        $post->delete();
        return to_route('posts.index');
    }
}
