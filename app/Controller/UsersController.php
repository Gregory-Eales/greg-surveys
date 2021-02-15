<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */



function check_existing_email($accounts, $email)
	{
		foreach($accounts as $a)
		{
				if($a['User']['email']==$email)
				{
					return true;
				}
			
		}

		return false;
	}

class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete($id)) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login()
	{
		if($this->request->is('post'))
			{
				$users = $this->User->find('all');
				$email = $this->request->data['User']['email'];
				$exists = check_existing_email($users, $email);
				
				if($exists)
				{
					
					echo "login triggered";

				}else
				{
					$this->Session->setFlash('This email is not linked to an account');
				}
				
			}
	}

	public function logout() {

	}

	public function register()
		{

			if($this->request->is('post'))
			{
				$users = $this->User->find('all');
				$email = $this->request->data['User']['email'];
				$exists = check_existing_email($users, $email);
				if($exists==false)
				{
					$this->request->data['User']['password'] = AuthComponent::password(
						$this->request->data['User']['password']
					);

					$this->User->create();
					if($this->User->save($this->request->data))
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

	public function beforeFilter()
	{
		$this->Auth->allow('register');
	}
}
