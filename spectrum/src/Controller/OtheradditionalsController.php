<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Otheradditionals Controller
 *
 * @property \App\Model\Table\OtheradditionalsTable $Otheradditionals
 */
class OtheradditionalsController extends AppController
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
        $otheradditionals = $this->paginate($this->Otheradditionals);

        $this->set(compact('otheradditionals'));
        $this->set('_serialize', ['otheradditionals']);
    }

    /**
     * View method
     *
     * @param string|null $id Otheradditional id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $otheradditional = $this->Otheradditionals->get($id, [
            'contain' => ['Games']
        ]);

        $this->set('otheradditional', $otheradditional);
        $this->set('_serialize', ['otheradditional']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $otheradditional = $this->Otheradditionals->newEntity();
        if ($this->request->is('post')) {
            $otheradditional = $this->Otheradditionals->patchEntity($otheradditional, $this->request->data);
            if ($this->Otheradditionals->save($otheradditional)) {
                $this->Flash->success(__('The otheradditional has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The otheradditional could not be saved. Please, try again.'));
            }
        }
        $games = $this->Otheradditionals->Games->find('list', ['limit' => 200]);
        $this->set(compact('otheradditional', 'games'));
        $this->set('_serialize', ['otheradditional']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Otheradditional id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $otheradditional = $this->Otheradditionals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $otheradditional = $this->Otheradditionals->patchEntity($otheradditional, $this->request->data);
            if ($this->Otheradditionals->save($otheradditional)) {
                $this->Flash->success(__('The otheradditional has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The otheradditional could not be saved. Please, try again.'));
            }
        }
        $games = $this->Otheradditionals->Games->find('list', ['limit' => 200]);
        $this->set(compact('otheradditional', 'games'));
        $this->set('_serialize', ['otheradditional']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Otheradditional id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $otheradditional = $this->Otheradditionals->get($id);
        if ($this->Otheradditionals->delete($otheradditional)) {
            $this->Flash->success(__('The otheradditional has been deleted.'));
        } else {
            $this->Flash->error(__('The otheradditional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
