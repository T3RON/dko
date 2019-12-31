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
                    <?php foreach($attraction as $attraction_value) { ?>
                    <div class="card-body">
                        <form action="<?= site_url('admin/Attraction/edit') ?>" method="post" class="form-horizontal" enctype='multipart/form-data'>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Attraction</label>
                                            <div class="col-md-9">
                                                <input type="text" name="attraction_title" class="form-control" value="<?= $attraction_value->attraction_title; ?>">
                                                <input type="hidden" name="attraction_title" class="form-control" value="<?= $attraction_value->attraction_id; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">City</label>
                                            <div class="col-md-10">
                                                <select name="cities_id" class="form-control custom-select">
                                                    <?php foreach($cities as $cities_value) { ?>
                                                        <option value="<?= $cities_value->cities_id; ?>"><?= $attraction_value->cities_title; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h6 class="card-subtitle">Attraction Info</h6>

                                                <textarea id="mymce" name="attraction_text"><?= $attraction_value->attraction_text; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--/row-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h6 class="card-subtitle">General Information</h6>
                                                <textarea id="mymce" name="attraction_general_information"><?= $attraction_value->attraction_general_information; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <h6 class="card-subtitle">How to Get There</h6>
                                                <textarea id="mymce" name="attraction_how_to_get_there"><?= $attraction_value->attraction_how_to_get_there; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Location Mao Url</label>
                                            <div class="col-md-9">
                                                <input name="attraction_map_url" type="text" class="form-control" value="<?= $attraction_value->attraction_map_url; ?>">
                                            </div>
                                        </div>
                                    </div>
                            
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Attraction Image</h4>
                                                <input name="attraction_image" type="file" id="input-file-now" class="dropify" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <hr>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-themecolor">Submit</button>
                                                <a href="<?= site_url('admin/Attraction') ?> " class="btn btn-default">Back</a>
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