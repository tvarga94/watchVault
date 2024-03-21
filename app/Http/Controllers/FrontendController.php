<?php

namespace App\Http\Controllers;

use App\Models\PopularPost;
use App\Repositories\FrontendRepository;
use Canvas\Models\Post;
use Canvas\Models\Topic;
use Illuminate\View\View;
use function _PHPStan_8b6260c21\RingCentral\Psr7\_caseless_remove;

class FrontendController extends Controller
{
    public FrontendRepository $frontendRepository;
    public function __construct(FrontendRepository $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

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
        foreach ($this->frontendRepository->getPopularPosts() as $popularPost) {
            if (!is_null($popularPost->canvasPost)) {
                $posts[] = $popularPost->canvasPost;
            }
        }

        return $posts;
    }

    public function getLatestArticles()
    {
        return $this->frontendRepository->getLatestArticles('published_at');
    }

    public function getPostTopicLatestArticle(string $topic, int $quantity)
    {
        if ($this->frontendRepository->getTopic($topic)) {
            return $this->frontendRepository->getPostTopicLatestArticle($topic, $quantity, 'published_at');
        } else {
            return response()->json(null, 200);
        }
    }

    public function showContactPage(): View
    {
        return view('contact/contact');
    }

    public function showAboutPage(): View
    {
        return view('contact/about');
    }

    public function showAdvertisingPage(): View
    {
        return view('contact/advertising');
    }

    public function showStartPage(): View
    {
        return view('start');
    }

    public function showPostPage(string $id): View
    {
        $post = Post::where('id', $id)->first();

        return view('post')->with('post', $post);
    }

    public function showListPage(string $filter): View
    {
        $topicResult = $this->frontendRepository->getTopic($filter);
        $filteredValues = $topicResult?->posts()->paginate(12);

        return view('list')->with('filteredValues', $filteredValues);
    }

    public function contentListPage($filter): View
    {
        $filteredValues = [];
        $topicResults = $this->frontendRepository->contentListPage($filter);

        if ($topicResults) {
            foreach ($topicResults as $topicResult) {
                $filteredValues[] = $topicResult->posts()->paginate(6);
            }
        }

        return view('content/list')->with('filteredValues', $filteredValues);
    }
}
