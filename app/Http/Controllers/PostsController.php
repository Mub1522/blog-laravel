<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /* Index Posts */
    public function index()
    {
        return view('posts.index');
    }

    /* Create Post */
    public function create()
    {
        return view('posts.create');
    }
    
    public function store()
    {
        
    }

    /* Show Post */
    public function show($post)
    {
        return view('posts.show', compact('post'));
    }


    /* Edit Post */
    public function edit($post)
    {

    }

    public function update($post)
    {

    }

    /* Destroy Post */
    public function destroy($post)
    {
    }
}
