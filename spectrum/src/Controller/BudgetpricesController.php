<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Budgetprices Controller
 *
 * @property \App\Model\Table\BudgetpricesTable $Budgetprices
 */
class BudgetpricesController extends AppController
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
        $budgetprices = $this->paginate($this->Budgetprices);

        $this->set(compact('budgetprices'));
        $this->set('_serialize', ['budgetprices']);
    }

    /**
     * View method
     *
     * @param string|null $id Budgetprice id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $budgetprice = $this->Budgetprices->get($id, [
            'contain' => ['Games']
        ]);

        $this->set('budgetprice', $budgetprice);
        $this->set('_serialize', ['budgetprice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $budgetprice = $this->Budgetprices->newEntity();
        if ($this->request->is('post')) {
            $budgetprice = $this->Budgetprices->patchEntity($budgetprice, $this->request->data);
            if ($this->Budgetprices->save($budgetprice)) {
                $this->Flash->success(__('The budgetprice has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The budgetprice could not be saved. Please, try again.'));
            }
        }
        $games = $this->Budgetprices->Games->find('list', ['limit' => 200]);
        $this->set(compact('budgetprice', 'games'));
        $this->set('_serialize', ['budgetprice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Budgetprice id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $budgetprice = $this->Budgetprices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $budgetprice = $this->Budgetprices->patchEntity($budgetprice, $this->request->data);
            if ($this->Budgetprices->save($budgetprice)) {
                $this->Flash->success(__('The budgetprice has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The budgetprice could not be saved. Please, try again.'));
            }
        }
        $games = $this->Budgetprices->Games->find('list', ['limit' => 200]);
        $this->set(compact('budgetprice', 'games'));
        $this->set('_serialize', ['budgetprice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Budgetprice id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $budgetprice = $this->Budgetprices->get($id);
        if ($this->Budgetprices->delete($budgetprice)) {
            $this->Flash->success(__('The budgetprice has been deleted.'));
        } else {
            $this->Flash->error(__('The budgetprice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
