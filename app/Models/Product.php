<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['kind_sport_id','producer_id','name_pro', 'image','content','view','create_at','update_at'];

    public function producer(){
    	return $this->belongsTo(\App\Models\Producer::class); // Như gộp bảng, lấy thêm dữ liệu bảng khác
    }
    public function kind_sport(){
    	return $this->belongsTo(\App\Models\KindSport::class);
    }
    
}
