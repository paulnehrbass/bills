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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bankingAccount->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bankingAccount->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Banking Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bankingAccounts form content">
            <?= $this->Form->create($bankingAccount) ?>
            <fieldset>
                <legend><?= __('Edit Banking Account') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('iban');
                    echo $this->Form->control('bezeichnung');
                    echo $this->Form->control('typ');
                    echo $this->Form->control('bic');
                    echo $this->Form->control('kontobetreuung');
                    echo $this->Form->control('telefon');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
