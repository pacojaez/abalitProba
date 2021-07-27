<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Facades\Cart;

class AddToCart extends Component
{
    /**
     * Public properties to pass to the view
     */
     public $quantity = 1;
     public $product;

     public function mount(Product $product){

        $this->quantity;
        $this->product = $product;

    }

    public function render()
    {
        return view('partials.add-to-cart');
    }

    ///**
    // * Adds an item to cart.
    // *
    // * @return void
    // */
    public function addToCart(): void
    {
        $options = [];
        Cart::add($this->product->name, $this->product->price, $this->quantity, $options, $this->product->id,  $this->product->weight, $this->product);

        $this->emitTo('nav-cart', 'refresh');
    }
}
