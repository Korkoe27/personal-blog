<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::latest()->paginate(50);
        return view('index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        

                // dd($newImageName);
                // $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        // dd($slug);

        // $newImageName = $request->title . '-' . uniqid() .  '.' .   $request->image->extension();

        // $request->image->move(public_path('images'), $newImageName);
        $newPost = $request->validate([
            'slug'=> SlugService::createSlug(Post::class, 'slug', $request->title),
            'title' => 'required',
            'author' => 'required',
            'author2',
            'description' => 'required'
            // 'image' => 'mimes:jpg,png,jpeg|max:5048'
        ]);

        $savePost = Post::create([$newPost]);

        // Post::create([
        //     'slug'=> SlugService::createSlug(Post::class, 'slug', $request->title),
        //     'title' => $request->input('title'),
        //     'author'=>$request->input('author'),
        //     'author2'=>$request->input('author2'),
        //     'description'=> $request->input('description'),
        //     // 'image_path' => $newImageName
        // ]);


        // dd($savePost);
            // $savePost = Post::create([
            //     'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            //     $validateData,
            //     'image_path' => $newImageName
            // ]);

        

        

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
