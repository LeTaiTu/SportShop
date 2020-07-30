<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id_customer','name', 'address','phone','content', 'amount', 'status', 'creates_at', 'updated_at'];
}
