<?php

namespace App\Http\Services;

use App\Models\Post;

/**
 * Class PostService
 * @package app\Http\Services
 */
class PostService
{
    public function getAllPosts(int $count)
    {
        return Post::query()
            ->where('is_active', 1)
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
    }
}
