<?php

namespace App\Http\Livewire\Pages;

use App\Models\Post;
use Livewire\Component;

class SinglePost extends Component
{
    public Post $item;

    public function render()
    {
        return view('livewire.pages.single-post');
    }
}
