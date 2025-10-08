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
            <?= $this->Html->link(__('Edit Bills State'), ['action' => 'edit', $billsState->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bills State'), ['action' => 'delete', $billsState->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billsState->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bills States'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bills State'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="billsStates view content">
            <h3><?= h($billsState->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($billsState->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($billsState->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($billsState->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($billsState->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($billsState->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
