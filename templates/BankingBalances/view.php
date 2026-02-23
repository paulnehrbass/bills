<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BankingBalance $bankingBalance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Banking Balance'), ['action' => 'edit', $bankingBalance->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Banking Balance'), ['action' => 'delete', $bankingBalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bankingBalance->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Banking Balances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Banking Balance'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bankingBalances view content">
            <h3><?= h($bankingBalance->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Iban') ?></th>
                    <td><?= h($bankingBalance->iban) ?></td>
                </tr>
                <tr>
                    <th><?= __('Art') ?></th>
                    <td><?= h($bankingBalance->art) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typ') ?></th>
                    <td><?= h($bankingBalance->typ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bankingBalance->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Saldo') ?></th>
                    <td><?= $this->Number->format($bankingBalance->saldo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bankingBalance->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bankingBalance->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Bezeichnung') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($bankingBalance->bezeichnung)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
