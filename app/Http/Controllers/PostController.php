<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = Post::all();
        return view('post', ['posts' => $posts]);
    }

    public function getOnePost($id)
    {
        $posts = Post::findOrFail($id);
        return view('post', ['posts' => $posts]);
    }

    public function createPost(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return response()->setStatusCode(200);

    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id)->delete();
        return response()->setStatusCode(200);

    }
}
