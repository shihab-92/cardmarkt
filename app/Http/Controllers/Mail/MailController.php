<?php 

namespace App\Http\Controllers;
use Flash;
use App\accounts;
use App\newsletter;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\contactRequest;
use Request;
use Mail;
/**
* 
*/
class MailController extends Controller
{
	public function sendContactMail(contactRequest $request){
		try{
			$input = Request::all();

			$rules= array(
				'your_name' =>'required|min:4' ,
				'your_email' =>'required|email',
				'your_subject' =>'required|min:10',
				'your_phone_number' =>'required|min:8',
				'your_message' =>'required|min:20',
				);

			$this->validate($request,$rules);
			$data  = array('email' => $input['your_email'],
				'messageBody' => $input['your_message'],
				'subject' => $input['your_subject'],
				'name' => $input['your_name'],
				'phone' => $input['your_phone_number'],
				);
			Mail::send('emails.contact',$data,function($message) use ($data)
			{
				$message->from($data['email'],$data['name']);
				$message->to('emaildemo220@gmail.com');
				$message->subject($data['subject']);
			});
			flash('Your Mail is successful', 'success');
		}catch(\Illuminate\Database\QueryException $ex){ 
			flash('Your Mail has been failed!!', 'danger');
		}

		return back();
	}
}