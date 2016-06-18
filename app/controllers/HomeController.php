<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('frontend.home');
	}
    
    public function admincp()
	{
		return View::make('backend.dashboard');
	}

}
