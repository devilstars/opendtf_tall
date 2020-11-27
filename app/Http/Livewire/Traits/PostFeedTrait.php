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
     * @param null $items
     * @param bool $value
     */
    public function setEnd($items = null, bool $value = false)
    {
        if (count($items) < $this->perPage) {
            $this->end = $value;
        }
    }

    /**
     * Get first posts
     */
    public function initialLoad()
    {
        if (!$this->skip) {
            try {
                $this->items = app()->make('PostService')->getAllPosts(0, 10);
            } catch (BindingResolutionException $e) {
            }

            $this->setEnd($this->items, true);
        }
    }

    /**
     * load more posts
     * @param $loadMore
     */
    public function loadMore($loadMore)
    {
        if ($this->skip && !$this->end) {
            try {
                $loadMore = app()->make('PostService')->getAllPosts($this->skip, $this->perPage);

                $this->setEnd($loadMore, true);
            } catch (BindingResolutionException $e) {
            }

            $this->items = $this->items->concat($loadMore);
        }
    }
}
