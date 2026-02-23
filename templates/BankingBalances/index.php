<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BankingBalance> $bankingBalances
 */



?>


<?= $this->element('main') ?>

<head>

 <?= $this->element('title-meta', array('title' => 'Starter Page')) ?>

 <?= $this->element('head-css') ?>

</head>

<?= $this->element('body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

 <?= $this->element('menu') ?>

 <!-- ============================================================== -->
 <!-- Start right Content here -->
 <!-- ============================================================== -->
 <div class="main-content">

  <div class="page-content">
   
   <div class="container-fluid">
    <h3>Banking Balance <span class="badge text-bg-success">
      <?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'button float-right']) ?>
     </span></h3>
   </div>



   <nav class="navbar bg-body-tertiary">
    <div class="container">
     <a class="navbar-brand" href="#">
      <!--img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24"-->
      <?= $this->Html->link(__('New'), ['action' => 'add'], ['width' => '30', 'height'=>'24']) ?>
     </a>
    </div>
   </nav>



   

   <div class="container-fluid">

    <div class="table-responsive">


     <table class="table table-light">

      <thead>
       <tr>
                 <th><?= $this->Paginator->sort('id') ?></th>
                 <th><?= $this->Paginator->sort('iban') ?></th>
                 <th><?= $this->Paginator->sort('art') ?></th>
                 <th><?= $this->Paginator->sort('typ') ?></th>
                 <th><?= $this->Paginator->sort('saldo') ?></th>
                 <th><?= $this->Paginator->sort('created') ?></th>
                 <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
       </tr>
      </thead>
      <tbody>
       <?php foreach ($bankingBalances as $bankingBalance): ?>
        <tr>
                                                                         <td><?= $this->Number->format($bankingBalance->id) ?></td>
                                                                                              <td><?= h($bankingBalance->iban) ?></td>
                                                                                              <td><?= h($bankingBalance->art) ?></td>
                                                                                              <td><?= h($bankingBalance->typ) ?></td>
                                                                                              <td><?= $this->Number->format($bankingBalance->saldo) ?></td>
                                                                                              <td><?= h($bankingBalance->created) ?></td>
                                                                                              <td><?= h($bankingBalance->modified) ?></td>
                                                <td class="actions">
          <?= $this->Html->link(__('View'), ['action' => 'view', $bankingBalance->id]) ?>
          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bankingBalance->id]) ?>
          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bankingBalance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bankingBalance->id)]) ?>
         </td>
        </tr>
       <?php endforeach; ?>
      </tbody>
     </table>
    </div>




    <nav aria-label="Page navigation example">
     <ul class="pagination justify-content-center">
      <!--li class="page-item disabled">
       <a class="page-link">Previous</a>
      </li-->
      <?= $this->Paginator->first('<< ') ?>
      <?= $this->Paginator->prev('< ') ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next(' >') ?>
      <?= $this->Paginator->last(' >>') ?>

     </ul>
     <p> <?= $this->Paginator->counter(__('Page  of , showing  record(s) out of  total'), ['model' => 'Banking Balances']) ?> </p>

    </nav>


   </div> <!-- container-fluid -->

  </div>
  <!-- End Page-content -->


  <?= $this->element('footer') ?>
 </div>
 <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->element('right-sidebar') ?>

<?= $this->element('vendor-scripts') ?>

<!--script src="/js/app.js"></script-->
<?= $this->Html->script('/js/app') ?>

</body>
</html>
