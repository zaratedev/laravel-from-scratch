<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Repositories\Posts;

class PostsController extends Controller
{
    public function __construct() {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts) {

        //$posts = Post::latest()->filter(request(['month', 'year']))->get();

        $posts = $posts->all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
           'title' => 'required',
           'body' => 'required'
        ]);
        auth()->user()->publish(
          new Post(['title' => $request->title, 'body' => $request->body])
        );


        //And then redirect  to the home
        return redirect('/');
    }
}
