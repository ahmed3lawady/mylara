<?php

class LoginController extends BaseController {

	public function index()
	{
		return View::make('backend.login');
	}
    
    public function doLogin()
    {
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), array( 'email' => 'required|email', 'password' => 'required' ));

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('admincp/login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'us_email'     => Input::get('email'),
                'password'  => Input::get('password')
            );
            // attempt to do the login
            if (Auth::attempt($userdata)) {
                // validation successful!
                // redirect them to the secure section or whatever
                return Redirect::to('admincp');
            } else {
                // validation not successful, send back to form 
                return Redirect::to('admincp/login');
            }
        }
    }
    
    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('admincp/login'); // redirect the user to the login screen
    }

}
