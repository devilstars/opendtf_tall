<?php

namespace App\Http\Livewire\Modules\Post;

use Livewire\Component;

class Teaser extends Component
{
    public $item;

    public function render()
    {
        return view('livewire.modules.post.teaser');
    }
}
