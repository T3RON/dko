
<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>

	<!--================ Start Banner Area =================-->

<!--================ Start Banner Area =================-->
<section class="account-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-simcard">
                    <h1>SIM Card</h1>
                </div>
            </div>
            <section class="sim-card-registration">
                <div class="container-fluid">
                    <div class="row">
                        <form id="sim-card-registration-form" class="w-100" action="<?= site_url('site/Simcard/insert') ?>" method="post">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 pb-5">
                                        <h2>SIM card registration</h2>
                                        <hr>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <label for="firstname" class="label-input100">First Name</label>
                                            <input id="firstname"  class="input100" type="text" name="simcard_nf" required="required" placeholder="First Name...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <label for="lastname" class="label-input100">Last Name</label>
                                            <input id="lastname"  class="input100" type="text" name="simcard_ln" required="required" placeholder="Last Name...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="wrap-input100 validate-input" data-validate = "Valid phone number is required">
                                            <label for="phonenumber" class="label-input100">Phone Number</label>
                                            <input id="phonenumber"  class="input100" type="tel" name="simcard_number" required="required" placeholder="Phone number...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                            <label for="email" class="label-input100">Email</label>
                                            <input id="email"  class="input100" type="email" name="simcard_email" required="required" placeholder="Email address...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="validate-input mb-4" data-validate = "required">
                                            <label class="label-input100 mb-4">Choose your SIM card company</label>
                                            <div class="col-12">
                                                <label class="label-input100" for="irancellcompany">Irancell(MTN)</label>
                                                <input id="irancellcompany" type="radio" name="simcard_company" value="Irancell" required="required">
                                                <label class="label-input100" for="mcicompany">IR-MCI</label>
                                                <input id="mcicompany" type="radio" name="simcard_company" value="IR-MCI" required="required">
                                                <label class="label-input100" for="rightelcompany">RighTel</label>
                                                <input id="rightelcompany" type="radio" name="simcard_company" value="RighTel" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 pb-4">
                                        <button type="submit" id="submit-update-information" rel="no-follow" class="primary_btn gradient-bg btn-submit">Registration</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <div class="col-12 col-lg-8 mt-4 mt-lg-0">
                <div class="account-header-menu">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#irancell"><span>Irancell(MTN)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#ir-mci"><span>IR-MCI</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#rightel"><span>RighTel</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-25">
        <div class="row">
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="irancell" class="container tab-pane active"><br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#int-set-android-irancell">Internet settings for Android</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#int-set-ios-irancell">Internet settings for IOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#int-set-windows-irancell">Internet settings for Windows Phone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#info-internet-irancell">Information about internet balances and charging</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt-4">
                        <div class="tab-pane container active" id="int-set-android-irancell">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/Irancell/irancelll-android.jpg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="int-set-ios-irancell">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/Irancell/irancell-ios.jpg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="int-set-windows-irancell">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/Irancell/irancell-windows.jpg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="info-internet-irancell">
                            <h2>Useful Codes :</h2>
                            <div class="useful-codes">
                                <p><span>*555*4*3*2#</span> To change the language to English</p>
                                <p><span>*141*Serial No#</span> To add credit</p>
                                <p><span>*555*5*3#</span> To buy internet packages</p>
                                <p><span>*141*1#</span> To know how much calling credit you have</p>
                                <p><span>*141*10#</span> To know how much internet credit you have</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ir-mci" class="container tab-pane fade"><br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#int-set-android-mci">Internet settings for Android</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#int-set-ios-mci">Internet settings for IOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#int-set-windows-mci">Internet settings for Windows Phone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#info-internet-mci">Information about internet balances and charging</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt-4">
                        <div class="tab-pane container active" id="int-set-android-mci">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/MCI/mci-android.jpeg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="int-set-ios-mci">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/MCI/mci-ios.jpeg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="int-set-windows-mci">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/MCI/mci-windows.jpg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="info-internet-mci">
                            <h2>Useful Codes :</h2>
                            <div class="useful-codes">
                                <p><span>*140*#Serial No#</span> To add credit</p>
                                <p><span>*100*2*3#</span> To buy internet packages(4G Internet package(200,000 Rials) - first add credit your number at least 200,000)</p>
                                <p><span>*140*11#</span> To know how much calling credit you have</p>
                                <p><span>*100*0#</span> To know how much internet credit you have</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="rightel" class="container tab-pane fade"><br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#int-set-android-rightel">Internet settings for Android</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#int-set-ios-rightel">Internet settings for IOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#int-set-windows-rightel">Internet settings for Windows Phone</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#info-internet-rightel">Information about internet balances and charging</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt-4">
                        <div class="tab-pane container active" id="int-set-android-rightel">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/RighTel/rightel-android.jpg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="int-set-ios-rightel">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/RighTel/rightel-ios.jpg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="int-set-windows-rightel">
                            <div class="img-setting">
                                <img src="<?= site_url('') ?>assets/img/services/simcard-setting/RighTel/rightel-windows.jpg">
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="info-internet-rightel">
                            <h2>Useful Codes :</h2>
                            <div class="useful-codes">
                                <p><span>*141*Serial No#</span> To add credit</p>
                                <p><span>*142#</span> To buy internet packages</p>
                                <p><span>*140#</span> To know how much calling credit you have</p>
                                <p><span>*144#</span> To know how much internet credit you have</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Start Banner Area =================-->
<!--================ Start Banner Area =================-->
<?php include_once (APPPATH.'views/_layout/site/foot.php'); ?>
<?php include_once (APPPATH.'views/_layout/admin/swal.php'); ?>