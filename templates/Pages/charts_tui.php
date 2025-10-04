<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Toast UI Charts')) ?>

        <!-- tui charts Css -->
        <link href="/libs/tui-chart/tui-chart.min.css" rel="stylesheet" type="text/css" />

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

                        <?= $this->element('page-title', array('pagetitle' => 'Charts', 'title' => 'Toast UI Charts')) ?>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Bar charts</h4>
        
                                        <div id="bar-charts" data-colors='["--bs-primary","--bs-success"]' dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Column charts</h4>
        
                                        <div id="column-charts"  data-colors='["--bs-success","--bs-primary", "--bs-danger"]' dir="ltr"></div>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Line charts</h4>
        
                                        <div id="line-charts"  data-colors='["--bs-danger","--bs-success", "--bs-primary"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Area charts</h4>
        
                                        <div id="area-charts"  data-colors='["--bs-danger","--bs-success", "--bs-primary"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Bubble charts</h4>
        
                                        <div id="bubble-charts"  data-colors='["--bs-primary","--bs-success", "--bs-warning", "--bs-danger", "--bs-info"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Scatter charts</h4>
        
                                        <div id="scatter-charts" data-colors='["--bs-success","--bs-primary"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Pie charts</h4>
        
                                        <div id="pie-charts"  data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Donut pie charts</h4>
        
                                        <div id="donut-charts" data-colors='["--bs-info","--bs-warning", "--bs-danger", "--bs-success", "--bs-primary"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Heatmap charts</h4>
        
                                        <div id="heatmap-charts" data-colors='["--bs-primary","--bs-success", "--bs-danger"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Treemap charts</h4>
        
                                        <div id="treemap-charts" data-colors='["--bs-primary","--bs-success", "--bs-warning", "--bs-danger"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Map charts</h4>
        
                                        <div id="map-charts" data-colors='["--bs-primary","--bs-success", "--bs-danger"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Boxplot charts</h4>
        
                                        <div id="boxplot-charts" data-colors='["--bs-primary","--bs-success"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Bullet charts</h4>
        
                                        <div id="bullet-charts"  data-colors='["--bs-primary","--bs-success", "--bs-warning", "--bs-danger"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Radial charts</h4>
        
                                        <div id="radial-charts" data-colors='["--bs-primary","--bs-success", "--bs-warning", "--bs-danger"]' dir="ltr"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

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

        <!-- tui charts plugins -->
        <script src="/libs/tui-chart/tui-chart-all.min.js"></script>

        <!-- tui charts map -->
        <script src="/libs/tui-chart/maps/usa.js"></script>

        <!-- tui charts plugins -->
        <script src="/js/pages/tui-charts.init.js"></script>

        <!-- App js -->
        <script src="/js/app.js"></script>

    </body>
</html>
