<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'E Charts')) ?>

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

                        <?= $this->element('page-title', array('pagetitle' => 'Charts', 'title' => 'E Charts')) ?>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Line Chart</h4>
                                        <div id="line-chart" data-colors='["--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Mix Line-Bar</h4>
                                        <div id="mix-line-bar"  data-colors='["--bs-success","--bs-primary", "--bs-danger"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Doughnut Chart</h4>
                                        <div id="doughnut-chart" data-colors='["--bs-primary","--bs-warning", "--bs-danger","--bs-info", "--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Pie Chart</h4>
                                        <div id="pie-chart" data-colors='["--bs-primary","--bs-warning", "--bs-danger","--bs-info", "--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Scatter Chart</h4>
                                        <div id="scatter-chart" data-colors='["--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Bubble Chart</h4>
                                        <div id="bubble-chart" data-colors='["--bs-primary-rgb", "--bs-success-rgb"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Candlestick Chart</h4>
                                        <div id="candlestick-chart" data-colors='["--bs-primary","--bs-success"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Gauge Chart</h4>
                                        <div id="gauge-chart" data-colors='["--bs-success","--bs-primary","--bs-danger"]' class="e-charts"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
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

        <!-- echarts js -->
        <script src="/libs/echarts/echarts.min.js"></script>
        <!-- echarts init -->
        <script src="/js/pages/echarts.init.js"></script>
        
        <script src="/js/app.js"></script>

    </body>
</html>
