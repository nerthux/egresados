<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('register','logout');
    	if ($this->request->action === 'register') {
        	$this->loadComponent('Recaptcha.Recaptcha');
    	}
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Generations', 'Careers']
        ];
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Generations', 'Careers', 'Questions']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $generations = $this->Users->Generations->find('list', ['limit' => 200]);
        $careers = $this->Users->Careers->find('list', ['limit' => 200]);
        $questions = $this->Users->Questions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'generations', 'careers', 'questions'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Questions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $generations = $this->Users->Generations->find('list', ['limit' => 200]);
        $careers = $this->Users->Careers->find('list', ['limit' => 200]);
        $questions = $this->Users->Questions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'generations', 'careers', 'questions'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Register method
     *
     * @return void Redirects on successful add, renders view otherwise.
     *                     */
    public function register()
    {
      $this->viewBuilder()->layout('register');
      $user = $this->Users->newEntity();
      if ($this->request->is('post')) {
        if ($this->Recaptcha->verify()) {
        	$user = $this->Users->patchEntity($user, $this->request->data);
        	$user->email_validation_code = rand(10000, 99999);
		$user->role = 'student';
        	if ($this->Users->save($user)) {
            		$email = new Email();
            		$email->template('confirmation')
              		->emailFormat('text')
              		->to($user->email)
              		->from('gcovarrubias@c4-technologies.com');
            		$validate_url = "http://www.egresadositt.com/users/validateEmail/$user->id/$user->email_validation_code";
            		$email->viewVars(['first_name' => $user->first_name, 'email_validation_code' => $validate_url]);
            		$email->send();
            		$this->Flash->success(__('The user has been saved.'));
            		return $this->redirect(['controller' => 'Pages', 'action' => 'success']);
          	} else {
            		$this->Flash->error(__('The user could not be saved. Please, try again.'));
          	}
	 } else {
		$this->Flash->error(__('Please check your Recaptcha Box.'));
	 }
        }
        $generations = $this->Users->Generations->find('list', ['limit' => 200]);
        $careers = $this->Users->Careers->find('list', ['limit' => 200]);
        $questions = $this->Users->Questions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'generations', 'careers', 'questions'));
        $this->set('_serialize', ['user']);
    }


   public function validateEmail($id = null, $code = null)
   {
     $this->viewBuilder()->layout('simple');
     $user = $this->Users->get($id);
     if ($code == $user->email_validation_code)
     {
       $user->email_verified = 1;
       $this->Users->save($user);
       $this->set('user', $user);
       $this->set('_serialize', ['user']);
     }

   }


    public function login()
    {
      $this->viewBuilder()->layout('register');
      if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
          $this->Auth->setUser($user);
          return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Invalid username or password, try again'));
      }
    }

    public function logout()
    {
      return $this->redirect($this->Auth->logout());
    }
}
