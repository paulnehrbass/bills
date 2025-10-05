<?= $this->element('main') ?>

<head>
    <?= $this->element('title-meta', ['title' => 'Apex Charts']) ?>
    <?= $this->element('head-css') ?>
</head>

<?= $this->element('body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->element('menu') ?>

    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $this->element('page-title', ['pagetitle' => 'Charts', 'title' => 'Apex Charts']) ?>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Line with Data Labels</h4>
                                <div id="line_chart_datalabel" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Dashed Line</h4>
                                <div id="line_chart_dashed" data-colors='["--bs-primary", "--bs-danger", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Spline Area</h4>
                                <div id="spline_area" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Column Chart</h4>
                                <div id="column_chart" data-colors='["--bs-success","--bs-primary", "--bs-danger"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Dumbbell Column Chart</h4>
                                <div id="dumbbell_column_charts" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Range Area Charts</h4>
                                <div id="range_area_chart" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Dumbbell Timeline Chart (Horizontal)</h4>
                                <div id="dumbbell_timeline_charts" data-colors='["--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Funnel Charts</h4>
                                <div id="funnel_charts" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Column with Data Labels</h4>
                                <div id="column_chart_datalabel" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Bar Chart</h4>
                                <div id="bar_chart" data-colors='["--bs-success"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Line, Column & Area Chart</h4>
                                <div id="mixed_chart" data-colors='["--bs-danger","--bs-primary", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Radial Chart</h4>
                                <div id="radial_chart" data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-warning"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Pie Chart</h4>
                                <div id="pie_chart" data-colors='["--bs-success","--bs-primary", "--bs-danger","--bs-info", "--bs-warning"]' class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Donut Chart</h4>
                                <div id="donut_chart" data-colors='["--bs-success","--bs-primary", "--bs-danger","--bs-info", "--bs-warning"]' class="apex-charts"  dir="ltr"></div>
                            </div>
                        </div>
                    </div>
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

<!-- ✅ CakePHP-konforme Script-Einbindungen -->
<?= $this->Html->script('/libs/apexcharts/apexcharts.min.js', ['block' => true]) ?>
<?= $this->Html->script('pages/apexcharts.init.js', ['block' => true]) ?>
<?= $this->Html->script('app.js', ['block' => true]) ?>


</body>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const chart = new ApexCharts(document.querySelector("#line_chart_datalabel"), {
            chart: { type: 'line', height: 300 },
            series: [{ name: 'Test', data: [10, 20, 30, 40, 50] }],
            xaxis: { categories: ['A', 'B', 'C', 'D', 'E'] }
        });
        chart.render();
    });
</script>
</html>
