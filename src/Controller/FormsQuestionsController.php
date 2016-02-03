<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FormsQuestions Controller
 *
 * @property \App\Model\Table\FormsQuestionsTable $FormsQuestions
 */
class FormsQuestionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Forms', 'Questions']
        ];
        $this->set('formsQuestions', $this->paginate($this->FormsQuestions));
        $this->set('_serialize', ['formsQuestions']);
    }

    /**
     * View method
     *
     * @param string|null $id Forms Question id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formsQuestion = $this->FormsQuestions->get($id, [
            'contain' => ['Forms', 'Questions']
        ]);
        $this->set('formsQuestion', $formsQuestion);
        $this->set('_serialize', ['formsQuestion']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formsQuestion = $this->FormsQuestions->newEntity();
        if ($this->request->is('post')) {
            $formsQuestion = $this->FormsQuestions->patchEntity($formsQuestion, $this->request->data);
            if ($this->FormsQuestions->save($formsQuestion)) {
                $this->Flash->success(__('The forms question has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forms question could not be saved. Please, try again.'));
            }
        }
        $forms = $this->FormsQuestions->Forms->find('list', ['limit' => 200]);
        $questions = $this->FormsQuestions->Questions->find('list', ['limit' => 200]);
        $this->set(compact('formsQuestion', 'forms', 'questions'));
        $this->set('_serialize', ['formsQuestion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Forms Question id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formsQuestion = $this->FormsQuestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formsQuestion = $this->FormsQuestions->patchEntity($formsQuestion, $this->request->data);
            if ($this->FormsQuestions->save($formsQuestion)) {
                $this->Flash->success(__('The forms question has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forms question could not be saved. Please, try again.'));
            }
        }
        $forms = $this->FormsQuestions->Forms->find('list', ['limit' => 200]);
        $questions = $this->FormsQuestions->Questions->find('list', ['limit' => 200]);
        $this->set(compact('formsQuestion', 'forms', 'questions'));
        $this->set('_serialize', ['formsQuestion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Forms Question id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formsQuestion = $this->FormsQuestions->get($id);
        if ($this->FormsQuestions->delete($formsQuestion)) {
            $this->Flash->success(__('The forms question has been deleted.'));
        } else {
            $this->Flash->error(__('The forms question could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
