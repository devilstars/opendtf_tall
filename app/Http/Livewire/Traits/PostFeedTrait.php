<?php

namespace App\Http\Livewire\Traits;

use Illuminate\Contracts\Container\BindingResolutionException;

/**
 * Trait PostFeedTrait
 * @package App\Http\Livewire\Traits
 */
trait PostFeedTrait
{
    /**
     * check if it's an end of feed
     * @param bool $value
     */
    public function setEnd(bool $value = false)
    {
        $this->end = $value;
    }

    /**
     * Get first posts
     */
    public function initialLoad()
    {
        $this->items = app('PostService')->getInitialPosts();

        try {
            $this->lastId = $this->items->last()->id;
        } catch (\ErrorException $e) {
            $this->setEnd(true);
        }
    }

    /**
     * load more posts
     */
    public function loadMore()
    {
        if (!$this->end) {
            $loadMore = app('PostService')->getInitialPosts($this->lastId);

            try {
                $this->lastId = $loadMore->last()->id;
            } catch (\ErrorException $e) {
                $this->setEnd(true);
            }

            $this->items = $this->items->concat($loadMore);
        }
    }
}
