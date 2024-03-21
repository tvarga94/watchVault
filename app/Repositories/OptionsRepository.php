<?php

namespace App\Repositories;

use App\Models\PopularPost;
use Canvas\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class OptionsRepository
{
    public function postNullChecker(): ?Collection
    {
        return Post::whereNotNull('published_at')->get();
    }

    public function optionSelector(string $place): string
    {
        return PopularPost::where('place', $place)->first()->canvas_posts_id;
    }

    public function postFinder($inputKey): Post
    {
        return Post::find($inputKey);
    }

    public function optionSelectorWithoutId(string $place): PopularPost
    {
        return PopularPost::where('place', $place)->first();
    }
}
