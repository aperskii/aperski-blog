<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $allPosts = [
            ['id' => 1, 'title' => 'PHP', 'posted_by' => 'Yassine', 'created_at' => '2025-03-09 09:00:00'],
            ['id' => 2, 'title' => 'Javascript', 'posted_by' => 'Mohammed', 'created_at' => '2024-02-10 10:00:00'],
            ['id' => 3, 'title' => 'HTML', 'posted_by' => 'Mahmoud', 'created_at' => '2022-12-04 05:00:00'],
            ['id' => 4, 'title' => 'CSS', 'posted_by' => 'Ali', 'created_at' => '2021-11-15 03:00:00'],
        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    function show($postId){
        $singlePost = [
            'id' => 1, 'title' => 'PHP', 'description' => 'this is description', 'posted_by' => 'Yassine', 'created_at' => '2025-03-09 09:00:00',
        ];
        return view('posts.show', ['post' => $singlePost]);
    }

    function create(){
        return view('posts.create');
    }

    function store(){

        return to_route('posts.index');
    }
}
