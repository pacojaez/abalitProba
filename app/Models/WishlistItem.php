<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistItem extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'product_id',
        'wishlist_id'
    ];

    /**
     * RELATIONS
     */
    public function wishlist(){
        return $this->belongsTo(Wishlist::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
