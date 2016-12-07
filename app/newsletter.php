<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    protected $table='newsletters';
    protected $fillable=['email'];
}
