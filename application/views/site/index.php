
<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>

	<!--================ Start Banner Area =================-->
	<!--
	<section class="slider">
		<div class="background-slider">
			<div class="slider-content">
				<div class="sl-content-title">
					<h1>Welcome to Diako</h1>
					<h3>We try to bring the true essence of the Persian life to our guests.</h3>
				</div>
				<div class="slider-button">
					<a class="primary_btn gradient-bg" href="#">Book Your Stay</a>
				</div>
			</div>
		</div>
	</section>
	-->

	<section data-scroll-index="0" id="slider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#slider" data-slide-to="0" class="active"></li>
			<li data-target="#slider" data-slide-to="1"></li>
			<li data-target="#slider" data-slide-to="2"></li>
			<li data-target="#slider" data-slide-to="3"></li>
			<li data-target="#slider" data-slide-to="4"></li>
			<li data-target="#slider" data-slide-to="5"></li>
			<li data-target="#slider" data-slide-to="6"></li>
			<li data-target="#slider" data-slide-to="7"></li>
		</ul>
		<div class="col-xs-12 col-md-8 col-xl-6 slider-content1">
			<section class="slider">
				<div class="slider-content">
					<div class="sl-content-title">
						<h1>Welcome to Diako</h1>
						<h2>Travel like a local</h2>
					</div>
				</div>
			</section>
		</div>
		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?=base_url('')?>assets/img/banner/slider/1.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url('')?>assets/img/banner/slider/2.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url('')?>assets/img/banner/slider/3.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url('')?>assets/img/banner/slider/4.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url('')?>assets/img/banner/slider/5.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url('')?>assets/img/banner/slider/6.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url('')?>assets/img/banner/slider/7.jpg" alt="">
			</div>
			<div class="carousel-item">
				<img src="<?=base_url('')?>assets/img/banner/slider/8.jpg" alt="">
			</div>
		</div>
		<!-- Left and right controls -->
		<!--
		<a class="carousel-control-prev" href="#slider" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#slider" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
		-->
	</section>
	<!--================ Start Banner Area =================-->


	<!--================ Start Cities Area =================-->
	<section data-scroll-index="1" class="cities" id="Cities">
		<div class="container-fluid">
			<div class="row p-4">
				<div class="col-12">
					<div class="cities-title">
						<h2>Cities</h2>
					</div>
				</div>
                <?php foreach ($cities as $cities_value) { ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="cities-box">
                            <figure class="imghvr-fade">
                                <img style="width: 100%; height: 12.5rem" src="<?= site_url('') ?>assets/uploads/files/<?= $cities_value->cities_image; ?>">
                                <figcaption class="gradient-bg2 h-100 p-2">
                                    <h6 class="text-center"><?= $cities_value->cities_title; ?></h6>
                                    <div class="attraction-content1 h-100">
                                        <p class="text-justify">
                                            <?= $cities_value->cities_information; ?>
                                        </p>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="text-center">
                                <h5><?= $cities_value->cities_title; ?></h5>
                            </div>
                            <div class="cities-book">
                                <a class="primary_btn gradient-bg btn-book" href="<?= site_url('site/Hostels') ?>/index/<?= $cities_value->cities_id; ?>">Book Now</a>
                            </div>
                            <div class="boxshadow"></div>
                        </div>
                    </div>
                <?php } ?>

			</div>
		</div>
	</section>



	<section data-scroll-index="2" class="gallery">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="gallery-title">
						<h2>Gallery</h2>
					</div>
				</div>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="<?=base_url('')?>assets/img/gallery/1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?=base_url('')?>assets/img/gallery/2.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?=base_url('')?>assets/img/gallery/3.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?=base_url('')?>assets/img/gallery/4.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?=base_url('')?>assets/img/gallery/5.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?=base_url('')?>assets/img/gallery/6.jpg" alt="Third slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="<?=base_url('')?>assets/img/gallery/7.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Cities Area =================-->
	<section data-scroll-index="3" class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="services-title">
                        <h2>Services</h2>
                    </div>
                </div>
            </div>
        </div>
		<div class="flex-container">
			<div class="spinner">
				<p>
					<div class="cube1"></div>
					<div class="cube2"></div>
					Loading...
				</p>
			</div>
			<div class="flex-slide home">
				<div class="flex-title flex-title-home">Sim Card</div>
				<div class="flex-about flex-about-home"><p><a class="text-white" href="<?= site_url('site/Simcard') ?>"> Click here to buy Sim Card( Irancell(MTN) / IR-MCI / RighTel )</a></p></div>
			</div>
			<div class="flex-slide about">
				<div class="flex-title">Ticket</div>
				<div class="flex-about"><p><a class="text-white" href="#">Click here to booking ticket( Bus / Train / Plain )</a></p></div>
			</div>
			<div class="flex-slide work">
				<div class="flex-title">Useful Application</div>
				<div class="flex-about"><p><a class="text-white" href="<?= site_url('site/Apps') ?>">Click here to download useful application for convenient your trip </a></p></div>
			</div>
			<div class="flex-slide contact">
				<div class="flex-title">Maps</div>
				<div class="flex-about">
					<p><a class="text-white" href="<?= site_url('site/Maps') ?>"> Click here to download map of Iran and each of the provinces of Iran </a></p>
				</div>
			</div>
		</div>
	</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!--------------tour------------>

	<section data-scroll-index="4" class="tour">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="tour-title">
						<h2>Tour</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid tour-content">
		<form action="<?= site_url('site/Hostels/insert') ?>" method="post" class="form-horizontal">
        
			<div class="row">
				<div class="col-12">
					<div class="tour-header">
						<h2 class="tour-title">Diako Tour</h2>
						<p class="tour-goal">Experience Iran with us. Our goal is get to you know better in Iran and to enjoy your trip.</p>
					</div>
				</div>
                <div class="col-12 col-md-6 col-xl-4 tour-input">
                    <label for="fullname" class="label-input100">Full Name *</label>
                    <input id="fullname" type="text" name="book_first_name" class="input-height-width" required="required" aria-invalid="false" placeholder="Please enter your full name ...">
                </div>
                <div class="col-12 col-md-6 col-xl-4 tour-input">
                    <label for="phonenumber" class="label-input100">Phone Number *</label>
                    <input id="phonenumber" type="tel" name="book_cellphone_number" class="input-height-width" required="required" aria-invalid="false" placeholder="Please enter your phone number ...">
                </div>
                <div class="col-12 col-md-6 col-xl-4 tour-input">
                    <label for="email" class="label-input100">Email *</label>
                    <input id="email" type="email" name="book_email" class="input-height-width" required="required" aria-invalid="false" placeholder="Please enter your email ...">
                </div>
                <div class="col-12 col-md-6 col-xl-4 tour-input">
                    <label for="origin" class="label-input100">Origin *</label>
                    <select class="input-height-width" id="cities_id" name="cities_id" required="required" aria-invalid="false">
						<option value="" selected="selected">Choose your origin for tour please ...</option>
						<?php foreach ($origin as $origin_value) { ?>
                        <option value="<?= $origin_value->cities_id; ?>"><?= $origin_value->cities_title; ?></option>
                
						<?php } ?>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-xl-4 tour-input">
                    <label for="destination" class="label-input100">Destination *</label>
                    <select class="input-height-width" id="hostels_id" name="hostels_id" required="required" aria-invalid="false">
                        <option selected="selected">Choose your destination for tour please ...</option>
              
                    </select>
                </div>
                <div class="col-12 col-md-6 col-xl-4 tour-input">
                    <label for="numberofguests" class="label-input100" style="font-size: 14px">Number of Guests *</label>
                    <input id="numberofguests" type="number" name="book_number_of_guests" class="input-height-width" required="required" aria-invalid="false" placeholder="Please enter number of guests (People) ...">
                </div>
                <div class="col-12 tour-input">
                    <label for="visittoplace">Which places and cities do you want to see in the selected destination province? Please write here (Optional).</label>
                    <textarea cols="60" id="visittoplace" name="book_comment" rows="4" style="width: 100%; max-width: 100%;"></textarea>
                </div>
                <div class="col-12">
                    <p>Notice : Please fill in all input date . After booking we will contact with you and talk about the cost and time of departure .</p>
                </div>
                <div class="col-12">
                    <div class="tour-book">
                        <input id="book" type="submit" class="primary_btn gradient-bg btn-book" value="Book Now">
                    </div>
                </div>
			</div>
            <div class="col-12">
                <div class="tour-footer">
                    <img src="<?=base_url('')?>assets/img/tour/tour-footer.png">
                </div>
			</div>
				</form>
		</div>
	</section>
<!--------------tour------------>

<?php include_once (APPPATH.'views/_layout/site/foot.php'); ?>
