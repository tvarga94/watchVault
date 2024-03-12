<?php

namespace App\Models;

use Canvas\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PopularPost extends Model
{
    use HasFactory;

    protected $table = 'popular_posts';

    public function canvasPost(): BelongsTo
    {
        return $this->belongsTo(Post::class, 'canvas_posts_id');
    }
}
