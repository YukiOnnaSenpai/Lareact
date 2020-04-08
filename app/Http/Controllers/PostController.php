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

    public function index()
    {
        $posts = Post::all();
        return view('post', ['posts' => $posts]);
    }

    public function getOnePost($id)
    {
        $post = Post::findOrFail($id);
        return view('post', ['posts' => [ $post] ]);
    }

    public function createPost(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

    }

    public function deletePost($id)
    {
        $post = Post::findOrFail($id)->delete();
        return response()->setStatusCode(200);

    }
}
