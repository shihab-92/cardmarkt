<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $table='cards';
	protected $fillable=['card_type','card_brand','valid_until','origin_country','original_price','currency','discount','sell_price','card_number','card_PIN'];

	public function brand(){
		return $this->hasOne('App\Brands','id', 'card_brand');
	}
	public function type(){
		return $this->hasOne('App\Types','id', 'card_type');
	}

	public function country(){
		return $this->hasOne('App\Countries','id', 'origin_country');
	}
}
