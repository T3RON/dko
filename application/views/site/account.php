
<?php include_once (APPPATH.'views/_layout/site/head.php'); ?>

	<!--================ Start Banner Area =================-->

<!--================ Start Banner Area =================-->
<section class="account-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="header-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="account.html">My Account</a></li>
                        <li>Booking</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="account-header-profile">
                    <div class="guess">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <?php foreach ($person as $person_value) { ?>
                <div class="header-profile-row">
                    <h1><?= $person_value->person_fn; ?>&nbsp;<?= $person_value->person_ln; ?></h1>
                    <span><?= $person_value->person_gender; ?> , <?= $person_value->person_birthday; ?> , <?= $person_value->person_nationality; ?></span>
                </div>
                <?php } ?>
            </div>
            <div class="col-12 col-lg-8 mt-4 mt-lg-0">
                <div class="account-header-menu">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#bookings"><i class="fa fa-book"></i><span>Bookings</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#review"><i class="fa fa-comment"></i><span>Reviews</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#myaccount"><i class="fa fa-cogs"></i><span>My Account</span></a>
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
                <div id="bookings" class="container tab-pane active"><br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#allbook">All Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#futurebook">Future Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#pastbook">Past Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#cancellbook">Cancelled Bookings</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt-4">
                        <div class="tab-pane container active" id="allbook">
                            <ul>
                                <?php foreach ($books as $books_value) { ?>
                                <li style="background: #e2dddd;padding: 3px 12px;margin-bottom: 2px;"><?= $books_value->cities_title; ?> | <?= $books_value->hostels_title; ?> | <?= $books_value->book_check_in_date; ?> | <?= $books_value->book_check_out_date; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="tab-pane container fade" id="futurebook">You have no future bookings</div>
                        <div class="tab-pane container fade" id="pastbook">You have no past bookings</div>
                        <div class="tab-pane container fade" id="cancellbook">You have no cancelled bookings</div>
                    </div>
                </div>
                <div id="review" class="container tab-pane fade"><br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#allreview">All Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#pendingreviews">Pending Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#pastreviews">Past Reviews</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content mt-4">
                        <div class="tab-pane container active" id="allreview">
                        <ul>
                                <?php foreach ($reviews as $reviews_value) { ?>
                                <li style="background: #e2dddd;padding: 3px 12px;margin-bottom: 2px;"><?= $reviews_value->person_fn; ?> <?= $reviews_value->person_ln; ?> | <?= $reviews_value->person_ln; ?> | <?= $reviews_value->reviews_location; ?> | <?= $reviews_value->reviews_date; ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="tab-pane container fade" id="pendingreviews">You have no pending reviews</div>
                        <div class="tab-pane container fade" id="pastreviews">You have no past reviews</div>
                    </div>
                </div>
                <div id="myaccount" class="container tab-pane fade">
                    <section class="updateinformation">
                        <div class="container">
                            <div class="row">
                                <form id="updateinformation-form" class="w-100" action="<?= site_url('site/Account/update') ?>" method="post">
                                    <?php foreach ($person as $person_value) { ?>
                                        <input type="hidden" name="person_password" value="<?= $person_value->person_password; ?>">

                                        <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 pb-5">
                                                <h2>My Info</h2>
                                                <hr>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Username is required">
                                                    <label for="username-update" class="label-input100">Username</label>
                                                    <input id="username-update" class="input100" type="text" name="person_username" required="required" value="<?= $person_value->person_username; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Name is required">
                                                    <label for="firstname" class="label-input100">First Name</label>
                                                    <input id="firstname"  class="input100" type="text" name="person_fn" required="required" value="<?= $person_value->person_fn; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Name is required">
                                                    <label for="lastname" class="label-input100">Last Name</label>
                                                    <input id="lastname"  class="input100" type="text" name="person_ln" required="required" value="<?= $person_value->person_ln; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Birthday is required">
                                                    <span class="label-input100">Birthday</span>
                                                    <input class="input100" type="date" name="person_birthday" required="required" value="<?= $person_value->person_birthday; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Gender is required">
                                                    <span class="label-input100">Nationality</span>
                                                    <select class="input100" id="nationality" name="person_nationality" required="required" aria-invalid="false">
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
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Gender is required">
                                                    <span class="label-input100">Gender</span>
                                                    <select class="input100" id="Gender" name="person_gender" required="required" aria-invalid="false">
                                                        <option value="" selected="selected">Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                                    <label for="email" class="label-input100">Email</label>
                                                    <input id="email"  class="input100" type="email" name="person_email" required="required" value="<?= $person_value->person_email; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-4">
                                                <button type="submit" id="submit-update-information" rel="no-follow" class="primary_btn gradient-bg btn-submit">Update Information</button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </section>

                    <section class="password-update">
                        <div class="container">
                            <div class="row">
                                <form id="changepassword-form" class="w-100" action="<?= site_url('site/Account/password') ?>" method="post">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-12 pb-5">
                                                <h2>Change Password</h2>
                                                <hr>
                                            </div>
                                            <?php foreach ($person as $person_value) { ?>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                                    <label for="current-password" class="label-input100">Current Password *</label>
                                                    <input class="input100" id="current-password" type="password" name="person_password" required="required" placeholder="Current Password ..." >
                                                    <input type="hidden" name="currentpass" value="<?= $person_value->person_password; ?>">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Password is required">
                                                    <label for="new-password" class="label-input100">New Password *</label>
                                                    <input class="input100" id="new-password" type="password" name="new_password" required="required" placeholder="New Password ..." >
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="wrap-input100 validate-input" data-validate="Comfirm Password is required">
                                                    <label for="confirm-new-password" class="label-input100">Confirm New Password *</label>
                                                    <input id="confirm-new-password" class="input100" type="password" name="confirm_new_password" required="required" placeholder="Comfirm New Password...">
                                                    <span class="focus-input100"></span>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-4">
                                                <button type="submit" id="submit-change-password" rel="no-follow" class="primary_btn gradient-bg btn-submit">Update Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Start Banner Area =================-->
<?php include_once (APPPATH.'views/_layout/site/foot.php'); ?>
