<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function show() {
        return view('posts.show');
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        // Create a new  post using the request data

        //$post = new Post;

        //$post->title = $request->title;
        //$post->body = $request->body;

        //Save it to the database

        //$post->save();

        Post::create($request->all());

        //And then redirect  to the home
        return redirect('/');
    }
}
