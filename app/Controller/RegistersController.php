<?php



	class RegistersController extends AppController
	{

		public function index()
		{
			$this->set('page_title', 'Sign Up');

			if($this->request->is('post'))
			{
				$this->User->create();
				$this->User->save($this->request->data);
			}
		}

	}


?>
	


