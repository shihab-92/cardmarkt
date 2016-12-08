<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contactRequest extends FormRequest
{
	public function rules()
	{
		return [
		'your_name' =>'required|min:4' ,
		'your_email' =>'required|email',
		'your_subject' =>'required|min:10',
		'your_phone_number' =>'required|min:8',
		'your_message' =>'required|min:20',
		];
	}
	public function authorize()
	{
		return true;
	}
}
