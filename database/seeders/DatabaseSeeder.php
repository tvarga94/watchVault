<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CanvasPostSeeder::class,
            CanvasTagsSeeder::class,
            CanvasTopicsSeeder::class,
            CanvasPostsTagsSeeder::class,
            CanvasPostsTopicsSeeder::class,
            CanvasViewsSeeder::class,
            CanvasVisitsSeeder::class,
            PopularPostsSeeder::class
        ]);

    }
}
