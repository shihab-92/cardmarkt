<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table='subcategories';
    protected $fillable=['category_id','subcategory_name','subcategory_slug'];
}
