<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopularPostsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('popular_posts')->insert([
            'canvas_posts_id' => 1,
            'place' => 'main',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('popular_posts')->insert([
            'canvas_posts_id' => 1,
            'place' => 'first',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('popular_posts')->insert([
            'canvas_posts_id' => 1,
            'place' => 'second',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('popular_posts')->insert([
            'canvas_posts_id' => 1,
            'place' => 'third',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
