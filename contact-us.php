<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Feel free to contact our team for any questions regarding VEVS websites and services. We would love to help you bring your business to a higher level."
          name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>VEVS Website Builder: Contact Customer Support</title>
    <?php require_once 'include/css.php'; ?>
</head>
<body>
<div class="wrapper">
    <?php require_once 'include/navbar.php'; ?>

    <div class="intro intro-background" data-src="app/web/img/site/media/catalogue.jpg"
         style="background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="shell">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="h1">Contact Us</h1>
                    <p class="no-margins">If you need any help or additional info about our products and services, just
                        complete the form below and our friendly support team will contact you shortly!</p>
                    <div class="d-flex justify-content-center gap-1 mt-1">
                        <div>
                            <div class="contact-support mb-0">
                                <div class="contact-support-image">
                                    <picture>
                                        <source srcset="app/web/img/site/media/marina.webp" type="image/webp">
                                        <img alt="Marina" src="app/web/img/site/media/marina.jpg">
                                    </picture>
                                </div>
                                <p class="text-white mb-0">Marina</p>
                            </div>
                        </div>
                        <div>
                            <div class="contact-support mb-0">
                                <div class="contact-support-image">
                                    <picture>
                                        <source srcset="app/web/img/site/media/krasimir-dimov.webp" type="image/webp">
                                        <img alt="Krasimir Dimov" src="app/web/img/site/media/krasimir-dimov.png">
                                    </picture>
                                </div>
                                <p class="text-white mb-0">Krasi</p>
                            </div>
                        </div>
                        <div>
                            <div class="contact-support mb-0">
                                <div class="contact-support-image">
                                    <picture>
                                        <source srcset="app/web/img/site/media/martin-nikolaev.webp" type="image/webp">
                                        <img alt="Martin Nikolaev" src="app/web/img/site/media/martin-nikolaev.png">
                                    </picture>
                                </div>
                                <p class="text-white mb-0">Martin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="shell">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="contact-form" id="contact-form-top">
                        <form accept-charset="utf-8" action="/contact-us.html" id="frmContact" method="post">
                            <input name="do_contact" type="hidden" value="1">
                            <input name="token" type="hidden"
                                   value="MTY2ODMyMzU5N2VlNDY4OTQwZDBkYTZlYjBmNmY5ODRkMjdhODZkNzMw">
                            <div class="px-2 pb-1 pt-1">
                                <h3 class="h4 text-primary">Are you a VEVS client?</h3>
                            </div>
                            <div class="d-flex align-items-center gap-2 px-2">
                                <div>
                                    <div class="radio">
                                        <input checked id="vevs_client_0" name="vevs_client" type="radio" value="0">
                                        <label class="radio-label" for="vevs_client_0">No, I do not have a VEVS website
                                            yet</label>
                                    </div>
                                </div>
                                <div>
                                    <div class="radio">
                                        <input id="vevs_client_1" name="vevs_client" type="radio" value="1">
                                        <label class="radio-label" for="vevs_client_1">Yes, I have a VEVS
                                            website</label>
                                    </div>
                                </div>
                            </div>
                            <div class="cl-hr-line-dashed"></div>
                            <div class="hidden pt-1" id="box-vevs-client-1">
                                <div class="form-group">
                                    <label class="control-label" for="vevs_website">Website URL</label>
                                    <input class="form-control-lg" id="vevs_website" maxlength="255" name="vevs_website"
                                           placeholder="https://" required type="text" value="">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="vevs_name">Name</label>
                                            <input class="form-control-lg" id="vevs_name" maxlength="255"
                                                   name="vevs_name"
                                                   required type="text" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="vevs_email">Your Email</label>
                                            <input class="form-control-lg" id="vevs_email" maxlength="255"
                                                   name="vevs_email" required type="email" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="box-vevs-client-0">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="px-2 pb-1 pt-1">
                                            <h3 class="h4 text-primary">I'm interested in</h3>
                                        </div>
                                        <div class="form-group">
                                            <div class="select select-lg select-block w-100">
                                                <select id="industry" name="industry" required>
                                                    <option value="">-- Choose --</option>
                                                    <option value="26">Bike &amp; ATV Rental Website</option>
                                                    <option value="28">Boat Rental Website</option>
                                                    <option value="30">Business Website</option>
                                                    <option value="2">Car Dealer Website</option>
                                                    <option value="8">Car Parking Website</option>
                                                    <option value="1">Car Rental Website</option>
                                                    <option value="27">Caravan &amp; Camper Rental Website</option>
                                                    <option value="29">Equipment Rental Website</option>
                                                    <option value="7">Holiday Property Website</option>
                                                    <option value="10">Hotel Website</option>
                                                    <option value="5">Real Estate Website</option>
                                                    <option value="9">Shuttle &amp; Taxi Website</option>
                                                    <option value="3">Vacation Rental Website</option>
                                                    <option value="33">Yacht Brokerage Website</option>
                                                    <option value="34">Yacht Charter Website</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cl-hr-line-dashed"></div>
                                <div class="px-2 pb-2 pt-1">
                                    <h3 class="h4 text-primary">Personal Details</h3>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <div class="select select-lg select-block" style="width: auto">
                                                <select id="title" name="title" required>
                                                    <option value="mr">Mr</option>
                                                    <option value="miss">Miss</option>
                                                    <option value="mrs">Mrs</option>
                                                    <option value="ms">Ms</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row pb-1">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label" for="first_name">First Name</label>
                                                    <input class="form-control-lg" id="first_name" maxlength="255"
                                                           name="first_name" required type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group mb-2">
                                                    <label class="control-label" for="last_name">Last Name</label>
                                                    <input class="form-control-lg" id="last_name" maxlength="255"
                                                           name="last_name" required type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 hidden">
                                                <div class="form-group mb-2">
                                                    <label class="control-label" for="address">Address</label>
                                                    <input class="form-control-lg" id="address" maxlength="255"
                                                           name="address" required type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <label class="control-label">I prefer to be contacted by</label>
                                    <div>
                                        <div class="radio">
                                            <input checked id="through_phone" name="through" type="radio" value="phone">
                                            <label class="radio-label" for="through_phone">Call</label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="radio">
                                            <input id="through_email" name="through" type="radio" value="email">
                                            <label class="radio-label" for="through_email">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-2">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="email">Your Email</label>
                                            <input class="form-control-lg" id="email" maxlength="255" name="email"
                                                   required type="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label" for="phone">Phone</label>
                                            <input class="form-control-lg" id="phone" maxlength="255" name="phone"
                                                   required type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="section-bg p-2 pb-1 border-radius-1 mb-2">
                                    <div class="pb-2">
                                        <h3 class="h4 text-primary">Business Details</h3>
                                        <div class="contact-entry">
                                            <p>Tell us more about your business so we can offer the optimal solution to
                                                your needs.</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="company_name">Company Name</label>
                                                <input class="form-control-lg" id="company_name" maxlength="255"
                                                       name="company_name" required type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="company_website">Current
                                                    website</label>
                                                <input class="form-control-lg" id="company_website" maxlength="255"
                                                       name="company_website" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="country">Country</label>
                                                <div class="select select-lg select-block w-100">
                                                    <select id="country" name="country" required>
                                                        <option value="">-- Select --</option>
                                                        <option value="Afghanistan">Afghanistan</option>
                                                        <option value="&Aring;land Islands">&Aring;land Islands</option>
                                                        <option value="Albania">Albania</option>
                                                        <option value="Algeria">Algeria</option>
                                                        <option value="American Samoa">American Samoa</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Angola">Angola</option>
                                                        <option value="Anguilla">Anguilla</option>
                                                        <option value="Antarctica">Antarctica</option>
                                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                                        <option value="Bonaire">Bonaire</option>
                                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                        </option>
                                                        <option value="Botswana">Botswana</option>
                                                        <option value="Bouvet Island">Bouvet Island</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="British Indian Ocean Territory">British Indian
                                                            Ocean Territory
                                                        </option>
                                                        <option value="British Virgin Islands">British Virgin Islands
                                                        </option>
                                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Cambodia">Cambodia</option>
                                                        <option value="Cameroon">Cameroon</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Cape Verde">Cape Verde</option>
                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                        <option value="Central African Republic">Central African
                                                            Republic
                                                        </option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Chile">Chile</option>
                                                        <option value="China">China</option>
                                                        <option value="Christmas Island">Christmas Island</option>
                                                        <option value="Cocos Islands">Cocos Islands</option>
                                                        <option value="Colombia">Colombia</option>
                                                        <option value="Comoros">Comoros</option>
                                                        <option value="Congo">Congo</option>
                                                        <option value="Cook Islands">Cook Islands</option>
                                                        <option value="Costa Rica">Costa Rica</option>
                                                        <option value="C&ocirc;te d&#039;Ivoire">C&ocirc;te d&#039;Ivoire</option>
                                                        <option value="Croatia">Croatia</option>
                                                        <option value="Cuba">Cuba</option>
                                                        <option value="Cura&ccedil;ao">Cura&ccedil;ao</option>
                                                        <option value="Cyprus">Cyprus</option>
                                                        <option value="Czech Republic">Czech Republic</option>
                                                        <option value="Denmark">Denmark</option>
                                                        <option value="Djibouti">Djibouti</option>
                                                        <option value="Dominica">Dominica</option>
                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                        <option value="DR Congo">DR Congo</option>
                                                        <option value="Ecuador">Ecuador</option>
                                                        <option value="Egypt">Egypt</option>
                                                        <option value="El Salvador">El Salvador</option>
                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Ethiopia">Ethiopia</option>
                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                        <option value="Fiji">Fiji</option>
                                                        <option value="Finland">Finland</option>
                                                        <option value="France">France</option>
                                                        <option value="French Guiana">French Guiana</option>
                                                        <option value="French Polynesia">French Polynesia</option>
                                                        <option value="French Southern Territories">French Southern
                                                            Territories
                                                        </option>
                                                        <option value="Gabon">Gabon</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Gibraltar">Gibraltar</option>
                                                        <option value="Greece">Greece</option>
                                                        <option value="Greenland">Greenland</option>
                                                        <option value="Grenada">Grenada</option>
                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                        <option value="Guam">Guam</option>
                                                        <option value="Guatemala">Guatemala</option>
                                                        <option value="Guernsey">Guernsey</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                        <option value="Guyana">Guyana</option>
                                                        <option value="Haiti">Haiti</option>
                                                        <option value="Heard Island and McDonald Islands">Heard Island
                                                            and McDonald Islands
                                                        </option>
                                                        <option value="Holy See">Holy See</option>
                                                        <option value="Honduras">Honduras</option>
                                                        <option value="Hong Kong">Hong Kong</option>
                                                        <option value="Hungary">Hungary</option>
                                                        <option value="Iceland">Iceland</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Iran">Iran</option>
                                                        <option value="Iraq">Iraq</option>
                                                        <option value="Ireland">Ireland</option>
                                                        <option value="Isle of Man">Isle of Man</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Jamaica">Jamaica</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Jersey">Jersey</option>
                                                        <option value="Jordan">Jordan</option>
                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                        <option value="Lao People&#039;s Democratic Republic">Lao People&#039;s
                                                            Democratic Republic
                                                        </option>
                                                        <option value="Latvia">Latvia</option>
                                                        <option value="Lebanon">Lebanon</option>
                                                        <option value="Lesotho">Lesotho</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libya">Libya</option>
                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lithuania">Lithuania</option>
                                                        <option value="Luxembourg">Luxembourg</option>
                                                        <option value="Macao">Macao</option>
                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malawi">Malawi</option>
                                                        <option value="Malaysia">Malaysia</option>
                                                        <option value="Maldives">Maldives</option>
                                                        <option value="Mali">Mali</option>
                                                        <option value="Malta">Malta</option>
                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                        <option value="Martinique">Martinique</option>
                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mauritius">Mauritius</option>
                                                        <option value="Mayotte">Mayotte</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Micronesia">Micronesia</option>
                                                        <option value="Moldova">Moldova</option>
                                                        <option value="Monaco">Monaco</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Montenegro">Montenegro</option>
                                                        <option value="Montserrat">Montserrat</option>
                                                        <option value="Morocco">Morocco</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Myanmar">Myanmar</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nepal">Nepal</option>
                                                        <option value="Netherlands">Netherlands</option>
                                                        <option value="New Caledonia">New Caledonia</option>
                                                        <option value="New Zealand">New Zealand</option>
                                                        <option value="Nicaragua">Nicaragua</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Niue">Niue</option>
                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                        <option value="North Korea">North Korea</option>
                                                        <option value="North Macedonia">North Macedonia</option>
                                                        <option value="Northern Mariana Islands">Northern Mariana
                                                            Islands
                                                        </option>
                                                        <option value="Norway">Norway</option>
                                                        <option value="Oman">Oman</option>
                                                        <option value="Pakistan">Pakistan</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Palestine">Palestine</option>
                                                        <option value="Panama">Panama</option>
                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                        <option value="Paraguay">Paraguay</option>
                                                        <option value="Peru">Peru</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Pitcairn">Pitcairn</option>
                                                        <option value="Poland">Poland</option>
                                                        <option value="Portugal">Portugal</option>
                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                        <option value="Qatar">Qatar</option>
                                                        <option value="R&eacute;union">R&eacute;union</option>
                                                        <option value="Romania">Romania</option>
                                                        <option value="Russian Federation">Russian Federation</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Saint Barth&eacute;lemy">Saint
                                                            Barth&eacute;lemy
                                                        </option>
                                                        <option value="Saint Helena">Saint Helena</option>
                                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                        </option>
                                                        <option value="Saint Lucia">Saint Lucia</option>
                                                        <option value="Saint Martin array(French part)">Saint Martin
                                                            array(French part)
                                                        </option>
                                                        <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                            Miquelon
                                                        </option>
                                                        <option value="Saint Vincent and the Grenadines">Saint Vincent
                                                            and the Grenadines
                                                        </option>
                                                        <option value="Samoa">Samoa</option>
                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Sao Tome and Principe">Sao Tome and Principe
                                                        </option>
                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Seychelles">Seychelles</option>
                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                        <option value="Singapore">Singapore</option>
                                                        <option value="Sint Maarten">Sint Maarten</option>
                                                        <option value="Slovakia">Slovakia</option>
                                                        <option value="Slovenia">Slovenia</option>
                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="South Georgia and the South Sandwich Islands">
                                                            South Georgia and the South Sandwich Islands
                                                        </option>
                                                        <option value="South Korea">South Korea</option>
                                                        <option value="South Sudan">South Sudan</option>
                                                        <option value="Spain">Spain</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Sudan">Sudan</option>
                                                        <option value="Suriname">Suriname</option>
                                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="Swaziland">Swaziland</option>
                                                        <option value="Sweden">Sweden</option>
                                                        <option value="Switzerland">Switzerland</option>
                                                        <option value="Syrian Arab Republic">Syrian Arab Republic
                                                        </option>
                                                        <option value="Taiwan">Taiwan</option>
                                                        <option value="Tajikistan">Tajikistan</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Timor-Leste">Timor-Leste</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Tokelau">Tokelau</option>
                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                        <option value="Tunisia">Tunisia</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                        <option value="Turks and Caicos Islands">Turks and Caicos
                                                            Islands
                                                        </option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                        <option value="United States Minor Outlying Islands">United
                                                            States Minor Outlying Islands
                                                        </option>
                                                        <option value="Uruguay">Uruguay</option>
                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                                        <option value="Venezuela">Venezuela</option>
                                                        <option value="Viet Nam">Viet Nam</option>
                                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                        <option value="Western Sahara">Western Sahara</option>
                                                        <option value="Yemen">Yemen</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label" for="position">Your position in the
                                                    company</label>
                                                <input class="form-control-lg" id="position" maxlength="255"
                                                       name="position"
                                                       required type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="box-script-fields"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message">Your question</label>
                                <textarea class="form-control-lg" cols="30" id="message" name="message" required
                                          rows="10"></textarea>
                            </div>
                            <div class="hidden" id="box-vevs-client-1-sreq">
                                <label class="control-label">Service Required</label>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <div class="select select-lg select-block w-100">
                                                <select id="service_required" name="service_required" required>
                                                    <option value="standard">Standard Support</option>
                                                    <option value="premium">Premium Support</option>
                                                    <option value="assistance">Live Online Assistance</option>
                                                    <option value="training">On-boarding Training</option>
                                                    <option value="initial_setup">Initial Setup</option>
                                                    <option value="advanced_setup">Advanced Setup</option>
                                                    <option value="premium_support">Premium Setup</option>
                                                    <option value="custom_mod">Custom Modification</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 service-required-box">
                                        <p class="active" data-key="standard">We are always here for you! Get FREE
                                            technical assistance via our ticket-based support system in up to 48 hours.
                                            Have access to numerous video tutorials & knowledge base. <a
                                                    href="/customer-care.html"
                                                    target="_blank">See
                                                the details.</a></p>
                                        <p data-key="premium">Subscribe to our Premium support service, and you will be
                                            assigned a dedicated account manager, receive priority support via our
                                            ticket-based support system, and enjoy numerous other advantages. <a
                                                    href="/customer-care.html" target="_blank">See
                                                the details.</a></p data-key="">
                                        <p data-key="assistance">Do you find texting to not work for you? That is
                                            perfectly fine! Purchase our Live Online Assistance service, and we will
                                            advise and assist you online with all of your concerns via live call. <a
                                                    href="/customer-care.html" target="_blank">See
                                                the details.</a></p>
                                        <p data-key="training">You don't have to be IT savvy to build a stunning
                                            website. With our Onboarding Training service, our expert team will
                                            demonstrate and teach you how to quickly and easily create your dream
                                            website. <a href="/customer-care.html" target="_blank">See
                                                the details.</a></p>
                                        <p data-key="initial_setup">Let's get your website up and running with the FREE
                                            Initial Setup service. We will make the domain setup & connection, the email
                                            account setup and the SMTP settings configuration. <a
                                                    href="/website-setup.html"
                                                    target="_blank">See
                                                the details.</a></p>
                                        <p data-key="advanced_setup">Get the Advanced Setup package, and we will assist
                                            you with anything you need to properly set up your website, including
                                            website settings setup, the configuration of the business software and many
                                            more. <a href="/website-setup.html" target="_blank">See
                                                the details.</a></p>
                                        <p data-key="premium_support">You don't have to worry about anything! Request
                                            the Premium Setup service, and we will ultimately build your website from A
                                            to Z! This includes custom tweaks to the business software, content upload
                                            and many more. <a href="/website-setup.html" target="_blank">See
                                                the details.</a></p>
                                        <p data-key="custom_mod">Let's discuss your specific needs and give you a quote
                                            to make all necessary custom adjustments for a solution that is tailored to
                                            your business. <a href="/custom-modifications.html" target="_blank">See
                                                the details.</a></p>
                                    </div>
                                </div>
                            </div>
                            <label class="control-label">Captcha:</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="x-captcha" data-x-family="Raleway"
                                         data-x-path="core/third-party/x-captcha/1.0.6/"
                                         data-x-width="100%"></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-actions">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs-container tabs-reservations m-b-lg">
        <div class="bar-address">
            <div class="shell">
                <ul class="row" role="tablist">
                    <li class="col-md-4 active" role="presentation">
                        <div class="address">
                            <a data-city="varna" href="#"></a>
                            <h3 class="h4">Head office</h3>
                            <p>109A Tsar Osvoboditel Blvd.<br>Varna 9000, Bulgaria</p>
                        </div>
                    </li>
                    <li class="col-md-4" role="presentation">
                        <div class="address">
                            <a data-city="burgas" href="#"></a>
                            <h3 class="h4">Administrative office</h3>
                            <p>4 Baba Ganka Sq.<br>Burgas 8000, Bulgaria</p>
                        </div>
                    </li>
                    <li class="col-md-4" role="presentation">
                        <div class="address">
                            <a data-city="hcmc" href="#"></a>
                            <h3 class="h4">Branch office</h3>
                            <p>20 Song Thao, Tan Binh District,<br>Ho Chi Minh City, Vietnam</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div data-key="AIzaSyBa0XbgftPlKQzvJYQ-jyKwz5BtF9R780U" id="map-canvas"
             style="width: 100%; height: 393px"></div>
    </div>
    <div class="push"></div>
</div>
<?php require_once 'include/footer.php'; ?>

<?php require_once 'include/js.php'; ?>
</body>
</html>
