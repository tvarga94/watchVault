<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CanvasPostsTopicsSeeder extends Seeder
{
    public function run(): void
    {
        $posts = DB::table('canvas_posts')->get();
        $topics = DB::table('canvas_topics')->get();

        foreach ($posts as $post) {
            foreach ($topics as $topic) {
                DB::table('canvas_posts_topics')->insert([
                    'post_id' => $post->id,
                    'topic_id' => $topic->id,
                ]);
            }
        }
    }
}
