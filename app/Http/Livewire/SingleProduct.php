<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class SingleProduct extends Component
{
    public $product;
    public $product_id;

    public function mount($product_id){
        $this->product = Product::findOrFail($product_id);

    }

    public function render()
    {
        return view('livewire.single-product', [
            'product' => $this->product,
        ]);
    }
}
