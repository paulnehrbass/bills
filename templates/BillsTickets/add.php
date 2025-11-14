<?= $this->element('main') ?>

<head>

    <?= $this->element('title-meta', array('title' => 'Create New Project')) ?>

    <!-- bootstrap-datepicker css -->
    <link href="/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Plugins css -->
    <link href="/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

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

                <?= $this->element('page-title', array('pagetitle' => 'Project', 'title' => 'Create New')) ?>

                    <?php
                /**
                 * @var \App\View\AppView $this
                 * @var \App\Model\Entity\BillsTicket $billsTicket
                 * @var \Cake\Collection\CollectionInterface|string[] $billsStates
                 * @var \Cake\Collection\CollectionInterface|string[] $billsBranches
                                 */
                ?>
                    
<div>rno</div>






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


<!-- bootstrap datepicker -->

<!-- Plugins js -->

<?= $this->Html->script('/js/pages/project-create.init') ?>

<script src="/js/app.js"></script>
</body>
</html>
