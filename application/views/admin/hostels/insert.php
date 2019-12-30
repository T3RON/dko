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
                            <div class="card-body">
                                <form action="<?= site_url('admin/Hostels/insert') ?>" method="post" class="form-horizontal" enctype='multipart/form-data'>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-2">Title</label>
                                                    <div class="col-md-10">
                                                        <input type="text" name="hostels_title" class="form-control">
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
                                                        <input type="text" name="hostels_minmum_price" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Policies" name="hostels_policies" id="mymce">policies</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Fees " name="hostels_fees" id="mymce">fees</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Rules" name="hostels_rules" id="mymce">rules</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Introduction" name="hostels_introduction" id="mymce">introduction</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="Information " name="hostels_information" id="mymce">information</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea placeholder="En Address" name="hostels_address_en" id="mymce">Address En</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <textarea id="mymce" placeholder="Fa Address " name="hostels_address_fa">Address Fa</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <input placeholder="Map Url" type="text" name="hostels_map_url" value="Map Url" class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="card-title">Hostel Image</h4>
                                                        <input name="hostels_image" type="file" id="input-file-now" class="dropify" />
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