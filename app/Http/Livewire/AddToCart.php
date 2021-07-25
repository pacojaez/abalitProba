<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddToCart extends Component
{
    /**
     * Public properties to pass to the view
     */
     public $quantity = 1;

     public function mount($id){

        $this->quantity;
        //$this->oferta = Oferta::findOrFail($id);
        //$this->product = Product::where('id', 'like', $this->oferta->product_id);
        //$this->subcategorie = Subcategorie::where('id', 'like' , $this->product->subcategorie_id );
        //$this->category = Categorie::where('id', '=', $this->subcategorie->category_id)->first()->name;
        //$this->porte = $this->product->porte;

    }

    public function render()
    {
        return view('partials.add-to-cart');
    }

    /**
     * Adds an item to cart.
     *
     * @return void
     */
    public function addToCart(): void
    {
        Cart::add($this->product->id, $this->product->name, $this->product->getRawOriginal('price'), $this->quantity);

        $this->emitTo('nav-cart', 'refresh');
    }
}
