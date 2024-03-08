<?php

namespace Database\Seeders;

use App\Models\Movie;
use Canvas\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(5)->create();
    }
}
