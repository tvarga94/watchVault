<?php

namespace App\Http\Controllers;

use App\Models\PopularPost;
use Canvas\Models\Post;
use Canvas\Models\Topic;
use Illuminate\View\View;
use function _PHPStan_8b6260c21\RingCentral\Psr7\_caseless_remove;

class FrontendController extends Controller
{

    public function showMainPage(): View
    {
        $canvasPosts = $this->getPopularPosts();
        $latestPosts = $this->getLatestArticles();
        $brandPosts = $this->getPostTopicLatestArticle('Brand', 4);
        $classPosts = $this->getPostTopicLatestArticle('Class', 3);
        $movementPosts = $this->getPostTopicLatestArticle('Movement', 3);
        $functionalityPosts = $this->getPostTopicLatestArticle('Movement', 4);
        $stylePosts = $this->getPostTopicLatestArticle('Style', 4);

        return view('welcome')
            ->with('canvasPosts', $canvasPosts)
            ->with('latestPosts', $latestPosts)
            ->with('brandPosts', $brandPosts)
            ->with('classPosts', $classPosts)
            ->with('movementPosts', $movementPosts)
            ->with('functionalityPosts', $functionalityPosts)
            ->with('stylePosts', $stylePosts);
    }

    public function getPopularPosts(): array
    {
        $posts = [];
        $popularPosts = PopularPost::all();

        foreach ($popularPosts as $popularPost) {
            $posts[] = $popularPost->canvasPost;
        }

        return $posts;
    }

    public function getLatestArticles()
    {
        return Post::latest()->take(4)->get();
    }

    public function getPostTopicLatestArticle(string $topic, int $quantity)
    {
        $topicResult = Topic::firstWhere('name', $topic);

        return $topicResult ? $topicResult->posts()->take($quantity)->get() : response()->json(null, 200);

    }

    public function showContactPage(): View
    {
        return view('contact/contact');
    }

    public function showAboutPage(): View
    {
        return view('contact/about');
    }

    public function showStartPage(): View
    {
        return view('start');
    }
}
