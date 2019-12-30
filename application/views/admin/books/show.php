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
                        <?php foreach ($books as $books_value) { ?>
                        <div class="card card-body printableArea">
                            <h3>
                                <b class="pull-left">Books</b>
                                <span class="pull-right"><?= $books_value->cities_title; ?>&ensp;<?= $books_value->hostels_title; ?></span>
                            </h3>
                            <hr>
                            <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                            <p class="text-danger h5"><?= $books_value->book_first_name; ?>&ensp; <?= $books_value->book_last_name; ?>  </p>
                            <p class="text-gray-dark h6"> <?= $books_value->books_date; ?> </p>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="direction: ltr;text-align: left;" class="col-md-12 pull-left">
                                        <p> Number of Guests : <span class="text-info"><?= $books_value->book_number_of_guests; ?></span></p>
                                        <p>Type Of Room : <span class="text-info"><?= $books_value->book_type_of_room; ?></span></p>
                                        <p>Check-in Date : <span class="text-info"><?= $books_value->book_check_in_date; ?></span></p>
                                        <p>Check-out Date : <span class="text-info"><?= $books_value->book_check_out_date; ?></span></p>
                                        <p>Length of Stay (Nights) : <span class="text-info"><?= $books_value->book_length_of_day; ?></span></p>
                                        <p>Gender : <span class="text-info"><?= $books_value->book_gender; ?></span></p>
                                        <p>Email : <span class="text-info"><?= $books_value->book_email; ?></span></p>
                                        <p>Nationality of Residence : <span class="text-info"><?= $books_value->book_nationality_of_residence; ?></span></p>
                                        <p>Cellphone Number : <span class="text-info"><?= $books_value->book_cellphone_number; ?></span></p>
                                        <p>Approximate arrival time at Hostel/Hotel : <span class="text-info"><?= $books_value->book_approximate; ?></span></p>
                                        <p>Comment : <span class="text-info"><?= $books_value->book_comment; ?></span></p>

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
                            <a href="<?= site_url('admin/Hostels') ?>" class="btn btn-danger">Back</a>
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