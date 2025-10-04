<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Form File Upload')) ?>

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

                        <?= $this->element('page-title', array('pagetitle' => 'Forms', 'title' => 'Form File Upload')) ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Dropzone</h4>
                                        <p class="card-title-desc">DropzoneJS is an open source library
                                            that provides drag’n’drop file uploads with image previews.
                                        </p>
        
                                        <div>
                                            <div class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file" multiple="multiple">
                                                </div>
                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                    </div>
                                            
                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                            </div>
                                            
                                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                <li class="mt-2" id="dropzone-preview-list">
                                                    <!-- This is used as the file preview template -->
                                                    <div class="border rounded">
                                                        <div class="d-flex p-2">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar-sm bg-light rounded">
                                                                    <img data-dz-thumbnail class="img-fluid rounded d-block" src="https://img.themesbrand.com/judia/new-document.png" alt="Dropzone-Image">
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="pt-1">
                                                                    <h5 class="fs-md mb-1" data-dz-name>&nbsp;</h5>
                                                                    <p class="fs-sm text-muted mb-0" data-dz-size></p>
                                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                                </div>
                                                            </div>
                                                            <div class="flex-shrink-0 ms-3">
                                                                <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
        
                                        <div class="text-center mt-4">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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

        <!-- Plugins js -->
        <script src="/libs/dropzone/dropzone-min.js"></script>
        
        <!-- Form file upload init js -->
        <script src="/js/pages/form-file-upload.init.js"></script>

        <script src="/js/app.js"></script>

    </body>
</html>
