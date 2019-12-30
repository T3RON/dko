
<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>

	<!--================ Start Banner Area =================-->

<!--================ Start Banner Area =================-->

<!--================ Start Banner Area =================-->
<section class="personal-review-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Hostel Review</h2>
            </div>
            <div class="line"></div>
            <div class="col-12">
                <h3>Hello Cristian Gabriel  Leontiev</h3>
                <p class="m-0">We hope that you enjoyed your recent stay at Seven Hostel in Tehran in Tehran, Iran.</p>
            </div>
            <div class="line"></div>
        </div>
    </div>
</section>

<form action="<?= site_url('site/Review/insert') ?>" method="post">
<input type="hidden" name="hostels_id" value="<?= $hostels_id; ?>">

<section class="rating">
    <div class="container bg border">
        <div class="row">
            <div class="col-12">
                <h3 class="pt-2">Rating :</h3>
                <div class="line"></div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rang-title">
                    <i class="fa fa-lock"></i>
                    <span>Security *</span>
                </div>
                <input name="reviews_security" id="security-input" type="range" min="0" max="10" step="1" value="10" class="rangeslider">
                <span id="securityValue"></span>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rang-title">
                    <i class="fa fa-map-marker"></i>
                    <span>Location *</span>
                </div>
                <input name="reviews_location" id="location-input" type="range" min="0" max="10" step="1" value="10" class="rangeslider">
                <span id="locationValue"></span>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rang-title">
                    <i class="fa fa-male"></i>
                    <span> Staff *</span>
                </div>
                <input name="reviews_staff" id="staff-input" type="range" min="0" max="10" step="1" value="10" class="rangeslider">
                <span id="staffValue"></span>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rang-title">
                    <i class="fa fa-thumbs-up"></i>
                    <span>Atmosphere *</span>
                </div>
                <input name="reviews_atmosphere" id="atmosphere-input" type="range" min="0" max="10" step="1" value="10" class="rangeslider">
                <span id="atmosphereValue"></span>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rang-title">
                    <i class="fa fa-trash"></i>
                    <span>Cleanliness *</span>
                </div>
                <input name="reviews_cleanliness" id="cleanliness-input" type="range" min="0" max="10" step="1" value="10" class="rangeslider">
                <span id="cleanlinessValue"></span>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rang-title">
                    <i class="fa fa-credit-card"></i>
                    <span>Value For Money *</span>
                </div>
                <input name="reviews_money" id="valueformoney-input" type="range" min="0" max="10" step="1" value="10" class="rangeslider">
                <span id="valueformoneyValue"></span>
            </div>
            <div class="col-12 col-lg-6">
                <div class="rang-title">
                    <i class="fa fa-list"></i>
                    <span>Facilities *</span>
                </div>
                <input name="reviews_facilities" id="facilities-input" type="range" min="0" max="10" step="1" value="10" class="rangeslider">
                <span id="facilitiesValue"></span>
            </div>
            <div class="line"></div>
            <div class="scoreaverage">
                Overall Rating:
                <span id="yourscore"></span>
            </div>
        </div>
    </div>
</section>

<section class="my-review mt-5">
    <div class="container bg p-2 border">
        <div class="row">
            <div class="col-12">
                <h3>My Review :</h3>
                <textarea rows="8" id="notes" name="reviews_content" class="content-review" maxlength="500" style="min-height: 200px;" data-charsleft-id="#notes-charsleft"></textarea>
            </div>
        </div>
    </div>
</section>

<section class="my-details mt-5">
    <div class="container bg p-2 border">
        <div class="row">
            <div class="col-12">
                <h3>My Details :</h3>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <select class="input100 border bg-white" id="gender-type" name="details_gender" required="required" aria-invalid="false">
                    <option value="" selected="selected">Gender *</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Couple">Couple</option>
                    <option value="All Male Group">All Male Group</option>
                    <option value="All Female Group">All Female Group</option>
                    <option value="All Female Group">All Female Group</option>
                    <option value="Mixed Group">Mixed Group</option>
                </select>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <select class="input100 border bg-white" id="age-group" name="details_age" required="required" aria-invalid="false">
                    <option value="" selected="selected">Age *</option>
                    <option value="18-24">18-24</option>
                    <option value="25-30">25-30</option>
                    <option value="31-40">31-40</option>
                    <option value="41+">41+</option>
                </select>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <select class="input100 border bg-white" id="trip-type" name="details_trip" required="required" aria-invalid="false">
                    <option value="" selected="selected">Trip Type *</option>
                    <option value="College Break">College Break</option>
                    <option value="Weekend Away">Weekend Away</option>
                    <option value="Gap Year">Gap Year</option>
                    <option value="RTW Trip">RTW Trip</option>
                    <option value="Regular Vacation">Regular Vacation</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        </div>
    </div>
</section>


<section class="recommend-diako mt-5 mb-5">
    <div class="container bg p-2 border">
        <div class="row">
            <div class="col-12">
                <h3>Would you recommend Diakohostels.com ?</h3>
            </div>
            <div class="col-12">
                <select class="input100 border bg-white mb-4" id="likely-recommend-diako" name="would_you_type" required="required" aria-invalid="false">
                    <option value="3">Definitely</option>
                    <option value="2">Likely</option>
                    <option value="0">Unlikely</option>
                </select>
            </div>
            <div class="col-12">
                <textarea maxlength="500" rows="5" id="likelyrecommendnotes-diako" name="would_you_why" class="rounded" data-charsleft-id="#recommendnotes-charsleft" placeholder="Why?"></textarea>
            </div>

        </div>
        <div class="row">
        <div class="col-12 pb-4">
            <button type="submit" id="submit-update-information" rel="no-follow" class="primary_btn gradient-bg btn-submit">Send Review</button>
        </div>
        </div>
    </div>

</section>
</form>
<!--================ Start Banner Area =================-->
<!--================ Start Banner Area =================-->
<?php include_once (APPPATH.'views/_layout/site/foot.php'); ?>
