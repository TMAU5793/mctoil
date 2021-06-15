<?php

namespace App\Controllers;

class Landing extends BaseController
{
	public function index()
	{
		return view('landing/header');
      return view('landing/landing');
      return view('landing/footer');
	}
}
