<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CanvasPostsTagsSeeder extends Seeder
{
    public function run(): void
    {
        $posts = DB::table('canvas_posts')->get();
        $tags = DB::table('canvas_tags')->get();

        foreach ($posts as $post) {
            foreach ($tags as $tag) {
                DB::table('canvas_posts_tags')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $tag->id,
                ]);
            }
        }
    }
}
