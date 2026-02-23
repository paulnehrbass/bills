<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BankingAccount $bankingAccount
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Banking Account'), ['action' => 'edit', $bankingAccount->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Banking Account'), ['action' => 'delete', $bankingAccount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bankingAccount->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Banking Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Banking Account'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bankingAccounts view content">
            <h3><?= h($bankingAccount->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($bankingAccount->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iban') ?></th>
                    <td><?= h($bankingAccount->iban) ?></td>
                </tr>
                <tr>
                    <th><?= __('Typ') ?></th>
                    <td><?= h($bankingAccount->typ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bic') ?></th>
                    <td><?= h($bankingAccount->bic) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kontobetreuung') ?></th>
                    <td><?= h($bankingAccount->kontobetreuung) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefon') ?></th>
                    <td><?= h($bankingAccount->telefon) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bankingAccount->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bankingAccount->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bankingAccount->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Bezeichnung') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($bankingAccount->bezeichnung)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
