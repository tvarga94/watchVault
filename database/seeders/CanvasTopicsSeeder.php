<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CanvasTopicsSeeder extends Seeder
{
    public function run(): void
    {
        $topics = ['Brand', 'Class', 'Movement', 'Style', 'Movement', 'Rolex', 'Tudor'];

        foreach($topics as $topic) {
            DB::table('canvas_topics')->insert([
                'id' => Str::uuid(),
                'slug' => 'slug-'.$topic,
                'name' => $topic,
                'user_id' => Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
