<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillsTicket $billsTicket
 * @var \Cake\Collection\CollectionInterface|string[] $billsStates
 * @var \Cake\Collection\CollectionInterface|string[] $billsBranches
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bills Tickets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="billsTickets form content">
            <?= $this->Form->create($billsTicket) ?>
            <fieldset>
                <legend><?= __('Add Bills Ticket') ?></legend>
                <?php
                    echo $this->Form->control('headline');
                    echo $this->Form->control('bills_states_id', ['options' => $billsStates]);
                    echo $this->Form->control('bills_branches_id', ['options' => $billsBranches]);
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
