<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    protected $table='accounts';
    protected $fillable=['username','firstname','lastname','type','email','password'];
}
