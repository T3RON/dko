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
                        <?php foreach ($reviews as $reviews_value) { ?>
                        <div class="card card-body printableArea">
                            <h3>
                                <b class="pull-left">Reviews Details</b>
                                <span class="pull-right"><?= $reviews_value->hostels_title; ?></span>
                            </h3>
                            <hr>
                            <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                            <p class="text-danger h5"><?= $reviews_value->person_fn; ?>&ensp; <?= $reviews_value->person_ln; ?></p>
                            <p class="text-gray-dark h6"> <?= $reviews_value->reviews_date; ?> </p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                        <p>Reviews content : <span class="text-info"><?= $reviews_value->reviews_content; ?></span></p>
                                        <p> Reviews money : <span class="text-info"><?= $reviews_value->reviews_money; ?>€</span></p>
                                        <p>Reviews security : <span class="text-info"><?= $reviews_value->reviews_security; ?></span></p>
                                        <p>Reviews location : <span class="text-info"><?= $reviews_value->reviews_location; ?></span></p>
                                        <p>Reviews staff : <span class="text-info"><?= $reviews_value->reviews_staff; ?></span></p>
                                        <p>Reviews atmosphere : <span class="text-info"><?= $reviews_value->reviews_atmosphere; ?></span></p>
                                        <p>Reviews cleanliness : <span class="text-info"><?= $reviews_value->reviews_cleanliness; ?></span></p>
                                        <p>Reviews facilities : <span class="text-info"><?= $reviews_value->reviews_facilities; ?></span></p>
                                        <p>Details gender : <span class="text-info"><?= $reviews_value->details_gender; ?></span></p>
                                        <p>Details age : <span class="text-info"><?= $reviews_value->details_age; ?></span></p>
                                        <p>Details trip : <span class="text-info"><?= $reviews_value->details_trip; ?></span></p>
                                        <p>Would you type : <span class="text-info"><?= $reviews_value->would_you_type; ?></span></p>
                                        <p>Would you why : <span class="text-info"><?= $reviews_value->would_you_why; ?></span></p>
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
                            <a href="<?= site_url('admin/Reviews') ?>" class="btn btn-danger">Back</a>
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