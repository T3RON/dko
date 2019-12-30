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
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Hostels</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($books as $books_value) { ?>
                                    <tr id="1" class="gradeX">
                                        <td><?= $books_value->book_first_name; ?></td>
                                        <td><?= $books_value->book_last_name; ?></td>
                                        <td><?= $books_value->book_email; ?></td>
                                        <td><?= $books_value->hostels_title; ?></td>
                                        <td><?= $books_value->cities_title; ?></td>
                                        <td class="text-nowrap">
                                            <a href="<?= site_url('admin/Books/Show') ?>/<?= $books_value->books_id; ?>" data-toggle="tooltip" data-original-title="Read"> <i class="fa fa-search text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Books/delete') ?>/<?= $books_value->books_id; ?>" data-toggle="tooltip" data-original-title="remove"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Hostels</th>
                                        <th>City</th>
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
