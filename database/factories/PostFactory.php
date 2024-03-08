<?php

namespace Database\Factories;

use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        return [
            'id' => $faker->uuid,
            'slug' => $faker->slug,
            'title' => $faker->word,
            'summary' => $faker->sentence,
            'body' => $faker->realText(),
            'published_at' => today()->toDateTimeString(),
            'featured_image' => $faker->imageUrl(),
            'featured_image_caption' => $faker->sentence,
            'user_id' => 1,
            'meta' => [
                'title' => $faker->sentence,
                'description' => $faker->sentence,
                'canonical_link' => $faker->sentence,
            ],
        ];
    }
}
