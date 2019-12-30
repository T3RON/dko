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
                                    Sliders List
                                    <a style="float: left;" href="<?= site_url('admin/Sliders/InsertForm') ?>" class="btn waves-effect waves-light btn-primary">Add Sliders </a>


                                </h4>
                                <h6 class="card-subtitle"></h6>


                                <table class="table table-striped table-bordered" id="editable-datatable">
                                    <thead>
                                    <tr>
                                        <th>City</th>
                                        <th>Title</th>
                                        <th>Info</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($sliders as $sliders_value) { ?>
                                    <tr id="1" class="gradeX">
                                        <td><?= $sliders_value->cities_id; ?></td>
                                        <td><?= $sliders_value->sliders_title; ?></td>
                                        <td><?= $sliders_value->sliders_text; ?></td>
                                        <td class="text-nowrap">
                                            <a href="<?= site_url('admin/Sliders/EditForm') ?>/<?= $sliders_value->sliders_id; ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Sliders/Show') ?>/<?= $sliders_value->sliders_id; ?>" data-toggle="tooltip" data-original-title="Read"> <i class="fa fa-search text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Sliders/delete') ?>/<?= $sliders_value->sliders_id; ?>" data-toggle="tooltip" data-original-title="Remove"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>City</th>
                                        <th>Title</th>
                                        <th>Info</th>
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