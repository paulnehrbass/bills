<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BillsTicket> $billsTickets
 */
?>
<div class="billsTickets index content">
    <?= $this->Html->link(__('New Bills Ticket'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bills Tickets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('headline') ?></th>
                    <th><?= $this->Paginator->sort('bills_states_id') ?></th>
                    <th><?= $this->Paginator->sort('bills_branches_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($billsTickets as $billsTicket): ?>
                <tr>
                    <td><?= $this->Number->format($billsTicket->id) ?></td>
                    <td><?= h($billsTicket->headline) ?></td>
                    <td><?= $billsTicket->has('bills_state') ? $this->Html->link($billsTicket->bills_state->id, ['controller' => 'BillsStates', 'action' => 'view', $billsTicket->bills_state->id]) : '' ?></td>
                    <td><?= $billsTicket->has('bills_branch') ? $this->Html->link($billsTicket->bills_branch->name, ['controller' => 'BillsBranches', 'action' => 'view', $billsTicket->bills_branch->id]) : '' ?></td>
                    <td><?= h($billsTicket->created) ?></td>
                    <td><?= h($billsTicket->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $billsTicket->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billsTicket->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billsTicket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billsTicket->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
