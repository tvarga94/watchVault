<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CanvasVisitsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $posts = DB::table('canvas_posts')->get();

        foreach ($posts as $post) {
            for ($i = 0; $i < 50; $i++) {
                DB::table('canvas_visits')->insert([
                    'post_id' => $post->id,
                    'ip' => $faker->ipv4,
                    'agent' => $faker->userAgent,
                    'referer' => $faker->url,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
