<?php

namespace App\Http\Services;

use App\Models\Post;

/**
 * Class PostService
 * @package app\Http\Services
 */
class PostService
{
    /**
     * @param int $skip
     * @param int $perPage
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAllPosts(int $skip = 0, int $perPage = 10)
    {
        return Post::query()
            ->where('is_active', 1)
            ->orderBy('id', 'desc')
            ->take(10)
            ->skip($skip)
            ->get();
    }
}
