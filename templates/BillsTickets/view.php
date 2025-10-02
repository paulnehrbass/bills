<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillsTicket $billsTicket
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bills Ticket'), ['action' => 'edit', $billsTicket->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bills Ticket'), ['action' => 'delete', $billsTicket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billsTicket->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bills Tickets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bills Ticket'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="billsTickets view content">
            <h3><?= h($billsTicket->Headline) ?></h3>
            <table>
                <tr>
                    <th><?= __('Headline') ?></th>
                    <td><?= h($billsTicket->headline) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bills State') ?></th>
                    <td><?= $billsTicket->hasValue('bills_state') ? $this->Html->link($billsTicket->bills_state->state, ['controller' => 'BillsStates', 'action' => 'view', $billsTicket->bills_state->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Bills Branch') ?></th>
                    <td><?= $billsTicket->hasValue('bills_branch') ? $this->Html->link($billsTicket->bills_branch->name, ['controller' => 'BillsBranches', 'action' => 'view', $billsTicket->bills_branch->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($billsTicket->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($billsTicket->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($billsTicket->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($billsTicket->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>