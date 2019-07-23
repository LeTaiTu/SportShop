<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    // 	id	order_id	product_detail_id	size	quantity	price	created_at	updated_at
	protected $fillable = ['order_id','product_detail_id', 'size','quantity','price', 'creates_at', 'updated_at'];
}
