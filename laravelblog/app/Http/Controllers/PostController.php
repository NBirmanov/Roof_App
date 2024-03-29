<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\PostImage;
use App\Models\User;
use App\Models\PostUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $userPost = PostUser::all();
        $images = Image::all();

        return view('posts.index', compact( 'posts', 'userPost', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

        $post = Post::create($request->all());
        $post = new Post();
        $post->title = $request->title;
        $post->save();

        //TODO
        if($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $postImageFileName = $image ->getClientOriginalName();
                $postImagePath = $image->storeAs('images_post'.$post->id , $postImageFileName, 'public');

                $image = new Image;
                $image->image = $postImagePath;
                $image->post_id = $post->id;
                $image->save();

            }
        }

        $postSave = new PostUser();
        $postSave->post_id = $post->id; // Пример ID поста
        $postSave->user_id = Auth::user()->id; // Пример ID пользователя
        $postSave->save();


        return redirect()->route('posts.index', compact('post'))->with('success','Post created successfully.');

    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
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
        $post->update($request->all());

        return redirect()->route('posts.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
