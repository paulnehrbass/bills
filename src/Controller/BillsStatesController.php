<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BillsStates Controller
 *
 * @property \App\Model\Table\BillsStatesTable $BillsStates
 * @method \App\Model\Entity\BillsState[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BillsStatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $billsStates = $this->paginate($this->BillsStates)->toArray();

        $this->set(compact('billsStates'));
    }

    /**
     * View method
     *
     * @param string|null $id Bills State id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billsState = $this->BillsStates->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('billsState'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billsState = $this->BillsStates->newEmptyEntity();
        if ($this->request->is('post')) {
            $billsState = $this->BillsStates->patchEntity($billsState, $this->request->getData());
            if ($this->BillsStates->save($billsState)) {
                $this->Flash->success(__('The bills state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bills state could not be saved. Please, try again.'));
        }
        $this->set(compact('billsState'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bills State id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billsState = $this->BillsStates->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billsState = $this->BillsStates->patchEntity($billsState, $this->request->getData());
            if ($this->BillsStates->save($billsState)) {
                $this->Flash->success(__('The bills state has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bills state could not be saved. Please, try again.'));
        }
        $this->set(compact('billsState'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bills State id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billsState = $this->BillsStates->get($id);
        if ($this->BillsStates->delete($billsState)) {
            $this->Flash->success(__('The bills state has been deleted.'));
        } else {
            $this->Flash->error(__('The bills state could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
