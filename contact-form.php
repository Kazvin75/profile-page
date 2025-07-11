
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Form | Kazvin's Portfolio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Kazvin">
        <link rel="stylesheet" type="text/css" href="styles/bulma/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="icons/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="icon" type="image/icon" href="images/favicon.ico">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="navbar-brand">
            <div class="navbar-spacing"></div>
                <img class="navbar-item" src="images/navbar-logo.svg">
                <p class="navbar-item">Kazvin</p>
                <a role="button" class="navbar-burger" data-target="globalNavbar">
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                    <span class="hamburger"></span>
                </a>
            </div>
            <div class="navbar-spacing"></div>
            <div id="globalNavbar" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/">
                        <span class="icon has-text-black navbar-item-icons">
                            <i class="mdi mdi-home"></i>
                        </span>
                        <span class="navbar-item-text">Home</span>
                    </a>
                    <a class="navbar-item" href="/about-me">
                        <span class="icon has-text-black navbar-item-icons">
                            <i class="mdi mdi-information-box"></i>
                        </span>
                        <span class="navbar-item-text">About Me</span>
                    </a>
                    <a class="navbar-item" href="/contact-form">
                        <span class="icon has-text-black navbar-item-icons">
                            <i class="mdi mdi-account-box"></i>
                        </span>
                        <span class="navbar-item-text">Contact Form</span>
                    </a>
                </div>
                <div class="navbar-spacing"></div>
                <div class="navbar-end">
                    <a class="navbar-item" href="https://www.facebook.com/thekazvin">
                        <span class="icon has-text-black navbar-item-icons socials-icons">
                            <i class="mdi mdi-facebook"></i>
                        </span>
                        <span class="navbar-item-text socials-text">Facebook</span>
                    </a>
                    <a class="navbar-item" href="https://www.youtube.com/channel/UCHlDxPJGM4md8Aj6zcdsQrA">
                        <span class="icon has-text-black navbar-item-icons socials-icons">
                            <i class="mdi mdi-youtube"></i>
                        </span>
                        <span class="navbar-item-text socials-text">YouTube</span>
                    </a>
                    <a class="navbar-item" href="https://github.com/harith3907">
                        <span class="icon has-text-black navbar-item-icons socials-icons">
                            <i class="mdi mdi-github"></i>
                        </span>
                        <span class="navbar-item-text socials-text">GitHub</span>
                    </a>
                    <a class="navbar-item" href="https://www.linkedin.com/in/kazvin-kyd-aguzar">
                        <span class="icon has-text-black navbar-item-icons socials-icons">
                            <i class="mdi mdi-linkedin"></i>
                        </span>
                        <span class="navbar-item-text socials-text">LinkedIn</span>
                    </a>
                </div>
                <div class="navbar-spacing"></div>
            </div>
        </nav>
        <!-- Contact Form -->
        <form id="contact-form" autocomplete="off" method="POST" action="/mail-message">
            <?= csrf_field() ?>
            <h1 class="title is-1 has-text-centered">Contact Form</h1>
            <div class="columns">
                <div class="column is-3 is-offset-2">
                    <div class="field">
                        <label class="label">First Name</label>
                        <div class="control">
                            <input id="sender-first-name" name="sender-first-name" class="input" type="text" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Last Name</label>
                        <div class="control">
                            <input id="sender-last-name" name="sender-last-name" class="input" type="name" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input id="sender-email" name="sender-email" class="input" type="email" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Phone Number</label>
                        <div class="control">
                            <input id="sender-phone-number" name="sender-phone-number" class="input" type="text" pattern="^\+?[0-9\s\-]{7,15}$" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Company</label>
                        <div class="control">
                            <input id="sender-company" name="sender-company" class="input" type="text" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Country</label>
                        <div class="control">
                            <div class="select">
                                <select id="sender-country" name="sender-country" required>
                                    <option value="" disabled selected hidden>--- Not Selected ---</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
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
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia (Plurinational State of)">Bolivia (Plurinational State of)</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cabo Verde">Cabo Verde</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote d'Ivoire">Côte d'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czechia">Czechia</option>
                                    <option value="Democratic People's Republic of Korea">Democratic People's Republic of Korea</option>
                                    <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
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
                                    <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libya">Libya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia (Federated States of)">Micronesia (Federated States of)</option>
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
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="North Macedonia">North Macedonia</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Republic of Korea">Republic of Korea</option>
                                    <option value="Republic of Moldova">Republic of Moldova</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Sudan">South Sudan</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkiye">Türkiye</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom of Great Britain and Northern Ireland">United Kingdom of Great Britain and Northern Ireland</option>
                                    <option value="United States of America">United States of America</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela (Bolivarian Republic of)">Venezuela (Bolivarian Republic of)</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                    <option value="Other">Other (Non-UN Member State)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-4 is-offset-1">
                    <div class="field">
                        <label class="label">Subject</label>
                        <div class="control">
                            <input id="sender-subject" name="sender-subject" class="input" type="text" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea id="sender-message" name="sender-message" class="textarea" required></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="field">
                        <div class="control">
                            <input id="submit" name="submit" class="input" type="submit" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src="scripts/script.js"></script>
    </body>
</html>