<?php

namespace App\Models;

use Canvas\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PopularPost extends Model
{
    use HasFactory;

    public function post(): HasOne
    {
        return $this->hasOne(Post::class);
    }
}
