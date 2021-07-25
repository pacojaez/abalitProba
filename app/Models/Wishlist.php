<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',

    ];

     /**
     * RELATIONS
     */

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function wishlistItem(){
        return $this->hasMany(WishlistItem::class);
    }
}
