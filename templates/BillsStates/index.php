<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BillsState> $billsStates
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
    <h3>Bills State <span class="badge text-bg-success">
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
                 <th><?= $this->Paginator->sort('state') ?></th>
                 <th><?= $this->Paginator->sort('created') ?></th>
                 <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
       </tr>
      </thead>
      <tbody>
       <?php foreach ($billsStates as $billsState): ?>
        <tr>
                                                                         <td><?= $this->Number->format($billsState->id) ?></td>
                                                                                              <td><?= h($billsState->state) ?></td>
                                                                                              <td><?= h($billsState->created) ?></td>
                                                                                              <td><?= h($billsState->modified) ?></td>
                                                <td class="actions">
          <?= $this->Html->link(__('View'), ['action' => 'view', $billsState->id]) ?>
          <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billsState->id]) ?>
          <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billsState->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billsState->id)]) ?>
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
     <p> <?= $this->Paginator->counter(__('Page  of , showing  record(s) out of  total'), ['model' => 'Bills States']) ?> </p>

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
