<?php

namespace App\Http\Controllers;

use App\Models\PopularPost;
use Canvas\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class OptionsController
{
    public function index(): View
    {
        $posts = Post::all();
        $mainArticleId = PopularPost::where('place', 'main')->first()->canvas_posts_id;
        $firstArticleId = PopularPost::where('place', 'first')->first()->canvas_posts_id;
        $secondArticleId = PopularPost::where('place', 'second')->first()->canvas_posts_id;
        $thirdArticleId = PopularPost::where('place', 'third')->first()->canvas_posts_id;

        return view('options/main', [
            'mainArticleId' => $mainArticleId,
            'firstArticleId' => $firstArticleId,
            'secondArticleId' => $secondArticleId,
            'thirdArticleId' => $thirdArticleId,
            'posts' => $posts]);
    }

    public function store(Request $request): RedirectResponse
    {
        $places = ['main', 'first', 'second', 'third'];

        foreach ($places as $place) {
            $inputKey = 'popular_posts_' . $place;

            if ($request->has($inputKey)) {
                $article = Post::find($request->input($inputKey));
                $popularPost = PopularPost::where('place', $place)->first();

                if ($article && $popularPost) {
                    $popularPost->canvas_posts_id = $article->id;
                    $popularPost->save();
                }
                break;
            }
        }

        return redirect()->back()->with('success', 'Popular posts updated successfully!');
    }
}
