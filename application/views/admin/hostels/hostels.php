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
                                    Hostels
                                    <a style="float: left;" href="<?= site_url('admin/Hostels/InsertForm') ?>" class="btn waves-effect waves-light btn-primary">افزودن Hostels</a>


                                </h4>
                                <h6 class="card-subtitle"></h6>


                                <table class="table table-striped table-bordered" id="editable-datatable">
                                    <thead>
                                    <tr>
                                        <th> Hostels</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($hostels as $hostels_value) { ?>
                                    <tr id="1" class="gradeX">
                                        <td><?= $hostels_value->hostels_title; ?></td>
                                        <td><?= $hostels_value->cities_title; ?></td>
                                        <td class="text-nowrap">
                                            <a href="<?= site_url('admin/Hostels/EditForm') ?>/<?= $hostels_value->hostels_id; ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Hostels/Show') ?>/<?= $hostels_value->hostels_id; ?>" data-toggle="tooltip" data-original-title="Read"> <i class="fa fa-search text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Hostels/delete') ?>/<?= $hostels_value->hostels_id; ?>" data-toggle="tooltip" data-original-title="Remove"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th> Hostels</th>
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
