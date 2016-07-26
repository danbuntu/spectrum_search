<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Magazines Controller
 *
 * @property \App\Model\Table\MagazinesTable $Magazines
 */
class MagazinesController extends AppController
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
        $magazines = $this->paginate($this->Magazines);

        $this->set(compact('magazines'));
        $this->set('_serialize', ['magazines']);
    }

    /**
     * View method
     *
     * @param string|null $id Magazine id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $magazine = $this->Magazines->get($id, [
            'contain' => ['Games']
        ]);

        $this->set('magazine', $magazine);
        $this->set('_serialize', ['magazine']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $magazine = $this->Magazines->newEntity();
        if ($this->request->is('post')) {
            $magazine = $this->Magazines->patchEntity($magazine, $this->request->data);
            if ($this->Magazines->save($magazine)) {
                $this->Flash->success(__('The magazine has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The magazine could not be saved. Please, try again.'));
            }
        }
        $games = $this->Magazines->Games->find('list', ['limit' => 200]);
        $this->set(compact('magazine', 'games'));
        $this->set('_serialize', ['magazine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Magazine id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $magazine = $this->Magazines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $magazine = $this->Magazines->patchEntity($magazine, $this->request->data);
            if ($this->Magazines->save($magazine)) {
                $this->Flash->success(__('The magazine has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The magazine could not be saved. Please, try again.'));
            }
        }
        $games = $this->Magazines->Games->find('list', ['limit' => 200]);
        $this->set(compact('magazine', 'games'));
        $this->set('_serialize', ['magazine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Magazine id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $magazine = $this->Magazines->get($id);
        if ($this->Magazines->delete($magazine)) {
            $this->Flash->success(__('The magazine has been deleted.'));
        } else {
            $this->Flash->error(__('The magazine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
