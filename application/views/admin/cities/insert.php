<?php include_once (APPPATH.'views/_layout/admin/head.php'); ?>

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-body">
                                <form action="<?= site_url('admin/Cities/insert') ?>" method="post" class="form-horizontal" enctype='multipart/form-data'>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-1">City</label>
                                                    <div class="col-md-11">
                                                        <input type="text" name="cities_title" class="form-control" placeholder="مثال : تهران">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <h6 class="card-subtitle">City Info</h6>

                                                        <textarea id="mymce" name="cities_information"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-2">Map Url</label>
                                                    <div class="col-md-10">
                                                        <input name="cities_map_url" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                    
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-2">Tour Title</label>
                                                    <div class="col-md-10">
                                                        <input name="cities_tour_title" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <h6 class="card-subtitle">Tour Information</h6>
                                                        <textarea id="mymce" name="cities_tour_content"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Image</h4>
                                                        <input name="cities_image" type="file" id="input-file-now" class="dropify" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Info Image</h4>
                                                        <input name="cities_information_image" type="file" id="input-file-now" class="dropify" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-themecolor">Submit</button>
                                                        <a href="<?= site_url('admin/Cities') ?>" class="btn btn-default">Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

            </div>



            <?php include_once (APPPATH.'views/_layout/admin/foot.php'); ?>
<?php include_once (APPPATH.'views/_layout/admin/swal.php'); ?>