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
                                <h4 class="card-title">
                                    تصاوير هاستل ها
                                    <a style="float: left;" href="<?= site_url('admin/Gallery/InsertForm') ?>" class="btn waves-effect waves-light btn-primary">افزودن تصوير</a>


                                </h4>
                                <h6 class="card-subtitle"></h6>


                                <table class="table table-striped table-bordered" id="editable-datatable">
                                    <thead>
                                    <tr>
                                        <th>تصوير</th>
                                        <th>نام Hostels</th>
                                        <th>عمليات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($gallery as $gallery_value) { ?>
                                    <tr id="1" class="gradeX">
                                        <td class="profile-pic"><img src="<?= site_url('') ?>/assets/uploads/files/<?= $gallery_value->gallery_image; ?>" alt="user" style="width: 30px;"></td>
                                        <td><?= $gallery_value->hostels_title; ?></td>
                                        <td class="text-nowrap">
                                            <a href="<?= site_url('admin/Gallery/EditForm') ?>/<?= $gallery_value->gallery_id; ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                            <a href="<?= site_url('admin/Gallery/Show') ?>/<?= $gallery_value->gallery_id; ?>" data-toggle="tooltip" data-original-title="Read"> <i class="fa fa-search text-inverse m-r-10"></i> </a>
                                            <a href="#" data-toggle="tooltip" data-original-title="حذف"> <i class="fa fa-close text-danger"></i> </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>تصوير</th>
                                        <th>نام Hostels</th>
                                        <th>عمليات</th>
                                    </tr>
                                    </tfoot>
                                </table>
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
