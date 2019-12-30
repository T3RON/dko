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
                        <div class="card card-body printableArea">
                            <h3>
                                <b class="pull-left">Books</b>
                                <span class="pull-right">تهران</span>
                            </h3>
                            <hr>
                            <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                            <p class="text-danger h5"> 3333 </p>
                            <p class="text-gray-dark h6"> 2019/02/25 </p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                        <p>First Name : <span class="text-info">dsdsds</span></p>
                                        <p>Last Name : <span class="text-info">dsdsds</span></p>
                                        <p> Number of Guests : <span class="text-info">dsdsds</span></p>
                                        <p>Type Of Room : <span class="text-info">dsdsds</span></p>
                                        <p>Check-in Date : <span class="text-info">dsdsds</span></p>
                                        <p>Check-out Date : <span class="text-info">dsdsds</span></p>
                                        <p>Length of Stay (Nights) : <span class="text-info">dsdsds</span></p>
                                        <p>Gender : <span class="text-info">dsdsds</span></p>
                                        <p>Email : <span class="text-info">dsdsds</span></p>
                                        <p>Nationality of Residence : <span class="text-info">dsdsds</span></p>
                                        <p>Cellphone Number : <span class="text-info">dsdsds</span></p>
                                        <p>Approximate arrival time at Hostel/Hotel : <span class="text-info">dsdsds</span></p>
                                        <p>Comment : <span class="text-info">dsdsds</span></p>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-danger" type="submit">بازگشت</button>
                            <button id="print" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> پرينت</span> </button>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->

            </div>



            <?php include_once (APPPATH.'views/_layout/admin/foot.php'); ?>
<?php if ($this->session->flashdata('Hostels')): ?>
    <script>
        swal({
            title: "عمليات موفق",
            text: "<?php echo $this->session->flashdata('Hostels'); ?>",
            timer: 3500,
            showConfirmButton: false,
            type: 'success'
        });
    </script>
<?php endif; ?>