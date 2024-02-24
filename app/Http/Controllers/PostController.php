<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        try {
            $post = new Post();
            $post->user_id = auth()->user()->id;
            $post->title = $request->title;
            $post->description = $request->description;
            $post->save();

            session()->flash('success', 'Post created successfully!');

        } catch (\Exception $e) {
            
            session()->flash('error', 'Failed to create post.');

        }

        return redirect()->back();
    }
}
