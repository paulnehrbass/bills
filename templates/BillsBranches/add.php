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
            <?= $this->Html->link(__('List Bills Branches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="billsBranches form content">
            <?= $this->Form->create($billsBranch) ?>
            <fieldset>
                <legend><?= __('Add Bills Branch') ?></legend>
                <?php
                    echo $this->Form->control('version');
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
