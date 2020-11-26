<?php

namespace App\Http\Livewire\Modules;

use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class PostFeed extends Component
{
    public $items;
    public $skip = 0; // how much items must be skipped, 0 by default
    public $perPage = 10;

    protected $listeners = ['loadMore' => 'incrementSkip'];


    public function incrementSkip()
    {
        $this->skip = $this->skip + $this->perPage;
    }

    public function render()
    {
        $loadMore = null;
        if (!$this->skip) {
            $this->items = app()->make('PostService')->getAllPosts(0, 10);
        }

        if ($this->skip) {
            try {
                $loadMore = app()->make('PostService')->getAllPosts($this->skip, $this->perPage);
            } catch (BindingResolutionException $e) {}
            $this->items = $this->items->concat($loadMore);
//            dump($this->items);
//            dump($loadMore);
        }

        return view('livewire.modules.post-feed');
    }
}
