<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $data = $request->validate([
            'title' => "required",
            'content' => "required",
        ]);
        

        $post=Post::create($data);
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('post.show',['post' => $post]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post, Request $request)
    {
        //
        $data = $request->validate([
            'title' => "required",
            'content' => "required",
        ]);

        $post->update($data);
        return redirect(route("post"))->with('success', "post successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect(route("post"))->with('success', "post successfully deleted"); 
    }
}
