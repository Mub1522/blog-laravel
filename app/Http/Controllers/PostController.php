<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /* Index Posts */
    public function index()
    {
        return view('posts.index');
    }

    /* Create Post */
    public function store()
    {
        return "Guardado!!";
    }

    public function create()
    {
        return view('posts.create');
    }


    /* Show Post */
    public function show($post)
    {
        return view('posts.show', compact('post'));
    }


    /* Edit Post */
    public function update($post)
    {
        return "Actualizado!!";

    }

    public function edit($post)
    {
        return view('posts.edit', compact('post'));
    }


    /* Destroy Post */
    public function destroy($post)
    {
        return "Eliminado!!";
    }
}
