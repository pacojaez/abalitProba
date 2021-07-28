<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ShowEditProduct extends Component
{
    use WithFileUploads;

    public $product;
    /**
     * The attributes that are mass assignable.
     */

    public $image, $name, $size, $franchise, $price, $weight;

    public $processing = false;

    /**
     * Rules to validete the form fields of the Product Update Form
     *
     * @var array
     */
    protected $rules = [
        //images
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
        //rest of the fields:
        'name' => 'string|nullable',
        'weight' => 'string|nullable|regex:/^\d*\.?\d+$/',
        'price' => 'nullable|regex:/^\d*\.?\d+$/',
        'size' => 'string|nullable',
        'franchise' => 'string|nullable',
    ];

    public function clearPhoto(){
        $this->image = '';
    }

    public function updateProduct(){
        //validamos los campos del form
        $data =  $this->validate($this->rules);

        if($data['image']){
            //mandamos un messaje al usuario de que la imagen se esta procesando
            $this->processing = true;
            $image = $this->image;
            $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
            $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(600, null, function($c){
                $c->aspectRatio();
                $c->upsize();
            });
            $img->stream();
            Storage::disk('local')->put('public/images/'.$name, $img, 'public');
            $data['image'] = $name;
            $this->product->image = $data['image'];
        }

        // Actualizamos solo los campos rellenados por el admin
        $updateFields = array_filter($data, null);

        foreach( $updateFields as $key => $value){
            $this->product->$key = $value;
            $this->product->save();
        }

        $this->processing = false;

        return redirect()->route('admin-productos');
    }

    public function mount( Product $product){

    }

    public function render()
    {
        return view('livewire.show-edit-product', [
            'product' => $this->product
        ]);
    }
}
