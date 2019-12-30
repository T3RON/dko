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
                        <?php echo form_open("auth/deactivate/".$user->id);?>
                        <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1><?php echo lang('deactivate_heading');?></h1>
                                        <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

                                        <?php echo form_open("auth/deactivate/".$user->id);?>

                                        <p>
                                            <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                                            <input type="radio" name="confirm" value="yes" checked="checked" />
                                            <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                                            <input type="radio" name="confirm" value="no" />
                                        </p>

                                        <?php echo form_hidden($csrf); ?>
                                        <?php echo form_hidden(['id' => $user->id]); ?>

                                        <p><?php echo form_submit('submit', lang('deactivate_submit_btn'),'class="btn btn-themecolor"');?></p>

                                        <?php echo form_close();?>
                                    </div>
                                </div>

                            </div>
                        <?php echo form_close();?>
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