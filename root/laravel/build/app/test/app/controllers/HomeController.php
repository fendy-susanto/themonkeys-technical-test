<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showForm()
	{
		return View::make('form');
	}

	public function showResult()
	{

		$input = Input::all();

		$enquiryType = Input::get('enquiry_type');

		$rules = array(

			'firstname' => 'required',
			'surname' => 'required',
			'email' => 'required|email',
			'day_time_contact_number' => 'required',
			'address' => 'required',
			'suburb' => 'required',
			'state' => 'required',
			'postcode' => 'required',
			'enquiry_type' => 'required'

		);

		if($enquiryType == 'Product complaint')
		{

			$rules['product_name'] = 'required';
			$rules['product_size'] = 'required';
			$rules['use_by_date'] = 'required';
			$rules['batch_code'] = 'required';
			$rules['enquiry'] = 'required';
		
		}

		$validation = Validator::make($input, $rules);

		if($validation->fails())
		{

			return Redirect::to('/')->withInput()->withErrors($validation);

		} else {

			return Redirect::to('/')->with('message', 'Success, thank you for your submission.');

		}

	}

}