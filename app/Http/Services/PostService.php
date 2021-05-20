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
     * imitation of cursor pagination
     * @param int|null $lastId
     * @return array|\Illuminate\Database\Concerns\BuildsQueries[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getInitialPosts(int $lastId = null)
    {
        return Post::query()
            ->where('is_active', 1)
            ->orderBy('id', 'desc')
            ->when($lastId, function ($query, $lastId) {
                return $query->where('id', '<', $lastId);
            })
            ->limit(10)
            ->get();
    }

    /**
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function getSinglePost(int $id)
    {
        return Post::query()
            ->where('is_active', 1)
            ->where('id', $id)
            ->firstOrFail();
    }
}
