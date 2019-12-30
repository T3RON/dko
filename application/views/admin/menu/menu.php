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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Menu List
                                    <a style="float: left;" href="<?= site_url('admin/Menu/InsertForm') ?>" class="btn waves-effect waves-light btn-primary">افزودن Menu </a>


                                </h4>
                                <h6 class="card-subtitle"></h6>


                                <table class="table table-striped table-bordered" id="editable-datatable">
                                    <thead>
                                    <tr>
                                        <th>Menu</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($menu as $menu_value) { ?>
                                    <tr id="1" class="gradeX">
                                        <td><?= $menu_value->menu_title; ?></td>
                                        <td class="text-nowrap">
                                            <a href="<?= site_url('admin/Menu/EditForm') ?>/<?= $menu_value->menu_id; ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Menu/delete') ?>/<?= $menu_value->menu_id; ?>" data-toggle="tooltip" data-original-title="Remove"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Menu</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->

                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <?php include_once (APPPATH.'views/_layout/admin/foot.php'); ?>
<?php include_once (APPPATH.'views/_layout/admin/swal.php'); ?>