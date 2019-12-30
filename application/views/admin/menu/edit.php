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
                            <?php foreach ($menu as $menu_value) { ?>
                            <div class="card-body">
                                <form action="<?= site_url('admin/Menu/edit') ?>" method="post" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-2">Menu</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="menu_title" class="form-control" value="<?= $menu_value->menu_title; ?>">
                                                        <input type="hidden" name="menu_id" class="form-control" value="<?= $menu_value->menu_id; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-themecolor">Submit</button>
                                                        <a href="<?= site_url('admin/Menu') ?>" class="btn btn-default">Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>

                                </form>
                            </div>

                            <?php } ?>
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