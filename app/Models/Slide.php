<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = ['name_slide', 'id_kind', 'image', 'created_at', 'updated_at', 'id_details'];
}
