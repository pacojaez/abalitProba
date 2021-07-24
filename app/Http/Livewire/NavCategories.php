<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class NavCategories extends Component
{
    public $categories;

    public function render()
    {
        $this->categories = Category::all();

        return view('livewire.nav-categories', [
            'categories' => $this->categories
        ]);
    }
}
