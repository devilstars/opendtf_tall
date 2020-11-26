<?php

namespace App\Http\Services;

use App\Models\Post;

/**
 * Class PostService
 * @package app\Http\Services
 */
class PostService
{
    public function getAllPosts()
    {
        return Post::query()
            ->where('is_active', 1)
            ->get();
//            ->paginate(10);
    }
}
