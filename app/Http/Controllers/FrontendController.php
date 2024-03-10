<?php

namespace App\Http\Controllers;

use Canvas\Models\Post;
use Canvas\Models\Topic;
use Illuminate\View\View;

class FrontendController extends Controller
{

    public function showMainPage(): View
    {
        $latestPosts = $this->getLatestArticles();

        return view('welcome')->with('latestPosts', $latestPosts);
    }

    public function getLatestArticles()
    {
        return Post::latest()->take(4)->get();
    }

    public function getPostTopicLatestArticle()
    {
        $topic = Topic::firstWhere('name', $slug);

        return $topic ? response()->json($topic->posts()->with('topic', 'user')->paginate(), 200) : response()->json(null, 200);

    }

    public function showContactPage(): View
    {
        return view('contact/contact');
    }

    public function showAboutPage(): View
    {
        return view('contact/about');
    }

}
