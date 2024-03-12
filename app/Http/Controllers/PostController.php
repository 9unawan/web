<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy("created_at","desc")->paginate(5);
        return view('admin.content.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('admin.content.posts.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image'   =>  'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'title'   =>  'required|min:5',
            'content' =>  'required|min:10',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts/', $image->hashName());


        Post::create([
            'image'  => $image->hashName(),
            'title'  => $request->title,
            'content'=> $request->content
        ]);

        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    
    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        
    }
}
