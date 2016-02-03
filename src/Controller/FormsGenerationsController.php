<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FormsGenerations Controller
 *
 * @property \App\Model\Table\FormsGenerationsTable $FormsGenerations
 */
class FormsGenerationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Forms', 'Generations']
        ];
        $this->set('formsGenerations', $this->paginate($this->FormsGenerations));
        $this->set('_serialize', ['formsGenerations']);
    }

    /**
     * View method
     *
     * @param string|null $id Forms Generation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $formsGeneration = $this->FormsGenerations->get($id, [
            'contain' => ['Forms', 'Generations']
        ]);
        $this->set('formsGeneration', $formsGeneration);
        $this->set('_serialize', ['formsGeneration']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $formsGeneration = $this->FormsGenerations->newEntity();
        if ($this->request->is('post')) {
            $formsGeneration = $this->FormsGenerations->patchEntity($formsGeneration, $this->request->data);
            if ($this->FormsGenerations->save($formsGeneration)) {
                $this->Flash->success(__('The forms generation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forms generation could not be saved. Please, try again.'));
            }
        }
        $forms = $this->FormsGenerations->Forms->find('list', ['limit' => 200]);
        $generations = $this->FormsGenerations->Generations->find('list', ['limit' => 200]);
        $this->set(compact('formsGeneration', 'forms', 'generations'));
        $this->set('_serialize', ['formsGeneration']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Forms Generation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $formsGeneration = $this->FormsGenerations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $formsGeneration = $this->FormsGenerations->patchEntity($formsGeneration, $this->request->data);
            if ($this->FormsGenerations->save($formsGeneration)) {
                $this->Flash->success(__('The forms generation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The forms generation could not be saved. Please, try again.'));
            }
        }
        $forms = $this->FormsGenerations->Forms->find('list', ['limit' => 200]);
        $generations = $this->FormsGenerations->Generations->find('list', ['limit' => 200]);
        $this->set(compact('formsGeneration', 'forms', 'generations'));
        $this->set('_serialize', ['formsGeneration']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Forms Generation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $formsGeneration = $this->FormsGenerations->get($id);
        if ($this->FormsGenerations->delete($formsGeneration)) {
            $this->Flash->success(__('The forms generation has been deleted.'));
        } else {
            $this->Flash->error(__('The forms generation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
