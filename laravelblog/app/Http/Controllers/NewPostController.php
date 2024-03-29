<?php

namespace App\Http\Controllers;

use App\Filters\PostFilter;
use App\Models\Post;
use Illuminate\Http\Request;

class NewPostController extends Controller
{
    public function index(PostFilter $request)
    {
        $newPosts = Post::filter($request)->paginate();

        return view('welcome', compact('newPosts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'buy' => 'required',
            'type' => 'required',
            'typeBuildings' => 'required',
            'storey' => 'required',
            'storey_home' => 'required',
            'square' => 'required',
            'kitchen_area' => 'required',
            'rooms'  => 'required',
            'year' => 'required',
            'price' => 'required',
            'address' => 'required',
            'city' => 'required',
            'number' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('welcome')->with('success','Post created successfully.');
    }
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

}
