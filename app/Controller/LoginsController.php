<?php

	class LoginsController extends AppController
	{
		public function index()
		{
			if($this->request->is('post'))
			{
				echo 'Attempted Login';
			}
		}
	}
	
?>