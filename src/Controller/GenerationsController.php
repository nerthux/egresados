<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Generations Controller
 *
 * @property \App\Model\Table\GenerationsTable $Generations
 */
class GenerationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('generations', $this->paginate($this->Generations));
        $this->set('_serialize', ['generations']);
    }

    /**
     * View method
     *
     * @param string|null $id Generation id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $generation = $this->Generations->get($id, [
            'contain' => ['Forms', 'Users']
        ]);
        $this->set('generation', $generation);
        $this->set('_serialize', ['generation']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $generation = $this->Generations->newEntity();
        if ($this->request->is('post')) {
            $generation = $this->Generations->patchEntity($generation, $this->request->data);
            if ($this->Generations->save($generation)) {
                $this->Flash->success(__('The generation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The generation could not be saved. Please, try again.'));
            }
        }
        $forms = $this->Generations->Forms->find('list', ['limit' => 200]);
        $this->set(compact('generation', 'forms'));
        $this->set('_serialize', ['generation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Generation id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $generation = $this->Generations->get($id, [
            'contain' => ['Forms']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $generation = $this->Generations->patchEntity($generation, $this->request->data);
            if ($this->Generations->save($generation)) {
                $this->Flash->success(__('The generation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The generation could not be saved. Please, try again.'));
            }
        }
        $forms = $this->Generations->Forms->find('list', ['limit' => 200]);
        $this->set(compact('generation', 'forms'));
        $this->set('_serialize', ['generation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Generation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $generation = $this->Generations->get($id);
        if ($this->Generations->delete($generation)) {
            $this->Flash->success(__('The generation has been deleted.'));
        } else {
            $this->Flash->error(__('The generation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
