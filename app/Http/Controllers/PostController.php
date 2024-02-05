<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.posts', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|string',
            'content' => 'required|max:255|string'
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('posts/create')->with('status', 'Post is Created');
    }

    public function edit(int $id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required|max:255|string',
            'content' => 'required|max:255|string'
        ]);

        Post::findOrFail($id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->back()->with('status', 'Post is Updated');
    }

    public function destroy(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('status', 'Post is Deleted');
    }
}
