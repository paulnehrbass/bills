<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillsState $billsState
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $billsState->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $billsState->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Bills States'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="billsStates form content">
            <?= $this->Form->create($billsState) ?>
            <fieldset>
                <legend><?= __('Edit Bills State') ?></legend>
                <?php
                    echo $this->Form->control('state');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
