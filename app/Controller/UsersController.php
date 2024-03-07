<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

		
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
		$this->layout = 'theme1';
		$this->states = [
			'Arunachal Pradesh',
			'Assam',
			'Bihar',
			'Chhattisgarh',
			'Goa',
			'Gujarat',
			'Haryana',
			'Himachal Pradesh',
			'Jammu and Kashmir',
			'Jharkhand',
			'Karnataka',
			'Kerala',
			'Madhya Pradesh',
			'Maharashtra',
			'Manipur',
			'Meghalaya',
			'Mizoram',
			'Nagaland',
			'Odisha',
			'Punjab',
			'Rajasthan',
			'Sikkim',
			'Tamil Nadu',
			'Telangana',
			'Tripura',
			'Uttar Pradesh',
			'Uttarakhand',
			'West Bengal',
			'Andaman and Nicobar Islands',
			'Chandigarh',
			'Dadra and Nagar Haveli',
			'Daman and Diu',
			'Lakshadweep',
			'National Capital Territory of Delhi',
			'Puducherry'
		];

		
	  }
	  
/**
 * register method
 *
 * @return json
 */		 
	public function register() {
		if ($this->Auth->loggedIn()) {
			$this->redirect('/dashboard'); // Redirect to a different page for logged-in users
		}
		if ($this->request->is('post')) {
			
			$this->autoRender = false;
			$this->response->type('json');

			$postData = $this->request->data; 
			
			$options = array('conditions' => array('User.email' => $postData['User']['email']));
			$user = $this->User->find('first', $options);
			$error = false;
			if($user)
			{
				$error = true;				
			}
			
			if ($error) {
				$response = array(
					'success' => 0,
					'message' => 'This Email is already in use',
				);
			} else{
				$this->User->create();			
				if ($this->User->save($this->request->data)) {
					$this->Auth->login();
					$response = array(
						'success' => 1,
						'message' => 'New user registered',
						'url'     => Router::url(['controller' => 'users', 'action' => 'index'])
					);
				}
				else {
					$response = array(
						'success' => 0,
						'message' => 'Could not register user',
					);
				}
			}
					

			$json =  json_encode($response);
			$this->response->body($json);
			
		}
		$states = $this->states; 
		$this->set('states', $states);
	}

/**
 * login method
 *
 * @return json
 */	  	  	  
	public function login() {
		if ($this->Auth->loggedIn()) {
			$this->redirect('/dashboard'); 
		}
		if ($this->request->is('post')) {
			$this->autoRender = false;
			$this->response->type('json');

			if ($this->Auth->login()) { 
				
				$response = array(
					'success' => 1,
					'message' => 'Login successfull',
					'url'     => Router::url(['controller' => 'users', 'action' => 'index'])
				);				
			}
			else { 
				$response = array(
					'success' => 0,
					'message' => 'Incorrect email or password',
				);
			}
			
			$json =  json_encode($response);
			$this->response->body($json);		  
		}
	}

/**
 * logout method
 *
 * @return void
 */	  
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {		
		if (!$this->Auth->loggedIn()) {
            $this->redirect('/login'); 
        }			
	}

/**
 * ajaxData method
 *
 * @throws NotFoundException
 * @param void
 * @return json
 */	
	function ajaxData() {
		$loginuser = $this->Auth->user();
        $this->modelClass = "User";
        $this->autoRender = false;          
        $output = $this->User->GetData($loginuser['is_admin']);
        echo json_encode($output);
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
			
			$this->autoRender = false;
            $this->response->type('json');
			$postData = $this->request->data; 
			if(!isset($postData['User']['is_admin'])) {
				$postData['User']['is_admin'] = 0;
			}
			$options = array('conditions' => array('User.email' => $postData['User']['email']));
            $user = $this->User->find('first', $options);
			$error = false;
			if($user) {
				if($user['User']['id'] !== $postData['User']['id']) {
					$error = true;
				}				
			}			
			if ($error) {
                $response = array(
					'success' => 0,
					'message' => 'This Email is already in use',
				);
			} else {
				if ($this->User->save($postData)) {
					$response = array(
						'success' => 1,
						'message' => 'The user has been saved',
						'url'     => Router::url(['controller' => 'users', 'action' => 'index'])
					);
				} else {
					$response = array(
						'success' => 0,
						'message' => 'The user could not be saved. Please, try again',
					);
				}
			}
		  	$json =  json_encode($response);
          	$this->response->body($json);
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);	
			$states = $this->states; 
			$this->set('user', $this->User->find('first', $options));
			$this->set('states', $states);
		}
	}
	
/**
 * delete method
 *
 * @throws NotFoundException
 * @param void
 * @return json
 */
	public function delete() {
		$this->request->allowMethod('post', 'delete');
		$this->autoRender = false;
        $this->response->type('json');
		$error = false;
		$postData = $this->request->data;
		
		if (!$this->User->exists($postData['id'])) {
			$error = true;
			$msg = "User does not exist";
		}

		if ($error) {
			$response = array(
				'success' => 0,
				'message' => $msg,
			);
		} else {
			if ($this->User->softDelete($postData)) {
				$response = array(
					'success' => 1,
					'message' => 'The user has been saved',
					'url'     => Router::url(['controller' => 'users', 'action' => 'index'])
				);
			} else {
				$response = array(
					'success' => 0,
					'message' => 'The user could not be saved. Please, try again',
				);
			}
		}
		$json =  json_encode($response);
        $this->response->body($json);		
	}
}
