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

        $this->validate($request, [
           'title' => 'required',
            'body' => 'required'

        ]);

        Post::create($request->all());

        //And then redirect  to the home
        return redirect('/');
    }
}
