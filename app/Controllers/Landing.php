<?php

namespace App\Controllers;

class Landing extends BaseController
{
	public function index()
	{
		echo view('landing/header');
		echo view('layouts/navbar');
      echo view('landing/landing');
      echo view('landing/footer');
	}
}
