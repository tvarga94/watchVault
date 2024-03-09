<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CanvasPostSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('canvas_posts')->insert([
                'id' => Str::uuid(),
                'slug' => $faker->slug,
                'title' => $faker->sentence,
                'summary' => $faker->paragraph,
                'body' => $faker->paragraphs(5, true),
                'published_at' => Carbon::now(),
                'featured_image' => $faker->imageUrl(),
                'featured_image_caption' => $faker->sentence,
                'user_id' => Str::uuid(), // Replace with a valid user_id
                'meta' => json_encode(['keywords' => $faker->words(5, true)]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
