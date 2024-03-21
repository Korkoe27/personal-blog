<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Posts;

class PostsController extends Controller
{
    // public function index()
    // {
    //     $posts = Post::latest()->paginate(50);
    //     return view('index');
    // }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {

        $post = new Posts();

        $post -> title = $request -> input('title');
        $post -> author = $request -> input('author');
        $post -> author2 = $request -> input('author2');
        $post -> description = $request -> input('description');

        if($request -> hasFile('image')) {
            $file = $request -> file('image');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('uploads/images/', $filename);
            $post -> image = $filename;
        }

        $post -> save();
        return redirect('/');
    }
}
