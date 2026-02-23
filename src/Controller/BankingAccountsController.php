<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BankingAccounts Controller
 *
 * @property \App\Model\Table\BankingAccountsTable $BankingAccounts
 * @method \App\Model\Entity\BankingAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BankingAccountsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $bankingAccounts = $this->paginate($this->BankingAccounts);

        $this->set(compact('bankingAccounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Banking Account id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bankingAccount = $this->BankingAccounts->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('bankingAccount'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bankingAccount = $this->BankingAccounts->newEmptyEntity();
        if ($this->request->is('post')) {
            $bankingAccount = $this->BankingAccounts->patchEntity($bankingAccount, $this->request->getData());
            if ($this->BankingAccounts->save($bankingAccount)) {
                $this->Flash->success(__('The banking account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banking account could not be saved. Please, try again.'));
        }
        $this->set(compact('bankingAccount'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banking Account id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bankingAccount = $this->BankingAccounts->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bankingAccount = $this->BankingAccounts->patchEntity($bankingAccount, $this->request->getData());
            if ($this->BankingAccounts->save($bankingAccount)) {
                $this->Flash->success(__('The banking account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banking account could not be saved. Please, try again.'));
        }
        $this->set(compact('bankingAccount'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banking Account id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bankingAccount = $this->BankingAccounts->get($id);
        if ($this->BankingAccounts->delete($bankingAccount)) {
            $this->Flash->success(__('The banking account has been deleted.'));
        } else {
            $this->Flash->error(__('The banking account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
