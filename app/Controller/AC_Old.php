<?php

	function check_existing_username($accounts, $username)
	{
		foreach($accounts as $a)
		{
				if($a['Account']['email']==$username)
				{
					return false;
				}
			
		}

		return true;
	}
	
	class AccountsController extends AppController

	{

		public $components = array('Session');

		public function index()
		{

		}


		public function login()
		{

			if($this->request->is('post'))
			{
				$accounts = $this->Account->find('all');
				$email = $this->request->data['Account']['email'];
				$exists = check_existing_username($accounts, $email);

				echo "login triggered";
				
				if($exists)
				{
					
					echo "login triggered";

				}else
				{
					$this->Session->setFlash('This email is not linked to an account');
				}
				
			}
			
		}


		public function register()
		{

			if($this->request->is('post'))
			{
				$accounts = $this->Account->find('all');
				$email = $this->request->data['Account']['email'];
				$exists = check_existing_username($accounts, $email);
				
				if($exists)
				{
					$this->Account->create();
					if($this->Account->save($this->request->data))
					{
						$this->Session->setFlash('Account has been created!');
						$this->redirect('login');
					}
				}else
				{
					$this->Session->setFlash('This email is already in use!');
				}
				
			}

		}
	}