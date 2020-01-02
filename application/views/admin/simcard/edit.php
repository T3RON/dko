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
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                        <?php foreach($hostels as $hostels_value) { ?>
                            <div class="card-body">
                                <form action="<?= site_url('admin/Hostels/edit') ?>" method="post" class="form-horizontal">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-2">Title</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="hostels_title" class="form-control" value="<?= $hostels_value->hostels_title; ?>">
                                                        <input type="hidden" name="hostels_id" class="form-control" value="<?= $hostels_value->hostels_id; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-2">City</label>
                                                    <div class="col-md-10">
                                                        <select name="cities_id" class="form-control custom-select">
                                                            <?php foreach($cities as $cities_value) { ?>
                                                                <option value="<?= $cities_value->cities_id; ?>"><?= $cities_value->cities_title; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                            </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-1"> Price</label>
                                                    <div class="col-md-11">
                                                        <input type="text" name="hostels_minmum_price" class="form-control" value="<?= $hostels_value->hostels_minmum_price; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Policies" name="hostels_policies" id="mymce"><?= $hostels_value->hostels_policies; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Fees " name="hostels_fees" id="mymce"><?= $hostels_value->hostels_fees; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Rules" name="hostels_rules" id="mymce"><?= $hostels_value->hostels_rules; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Introduction" name="hostels_introduction" id="mymce"><?= $hostels_value->hostels_introduction; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Information " name="hostels_information" id="mymce"><?= $hostels_value->hostels_information; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="En Address" name="hostels_address_en" id="mymce"><?= $hostels_value->hostels_address_en; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Fa Address " name="hostels_address_fa" id="mymce"><?= $hostels_value->hostels_address_fa; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="hostels_map_url" class="form-control" value="<?= $hostels_value->hostels_map_url; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-themecolor">Submit</button>
                                                        <a href="<?= site_url('admin/Hostels'); ?>" class="btn btn-default">Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php } ?>
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