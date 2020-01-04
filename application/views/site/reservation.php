
<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>

	<!--================ Start Banner Area =================-->

<section class="content">
    <div class="title">
        <h1>Book Now </h1>
        <p style="text-align: center; font-size: 2rem">**********</p>
    </div>



    <?php foreach ($hostels as $hostels_value) { ?>
    <div class="policies">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-12">
                    <h3>Policies & Fees & Rules</h3>
                </div>
                <div class="col-12 col-lg-6 box">
                    <p class="text-align-justify">
                        <?= $hostels_value->hostels_fees; ?>
                    </p>
                </div>
                <div class="col-12 col-lg-6 box">
                    <p class="text-align-justify">
                        <?= $hostels_value->hostels_policies; ?>
                    </p>
                </div>
                <div class="col-12 col-lg-6 box">
                    <p class="text-align-justify">
                        <?= $hostels_value->hostels_rules; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs">
        <input type="radio" name="tabs" id="introduction" checked="checked">
        <label for="introduction">Introduction</label>
        <div class="tab">
            <?= $hostels_value->hostels_introduction; ?>
        </div>

        <input type="radio" name="tabs" id="information">
        <label for="information">Information</label>
        <div class="tab">
            <section class="type-of-rooms">
                <div class="container-fluid">
                    <div class="row info-hostel">
                        <div class="col-12">
                            <?= $hostels_value->hostels_information; ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <input type="radio" name="tabs" id="gallery">
        <label for="gallery">Gallery</label>
        <div class="tab">
            <h1>Gallery</h1>

            <!-- Start WOWSlider.com BODY section -->
            <section data-scroll-index="2" class="gallery">
                <div class="container">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php foreach ($gallery as $gallery_value) { ?>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $gallery_value->gallery_id; ?>"></li>
                                <?php } ?>
                            </ol>
                            <div class="carousel-inner">
                                <?php foreach ($gallery as $gallery_value) { ?>
                                    <div class="carousel-item <?= $gallery_value->gallery_active; ?>">
                                        <img class="d-block w-100" src="<?= site_url('') ?>assets/uploads/files/<?= $gallery_value->gallery_image; ?>" alt="First slide">
                                    </div>
                                <?php } ?>
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
            <!-- End WOWSlider.com BODY section -->
        </div>

        <input type="radio" name="tabs" id="direction">
        <label for="direction">Direction</label>
        <div class="tab">
            <div class="map-direction">
                <h1>Address & Map</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h3 class="mt-50">Address in English :</h3>
                            <p><?= $hostels_value->hostels_address_en; ?></p>
                            <h3 class="mt-50">Address in Persian :</h3>
                            <p><?= $hostels_value->hostels_address_fa; ?></p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="500" height="350" id="gmap_canvas" src="<?= $hostels_value->hostels_map_url; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:350px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:500px;}</style></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="radio" name="tabs" id="Weather">
        <label for="Weather">Weather</label>
        <div class="tab">
            <div class="map-direction">
                <h3><?= $hostels_value->cities_title; ?></h3>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                          <?php 
                          
                          try {
                            $url = 'https://api.weatherbit.io/v2.0/current?city='.$hostels_value->cities_title.'&key=2ba7175be1994237a93e3a59bdb85f5b';
                            $JsonData[] = json_decode(file_get_contents($url),true);
                
                            $icon =  $JsonData[0]['data'][0]['weather']['icon'].".png";
                            echo '<img src="'.base_url().'assets/img/weather/'.$icon.'" alt="wather">';
                            
                
                        }catch (Exception $e) {
                            //alert the user.
                            var_dump($e->getMessage());
                        }
                          
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="radio" name="tabs" id="book-now">
        <label for="book-now">Book Now</label>
        <div class="tab">
            <h1>Reservation</h1>
            <!----Reservation form--->
            <section class="reservation">
                <div class="container">
                    <div class="reservation">
                            <div class="container">
                                <form action="<?= site_url('site/Hostels/insert') ?>" method="post" class="form-horizontal">
                                    <input type="hidden" name="cities_id" value="<?= $hostels_value->cities_id; ?>">
                                    <input type="hidden" name="hostels_id" value="<?= $hostels_value->hostels_id; ?>">
                                    <input type="hidden" name="person_id" value="1">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate="Gender is required">
                                            <span class="label-input100">Number of Guests *</span>
                                            <input id="guestsnumber" class="input100" type="text" name="book_number_of_guests" required="required" placeholder="Number of Guests(people)...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate="Username is required">
                                            <span class="label-input100">Type Of Room *</span>
                                            <select class="input100" id="typeroom" name="book_type_of_room" required="required" aria-invalid="false">
                                                <option value="" selected="selected">Select type of your room</option>
                                                <option value="Male">Mixed Dorms  - €4</option>
                                                <option value="Female">Private Single Rooms(Shared Bathrooms) - €8</option>
                                                <option value="Female">Private Double Rooms(Shared Bathrooms)  - €15</option>
                                                <option value="Female">Private Twin Rooms(Shared Bathrooms)  - €15</option>
                                                <option value="Female">Private 3-bed Rooms(Shared Bathrooms)  - €23</option>
                                                <option value="Female">Private 4-bed Rooms(Shared Bathrooms)  - €31</option>
                                            </select>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate = "Check-in Date is required">
                                            <span class="label-input100">Check-in Date *</span>
                                            <input class="input100" type="date" name="book_check_in_date" required="required" placeholder="Select Check-in Date...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate = "Check-out Date is required">
                                            <span class="label-input100">Check-out Date *</span>
                                            <input class="input100" type="date" name="book_check_out_date" required="required" placeholder="Select Check-out Date...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                                            <span class="label-input100">Length of Stay (Nights) *</span>
                                            <input id="staylegth" class="input100" type="text" name="book_length_of_day" required="required" placeholder="Length of Stay (Nights)...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate="Comfirm Password is required">
                                            <span class="label-input100">Gender *</span>
                                            <select class="input100" id="gendertitle" name="book_gender" required="required" aria-invalid="false">
                                                <option value="" selected="selected">Gender</option>
                                                <option value="Male">Mr</option>
                                                <option value="Female">Ms</option>
                                            </select>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <span for="firstname" class="label-input100">First Name *</span>
                                            <input id="firstname"  class="input100" type="text" name="book_first_name" required="required" placeholder="First Name...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                                            <span class="label-input100">Last Name *</span>
                                            <input id="lastname"  class="input100" type="text" name="book_last_name" required="required" placeholder="Last Name...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                                            <span class="label-input100">Email *</span>
                                            <input id="email"  class="input100" type="email" name="book_email" required="required" placeholder="Email address...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate="Gender is required">
                                            <span class="label-input100">Nationality of Residence *</span>
                                            <select class="input100" id="nationality" name="book_nationality_of_residence" required="required" aria-invalid="false">
                                                <option value="" selected="selected"></option>
                                                <option disabled="disabled">--------------------</option>
                                                <option value="USA">USA</option>
                                                <option value="England">England</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Germany">Germany</option>
                                                <option disabled="disabled">--------------------</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="British Virgin Islands">British Virgin Islands</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option> <option value="Cayman Islands">Cayman Islands</option> <option value="Central African Republic">Central African Republic</option> <option value="Chad">Chad</option> <option value="Chile">Chile</option> <option value="China">China</option> <option value="Christmas Island">Christmas Island</option> <option value="Cocos (keeling) Islands">Cocos (keeling) Islands</option> <option value="Colombia">Colombia</option> <option value="Comoros">Comoros</option> <option value="Congo">Congo</option> <option value="Cook Islands">Cook Islands</option> <option value="Costa Rica">Costa Rica</option> <option value="Cote d'Ivoire">Cote d'Ivoire</option> <option value="Croatia">Croatia</option> <option value="Cuba">Cuba</option> <option value="Cyprus">Cyprus</option> <option value="Czech Republic">Czech Republic</option> <option value="Democratic Rep. of Congo">Democratic Rep. of Congo</option> <option value="Denmark">Denmark</option> <option value="Djibouti">Djibouti</option> <option value="Dominica">Dominica</option> <option value="Dominican Republic">Dominican Republic</option> <option value="East Timor">East Timor</option> <option value="Ecuador">Ecuador</option> <option value="Egypt">Egypt</option> <option value="El Salvador">El Salvador</option> <option value="England">England</option> <option value="Equatorial Guinea">Equatorial Guinea</option> <option value="Eritrea">Eritrea</option> <option value="Estonia">Estonia</option> <option value="Ethiopia">Ethiopia</option> <option value="Falkland Islands (malvinas)">Falkland Islands (malvinas)</option> <option value="Faroe Islands">Faroe Islands</option> <option value="Fiji">Fiji</option> <option value="Finland">Finland</option> <option value="France">France</option> <option value="French Guiana">French Guiana</option> <option value="French Polynesia">French Polynesia</option> <option value="French Southern Territories">French Southern Territories</option> <option value="Gabon">Gabon</option> <option value="Gambia">Gambia</option> <option value="Georgia">Georgia</option> <option value="Germany">Germany</option> <option value="Ghana">Ghana</option> <option value="Gibraltar">Gibraltar</option> <option value="Greece">Greece</option> <option value="Greenland">Greenland</option> <option value="Grenada">Grenada</option> <option value="Guadeloupe">Guadeloupe</option> <option value="Guam">Guam</option> <option value="Guatemala">Guatemala</option> <option value="Guinea">Guinea</option> <option value="Guinea-bissau">Guinea-bissau</option> <option value="Guyana">Guyana</option> <option value="Haiti">Haiti</option> <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands</option> <option value="Holy See (vatican City State)">Holy See (vatican City State)</option> <option value="Honduras">Honduras</option> <option value="Hong Kong China">Hong Kong China</option> <option value="Hungary">Hungary</option> <option value="Iceland">Iceland</option> <option value="India">India</option> <option value="Indonesia">Indonesia</option> <option value="Iran">Iran</option> <option value="Iraq">Iraq</option> <option value="Ireland">Ireland</option> <option value="Israel">Israel</option> <option value="Italy">Italy</option> <option value="Jamaica">Jamaica</option> <option value="Japan">Japan</option> <option value="Jordan">Jordan</option> <option value="Kazakhstan">Kazakhstan</option> <option value="Kenya">Kenya</option> <option value="Kiribati">Kiribati</option> <option value="Kosovo">Kosovo</option> <option value="Kuwait">Kuwait</option> <option value="Kyrgyzstan">Kyrgyzstan</option> <option value="Laos">Laos</option> <option value="Latvia">Latvia</option> <option value="Lebanon">Lebanon</option> <option value="Lesotho">Lesotho</option> <option value="Liberia">Liberia</option> <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> <option value="Liechtenstein">Liechtenstein</option> <option value="Lithuania">Lithuania</option> <option value="Luxembourg">Luxembourg</option> <option value="Macau China">Macau China</option> <option value="Macedonia">Macedonia</option> <option value="Madagascar">Madagascar</option> <option value="Malawi">Malawi</option> <option value="Malaysia">Malaysia</option> <option value="Maldives">Maldives</option> <option value="Mali">Mali</option> <option value="Malta">Malta</option> <option value="Marshall Islands">Marshall Islands</option> <option value="Martinique">Martinique</option> <option value="Mauritania">Mauritania</option> <option value="Mauritius">Mauritius</option> <option value="Mayotte">Mayotte</option> <option value="Mexico">Mexico</option> <option value="Micronesia">Micronesia</option> <option value="Moldova">Moldova</option> <option value="Monaco">Monaco</option> <option value="Mongolia">Mongolia</option> <option value="Montenegro">Montenegro</option> <option value="Montserrat">Montserrat</option> <option value="Morocco">Morocco</option> <option value="Mozambique">Mozambique</option> <option value="Myanmar">Myanmar</option> <option value="Namibia">Namibia</option> <option value="Nauru">Nauru</option> <option value="Nepal">Nepal</option> <option value="Netherlands">Netherlands</option> <option value="Netherlands Antilles">Netherlands Antilles</option> <option value="New Caledonia">New Caledonia</option> <option value="New Zealand">New Zealand</option> <option value="Nicaragua">Nicaragua</option> <option value="Niger">Niger</option> <option value="Nigeria">Nigeria</option> <option value="Niue">Niue</option> <option value="Norfolk Island">Norfolk Island</option> <option value="North Korea">North Korea</option> <option value="Northern Ireland">Northern Ireland</option> <option value="Northern Mariana Islands">Northern Mariana Islands</option> <option value="Norway">Norway</option> <option value="Oman">Oman</option> <option value="Pakistan">Pakistan</option> <option value="Palau">Palau</option> <option value="Palestine">Palestine</option> <option value="Panama">Panama</option> <option value="Papua New Guinea">Papua New Guinea</option> <option value="Paraguay">Paraguay</option> <option value="Peru">Peru</option> <option value="Philippines">Philippines</option> <option value="Pitcairn">Pitcairn</option> <option value="Poland">Poland</option> <option value="Portugal">Portugal</option> <option value="Puerto Rico">Puerto Rico</option> <option value="Qatar">Qatar</option> <option value="Republic of South Sudan">Republic of South Sudan</option> <option value="Reunion">Reunion</option> <option value="Romania">Romania</option> <option value="Russia">Russia</option> <option value="Rwanda">Rwanda</option> <option value="Saint Barthelemy">Saint Barthelemy</option> <option value="Saint Helena">Saint Helena</option> <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option> <option value="Saint Lucia">Saint Lucia</option> <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option> <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option> <option value="Samoa">Samoa</option> <option value="San Marino">San Marino</option> <option value="Sao Tome And Principe">Sao Tome And Principe</option> <option value="Saudi Arabia">Saudi Arabia</option> <option value="Scotland">Scotland</option> <option value="Senegal">Senegal</option> <option value="Serbia">Serbia</option> <option value="Seychelles">Seychelles</option> <option value="Sierra Leone">Sierra Leone</option> <option value="Singapore">Singapore</option> <option value="Slovakia">Slovakia</option> <option value="Slovenia">Slovenia</option> <option value="Solomon Islands">Solomon Islands</option> <option value="Somalia">Somalia</option> <option value="South Africa">South Africa</option> <option value="South Korea">South Korea</option> <option value="Spain">Spain</option> <option value="Sri Lanka">Sri Lanka</option> <option value="Sudan">Sudan</option> <option value="Suriname">Suriname</option> <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option> <option value="Swaziland">Swaziland</option> <option value="Sweden">Sweden</option> <option value="Switzerland">Switzerland</option> <option value="Syria">Syria</option> <option value="Taiwan China">Taiwan China</option> <option value="Tajikistan">Tajikistan</option> <option value="Tanzania">Tanzania</option> <option value="Thailand">Thailand</option> <option value="Togo">Togo</option> <option value="Tokelau">Tokelau</option> <option value="Tonga">Tonga</option> <option value="Trinidad And Tobago">Trinidad And Tobago</option> <option value="Tunisia">Tunisia</option> <option value="Turkey">Turkey</option> <option value="Turkmenistan">Turkmenistan</option> <option value="Turks And Caicos Islands">Turks And Caicos Islands</option> <option value="Tuvalu">Tuvalu</option> <option value="Uganda">Uganda</option> <option value="Ukraine">Ukraine</option> <option value="United Arab Emirates">United Arab Emirates</option> <option value="Uruguay">Uruguay</option> <option value="USA">USA</option> <option value="US Virgin Islands">US Virgin Islands</option> <option value="Uzbekistan">Uzbekistan</option> <option value="Vanuatu">Vanuatu</option> <option value="Venezuela">Venezuela</option> <option value="Vietnam">Vietnam</option> <option value="Wales">Wales</option> <option value="Wallis And Futuna">Wallis And Futuna</option> <option value="Western Sahara">Western Sahara</option> <option value="Yemen">Yemen</option> <option value="Zambia">Zambia</option> <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate=" Please enter valid Number(only Digit)">
                                            <span class="label-input100">Cellphone Number *</span>
                                            <input id="phonenumber"  class="input100" type="text" name="book_cellphone_number" required="required" placeholder="Cellphone Number...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="wrap-input100 validate-input" data-validate=" Invalid Time. Example of correct format(24 hour time): 23:14">
                                            <span class="label-input100">Approximate arrival time at Hostel/Hotel *</span>
                                            <input id="arrivaltime"  class="input100" type="text" name="book_approximate" required="required" placeholder="Approximate arrival time(hh : mm)...">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="wrap-input100 validate-input" data-validate=" Invalid Time. Example of correct format(24 hour time): 23:14">
                                            <span class="label-input100">Comment(<span class="text-danger"> Very Important</span>: If you’re making this reservation for more than one person, please include the following pieces of info for each person in the message box: 1.Full Names, 2.Nationalities, 3.Genders)</span>
                                            <textarea cols="60" id="Comment" name="book_comment" rows="3" style="width: 100%; max-width: 100%;"></textarea>
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="flex-m w-full h-100 p-b-33">
                                            <div class="contact100-form-checkbox">
                                                <input class="input-checkbox100 border-dark" value="ok" id="ckbpaymen" type="checkbox" required="required" name="book_read_the_payment">
                                                <label class="label-checkbox100" style="background: transparent!important; color: #0b0b0b" for="ckbpaymen">
                                                    <span class="txt1">
                                                        I have read the
                                                        <a href="#" class="txt2 hov1">
                                                            Payment Details
                                                        </a>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 pb-4">
                                        <button type="submit" id="book" rel="no-follow" class="primary_btn gradient-bg btn-submit">Book Now</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                    </div>
                </div>
            </section>
        </div>

        <input type="radio" name="tabs" id="reviews">
        <label for="reviews">Reviews</label>
        <div class="tab">
            <h1>Rates & Reviews</h1>
            <div class="title-rates">
                <div class="rating-summary">
                    <div class="score"><?= $get_all_rate; ?></div>
                    <div class="rate-information">
                        <p class="quality">Superb(Excellent)</p>
                        <a href="" class="counter">based on <?= $count_review; ?> reviews</a>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="progress-boxs">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3 mb-3">
                            <p class="lable-bar">
                                Value for money
                                <span class="num float-right"><?= $money; ?></span>
                            </p>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?= $money; ?>%" role="progressbar" aria-valuenow="<?= $money; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-3">
                            <p class="lable-bar">
                                Security
                                <span class="num float-right"><?= $security; ?></span>
                            </p>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?= $security; ?>%" role="progressbar" aria-valuenow="<?= $security; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-3">
                            <p class="lable-bar">
                                Location
                                <span class="num float-right"><?= $location; ?></span>
                            </p>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?= $location; ?>%" role="progressbar" aria-valuenow="<?= $location; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-3">
                            <p class="lable-bar">
                                Staff
                                <span class="num float-right"><?= $staff; ?></span>
                            </p>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?= $staff; ?>%" role="progressbar" aria-valuenow="<?= $staff; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-3">
                            <p class="lable-bar">
                                Atmosphere
                                <span class="num float-right"><?= $atmosphere; ?></span>
                            </p>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?= $atmosphere; ?>%" role="progressbar" aria-valuenow="<?= $atmosphere; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-3">
                            <p class="lable-bar">
                                Cleanliness
                                <span class="num float-right"><?= $cleanliness; ?></span>
                            </p>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?= $cleanliness; ?>%" role="progressbar" aria-valuenow="<?= $cleanliness; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-3">
                            <p class="lable-bar">
                                Facilities
                                <span class="num float-right"><?= $facilities; ?></span>
                            </p>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar" style="width: <?= $facilities; ?>%" role="progressbar" aria-valuenow="<?= $facilities; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>

            <section class="latest-reviews">
                <h2>Latest Reviews</h2>
                <div class="container-fluid">
                    <div class="row">
                    <?php

                    foreach($rev as $reviews_value) { ?>
                    
                        <div class="col-12 col-md-4 col-xl-3">
                            <div class="review-content">
                                <div class="review-header">
                                    <div class="rating-summary">
                                        <div class="rating-summary-left w-50 d-flex float-left">
                                            <div class="score">10</div>
                                            <div class="information">
                                                <p class="quality">Superb</p>
                                            </div>
                                        </div>
                                        <div class="rating-summary-right w-50 d-flex float-right">
                                            <div class="date">
                                                <i class="fa fa-calendar"></i>
                                                <span><?= $reviews_value->reviews_date; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-container">
                                    <div class="review-note review-text">
                                        <p>
                                        <?= $reviews_value->reviews_content; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <span class="details">
                            <?= $reviews_value->reviews_location; ?>, <?= $reviews_value->details_gender; ?>, <?= $reviews_value->details_age; ?>
                            </span>
                        </div>
                    <?php } ?>
                        <div class="container read-all-review">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="primary_btn gradient-bg btn-read-review" data-toggle="modal" data-target="#exampleModal3">
                                        Read All Review
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-slideout modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Rates & Reviews</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <?php foreach ($morerview as $morerview_value) { ?>
                                        <div class="pagination-block">
                                            <div class="property-review">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-12 col-md-4">
                                                            <div class="guess">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                            <ul>
                                                                <li class="name"><?= $morerview_value->person_fn ?>&nbsp; <?= $morerview_value->person_ln ?></li>
                                                                <li class="details"><?= $morerview_value->person_nationality ?>, <?= $morerview_value->details_gender ?>, <?= $morerview_value->details_age ?></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-md-8 pt-4 pt-md-0">
                                                            <div class="review-content">
                                                                <div class="review-header">
                                                                    <div class="rating-summary">
                                                                        <div class="rating-summary-left w-50 d-flex float-left">
                                                                            <div class="score">10</div>
                                                                            <div class="information">
                                                                                <p class="quality">Superb</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rating-summary-right w-50 d-flex float-right">
                                                                            <div class="date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                <span><?= $morerview_value->reviews_date ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="review-container">
                                                                    <div class="review-note review-text">
                                                                        <p>
                                                                            <?= $morerview_value->reviews_content ?>                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <?php } ?>
                                        <br/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php } ?>
</section>




<!--================ End slider Area =================-->
<br>





<!--================End Footer Area =================-->

<?php include_once (APPPATH.'views/_layout/site/foot.php'); ?>
