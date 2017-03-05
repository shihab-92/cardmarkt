<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Flash;
use App\accounts;
use App\newsletter;
use App\Brands;
use App\Countries;
use App\Types;
use App\Brand_category;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Card;
/**
* 
*/
class cardController extends Controller
{
	public function addCard()
	{	
		$Brands=Brands::all();
		$Countries=Countries::all();
		$Types=Types::all();
		return view('add-card',compact('Brands','Countries','Types'));
	}

	public function storeCard()
	{
		$rules= array(
			'card-type' =>'required' ,
			'card-brand' =>'required',
			'validity' =>'required',
			'card-country' =>'required',
			'value' =>'required',
			'discount' =>'required',
			'sell_price' =>'required',
			'card_number' =>'required',
			'card_pin' =>'required',
			);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			flash('Your Card creation has been failed!!', 'danger');
		} else {
			if(Input::get('card-country') == 1){
				$currency ='CHF';
			}else{
				$currency ='EUR';
			}

			$card = Card:: create([
				'card_type'=>Input::get('card-type'),
				'card_brand'=>Input::get('card-brand'),
				'valid_until'=>Input::get('validity'),
				'origin_country'=>Input::get('card-country'),
				'original_price'=>Input::get('value'),
				'currency'=>$currency,
				'discount'=>Input::get('discount'),
				'sell_price'=>Input::get('sell_price'),
				'card_number'=>Input::get('card_number'),
				'card_PIN'=>Input::get('card_pin')
				]);
			// redirect
			if ($card) {
				flash('Your Card entry  is successful', 'success');
			}else{
				flash('Your Card entry  has been failed!!', 'danger');
			}
		}
		return back();
	}

	public function viewCard()
	{
		$card =Card::all();
		return view('view-cards',compact('card'));
	}

	public function updateCard($id)
	{
		$card=Card::find($id);
		$Brands=Brands::all();
		$Countries=Countries::all();
		$Types=Types::all();
		return view('update-card',compact('card','Brands','Types','Countries'));
	}

	public function storeupdatedCard($id)
	{
		$rules= array(
			'card-type' =>'required' ,
			'card-brand' =>'required',
			'validity' =>'required',
			'card-country' =>'required',
			'value' =>'required',
			'discount' =>'required',
			'sell_price' =>'required',
			'card_number' =>'required',
			'card_pin' =>'required',
			);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			flash('Your Card Update has been failed!!', 'danger');
		} else {
			if(Input::get('card-country') == 1){
				$currency ='CHF';
			}else{
				$currency ='EUR';
			}

			$card = Card::find($id);
			$card->card_type =Input::get('card-type');
			$card->card_brand =Input::get('card-brand');
			$card->valid_until =Input::get('validity');
			$card->origin_country =Input::get('card-country');
			$card->original_price =Input::get('value');
			$card->currency =$currency;
			$card->discount =Input::get('discount');
			$card->sell_price =Input::get('sell_price');
			$card->card_number =Input::get('card_number');
			$card->card_PIN =Input::get('card_pin');

			// redirect
			if ($card->save()) {
				flash('Your Card update  is successful', 'success');
			}else{
				flash('Your Card update  has been failed!!', 'danger');
			}
		}
		return back();
	}
}