<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'pick_up_day',
        'pick_up_time',
        'adress',
        'payment_type',
        'user_id'
    ];
    /***
     * RELATIONS
     */

    public function user(){
         return $this->belongsTo( User::class);
    }

    public function lineapedido(){
        return $this->hasMany(lineapedido::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
