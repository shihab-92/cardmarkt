<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Flash;
use App\accounts;
use App\newsletter;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;

/**
* 
*/
class featureController extends Controller
{
	
	public function getUsers()
	{
		$accounts = accounts::all();
		return view('view-users')->with('UserInfo', $accounts);
	}

	public function editUsers($id)
	{
		$accounts = accounts::find($id);
		return view('update-user')->with('editUserInfo', $accounts);
	}

	public function addUsers()
	{
		return view('create-user');
	}


	public function updateUser($id)
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

		$validator = Validator::make(Input::all(), $rules);


		$accounts = accounts::find($id);
		$accounts->username=Input::get('Username');
		$accounts->firstname=Input::get('firstName');
		$accounts->lastname=Input::get('lastName');
		$accounts->type=Input::get('type');
		$accounts->email=Input::get('Email');
		$accounts->role=Input::get('role');
		$accounts->password=Hash::make(Input::get('Password'));

		try {
			$accounts->save();
			flash('Your Update is successful', 'success');
		} catch(\Illuminate\Database\QueryException $ex){ 
			//dd($ex->getMessage()); 
			flash('Your update has been failed!!', 'danger');
		}

		return Redirect::to('view-users');

	}
		public function deleteUser($id)
	{
		$accounts =accounts::find($id)->delete();
		flash('Your category delete  is successful', 'success');
		return back();
	}
}