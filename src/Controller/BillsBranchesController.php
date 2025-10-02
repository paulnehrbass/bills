<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BillsBranches Controller
 *
 * @property \App\Model\Table\BillsBranchesTable $BillsBranches
 */
class BillsBranchesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->BillsBranches->find();
        $billsBranches = $this->paginate($query);

        $this->set(compact('billsBranches'));
    }

    /**
     * View method
     *
     * @param string|null $id Bills Branch id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billsBranch = $this->BillsBranches->get($id, contain: []);
        $this->set(compact('billsBranch'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billsBranch = $this->BillsBranches->newEmptyEntity();
        if ($this->request->is('post')) {
            $billsBranch = $this->BillsBranches->patchEntity($billsBranch, $this->request->getData());
            if ($this->BillsBranches->save($billsBranch)) {
                $this->Flash->success(__('The bills branch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bills branch could not be saved. Please, try again.'));
        }
        $this->set(compact('billsBranch'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bills Branch id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billsBranch = $this->BillsBranches->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billsBranch = $this->BillsBranches->patchEntity($billsBranch, $this->request->getData());
            if ($this->BillsBranches->save($billsBranch)) {
                $this->Flash->success(__('The bills branch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bills branch could not be saved. Please, try again.'));
        }
        $this->set(compact('billsBranch'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bills Branch id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billsBranch = $this->BillsBranches->get($id);
        if ($this->BillsBranches->delete($billsBranch)) {
            $this->Flash->success(__('The bills branch has been deleted.'));
        } else {
            $this->Flash->error(__('The bills branch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
