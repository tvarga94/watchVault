<?php

namespace App\Repositories;

use App\Models\PopularPost;
use Canvas\Models\Post;
use Canvas\Models\Topic;
use Illuminate\Database\Eloquent\Collection;

class FrontendRepository
{

    public function getPopularPosts(): Collection|array
    {
        return PopularPost::with(['canvasPost' => function($query) {
            $query->whereNotNull('published_at');
        }])->get();
    }

    public function getLatestArticles(string $field): Collection
    {
        return Post::whereNotNull($field)->latest()->take(4)->get();
    }

    public function getTopic(string $topic): ?Topic
    {
        return Topic::firstWhere('name', $topic);
    }

    public function getPostTopicLatestArticle(string $topic, int $quantity, string $field): Collection
    {
        $topic = $this->getTopic($topic);

        return $topic->posts()->whereNotNull($field)->take($quantity)->get();
    }

    public function contentListPage(string $filter): ?Collection
    {
        return Topic::whereIn('name', $this->topicMapper()[$filter])->get();
    }

    private function topicMapper(): array
    {
        return [
            'Brands' => ['rolex','tudor','seiko','casio','hublot','omaga'],
            'Classes' => ['cheap','affordable','premium','luxory'],
            'Movement' => ['mechanical','automatic','quartz','solar'],
            'Functionality' => ['analog','chronograph','digital','hybrid'],
            'Style' => ['aviator','racing','diver','skeleton','wood','smart'],
        ];
    }

}
