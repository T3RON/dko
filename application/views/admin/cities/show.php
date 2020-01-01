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
                    <?php foreach($cities as $cities_value) { ?>
                        <div class="card card-body printableArea">
                            <h3>
                                <b class="pull-left">City</b>
                                <span class="pull-right"><?= $cities_value->cities_title; ?></span>
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                        <p>Information : <span class="text-info"><?= $cities_value->cities_information; ?></span></p>
                                        <p>Map url : <span class="text-info"><?= $cities_value->cities_map_url; ?></span></p>
                                        <p>Tour Title : <span class="text-info"><?= $cities_value->cities_tour_title; ?></span></p>
                                        <p>Tour Content : <span class="text-info"><?= $cities_value->cities_tour_content; ?></span></p>
                                        <p>City Image : <span class="text-info"><?= $cities_value->cities_image; ?></span></p>
                                        <p>Information Image : <span class="text-info"><?= $cities_value->cities_information_image; ?></span></p>

                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <div class="card card-body">
                                        <div id="image-popups" class="row">
                                            <div class="col-lg-6">
                                                <a href="<?=base_url('')?>assets/images/big/img1.jpg" data-effect="mfp-zoom-in">
                                                    <img src="<?=base_url('')?>assets/images/big/img1.jpg" class="img-responsive" />
                                                </a>
                                            </div>
                                            <br>
                                            <div class="col-lg-6">
                                                <a href="<?=base_url('')?>assets/images/big/img3.jpg" data-effect="mfp-move-horizontal"><img src="<?=base_url('')?>assets/images/big/img3.jpg" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
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