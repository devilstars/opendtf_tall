<?php

namespace App\Http\Livewire\Modules;

use App\Http\Livewire\Traits\PostFeedTrait;
use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class PostFeed extends Component
{
    use PostFeedTrait;

    public $items; // posts are loaded here
    public $skip = 0; // how much items must be skipped, 0 by default
    public $perPage = 10; // how much items should be visible per page
    public $end = false; // when there are no more items, set this true

    protected $listeners = ['loadMore' => 'incrementSkip'];

    /**
     * Increment skip
     */
    public function incrementSkip()
    {
        $this->skip = $this->skip + $this->perPage;
    }

    public function render()
    {
        $loadMore = null; // infinite scroll items will be added here

        $this->initialLoad();

        $this->loadMore($loadMore);

        return view('livewire.modules.post-feed');
    }
}
