<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('')?>assets/images/favicon.png">
    <title>پنل سامانه گردشگری</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('')?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?=base_url('')?>assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url('')?>assets/css/admin-style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?=base_url('')?>assets/css/colors/blue.css" id="theme" rel="stylesheet">

    <!-- imports css -->
    <link rel="stylesheet" href="<?=base_url('')?>assets/scss/icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/scss/icons/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/scss/icons/weather-icons/css/weather-icons.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/scss/icons/linea-icons/linea.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/scss/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/scss/icons/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/scss/icons/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/spinners.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/css/animate.css">
    <link rel="stylesheet" href="<?=base_url('')?>assets/font/iransans.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
    <div class="login-register" style="background-image:url(<?=base_url('')?>assets/img/gallery/login.jpg);">
        <div style="margin-top: 23px;" class="login-box card">
            <div class="card-body">
                <img style="margin: 22px 121px auto;max-width: 125px;max-height: 100px;" src="<?=base_url('')?>assets/img/logo/logo.png" alt="">
                <?php echo form_open("auth/login");?>
                    <h4 style="text-align: center;margin-bottom: 20px;"><?php echo $message;?></h4>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <?php echo form_input($identity,'Email',"class='form-control'");?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <?php echo form_input($password,'Password',"class='form-control'");?>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 font-14">
                            <div style="direction: ltr" class="checkbox checkbox-primary pull-left p-t-0">

                                <?php echo form_checkbox('remember', '1', TRUE, 'id="remember"');?>
                                &emsp; remember me ?
                            </div>
                        </div>
                    </div>


                <div class="form-group row">
                        <div class="col-xs-6">
                            <?php echo form_submit('submit', lang('login_submit_btn'),'style= "margin-right: 12px;" class="col-xs-12 btn btn-info"');?>

                        </div>
                        <div class="col-xs-6">
                            <a href="<?= site_url('Auth/create_user'); ?>" class="btn btn-default">Register</a>

                        </div>
                    </div>
                <?php echo form_close();?>

            </div>
        </div>
    </div>
</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?=base_url('')?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?=base_url('')?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?=base_url('')?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?=base_url('')?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url('')?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?=base_url('')?>assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?=base_url('')?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<!--Custom JavaScript -->
<script src="<?=base_url('')?>assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--sparkline JavaScript -->
<script src="<?=base_url('')?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--morris JavaScript -->
<script src="<?=base_url('')?>assets/plugins/raphael/raphael-min.js"></script>
<script src="<?=base_url('')?>assets/plugins/morrisjs/morris.min.js"></script>
<!-- Chart JS -->
<script src="<?=base_url('')?>assets/js/dashboard1.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?=base_url('')?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>








