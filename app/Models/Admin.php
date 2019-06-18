<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['name','username','password','email','active','image', 'created_at', 'updated_at'];
}
