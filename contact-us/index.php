<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2"/>
    <meta name="description" content="OHANA"/>
    <title>Contact Us | OHANA</title>
    <?php include '../includes/meta.php'; ?>
</head>

<body>
<!-- Loader -->
<?php include '../includes/loader.php'; ?>

<!-- Header -->
<?php include '../includes/header.php'; ?>

<main>
    <section class="innerHeroBanner">
        <div class="innerHeroBannerBg">
            <div class="videoBg">
                <video autoplay loop playsinline muted>
                    <source src="/assets/videos/hero-slide.mp4" type="video/mp4">
                </video>
            </div>
            <div class="bgMask"></div>
        </div>
        <div class="container-s">
            <div class="custom-row">
                <div class="col_12 text-center">
                    <h2 class="m-0">Contact us</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="getInTouchSection">
        <div class="videoBg">
            <video autoplay loop playsinline muted>
                <source src="/assets/videos/get-in-touch.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container-s">
            <div class="custom-row justify-content-between">
                <div class="col_12 col_lg_7 col_xl_6">
                    <h3 class="text-upper animate fadein-Right" data-delay="0.3s">Get In Touch</h3>
                    <div class="form-wrapper animate fadein-Right" data-delay="0.3s">
                    <form id="contact-us" action="" method="get">
                        <div class="form-group-col">
                            <div class="form-group">
                                <label for="fName" class="labelHide">Full Name</label>
                                <input type="text" name="yourname" class="form-control" id="fName" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label for="emailAddress" class="labelHide">Email Address</label>
                                <input type="text" name="email" class="form-control" id="emailAddress" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="form-group-col">
                            <div class="form-group custom-select">
                                <label for="country" class="labelHide">Select Country</label>
                                <select name="country" id="country">
                                    <option value="">Select Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua&Deps">Antigua & Deps</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
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
                                    <option value="BosniaHerzegovina">Bosnia & Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina">Burkina</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="CapeVerde">Cape Verde</option>
                                    <option value="CentralAfricanRep">Central African Rep</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo(DemocraticRep)">Congo (Democratic Rep)</option>
                                    <option value="CostaRica">Costa Rica</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="CzechRepublic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="DominicanRepublic">Dominican Republic</option>
                                    <option value="EastTimor">East Timor</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="ElSalvador">El Salvador</option>
                                    <option value="EquatorialGuinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Eswatini">Eswatini</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland(Republic)">Ireland (Republic)</option>
                                    <option value="Italy">Italy</option>
                                    <option value="IvoryCoast">Ivory Coast</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="KoreaNorth">Korea North</option>
                                    <option value="KoreaSouth">Korea South</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macedonia">Macedonia</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="MarshallIslands">Marshall Islands</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldova">Moldova</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="NewZealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestine">Palestine</option>
                                    <option value="Panama">Panama</option>
                                    <option value="PapuaNewGuinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Romania">Romania</option>
                                    <option value="RussianFederation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="StKitts&Nevis">St Kitts & Nevis</option>
                                    <option value="StLucia">St Lucia</option>
                                    <option value="SaintVincent&theGrenadines">Saint Vincent & the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="SanMarino">San Marino</option>
                                    <option value="SaoTome&Principe">Sao Tome & Principe</option>
                                    <option value="SaudiArabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="SierraLeone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="SolomonIslands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="SouthAfrica">South Africa</option>
                                    <option value="SouthSudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="SriLanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syria">Syria</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad&Tobago">Trinidad & Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="UnitedArabEmirates">United Arab Emirates</option>
                                    <option value="UnitedKingdom">United Kingdom</option>
                                    <option value="UnitedStates">United States</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="VaticanCity">Vatican City</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group intelInput">
                                <label for="phone" class="labelHide">Phone</label>
                                <input id="phone" name="phone" type="tel" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="labelHide">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" class="form-control textArea"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="checkBox">
                                <input type="checkbox" name="check" />
                                I have read and accepted the terms & conditions*
                            </label>
                            <label class="checkBox">
                                <input type="checkbox" name="check1" />
                                I agree to receive exclusive updates & other communications
                            </label>
                        </div>
                        <div class="form-group m-0">
                            <button type="submit" class="btn btn-gold-border submit-contact-us-form">Submit</button>
                        </div>



                        <img class="tab_1_loader" src="/loader.gif"
                            style="width:50px; height:43px; display:none;" alt="loader">
                        <div class="response-output" style="display:none;">
                            <p>Email has been sent successfully</p>
                        </div>
                        <!-- hidden -->
                        <input type="hidden" name="hiddenUrl" class="hiddenUrl" />
                    </form>
                    </div>
                </div>
                <div class="col_12 col_lg_4 col_xl_3">
                    <div class="locationContent animate fadein-Left" data-delay="0.3s">
                        <div class="locHeading">Abu Dhabi - UAE</div>
                        <nav>
                            <ul class="contactInfo">
                                <li><a href="tel:+971542228281">+971 54 222 8281</a></li>
                                <li><a href="mailto:info@ohana-development.com">info@ohana-development.com</a></li>
                            </ul>
                        </nav>
                        <p class="lead">Landmark Tower 64th floor, Al Hisn Street, Abu Dhabi, UAE</p>
                        <a href="javascript:" class="btn btn-gold-border">Get Directions</a>
                    </div>
                    <div class="locationContent animate fadein-Left" data-delay="0.3s">
                        <div class="locHeading">Beirut - Lebanon</div>
                        <nav>
                            <ul class="contactInfo">
                                <li><a href="tel:+9613030505">+961 3 030 505</a></li>
                                <li><a href="mailto:info@ohana-development.com">info@ohana-development.com</a></li>
                            </ul>
                        </nav>
                        <p class="lead">Downtown, Al Lenbi Street, Bldg. 136, 2nd Floor, Beirut, Lebanon.</p>
                        <a href="javascript:" class="btn btn-gold-border">Get Directions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourLocationSection">
        <div class="container-s">
            <div class="custom-row align-item-center">
                <div class="col_12 col_md_5">
                    <div class="ourLocationHeading animate fadein-Up" data-delay="0.2s">
                        <h3 class="text-upper blueColor">Our Locations</h3>
                    </div>
                </div>
                <div class="col_12 col_md_7">
                    <nav class="mapTabs animate fadein-Up" data-delay="0.3s">
                        <ul>
                            <li class="active"><a href="javascript:">Abu Dhabi - UAE</a></li>
                            <li><a href="javascript:">Beirut - Lebanon</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="custom-row">
                <div class="col_12">
                    <div class="mapTabWrapper animate fadein-Up" data-delay="0.3s">
                        <div class="mapTabContent">
                            <img src="/assets/images/map.jpg" alt="" class="img-hack" />
                        </div>
                        <div class="mapTabContent" style="display: none;">
                            <img src="/assets/images/map.jpg" alt="" class="img-hack" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="discoverSection">
        <div class="imageBg" style="background-image: url('/assets/images/discover-img.jpg')"></div>
        <div class="container-s">
            <div class="custom-row justify-content-between align-item-end">
                <div class="col_12 col_lg_6 col_xl_6">
                    <div class="discoverHeading animate fadein-Up" data-delay="0.2s">
                        <h3 class="text-upper">Discover Our Highlighted Projects</h3>
                    </div>
                </div>
                <div class="col_12 col_lg_5 col_xl_4">
                    <div class="discoverTxt animate fadein-Up" data-delay="0.3s">
                        <p class="lead">Explore our curated selection of featured projects and find your perfect property today.</p>
                        <a href="javascript:" class="btn btn-gold-border">View Our Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faqSection">
        <div class="videoBg">
            <video autoplay loop playsinline muted>
                <source src="/assets/videos/news-video.mp4" type="video/mp4">
            </video>
            <div class="videoBgOverly"></div>
        </div>
        <div class="container-s">
            <div class="custom-row justify-content-center">
                <div class="col_12 col_lg_10 col_xl_10">
                    <div class="faqHeading animate fadein-Up" data-delay="0.2s">
                        <h3 class="text-upper text-center m-0">FAQ</h3>
                    </div>
                    <div class="faqAccordions animate fadein-Up" data-delay="0.3s">
                        <div class="accordionItem active">
                            <div class="accordionTitle">
                                <span>Do you offer any payment facilities?</span>
                                <i></i>
                            </div>
                            <div class="accordionContent">
                                <p>Absolutely. Because at Ohana Development, we believe that everyone deserves to live in luxury, so we offer flexible payment plans that can be scheduled for up to 4 years.</p>
                            </div>
                        </div>
                        <div class="accordionItem">
                            <div class="accordionTitle">
                                <span>Do you provide any assistance if we want to relocate to the uae?</span>
                                <i></i>
                            </div>
                            <div class="accordionContent">
                                <p>Absolutely. Because at Ohana Development, we believe that everyone deserves to live in luxury, so we offer flexible payment plans that can be scheduled for up to 4 years.</p>
                            </div>
                        </div>
                        <div class="accordionItem">
                            <div class="accordionTitle">
                                <span>Do you accept cryptocurrency payments?</span>
                                <i></i>
                            </div>
                            <div class="accordionContent">
                                <p>Absolutely. Because at Ohana Development, we believe that everyone deserves to live in luxury, so we offer flexible payment plans that can be scheduled for up to 4 years.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?php include '../includes/footer.php'; ?>

<!-- Sticky Button -->
<?php include '../includes/sticky-buttons.php'; ?>

<?php include '../includes/scripts.php'; ?>
</body>
</html>