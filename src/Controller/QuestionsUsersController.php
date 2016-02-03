<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionsUsers Controller
 *
 * @property \App\Model\Table\QuestionsUsersTable $QuestionsUsers
 */
class QuestionsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Questions']
        ];
        $this->set('questionsUsers', $this->paginate($this->QuestionsUsers));
        $this->set('_serialize', ['questionsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Questions User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionsUser = $this->QuestionsUsers->get($id, [
            'contain' => ['Users', 'Questions']
        ]);
        $this->set('questionsUser', $questionsUser);
        $this->set('_serialize', ['questionsUser']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      $questionsUser = $this->QuestionsUsers->newEntity();
      if ($this->request->is('post')) {
          foreach ( $this->request->data as $key => $value) {
            $data[] = [ 'question_id' => $key, 'user_id' => $this->Auth->user('id'), 'value' => $value ];
          }
          $questionsUsers = $this->QuestionsUsers->newEntities($data);
          foreach ($questionsUsers as $answers)
            $this->QuestionsUsers->save($answers);
//          $questionsUser = $this->QuestionsUsers->patchEntity($questionsUser, $this->request->data);
//          debug($questionsUser);
//          if ($this->QuestionsUsers->save($questionsUser)) {
//            $this->Flash->success(__('The questions user has been saved.'));
//            return $this->redirect(['action' => 'index']);
//          } else {
//            $this->Flash->error(__('The questions user could not be saved. Please, try again.'));
//          }
      }
      $users = $this->QuestionsUsers->Users->find('list', ['limit' => 200]);
      $questions = $this->QuestionsUsers->Questions->find('list', ['limit' => 200]);
      $this->set(compact('questionsUser', 'users', 'questions'));
      $this->set('_serialize', ['questionsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Questions User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionsUser = $this->QuestionsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionsUser = $this->QuestionsUsers->patchEntity($questionsUser, $this->request->data);
            if ($this->QuestionsUsers->save($questionsUser)) {
                $this->Flash->success(__('The questions user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The questions user could not be saved. Please, try again.'));
            }
        }
        $users = $this->QuestionsUsers->Users->find('list', ['limit' => 200]);
        $questions = $this->QuestionsUsers->Questions->find('list', ['limit' => 200]);
        $this->set(compact('questionsUser', 'users', 'questions'));
        $this->set('_serialize', ['questionsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Questions User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionsUser = $this->QuestionsUsers->get($id);
        if ($this->QuestionsUsers->delete($questionsUser)) {
            $this->Flash->success(__('The questions user has been deleted.'));
        } else {
            $this->Flash->error(__('The questions user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
