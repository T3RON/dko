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
            

                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Number</th>
                                        <th>Type</th>
                                        <th>State</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($tbl_name as $tbl_name_value) { ?>
                                    <tr class="gradeX">
                                        <td><?= $tbl_name_value->simcard_nf; ?> <?= $tbl_name_value->simcard_ln; ?></td>
                                        <td><?= $tbl_name_value->simcard_number; ?></td>
                                        <td><?= $tbl_name_value->simcard_company; ?></td>
                                        <td>
                                        <?php if ($tbl_name_value->simcard_state == 0) { ?>
                                            
                                            <span class="msg" style="color:red;">Suspended</span>
                                        <?php } else { ?>
                                            <span class="msg" style="color:green;">Registered</span>
                                        <?php } ?>
                                        </td>
                                        <td class="text-nowrap">
                                            <a href="<?= site_url('admin/Simcard/Show') ?>/<?= $tbl_name_value->simcard_id; ?>" data-toggle="tooltip" data-original-title="Read"> <i class="fa fa-search text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Simcard/delete') ?>/<?= $tbl_name_value->simcard_id; ?>" data-toggle="tooltip" data-original-title="Remove"> <i class="fa fa-close text-danger"></i> </a>
                                            <?php if($tbl_name_value->simcard_state == 0) { ?>
                                            <a class="lock" href="<?= site_url('admin/Simcard/lock'); ?>/<?= $tbl_name_value->simcard_id; ?>/<?= $tbl_name_value->simcard_state; ?>" data-toggle="tooltip" data-original-title="Unlock">
                                              <i class="fa fa-unlock text-danger m-r-10"></i> 
                                             </a>
                                            <?php } else { ?>
                                                <a class="lock" href="<?= site_url('admin/Simcard/lock'); ?>/<?= $tbl_name_value->simcard_id; ?>/<?= $tbl_name_value->simcard_state; ?>" data-toggle="tooltip" data-original-title="Lock">
                                              <i class="fa fa-lock text-inverse m-r-10"></i> 
                                             </a>                                            
                                             <?php } ?>
                                             
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                    <th>User</th>
                                        <th>Simcard</th>
                                        <th>Type</th>
                                        <th>State</th>
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
