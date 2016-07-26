<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Additionals Controller
 *
 * @property \App\Model\Table\AdditionalsTable $Additionals
 */
class AdditionalsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Games']
        ];
        $additionals = $this->paginate($this->Additionals);

        $this->set(compact('additionals'));
        $this->set('_serialize', ['additionals']);
    }

    /**
     * View method
     *
     * @param string|null $id Additional id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $additional = $this->Additionals->get($id, [
            'contain' => ['Games']
        ]);

        $this->set('additional', $additional);
        $this->set('_serialize', ['additional']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $additional = $this->Additionals->newEntity();
        if ($this->request->is('post')) {
            $additional = $this->Additionals->patchEntity($additional, $this->request->data);
            if ($this->Additionals->save($additional)) {
                $this->Flash->success(__('The additional has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The additional could not be saved. Please, try again.'));
            }
        }
        $games = $this->Additionals->Games->find('list', ['limit' => 200]);
        $this->set(compact('additional', 'games'));
        $this->set('_serialize', ['additional']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Additional id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $additional = $this->Additionals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $additional = $this->Additionals->patchEntity($additional, $this->request->data);
            if ($this->Additionals->save($additional)) {
                $this->Flash->success(__('The additional has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The additional could not be saved. Please, try again.'));
            }
        }
        $games = $this->Additionals->Games->find('list', ['limit' => 200]);
        $this->set(compact('additional', 'games'));
        $this->set('_serialize', ['additional']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Additional id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $additional = $this->Additionals->get($id);
        if ($this->Additionals->delete($additional)) {
            $this->Flash->success(__('The additional has been deleted.'));
        } else {
            $this->Flash->error(__('The additional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
