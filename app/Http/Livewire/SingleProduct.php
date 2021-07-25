<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class SingleProduct extends Component
{
    public $product;
    public $quantity = 1;

    public function mount( $id ){
        //dd($product);
        $this->product = Product::findOrFail($id);
        //dd($this->product);
    }

    public function render()
    {
        return view('livewire.single-product', [
            'product' => $this->product,
        ]);
    }

     /**
     * Adds an item to cart.
     *
     * @return void
     */
    //public function addToCart( $id ): void
    //{
    //    $this->product = Product::findOrFail($id);
    //    Cart::add($this->product->id, $this->product->name, $this->product->price, $this->quantity);

    //    $this->emitTo('nav-cart', 'refresh');
    //}
}
