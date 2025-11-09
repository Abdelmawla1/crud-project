<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        //image uploading
        // 1- get image
        $image = $request->file('image');
        // 2- change it's current name
        $newImageName = time() . '_' . $image->getClientOriginalName();
        // 3- move image
        $image->storeAs('images', $newImageName, 'public');
        // 4- save new name to database record
        $data['image'] = $newImageName;
        Post::create($data);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
//        dd($request->all());
        $post = Post::find($id);
        $data = $request->validated();
        if ($request->hasFile('image')) {
            //image uploading
            // 1- get image
            $image = $request->file('image');
            // 2- change it's current name
            $newImageName = time() . '_' . $image->getClientOriginalName();
            // 3- move image
            $image->storeAs('images', $newImageName, 'public');
            // 4- save new name to database record
            $data['image'] = $newImageName;
        }else{
            $data['image'] = $post->image;
        }
        $post->update($data);
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post.index');
    }

    public function showTrashedPosts()
    {
        $posts = Post::onlyTrashed()->get();
        return view('trash', compact('posts'));
    }
}
