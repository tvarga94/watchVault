<?php

namespace App\Http\Controllers;

use App\Models\PopularPost;
use Canvas\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class OptionsController
{
    public function index(): View
    {
       // $posts = Post::latest()->published()->with('user', 'topic')->paginate();
        $posts = Post::all();

        return view('options/main')->with("posts", $posts);
    }

    public function store(Request $request)
    {

        switch (true) {
            case $request->has('popular_posts_main'):
                $article = Post::find($request->popular_posts_main);
                $popularPost = PopularPost::where('place', 'main')->first();
                $popularPost->canvas_posts_id = $article->id;
                $popularPost->save();
                break;
            case 'popular_posts_first':
                $article = Post::find($request->popular_posts_first);
                $popularPost = PopularPost::where('place', 'first')->first();
                $popularPost->canvas_posts_id = $article->id;
                $popularPost->save();
                break;
            case 'popular_posts_second':
                $article = Post::find($request->popular_posts_main);
                $popularPost = PopularPost::where('place', 'second')->first();
                $popularPost->canvas_posts_id = $article->id;
                $popularPost->save();
                break;
            case 'popular_posts_thrid':
                $article = Post::find($request->popular_posts_main);
                $popularPost = PopularPost::where('place', 'third')->first();
                $popularPost->canvas_posts_id = $article->id;
                $popularPost->save();
                break;
            default:
                //code block
        }

    }
}
