<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillsTicket $billsTicket
 * @var string[]|\Cake\Collection\CollectionInterface $billsStates
 * @var string[]|\Cake\Collection\CollectionInterface $billsBranches
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
                            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $billsTicket->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $billsTicket->id), 'class' => 'side-nav-item']
                ) ?>
                        <?= $this->Html->link(__('List Bills Tickets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="billsTickets form content">
            <?= $this->Form->create($billsTicket) ?>
            <fieldset>
                <legend><?= __('Edit Bills Ticket') ?></legend>
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
