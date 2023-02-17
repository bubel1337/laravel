<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}

public function index()
{
    $posts = Post::all();

    return view('posts.index', ['posts' => $posts]);
}

public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    $post = new Post();
    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->save();

    return redirect('/posts');
}

public function show($id)
{
    $post = Post::find($id);

    return view('posts.show', ['post' => $post]);
}

public function edit($id)
{
    $post = Post::find($id);

    return view('posts.edit', ['post' => $post]);
}

public function update(Request $request, $id)
{
    $post = Post::find($id);
    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->save();

    return redirect('/posts');
}

public function destroy($id)
{
    $post = Post::find($id);
    $post->delete();

    return redirect('/posts');
}
