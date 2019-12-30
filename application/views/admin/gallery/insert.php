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
                        <form action="<?= site_url('admin/Gallery/insert') ?>" method="post" class="form-horizontal" enctype='multipart/form-data'>
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">انتخاب Hostels</label>
                                            <div class="col-md-10">
                                                <select name="hostels_id" class="form-control custom-select">
                                                    <?php foreach($hostels as $hostels_value) { ?>
                                                        <option value="<?= $hostels_value->hostels_id; ?>"><?= $hostels_value->hostels_title; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                                <h4 class="card-title">انتخاب تصوير</h4>
                                                <input name="gallery_image" type="file" id="input-file-now" class="dropify" />
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <hr>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-12">
                                                <button type="submit" class="btn btn-themecolor">ثبت</button>
                                                <button type="button" class="btn btn-default">بازگشت</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
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
<?php if ($this->session->flashdata('Gallery')): ?>
    <script>
        swal({
            title: "عمليات موفق",
            text: "<?php echo $this->session->flashdata('Gallery'); ?>",
            timer: 3500,
            showConfirmButton: false,
            type: 'success'
        });
    </script>
<?php endif; ?>