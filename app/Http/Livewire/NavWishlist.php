<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class NavWishlist extends Component
{
    public $count; //number of items in the wishlist

    protected $listeners =[
        'refresh' => 'mount'
    ];

    public function mount(){

        $this->count = \App\Models\WishlistItem::where('user_id', 'like', Auth::user()->id)->count();
    }

    public function render()
    {
        $this->count = \App\Models\WishlistItem::where('user_id', 'like', Auth::user()->id)->count();

        return view ('partials.nav-wishlist', [
            'count' =>  $this->count
        ]);
    }
}
