<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = ['product_id','size','quantity','original_price','sell_price','create_at','update_at'];

    public function product(){
    	return $this->belongsTo(\App\Models\Product::class);
    }
}
