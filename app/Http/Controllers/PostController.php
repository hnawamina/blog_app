<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post = new Post();
        $post->user_id = auth()->user()->id;
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];

        if ($post->save()) {
            session()->flash('success', 'Post created successfully!');
        } else {
            // Handle the case where the post couldn't be saved
        }
        return redirect()->back();
    }

    public function show($post_id)
    {
        $showPost = Post::findOrFail($post_id);
        return view('postShow', compact('showPost'));
    }

    public function delete($post_id)
    {
        $post = Post::findOrFail($post_id);
        $post->delete();

        return redirect()->route('my_post_show')->with('success', 'Post deleted successfully');
    }

    public function updateview($post_id)
    {
        $showPost = Post::findOrFail($post_id);
        return view('update', compact('showPost'));
    }

    public function update($post_id, Request $request)
    {
        $post = Post::findOrFail($post_id);
        $post->update($request->all());


        session()->flash('message', 'Post updated successfully!');

         return redirect(route('my_post_show'))->with('success', 'Post updated successfully!');

    }


    public function postlist()
    {

        $id = auth()->user()->id;
        $foundPost = Post::where('user_id', $id)->get();
        return view('myPosts', compact('foundPost'));
    }

    public function newpost()
    {
        return view('home');
    }
}
