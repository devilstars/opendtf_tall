<?php

namespace App\Http\Livewire\Modules;

use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class PostFeed extends Component
{
    public $items;

    public function render()
    {
        try {
            $items = app()->make('PostService')->getAllPosts();
        } catch (BindingResolutionException $e) {
            abort (404);
        }

        return view('livewire.modules.post-feed', compact(
            'items',
        ));
    }
}
