<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Rereleasedbys Controller
 *
 * @property \App\Model\Table\RereleasedbysTable $Rereleasedbys
 */
class RereleasedbysController extends AppController
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
        $rereleasedbys = $this->paginate($this->Rereleasedbys);

        $this->set(compact('rereleasedbys'));
        $this->set('_serialize', ['rereleasedbys']);
    }

    /**
     * View method
     *
     * @param string|null $id Rereleasedby id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rereleasedby = $this->Rereleasedbys->get($id, [
            'contain' => ['Games']
        ]);

        $this->set('rereleasedby', $rereleasedby);
        $this->set('_serialize', ['rereleasedby']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rereleasedby = $this->Rereleasedbys->newEntity();
        if ($this->request->is('post')) {
            $rereleasedby = $this->Rereleasedbys->patchEntity($rereleasedby, $this->request->data);
            if ($this->Rereleasedbys->save($rereleasedby)) {
                $this->Flash->success(__('The rereleasedby has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rereleasedby could not be saved. Please, try again.'));
            }
        }
        $games = $this->Rereleasedbys->Games->find('list', ['limit' => 200]);
        $this->set(compact('rereleasedby', 'games'));
        $this->set('_serialize', ['rereleasedby']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rereleasedby id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rereleasedby = $this->Rereleasedbys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rereleasedby = $this->Rereleasedbys->patchEntity($rereleasedby, $this->request->data);
            if ($this->Rereleasedbys->save($rereleasedby)) {
                $this->Flash->success(__('The rereleasedby has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rereleasedby could not be saved. Please, try again.'));
            }
        }
        $games = $this->Rereleasedbys->Games->find('list', ['limit' => 200]);
        $this->set(compact('rereleasedby', 'games'));
        $this->set('_serialize', ['rereleasedby']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rereleasedby id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rereleasedby = $this->Rereleasedbys->get($id);
        if ($this->Rereleasedbys->delete($rereleasedby)) {
            $this->Flash->success(__('The rereleasedby has been deleted.'));
        } else {
            $this->Flash->error(__('The rereleasedby could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
