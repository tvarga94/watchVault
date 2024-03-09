<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Canvas\Models\Post;
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
            CanvasVisitsSeeder::class
        ]);

    }
}
