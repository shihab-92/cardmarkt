<?php 

namespace App\Http\Controllers;

/**
* 
*/
class AdminController extends Controller
{
	
	public function getAdminPage()
	{
		return view('admin');
	}
}