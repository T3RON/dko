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
                            <?php foreach($attraction as $attraction_value) { ?>
                            <div class="card card-body">
                                <h3>
                                    <b class="pull-left">City</b>
                                    <span class="pull-right"><?= $attraction_value->cities_title ?></span>
                                </h3>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                                <h4 class="card-title">Attraction</h4>
                                                <div id="accordion2" role="tablist" class="minimal-faq" aria-multiselectable="true">
                                                    <div class="card m-b-0">
                                                        <div class="card-header" role="tab" id="headingOne11">
                                                            <h5 class="pull-left mb-0">
                                                                    <?= $attraction_value->attraction_title ?>
                                                            </h5>
                                                        </div>
                                                        <div style="margin-top: 10px;" id="collapseOne11" class="collapse show" role="tabpanel" aria-labelledby="headingOne11">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                                                            <a href="<?=base_url('')?>assets/uploads/files/<?= $attraction_value->attraction_image ?>" data-effect="mfp-move-horizontal">
                                                                                <img src="<?=base_url('')?>assets/uploads/files/<?= $attraction_value->attraction_image ?>" class="img-responsive" />
                                                                            </a>
                                                                            <p>

                                                                                <?= $attraction_value->attraction_general_information ?>
                                                                            </p>

                                                                        </div>
                                                                        <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                                                            <?= $attraction_value->attraction_how_to_get_there ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                                                            <?= $attraction_value->attraction_text ?>
                                                                        </div>

                                                                    </div>

                                                                </div>
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
                            <button class="btn btn-danger" type="submit">بازگشت</button>
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