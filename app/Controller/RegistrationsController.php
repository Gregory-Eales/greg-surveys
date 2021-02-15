<?php 

	class RegistrationsController extends AppController
	{     
		public function index()
		{


			if($this->request->is('post'))
			{
				$this->Registration->create();
				if($this->Registration->save($this->request->data))
				{
					$this->redirect('logins');
				}
			}

		}
	}