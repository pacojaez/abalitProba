<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Facades\Cart;
use App\Models\Category;

class Breadcrumbs extends Component
{
    public $category;
    public $product;

    public function mount( $id ){
        $this->category = Category::findOrFail( $id);
        // dd($this->category->id);
    }

    public function render(  ){

        return view('partials.breadcrumbs', [
            // 'product' => $this->product,
            'category' => $this->category
        ]);

    }


}
