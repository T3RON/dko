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
                    <?php foreach ($submenu as $submenu_value) { ?>
                    <div class="card-body">
                        <form action="<?= site_url('admin/Submenu/edit') ?>" method="post" class="form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Sub Menu</label>
                                            <div class="col-md-10">
                                                <input type="text" name="submenu_title" class="form-control" value="<?= $submenu_value->submenu_title; ?>">
                                                <input type="hidden" name="submenu_id" class="form-control" value="<?= $submenu_value->submenu_id; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Menu</label>
                                            <div class="col-md-10">
                                                <select name="menu_id" class="form-control custom-select">
                                                    <?php foreach($menu as $menu_value) { ?>
                                                        <option value="<?= $menu_value->menu_id; ?>"><?= $menu_value->menu_title; ?></option>
                                                    <?php } ?>
                                                </select>
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
                                                <a href="<?= site_url('admin/Submenu') ?>" class="btn btn-default">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
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