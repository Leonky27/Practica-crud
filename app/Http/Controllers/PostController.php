<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function show($post)
    {
        $post = Post::find($post);

        return view('post.show', compact('post'));
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->nombre_plato = $request->nombre_plato;
        $post->descripcion = $request->descripcion;
        $post->precio = $request->precio;

        $post->save();

        return redirect('/posts');
    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $post = Post::findOrFail($post);

        $post->nombre_plato = $request->nombre_plato;
        $post->descripcion = $request->descripcion;
        $post->precio = $request->precio;

        $post->save();

        return redirect("/posts/{$post->id}");
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();

        return redirect('/posts');
    }
}
