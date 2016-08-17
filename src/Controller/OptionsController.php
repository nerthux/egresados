<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Options Controller
 *
 * @property \App\Model\Table\OptionsTable $Options
 */
class OptionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Questions']
        ];
        $this->set('options', $this->paginate($this->Options));
        $this->set('_serialize', ['options']);
    }

    /**
     * View method
     *
     * @param string|null $id Option id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $option = $this->Options->get($id, [
            'contain' => ['Questions']
        ]);
        $this->set('option', $option);
        $this->set('_serialize', ['option']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
      $this->viewClass = "Ajax";
      $response = null;
      $option = $this->Options->newEntity();

      if($this->request->is('ajax')){
        if ($this->request->is('post')) {

          $option = $this->Options->patchEntity($option, $this->request->data);

            if ($this->Options->save($option)) {
              $response = [
                'status' => '200',
                'msg' => 'Se ha agregado la opcion exitosamente',
                'text' => $option->text,
                'value' => $option->value,
                'question_id' => $option->question_id
              ];
            } else {
              $response = [
                'status' => '100',
                'msg' => 'Oh no! Se ha producido un error'
              ];
            }
        }
        $this->set('response', json_encode($response));
      }

      if($this->request->is('post')){
        $option = $this->Options->patchEntity($option, $this->request->data);
        if($this->Options->save($option)){
            $this->Flash->success(__('The option has been saved.'));
            if($option->request == 'form')
                return $this->redirect(['controller' => 'forms',  'action' => 'edit', $option->form_id]);

            return $this->redirect(['action' => 'index']);
        }else{
            $this->Flash->error(__('The option could not be saved. Please, try again.'));
        }
      }
      
    }


    /**
     * Edit method
     *
     * @param string|null $id Option id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $option = $this->Options->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $option = $this->Options->patchEntity($option, $this->request->data);
            if ($this->Options->save($option)) {
                $this->Flash->success(__('The option has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The option could not be saved. Please, try again.'));
            }
        }
        $questions = $this->Options->Questions->find('list', ['limit' => 200]);
        $this->set(compact('option', 'questions'));
        $this->set('_serialize', ['option']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Option id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $option = $this->Options->get($id);
        if ($this->Options->delete($option)) {
            $this->Flash->success(__('The option has been deleted.'));
        } else {
            $this->Flash->error(__('The option could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
