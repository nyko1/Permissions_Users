<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $this -> authorize('create', Post::class);
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this -> authorize('create', Post::class);

        $validated = $request -> validate(['title'=>'required', 'body'=>'required']);
        Post::create($validated);
        
        return to_route('posts.index')->with('message','Post created');
    }

    public function edit(Post $post)
    {
        $this -> authorize('update', Post::class);

        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this -> authorize('update', Post::class);

        $validate = $request -> validate(['title'=>'required', 'body'=>'required']);
        $post->update($validate);
        return to_route('posts.index')->with('message','Update successed');     
    }

    public function destroy(Post $post)
    {
        $this -> authorize('delete', Post::class);

        $post->delete();

        return to_route('posts.index')->with('message','Delete successed');
    }
}
