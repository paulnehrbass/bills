<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BillsBranch> $billsBranches
 */
?>
<div class="billsBranches index content">
    <?= $this->Html->link(__('New Bills Branch'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bills Branches') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('version') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($billsBranches as $billsBranch): ?>
                <tr>
                    <td><?= $this->Number->format($billsBranch->id) ?></td>
                    <td><?= h($billsBranch->version) ?></td>
                    <td><?= h($billsBranch->name) ?></td>
                    <td><?= h($billsBranch->created) ?></td>
                    <td><?= h($billsBranch->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $billsBranch->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billsBranch->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billsBranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billsBranch->id)]) ?>
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
