<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Facades\Cart;
use App\Models\Category;

class Breadcrumbs extends Component
{
    public $category;
    public $product;

    public function mount( $id, Product $product = null ){
        $this->category = Category::findOrFail( $id);
        if($product){
            $this->product = $product;
        }
    }

    public function render(  ){

        return view('partials.breadcrumbs', [
            'product' => $this->product,
            'category' => $this->category
        ]);

    }


}
