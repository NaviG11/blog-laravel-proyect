<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
class Navigation extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.navigation', compact('categories'));
    }
}
