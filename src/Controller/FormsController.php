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


    //Autorizacion hacia las vistas del usuario
    public function isAuthorized($user)
     {
         switch ($this->Auth->user('role')) {
           case 'student':
             if (in_array($this->request->action, ['myForms', 'view'])){
                 return true;
             }
             break;
           default:
             break;
         }
         return parent::isAuthorized($user);
     }


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

      $forms = $this->Forms->find('all')->matching(
        'Careers', function ($q) use ($user) {
        return $q->where(['Careers.id' => $user->career_id]);
        }
        )->matching('Generations', function ($q) use ($user) {
          return $q->where(['Generations.id' => $user->generation_id]);
        });

        $questions = TableRegistry::get('FormsQuestions');
        $answers = TableRegistry::get('QuestionsUsers');

        foreach ( $forms as $form){
          $total_questions[$form->id] =  $questions->find()->where(['form_id' => $form->id])->count();
          $total_answers[$form->id] = $answers->find()->where(['user_id' => $user->id, 'form_id' => $form->id])->count();

        }
      $this->set('total_questions', $total_questions);
      $this->set('total_answers', $total_answers);
      $this->set('forms', $this->paginate($forms));
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
        $this->viewBuilder()->layout('users');

        $form = $this->Forms->get($id, [
            'contain' => ['Careers', 'Generations', 'Questions.Options']
        ]);

        $answers = TableRegistry::get('QuestionsUsers');
        $answers = $answers->find('all')->where(['user_id' => $this->Auth->user('id')]);

        $this->set('form', $form);
        $this->set('answers', $answers);
        $this->set('_serialize', ['form', 'answers']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $form = $this->Forms->newEntity();

        if ($this->request->is('ajax')) {
          $this->viewClass = 'Ajax';
          $response = [
              'status' => '200',
              'msg' => 'Zup'
          ];
          $this->set('response', json_encode($response));
        }

        if ($this->request->is('post')) {
          $form = $this->Forms->patchEntity($form, $this->request->data);
          debug($this->request->data);
            if ($this->Forms->save($form)) {
                $this->Flash->success(__('The form has been saved.'));
                //return $this->redirect(['action' => 'index']);
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
            'contain' => ['Careers.Departments', 'Generations', 'Questions.Options']
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
        $departments = $this->Forms->Careers->Departments->find('list', ['limit' => 200]);
        $generations = $this->Forms->Generations->find('list', ['limit' => 200]);
        $questions = $this->Forms->Questions->find('list'); 
        $questionz = $this->Forms->Questions->find('all')->contain(['Options']);

        $this->set(compact('form', 'careers', 'generations', 'questions', 'departments', 'questionz'));
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
