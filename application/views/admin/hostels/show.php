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
                    <?php foreach($hostels as $hostels_value) { ?>
                        <div class="card card-body printableArea">
                            <h3>
                                <b class="pull-left">Hostels</b>
                                <span class="pull-right"><?= $hostels_value->cities_title; ?></span>
                            </h3>
                            <hr>
                            <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                            <p class="text-danger h5"> <?= $hostels_value->hostels_title; ?> </p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                        <p>Minmum Price : <span class="text-info"><?= $hostels_value->hostels_minmum_price; ?></span></p>
                                        <p>Policies : <span class="text-info"><?= $hostels_value->hostels_policies; ?></span></p>
                                        <p>Fees : <span class="text-info"><?= $hostels_value->hostels_fees; ?></span></p>
                                        <p>Rules : <span class="text-info"><?= $hostels_value->hostels_rules; ?></span></p>
                                        <p>Introduction : <span class="text-info"><?= $hostels_value->hostels_introduction; ?></span></p>
                                        <p>Information : <span class="text-info"><?= $hostels_value->hostels_information; ?></span></p>
                                        <p>Address En : <span class="text-info"><?= $hostels_value->hostels_address_en; ?></span></p>
                                        <p>Address Fa : <span class="text-info"><?= $hostels_value->hostels_address_fa; ?></span></p>
                                        <p>Map Url : <span class="text-info"><a href="<?= $hostels_value->hostels_map_url; ?>">Show Map</a></span></p>

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
                            <a href="<?= site_url('admin/Hostels') ?>" class="btn btn-danger">Back</a>
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