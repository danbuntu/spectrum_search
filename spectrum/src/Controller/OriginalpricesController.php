<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Originalprices Controller
 *
 * @property \App\Model\Table\OriginalpricesTable $Originalprices
 */
class OriginalpricesController extends AppController
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
        $originalprices = $this->paginate($this->Originalprices);

        $this->set(compact('originalprices'));
        $this->set('_serialize', ['originalprices']);
    }

    /**
     * View method
     *
     * @param string|null $id Originalprice id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $originalprice = $this->Originalprices->get($id, [
            'contain' => ['Games']
        ]);

        $this->set('originalprice', $originalprice);
        $this->set('_serialize', ['originalprice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $originalprice = $this->Originalprices->newEntity();
        if ($this->request->is('post')) {
            $originalprice = $this->Originalprices->patchEntity($originalprice, $this->request->data);
            if ($this->Originalprices->save($originalprice)) {
                $this->Flash->success(__('The originalprice has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The originalprice could not be saved. Please, try again.'));
            }
        }
        $games = $this->Originalprices->Games->find('list', ['limit' => 200]);
        $this->set(compact('originalprice', 'games'));
        $this->set('_serialize', ['originalprice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Originalprice id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $originalprice = $this->Originalprices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $originalprice = $this->Originalprices->patchEntity($originalprice, $this->request->data);
            if ($this->Originalprices->save($originalprice)) {
                $this->Flash->success(__('The originalprice has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The originalprice could not be saved. Please, try again.'));
            }
        }
        $games = $this->Originalprices->Games->find('list', ['limit' => 200]);
        $this->set(compact('originalprice', 'games'));
        $this->set('_serialize', ['originalprice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Originalprice id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $originalprice = $this->Originalprices->get($id);
        if ($this->Originalprices->delete($originalprice)) {
            $this->Flash->success(__('The originalprice has been deleted.'));
        } else {
            $this->Flash->error(__('The originalprice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
