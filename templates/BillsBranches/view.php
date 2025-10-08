<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillsBranch $billsBranch
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bills Branch'), ['action' => 'edit', $billsBranch->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bills Branch'), ['action' => 'delete', $billsBranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billsBranch->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bills Branches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bills Branch'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="billsBranches view content">
            <h3><?= h($billsBranch->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Version') ?></th>
                    <td><?= h($billsBranch->version) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($billsBranch->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($billsBranch->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($billsBranch->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($billsBranch->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($billsBranch->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
