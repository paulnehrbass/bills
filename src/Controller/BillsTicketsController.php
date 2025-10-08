<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BillsTickets Controller
 *
 * @property \App\Model\Table\BillsTicketsTable $BillsTickets
 * @method \App\Model\Entity\BillsTicket[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BillsTicketsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BillsStates', 'BillsBranches'],
        ];
        $billsTickets = $this->paginate($this->BillsTickets);

        $this->set(compact('billsTickets'));
    }

    /**
     * View method
     *
     * @param string|null $id Bills Ticket id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billsTicket = $this->BillsTickets->get($id, [
            'contain' => ['BillsStates', 'BillsBranches'],
        ]);

        $this->set(compact('billsTicket'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billsTicket = $this->BillsTickets->newEmptyEntity();
        if ($this->request->is('post')) {
            $billsTicket = $this->BillsTickets->patchEntity($billsTicket, $this->request->getData());
            if ($this->BillsTickets->save($billsTicket)) {
                $this->Flash->success(__('The bills ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bills ticket could not be saved. Please, try again.'));
        }
        $billsStates = $this->BillsTickets->BillsStates->find('list', ['limit' => 200])->all();
        $billsBranches = $this->BillsTickets->BillsBranches->find('list', ['limit' => 200])->all();
        $this->set(compact('billsTicket', 'billsStates', 'billsBranches'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bills Ticket id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billsTicket = $this->BillsTickets->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billsTicket = $this->BillsTickets->patchEntity($billsTicket, $this->request->getData());
            if ($this->BillsTickets->save($billsTicket)) {
                $this->Flash->success(__('The bills ticket has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bills ticket could not be saved. Please, try again.'));
        }
        $billsStates = $this->BillsTickets->BillsStates->find('list', ['limit' => 200])->all();
        $billsBranches = $this->BillsTickets->BillsBranches->find('list', ['limit' => 200])->all();
        $this->set(compact('billsTicket', 'billsStates', 'billsBranches'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bills Ticket id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billsTicket = $this->BillsTickets->get($id);
        if ($this->BillsTickets->delete($billsTicket)) {
            $this->Flash->success(__('The bills ticket has been deleted.'));
        } else {
            $this->Flash->error(__('The bills ticket could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
