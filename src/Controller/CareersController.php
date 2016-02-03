<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Careers Controller
 *
 * @property \App\Model\Table\CareersTable $Careers
 */
class CareersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departments']
        ];
        $this->set('careers', $this->paginate($this->Careers));
        $this->set('_serialize', ['careers']);
    }

    /**
     * View method
     *
     * @param string|null $id Career id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $career = $this->Careers->get($id, [
            'contain' => ['Departments', 'Forms', 'Users']
        ]);
        $this->set('career', $career);
        $this->set('_serialize', ['career']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $career = $this->Careers->newEntity();
        if ($this->request->is('post')) {
            $career = $this->Careers->patchEntity($career, $this->request->data);
            if ($this->Careers->save($career)) {
                $this->Flash->success(__('The career has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The career could not be saved. Please, try again.'));
            }
        }
        $departments = $this->Careers->Departments->find('list', ['limit' => 200]);
        $forms = $this->Careers->Forms->find('list', ['limit' => 200]);
        $this->set(compact('career', 'departments', 'forms'));
        $this->set('_serialize', ['career']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Career id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $career = $this->Careers->get($id, [
            'contain' => ['Forms']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $career = $this->Careers->patchEntity($career, $this->request->data);
            if ($this->Careers->save($career)) {
                $this->Flash->success(__('The career has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The career could not be saved. Please, try again.'));
            }
        }
        $departments = $this->Careers->Departments->find('list', ['limit' => 200]);
        $forms = $this->Careers->Forms->find('list', ['limit' => 200]);
        $this->set(compact('career', 'departments', 'forms'));
        $this->set('_serialize', ['career']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Career id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $career = $this->Careers->get($id);
        if ($this->Careers->delete($career)) {
            $this->Flash->success(__('The career has been deleted.'));
        } else {
            $this->Flash->error(__('The career could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
