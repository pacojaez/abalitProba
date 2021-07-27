<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Support\Collection;

class AllProductsCategory extends Component
{
    use WithPagination;

    /**
     * properties to dinamic searching and paginate the view
     *
     */
    protected $products;
    public $search;
    public $_id;

    // public $orderBy = 'id';
    // public $orderAsc = false;

    public function mount( $id ){
        $this->_id = $id;
        // dd($this->_id);
        $this->products = Product::where('category_id', '=', $this->_id)->paginate( 10 );
    }

    public function render(  )
    {
       /**
         * GETTING ONLY THE ACTIVE products WITH NAME OR FRANCHISE
         * a multiple query to filter first active offers and then add
         * the required fields to show to the user more data
         */
        // $this->products = Product::where('category_id', 'like', $id)->get()
        // ->paginate(10);

        return view('livewire.allproductscategory', [
            'products' => $this->products,
            'id' => $this->_id,
        ]);
    }

}
