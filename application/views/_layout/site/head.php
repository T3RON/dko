<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diako Hostels</title>
    <link rel="icon" type="image/png" sizes="56x56" href="<?=base_url('')?>assets/img/logo/logo.png">
    <!-- Bootstrap CSS -->
    <link href="<?=base_url('')?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?=base_url('')?>assets/css/style.css">



</head>

<body>

<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?=base_url('')?>"><img src="<?=base_url('')?>assets/img/logo/logo.png" alt=""></a>
                <a class="navbar-brand logo_inner_page" href=""<?=base_url('')?>"><img src="<?=base_url('')?>assets/img/logo/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item active"><a data-scroll-nav="0" class="nav-link" href="<?=base_url('site/Index')?>">Home</a></li>
                        <li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								   aria-expanded="false">Iran Guide</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="art-culture.html">Art and Culture</a></li>
									<li class="nav-item"><a class="nav-link" href="clothing-guide.html">Clothing Guide</a></li>
									<li class="nav-item"><a class="nav-link" href="persian-calendar.html">Persian Calendar</a></li>
									<li class="nav-item"><a class="nav-link" href="public-holidays.html">Public Holidays</a></li>
									<li class="nav-item"><a class="nav-link" href="iran-visa.html">Iran Visa</a></li>
									<li class="nav-item"><a class="nav-link" href="transport.html">Transport</a></li>
									<li class="nav-item"><a class="nav-link" href="exchange-currency.html">Exchange & Currency</a></li>
									<li class="nav-item"><a class="nav-link" style="font-size: 0.85rem" href="reasons-visit.html">10 Reasons why you should visit</a></li>
									<li class="nav-item"><a class="nav-link" href="four-seasons.html">Iran; The land of 4 seasons</a></li>
								</ul>
							</li>
                        <li class="nav-item"><a data-scroll-nav="1" class="nav-link" href="<?=base_url('site/Index')?>">Cities</a></li>
                        <li class="nav-item submenu dropdown">
                            <a data-scroll-nav="3" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="<?=base_url('site/Index')?>">Sim Card ( Irancell / MCI )</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=base_url('site/Index')?>">Ticket(Plain / Train / Bus)</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=base_url('site/Index')?>">Useful Application</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=base_url('site/Index')?>">Maps</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?=base_url('site/Index')?>">Saffron</a></li>
                            </ul>
                        <li class="nav-item submenu dropdown">
                            <a href="#" data-scroll-nav="4" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Tour</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <?php if ($this->session->userdata('logged_in')) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= site_url('site/Account/signout') ?>">Sign out</a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <a class="sign_in" href="<?= site_url('site/Account/index') ?>">Dashbord</a>
                            </a>

                        </li>


                        <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <a class="sign_in" data-toggle="modal" data-target="#myModal" href="">Sign in</a>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->

<!-- The Modal -->
<div class="modal fade modalsignin" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Sign in or <a href="<?= base_url('site/Account/signup_form') ?>">Sign up</a></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body d-flex flex-grow-1 flex-column pt-3">
                <form method="post" action="<?= base_url('site/Account/login') ?>" class="form d-flex flex-grow-1 flex-column" autocapitalize="off">
                    <div class="row p-2 d-flex justify-content-center">
                        <label class="col-8 p-0 text-dark" for="username" >Email Address :</label>
                        <input class="col-8" id="username" type="text" name="person_email" placeholder="Email Address" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="row p-2 d-flex justify-content-center">
                        <label class="col-8 p-0 text-dark" for="password" >Password :</label>
                        <input class="col-8" id="password" type="password" name="person_password" placeholder="Password" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="d-flex flex-grow-1 pt-4">
                        <div class="d-flex flex-grow-1">
                            <a href="" class="d-flex btn-link text-medium-gray login-forgotten mt-3 " data-dismiss="modal" data-toggle="modal" data-target="#myModal-foreget">Forgot password?</a>
                        </div>
                        <button type="submit" class="d-flex btn primary_btn gradient-bg">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- The Modal for forget -->
<div class="modal fade modalsignin" id="myModal-foreget">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Forgot password?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body d-flex flex-grow-1 flex-column pt-3">
                <form autocomplete="off" class="form d-flex flex-grow-1 flex-column">
                    <div class="row p-2 d-flex justify-content-center">
                        <label class="col-10 p-0 text-dark text-center" for="fpEmail">Enter the email address you have registered with us.</label>
                        <input class="col-8" id="fpEmail" placeholder="Email Address" name="fpEmail" type="email" autocomplete="off" aria-required="true" aria-invalid="false">
                    </div>
                    <div class="d-flex justify-content-between pt-4">
                        <a href="" class="btn-link mr-1 mt-1 cancel-btn" data-dismiss="modal" data-toggle="modal" data-target="#myModal">Back to login</a>
                        <button type="submit" class="btn primary_btn gradient-bg send-btn">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>