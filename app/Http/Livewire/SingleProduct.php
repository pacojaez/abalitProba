<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\WishlistItem;
use Illuminate\Support\Facades\Auth;
class SingleProduct extends Component
{
    public $product;
    public $quantity = 1;

    protected $listeners = ['addProductToWishlist' => 'addNewWishlistProduct'];

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
     * Adds an item to wishlist.
     *
     * @return void
     */
    public function addNewWishlistProduct(  ){

        $user = Auth::user()->id;
        $new = WishlistItem::create([
            'user_id' => $user,
            'product_id' => $this->product->id,
            'wishlist_id' => null
        ]);

        $this->emitTo('nav-wishlist', 'refresh');

    }

}
