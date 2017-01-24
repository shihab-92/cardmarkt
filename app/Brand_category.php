<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand_category extends Model
{
    protected $table='brands_category';
    protected $fillable=['brand_id','category_id'];

    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
