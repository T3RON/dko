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
                                    Books List
                                </h4>
                                <h6 class="card-subtitle"></h6>


                                <table class="table table-striped table-bordered" id="editable-datatable">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Hostel</th>
                                        <th>Reviews date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($reviews as $reviews_value) { ?>
                                    <tr id="1" class="gradeX">
                                        <td><?= $reviews_value->person_fn; ?> <?= $reviews_value->person_ln; ?></td>
                                        <td><?= $reviews_value->hostels_title; ?></td>
                                        <td><?= $reviews_value->reviews_date; ?></td>
                                        <td class="text-nowrap">
                                            <a href="<?= site_url('admin/Reviews/Show') ?>/<?= $reviews_value->reviews_id; ?>" data-toggle="tooltip" data-original-title="Read"> <i class="fa fa-search text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Reviews/delete') ?>/<?= $reviews_value->reviews_id; ?>" data-toggle="tooltip" data-original-title="remove"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                    <th>Name</th>
                                        <th>Hostel</th>
                                        <th>Reviews date</th>
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
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <?php include_once (APPPATH.'views/_layout/admin/foot.php'); ?>
            <?php include_once (APPPATH.'views/_layout/admin/swal.php'); ?>
