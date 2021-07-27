<?php

namespace App\Http\Livewire;

use App\Models\Wishlist;
use App\Models\WishlistItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WishlistContent extends Component
{
    /**
     * TOTAL DE ELEMENTOS DEL WISHLIST DEL USARIO
     */

    public $wishlistProducts;

    public function mount (){

        $user_id = Auth::user()->id;
        $this->wishlistProducts = WishlistItem::where('user_id', 'like', $user_id)->get();
        // dd($this->wishlistProducts);
    }
    public function render()
    {
        return view('wishlist.components.wishlist-content', [
            'whishlistProducts' => $this->wishlistProducts
        ]);
    }
}
