<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Canvas\Models\Post;
use Illuminate\View\View;

class OptionsController
{
    public function index(): View
    {
       // $posts = Post::latest()->published()->with('user', 'topic')->paginate();
        $posts = Post::all();
        return view('options/main')->with("posts", $posts);
    }
}
