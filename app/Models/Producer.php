<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    protected $fillable = ['name', 'image','phone', 'email', 'active', 'creates_at', 'updated_at'];
}
