<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function singlePost()
    {
        return view('pages.single-post.index');
    }
}
