<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Apex Charts')) ?>

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

                        <?= $this->element('page-title', array('pagetitle' => 'Charts', 'title' => 'Apex Charts')) ?>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Line with Data Labels</h4>

                                        <div id="line_chart_datalabel" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>                              
                                    </div>
                                </div><!--end card-->
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Dashed Line</h4>
                                        
                                        <div id="line_chart_dashed" data-colors='["--bs-primary", "--bs-danger", "--bs-success"]' class="apex-charts" dir="ltr"></div>        
                                    </div>
                                </div><!--end card-->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Spline Area</h4>

                                        <div id="spline_area" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>                      
                                    </div>
                                </div><!--end card-->
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Column Chart</h4>
                                        
                                        <div id="column_chart" data-colors='["--bs-success","--bs-primary", "--bs-danger"]' class="apex-charts" dir="ltr"></div>                                      
                                    </div>
                                </div><!--end card-->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Dumbbell Column Chart</h4>
                        
                                        <div id="dumbbell_column_charts" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!--end card-->
                            </div>
                        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Range Area Charts</h4>
                        
                                        <div id="range_area_chart" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!--end card-->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Dumbbell Timeline Chart (Horizontal)</h4>
                        
                                        <div id="dumbbell_timeline_charts" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!--end card-->
                            </div>
                        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Funnel Charts</h4>
                        
                                        <div id="funnel_charts" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!--end card-->
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Column with Data Labels</h4>
                                        
                                        <div id="column_chart_datalabel" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!--end card-->
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Bar Chart</h4>
                                        
                                        <div id="bar_chart" data-colors='["--bs-success"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!--end card-->
                            </div>
                        </div>  
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Line, Column & Area Chart</h4>
                                        
                                        <div id="mixed_chart" data-colors='["--bs-danger","--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div> 
                                    </div>
                                </div><!--end card-->
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Radial Chart</h4>
                                        
                                        <div id="radial_chart" data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-warning"]' class="apex-charts" dir="ltr"></div>  
                                    </div>
                                </div><!--end card-->
                                
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Pie Chart</h4>
                                        
                                        <div id="pie_chart" data-colors='["--bs-success","--bs-primary", "--bs-danger","--bs-info", "--bs-warning"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Donut Chart</h4>
                                        
                                        <div id="donut_chart" data-colors='["--bs-success","--bs-primary", "--bs-danger","--bs-info", "--bs-warning"]' class="apex-charts"  dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
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

        <!-- apexcharts -->
        <script src="/libs/apexcharts/apexcharts.min.js"></script>

        <!-- apexcharts init -->
        <script src="/js/pages/apexcharts.init.js"></script>

        <!-- App js -->
        <script src="/js/app.js"></script>

    </body>
</html>
