<?php

namespace App\Http\Livewire\Modules\Comments;

use App\Models\Post;
use Livewire\Component;

class Tree extends Component
{
    public Post $item;
    public $items;

    public function render()
    {
        /* TODO replace with eager loaded data from post model */
        $this->items = app()->make('CommentService')->getPostComments($this->item);

        return view('livewire.modules.comments.tree');
    }
}
