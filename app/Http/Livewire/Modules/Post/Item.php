<?php

namespace App\Http\Livewire\Modules\Post;

use Livewire\Component;

class Item extends Component
{
    public $item;

    public function render()
    {
        return view('livewire.modules.post.item');
    }
}
