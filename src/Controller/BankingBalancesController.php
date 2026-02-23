<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BankingBalances Controller
 *
 * @property \App\Model\Table\BankingBalancesTable $BankingBalances
 * @method \App\Model\Entity\BankingBalance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BankingBalancesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bankingBalances = $this->paginate($this->BankingBalances);

        $this->set(compact('bankingBalances'));
    }

    /**
     * View method
     *
     * @param string|null $id Banking Balance id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bankingBalance = $this->BankingBalances->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bankingBalance'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bankingBalance = $this->BankingBalances->newEmptyEntity();
        if ($this->request->is('post')) {
            $bankingBalance = $this->BankingBalances->patchEntity($bankingBalance, $this->request->getData());
            if ($this->BankingBalances->save($bankingBalance)) {
                $this->Flash->success(__('The banking balance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banking balance could not be saved. Please, try again.'));
        }
        $this->set(compact('bankingBalance'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banking Balance id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bankingBalance = $this->BankingBalances->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bankingBalance = $this->BankingBalances->patchEntity($bankingBalance, $this->request->getData());
            if ($this->BankingBalances->save($bankingBalance)) {
                $this->Flash->success(__('The banking balance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banking balance could not be saved. Please, try again.'));
        }
        $this->set(compact('bankingBalance'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banking Balance id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bankingBalance = $this->BankingBalances->get($id);
        if ($this->BankingBalances->delete($bankingBalance)) {
            $this->Flash->success(__('The banking balance has been deleted.'));
        } else {
            $this->Flash->error(__('The banking balance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
