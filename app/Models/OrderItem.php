<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'user_id',
        'product_id',
        'quantity',
        'subtotal'
    ];


    /****
     * RELATIONS
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
