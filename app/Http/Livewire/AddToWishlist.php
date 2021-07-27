<?php

namespace App\Http\Livewire;

use App\Models\Wishlist;
use App\Models\WishlistItem;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AddToWishlist extends Component
{
    public $product;

    public function mount( Product $product ){
        $this->product = $product;
    }

    public function render(  )
    {
        return view('partials.add-to-wishlist', [
            'product' => $this->product
        ]);
    }



}
