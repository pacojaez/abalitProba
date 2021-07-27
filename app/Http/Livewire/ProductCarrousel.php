<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCarrousel extends Component
{
    public $products;

    public function render()
    {
        $this->products = Product::inRandomOrder()
        ->limit(9)
        ->get();

        return view('product.product-carrousel', [
            'products' => $this->products
        ]);
    }
}
