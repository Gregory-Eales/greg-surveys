<?php

	class LoginsController extends AppController
	{

		public function index()
		{

			$this->set('page_title', 'Login');

			if($this->request->is('post'))
				{
					$this->Login->create();
					$this->Login->save($this->request->data);
				}

		}


		public function hello()
		{
			echo "login";
		}



}



?>