<?php

namespace App\Http\Livewire\Modules;

use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class PostFeed extends Component
{
    public $items;
    public $count = 10;

    public function render()
    {
        try {
            $this->items = app()->make('PostService')->getAllPosts($this->count);
        } catch (BindingResolutionException $e) {
            abort (404);
        }

        return view('livewire.modules.post-feed');
    }
}
