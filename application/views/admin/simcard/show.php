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
                    <div class="col-md-12">
                    <?php foreach($tbl_name as $tbl_name_value) { ?>
                        <div class="card card-body printableArea">
                            <h3>
                                <b class="pull-left">Simcard</b>
                                <span class="pull-right"><?= $tbl_name_value->simcard_nf; ?> <?= $tbl_name_value->simcard_ln; ?></span>
                            </h3>
                            <hr>
                            <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                            <p class="text-danger h5"> <?= $tbl_name_value->simcard_company; ?> </p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                        <p>Number : <span class="text-info"><?= $tbl_name_value->simcard_number; ?></span></p>
                                        <p>Email : <span class="text-info"><?= $tbl_name_value->simcard_email; ?></span></p>
                                        <?php if ($tbl_name_value->simcard_state == 0) { ?>
                                            
                                            State : <span style="color:red;">Suspended</span>
                                        <?php } else { ?>
                                            State : <span style="color:green;">Registered</span>
                                        <?php } ?>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-12">
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <a href="<?= site_url('admin/Simcard') ?>" class="btn btn-danger">Back</a>
                            <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print </span> </button>
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