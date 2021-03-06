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
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-body">

                    <h1><?php echo lang('edit_user_heading');?></h1>
                    <p><?php echo lang('edit_user_subheading');?></p>

                    <div id="infoMessage"><?php echo $message;?></div>

                    <?php echo form_open(uri_string());?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <?php echo lang('edit_user_fname_label', 'first_name','class="control-label text-right col-md-3"');?> <br />
                                    <div class="col-md-9">
                                        <?php echo form_input($first_name,"",'class="form-control"');?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <?php echo lang('edit_user_lname_label', 'last_name','class="control-label text-right col-md-3"');?> <br />
                                    <div class="col-md-9">
                                        <?php echo form_input($last_name,"",'class="form-control"');?>                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <?php echo lang('edit_user_company_label', 'company','class="control-label text-right col-md-3"');?> <br />
                                    <div class="col-md-9">
                                        <?php echo form_input($company,"",'class="form-control"');?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <?php echo lang('edit_user_phone_label', 'phone','class="control-label text-right col-md-3"');?> <br />
                                    <div class="col-md-9">
                                        <?php echo form_input($phone,"",'class="form-control"');?>                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <?php echo lang('edit_user_password_label', 'password','class="control-label text-right col-md-3"');?> <br />
                                    <div class="col-md-9">
                                        <?php echo form_input($password,"",'class="form-control"');?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm','class="control-label text-right col-md-3"');?> <br />
                                    <div class="col-md-9">
                                        <?php echo form_input($password_confirm,"",'class="form-control"');?>                                    </div>
                                </div>
                            </div>
                        </div>



                    <?php if ($this->ion_auth->is_admin()): ?>
                        <div class="checkbox checkbox-success">
                        <h3><?php echo lang('edit_user_groups_heading');?></h3>
                        <?php foreach ($groups as $group):?>
                            <label class="control-label text-right col-md-3">
                                <?php
                                $gID=$group['id'];
                                $checked = null;
                                $item = null;
                                foreach($currentGroups as $grp) {
                                    if ($gID == $grp->id) {
                                        $checked= ' checked="checked"';
                                        break;
                                    }
                                }
                                ?>
                                <input type="checkbox" name="groups[]" class="" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                            </label>
                        <?php endforeach?>
                        </div>
                    <?php endif ?>

                    <?php echo form_hidden('id', $user->id);?>
                    <?php echo form_hidden($csrf); ?>

                    <p><?php echo form_submit('submit', lang('edit_user_submit_btn'),'class="btn-success waves-light m-r-10"');?></p>

                    <?php echo form_close();?>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<?php include_once (APPPATH.'views/_layout/admin/foot.php'); ?>

<?php include_once (APPPATH.'views/_layout/admin/swal.php'); ?>
