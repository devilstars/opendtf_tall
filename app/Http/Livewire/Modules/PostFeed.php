<?php

namespace App\Http\Livewire\Modules;

use App\Http\Livewire\Traits\PostFeedTrait;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class PostFeed extends Component
{
    use PostFeedTrait;

    public $items; // posts are loaded here
//    public $skip = 0; // how much items must be skipped, 0 by default
//    public $perPage = 10; // how much items should be visible per page
    public $end = false; // when there are no more items, set this true
    public $lastId = null;

    protected $listeners = ['loadMore' => 'loadMore'];

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        if (!$this->lastId) {
            $this->initialLoad();
        }

        return view('livewire.modules.post-feed');
    }
}
