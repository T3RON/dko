
<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>

	<!--================ Start Banner Area =================-->

<?php foreach ($cities as $cities_value) { ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="slider-picture">
                <img class="attraction-img" src="<?= site_url('') ?>assets/uploads/files/<?= $cities_value->cities_image; ?>">
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="title">
        <h1><?= $cities_value->cities_title; ?></h1>
    </div>
    <div class="tabs">
        <input type="radio" name="tabs" id="hostels" checked="checked">
        <label for="hostels">Hostels</label>
        <div class="tab">
            <h1>Hostels</h1>
            <div class="container-fluid">
                <div class="row">
                <?php foreach ($hostels as $hostels_value) { ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="hostel">
                            <div class="img-hostel">
                                <a href="<?= site_url('site/Hostels/hostels') ?>/<?= $hostels_value->hostels_id; ?>">
                                    <img src="<?= site_url('') ?>assets/uploads/files/<?= $hostels_value->hostels_image; ?>">

                                </a>
                            </div>
                            <h2><a href="<?= site_url('site/Hostels/hostels') ?>/<?= $hostels_value->hostels_id; ?>"><?= $hostels_value->hostels_title; ?></a></h2>
                            <p>Minmum Price: <span> <?= $hostels_value->hostels_minmum_price; ?>€</span></p>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </div>
        </div>

        <input type="radio" name="tabs" id="information">
        <label for="information">Information</label>
        <div class="tab">
            <h2><?= $cities_value->cities_title; ?> Province</h2>
            <div class="container-fluid">
                <div class="row pt-3">
                    <div class="col-12 col-lg-5">
                        <div class="attraction-content">
                            <?= $cities_value->cities_information; ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <img class="w-100" src="<?= site_url('') ?>assets/uploads/files/<?= $cities_value->cities_information_image; ?>">

                    </div>
                    <div class="col-12">
                        <div id="accordion" class="mt-4">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#location">
                                        Location of <?= $cities_value->cities_title; ?> Province
                                    </a>
                                </div>
                                <div id="location" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="map-responsive">
                                                <div class="mapouter">
                                                    <div class="gmap_canvas">
                                                        <iframe width="350" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $cities_value->cities_title; ?>%20Province&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="radio" name="tabs" id="attraction">
        <label for="attraction">Attraction</label>
        <div class="tab">
            <?php foreach ($attraction as $attraction_value) { ?>
            <h2> <?= $attraction_value->attraction_title; ?> </h2>
            <div class="container-fluid">
                <div class="row pt-3">
                    <div class="col-12 col-lg-5">
                        <div class="attraction-content">
                            <?= $attraction_value->attraction_text; ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <img class="w-100 attraction-img" src="<?= site_url('') ?>assets/uploads/files/<?= $attraction_value->attraction_image; ?>">

                    </div>
                    <div class="col-12">
                        <div id="accordion-damavand" class="mt-4">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#location-damavand">
                                        Location of <?= $cities_value->cities_title; ?> Palace
                                    </a>
                                </div>
                                <div id="location-damavand" class="collapse" data-parent="#accordion-damavand">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="map-responsive">
                                                <div class="mapouter">
                                                    <div class="gmap_canvas">
                                                        <div class="mapouter">
                                                            <div class="gmap_canvas">
                                                                <iframe width="350" height="350" id="gmap_canvas1" src="https://maps.google.com/maps?q=<?= $attraction_value->cities_title; ?>%20Palace&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div id="accordion-generalinfo1" class="mt-3">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#location-generalinfo1">
                                        General Information
                                    </a>
                                </div>
                                <div id="location-generalinfo1" class="collapse" data-parent="#accordion-generalinfo1">
                                    <div class="card-body">
                                        <?= $attraction_value->attraction_general_information; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div id="accordion-getthere1" class="mt-3">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#location-getthere1">
                                        How to Get There
                                    </a>
                                </div>
                                <div id="location-getthere1" class="collapse" data-parent="#accordion-getthere1">
                                    <div class="card-body">
                                        <?= $attraction_value->attraction_how_to_get_there; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <?php } ?>
        </div>

        <input type="radio" name="tabs" id="tour">
        <label for="tour">Tour</label>
        <div class="tab">
            <p><?= $cities_value->cities_tour_content; ?></p>
        </div>
    </div>
</section>
<!--------------tour------------>
<?php } ?>
<?php include_once (APPPATH.'views/_layout/site/foot.php'); ?>
