<?php

namespace App\Http\Livewire\Modules;

use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class PostFeed extends Component
{
    public $items;
    public $skip = 0; // how much items must be skipped, 0 by default

    public function render()
    {
        try {
            $this->items = app()->make('PostService')->getAllPosts($this->skip, 10);
        } catch (BindingResolutionException $e) {
            abort (404);
        }

        return view('livewire.modules.post-feed');
    }
}
