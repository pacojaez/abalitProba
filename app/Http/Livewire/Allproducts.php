<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Support\Collection;

class AllProducts extends Component
{
    use WithPagination;


    /**
     * properties to dinamic searching and paginate the view
     *
     */
    // public $perPage= 20;
    public $search;
    // public $orderBy = 'id';
    // public $orderAsc = false;

    public function mount(){
    }

    public function render()
    {
        /**
         * GETTING ONLY THE ACTIVE OFFERS WITH NAME OR FRANCHISE
         * a multiple query to filter first active offers and then add
         * the required fields to show to the user more data
         */
        $products = Product::where(function($query) {
			$query->where('name', 'like', '%'.$this->search.'%')
                ->orWhere('franchise', 'like', '%'.$this->search.'%');
        })
        ->paginate(10);


        return view('livewire.allproducts', [
            'products' => $products
        ]);
    }

}
