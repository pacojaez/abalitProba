<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class NavWishlist extends Component
{
    public $count = 0; //number of items in the wishlist
    public $hasWishlist= false; //properties to change the color of the wishlist in the mount function
    public $noHasWishlist= true; //properties to change the color of the wishlist in the mount function

    protected $listeners =[
        'refresh' => 'mount'
    ];

    public function mount(){

        if(Auth::user()){
            $this->count = \App\Models\WishlistItem::where('user_id', 'like', Auth::user()->id)->count();
            if($this->count > 0){
                $this->hasWishlist = true;
                $this->noHasWishlist = false;
            }
        }

    }

    public function render()
    {
        return view ('partials.nav-wishlist', [
            'count' =>  $this->count
        ]);
    }
}
