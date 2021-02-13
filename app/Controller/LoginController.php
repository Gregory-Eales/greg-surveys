<?php

class LoginController extends AppController
{



	public function index()
	{

		$this->set('page_title', 'Login');

	}


	public function hello()
	{
		echo "login";
	}



}



?>