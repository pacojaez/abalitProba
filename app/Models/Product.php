<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'category_id',
        'franchise',
        'size',
        'price',
        'weight',
        'user_id',
        'image',
    ];

    /***
     * RELATIONS
     */

     public function user(){
         return $this->belongsTo(User::class);
     }

     public function orderItem(){
        return $this->hasMany(OrderItem::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function wishlistItem(){
        return $this->hasMany(WishlistItem::class);
    }

    /************  FUNCTIONS  *********** */
    /**
    * @param string
    * The function get a parameter from the View and retrieve the query from the DB
    * return result
    */
    public static function search( $search ){

        $result = empty($search) ? static::query()
                                : static::query()
                                        ->where('name', 'like', '%'.$search.'%')
                                        ->orWhere('franchise', 'like', '%'.$search.'%');

        return $result;
     }
}
