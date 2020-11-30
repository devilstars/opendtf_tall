<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function singlePost(int $id, string $slug = null)
    {
        $item = app()->make('PostService')->getSinglePost($id);

        if ($item->slug !== $slug) {
            return redirect(route('front.post', ['id' => $item->id, 'slug' => $item->slug]));
        }

        return view('pages.single-post.index', compact(
            'item'
        ));
    }
}
