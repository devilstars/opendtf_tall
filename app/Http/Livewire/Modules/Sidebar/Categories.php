<?php

namespace App\Http\Livewire\Modules\Sidebar;

use Illuminate\Contracts\Container\BindingResolutionException;
use Livewire\Component;

class Categories extends Component
{
    public $items;

    public function render()
    {
        try {
            $this->items = app()->make('CategoryService')->getAll();
        } catch (BindingResolutionException $e) {
        }

        return view('livewire.modules.sidebar.categories');
    }
}
