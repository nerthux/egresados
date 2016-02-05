<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * Forms Controller
 *
 * @property \App\Model\Table\FormsTable $Forms
 */
class FormsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('forms', $this->paginate($this->Forms));
        $this->set('_serialize', ['forms']);
    }

    public function myForms()
    {
      	$this->viewBuilder()->layout('users');
	$this->loadModel('Users');
     	$user = $this->Users->get($this->Auth->user('id'));
	$query = $this->Forms->find('all')->matching(
    					'Careers', function ($q) use ($user) {
        					return $q->where(['Careers.id' => $user->career_id]);
    					}
				)->matching('Generations', function ($q) use ($user) {
                                	return $q->where(['Generations.id' => $user->generation_id]);
				});
        $this->set('forms', $this->paginate($query));
	$this->set('_serialize', ['forms']);
    }


    /**
     * View method
     *
     * @param string|null $id Form id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $form = $this->Forms->get($id, [
            'contain' => ['Careers', 'Generations', 'Questions.Options']
        ]);
        $this->set('form', $form);
        $this->set('_serialize', ['form']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $form = $this->Forms->newEntity();
        if ($this->request->is('post')) {
            $form = $this->Forms->patchEntity($form, $this->request->data);
            if ($this->Forms->save($form)) {
                $this->Flash->success(__('The form has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $careers = $this->Forms->Careers->find('list', ['limit' => 200]);
        $generations = $this->Forms->Generations->find('list', ['limit' => 200]);
        $questions = $this->Forms->Questions->find('list', ['limit' => 200]);
        $this->set(compact('form', 'careers', 'generations', 'questions'));
        $this->set('_serialize', ['form']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Form id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $form = $this->Forms->get($id, [
            'contain' => ['Careers', 'Generations', 'Questions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $form = $this->Forms->patchEntity($form, $this->request->data);
            if ($this->Forms->save($form)) {
                $this->Flash->success(__('The form has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The form could not be saved. Please, try again.'));
            }
        }
        $careers = $this->Forms->Careers->find('list', ['limit' => 200]);
        $generations = $this->Forms->Generations->find('list', ['limit' => 200]);
        $questions = $this->Forms->Questions->find('list', ['limit' => 200]);
        $this->set(compact('form', 'careers', 'generations', 'questions'));
        $this->set('_serialize', ['form']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Form id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $form = $this->Forms->get($id);
        if ($this->Forms->delete($form)) {
            $this->Flash->success(__('The form has been deleted.'));
        } else {
            $this->Flash->error(__('The form could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
