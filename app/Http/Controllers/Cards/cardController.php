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
}