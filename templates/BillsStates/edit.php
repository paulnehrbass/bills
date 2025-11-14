<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillsState $billsState
 */
?>

<div class="row">
    <div class="card-body">
        <h4 class="card-title mb-4">Horizontal Form Layout</h4>
        <?= $this->Form->create($billsState) ?>
        <fieldset>
            <legend><?= __('Edit Bills State') ?></legend>
            <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>




