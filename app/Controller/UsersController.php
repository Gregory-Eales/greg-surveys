<?php

class UsersController extends AppController
{



	public function index()
	{

		$this->set('page_title', 'Users');

	}


	public function hello()
	{
		echo "Hello";
	}



}



?>