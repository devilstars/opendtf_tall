<?php

namespace App\Http\Services;

use App\Models\Category;

/**
 * Class CategoryService
 * @package App\Http\Services
 */
class CategoryService
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return Category::query()
            ->where('is_active', 1)
            ->get();
    }
}
