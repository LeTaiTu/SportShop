<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [	'id_customer','text','created_at','updated_at','name','phone','email','kind_request'];
}
