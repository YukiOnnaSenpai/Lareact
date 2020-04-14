<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post =  Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        $post->save();

        return redirect()->route('post.index')->with('info','Post added successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post', ['posts' => [ $post] ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $post = Post::all($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $user = User::all($post->user_id);
        if ($user->can('update', $post)) {

            $post->title = $request->title;
            $post->content = $request->content;
            $post->save();

            return response()->json(['message' => 'Post successfully updated'], 200);
        } else {
            return response()->json(['message' => 'You are not permitted to alter post.'], 422);
        }
        return abort(400);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(empty($post)){
            return response()->json(['message' => 'Post with given id: $id, does not exist'], 422);
          }

          $destroy = Post::destroy($id);

          if ($destroy){
                return response()->json(['message' => 'Deleted post with id: $id'], 200);
          }
          
        return abort(400);    
    }
}
