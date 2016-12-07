<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Flash;
use App\accounts;
use App\newsletter;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Redirect;

/**
* 
*/
class PagesController extends Controller
{
	
	public function getHomePage()
	{
		return view('index');
	}

	public function getAboutPage()
	{
		return view('about');
	}

	public function getContactPage()
	{
		return view('contact');
	}
	public function getLoginPage()
	{
		return view('login');
	}
	public function getRegisterPage()
	{
		return view('register');
	}
	public function getBuyPage()
	{
		return view('buy-gift-cards');
	}
	public function getSellPage()
	{
		return view('sell-gift-cards');
	}

	public function postRegisterPage(Request $request)
	{
		$rules= array(
			'Username' =>'required|min:4' ,
			'firstName' =>'required|min:4',
			'lastName' =>'required|min:4',
			'type' =>'required',
			'Email' =>'required|email',
			'Password' =>'required|min:4',
			'Confirm_Password' =>'required|min:4|same:Password',
			);

		$this->validate($request,$rules);
		$accounts = new accounts;
		$accounts->username=$request->Username;
		$accounts->firstname=$request->firstName;
		$accounts->lastname=$request->lastName;
		$accounts->type=$request->type;
		$accounts->email=$request->Email;
		$accounts->password=Hash::make($request->Password);

		try {
			$accounts->save();
			flash('Your registration is successful', 'success');
		} catch(\Illuminate\Database\QueryException $ex){ 
			//dd($ex->getMessage()); 
			flash('Your registration has been failed!!', 'danger');
		}
		return back();
	}
	public function postNewsLetter(Request $request)
	{
		$rules= array(
			'Email' =>'required|email',
			);
		$this->validate($request,$rules);
		$newsletter = new newsletter;
		$newsletter->email=$request->Email;		
		try {
			$newsletter->save();
			flash()->overlay('You are now subscribed for cardmarkt!', 'Notice');
		} catch(\Illuminate\Database\QueryException $ex){ 
			//dd($ex->getMessage()); 
			flash()->overlay('Something went wrong!', 'Notice');
		}
		return back();
	}

	public function authenticate(Request $request)
	{
		$login_rules= array(
			'Email' =>'required|email',
			'Password' =>'required|min:4',
			);
		$this->validate($request,$login_rules);
		if (Auth::attempt(['email' => $request->Email, 'password' => $request->Password])) {
            // Authentication passed...
			$current_user = auth()->user();
			return Redirect::to('admin');
		}else{
			return back();
		}
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}
}