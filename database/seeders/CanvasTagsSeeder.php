<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CanvasTagsSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('canvas_tags')->insert([
                'id' => Str::uuid(),
                'slug' => $faker->slug,
                'name' => $faker->word,
                'user_id' => Str::uuid(), // Replace with a valid user_id
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
