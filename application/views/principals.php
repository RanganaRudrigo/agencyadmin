<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php $this->view('inc/header_top.php'); ?>
</head>

<body class="dark">
<div id="wrapper" class="clearfix">
    <!-- preloader -->


    <!-- Header -->
    <header id="header" class="header">
        <?php $this->view('inc/main_menu.php'); ?>
    </header>

    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
            <div class="container pt-90 pb-50">
                <!-- Section Content -->
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">Foreign Principals</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <section id="about">
            <div class="container">
                <div class="section-content">
                    <div class="row mt-50">
                        <div class="col-md-5">
                            <div class="class-item1">
                                <div class="thumb"> <a href="#">
                                        <img class="img-responsive img-fullwidth mb-20" src="http://placehold.it/450x450" alt="..."></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 mt-20">
                            <div class="caption"> <span class="text-uppercase letter-space-4 mb-10 text-theme-colored">Best Services We Provided </span>
                                <h3 class="text-uppercase text-theme-colored font-weight-600 letter-space-2 mt-5">Whell Alignment</h3>
                                <p> Quam distinctio quis perspiciatis facere accusamus perferendis eligendi odit cum nemo fugit, tenetur sequi expedita earum nobis optio tempora id repellendus? Tempora illo ad, magni iusto quas, rerum debitis id et nisi eius quod dolor eos repudiandae perferendis, consequuntur illum alias. Molestiae provident voluptate corporis quae numquam eos earum porro quia officia, maiores magni accusantium iusto similique tempora.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam corrupti quam veritatis deleniti, suscipit quo at porro! Magni modi ipsam eveniet natus architecto corporis tempore debitis dolorum sint soluta magnam, necessitatibus eaque velit nostrum id fuga ad, laborum consequuntur voluptatibus nam? Incidunt temporibus obcaecati veritatis facere accusantium provident non quibusdam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30 text-justify">
                        <div class="col-md-12">
                            <div class="heading-line-bottom">
                                <h4 class="heading-title">Send us, Your request</h4>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <select name="Country" id="country" class="form-control">
                                            <option selected="selected" value="">Select your country </option>
                                            <option value="Africa">Africa</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Angolia">Angolia</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Burkina">Burkina</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Central_African_Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chana">Chana</option>
                                            <option value="Comoros_Is.">Comoros Is.</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo_(Zaire)">Congo (Zaire)</option>
                                            <option value="Cote_D'Ivoire">Cote D'Ivoire</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="Equatorial_Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea_Bissau">Guinea Bissau</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Sao_Tomi_and_Principe">Sao Tomi and Principe</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra_Leone">Sierra Leone</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South_Africa_Rep.Of">South Africa Rep.Of</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                            <!-- Then the countries for Antarctica -->
                                            <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ Antarctica ------</option>
                                            <option value="Antarctica">Mainland Antarctica</option>
                                            <option value="UK_Is">United Kingdom (Islands only)</option>
                                            <!-- Then the countries for Asia -->
                                            <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  ------ Asia ------</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="China">China</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Israel">Israel and Gaza</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakstan">Kazakstan</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgzstan">Kyrgzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Myanmar_(Burma)">Myanmar (Burma)</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="North_Korea">North Korea</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Phillipines">Phillipines</option>
                                            <option value="Quatar">Quatar</option>
                                            <option value="Russian_Federation">Russian Federation</option>
                                            <option value="Saudi_Arabia">Saudi Arabia</option>
                                            <option value="South_Korea">South Korea</option>
                                            <option value="Sri_Lanka">Sri Lanka</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikstan">Tajikstan</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="United_Arab_Emirates">United Arab Emirates</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Yemen">Yemen</option>
                                            <!-- Then the countries for Australasia -->
                                            <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ Australasia ------</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="France_(Islands_only)">France (Islands only)</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Marshall_Islands">Marshall Islands</option>
                                            <option value="Micronesia_F_S_O">Micronesia, F.S.O</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="New_Zealand">New Zealand</option>
                                            <option value="Papua_New_Guinea">Papua New Guinea</option>
                                            <option value="Solomon_Islands">Solomon Islands</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="UK_Is">United Kingdom (Islands only)</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Western_Samoa">Western Samoa</option>
                                            <!-- Then the countries for Europe -->
                                            <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ Europe ------</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Bosnia_Herzegovina">Bosnia-Herzegovina</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Cape_Verde">Cape Verde</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Czech_Republic">Czech Republic</option>
                                            <option value="Denmark_and_Greenland">Denmark and Greenland</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Ireland">Ireland Rep.Of</option>
                                            <option value="Italy">Italy</option>

                                            <option value="Latvia">Latvia</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian_Federation">Russian Federation</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sweden">Sweden</option>

                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="Yugoslavia">Yugoslavia</option>
                                            <!-- Then the countries for North America -->
                                            <option>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ------ America ------</option>
                                            <option value="Antigua_and_Barbuda">Antigua and Barbuda</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Costa_Rica">Costa Rica</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican_Republic">Dominican Republic</option>
                                            <option value="El_Salvador">El Salvador</option>
                                            <option value="France_Is">France (Islands only)</option>
                                            <option value="Greenland_(Denmark)">Greenland (Denmark)</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Netherlands_Is">Netherlands (Islands only)</option>
                                            <option value="Pacific_Islands_Inc._Hawaii">Pacific Islands Inc. Hawaii</option>
                                            <option value="Panama">Panama</option>
                                            <option value="St_Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St_Lucia">St Lucia</option>
                                            <option value="St_Vincent_and_the_Grenadines">St Vincent and the Grenadines</option>
                                            <option value="Trinidad_and_Tobago">Trinidad and Tobago</option>
                                            <option value="UK_Is">United Kingdom (Islands only)</option>
                                            <option value="USA">United States Of America</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <!-- Then the countries for South America -->
                                            <option value="Argentina">Argentina</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="French_Guiana">French Guiana</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="UK_Is">United Kingdom (Islands only)</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Venezuela">Venezuela</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Telephone</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Fax</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Nature of Business</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control">
                                            <option selected="">Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Job Category</label>
                                        <select name="category" id="category" class="form-control">
                                            <option selected="selected" value="">Select your job Category </option>
                                            <option value="Accountant">Accountant  </option>
                                            <option value="Administrator">Administrator </option>
                                            <option value="Advisor">Advisor </option>
                                            <option value="Agent ">Agent  </option>
                                            <option value="Ambassodor">Ambassodor </option>
                                            <option value="Analyst ">Analyst </option>
                                            <option value="Artist">Artist</option>
                                            <option value="Attendant">Attendant </option>
                                            <option value="Auditor">Auditor </option>
                                            <option value="Baker">Baker </option>
                                            <option value="Barber">Barber </option>
                                            <option value="Beautician">Beautician</option>
                                            <option value="Binder">Binder </option>
                                            <option value="Builder">Builder </option>
                                            <option value="Buttler">Buttler </option>
                                            <option value="Cabin Crew">Cabin Crew </option>
                                            <option value="Carpenter">Carpenter </option>
                                            <option value="Cashier">Cashier </option>
                                            <option value="Chef Cleaner">Chef Cleaner </option>
                                            <option value="Consultant">Consultant </option>
                                            <option value="Controller">Controller </option>
                                            <option value="Cook">Cook </option>
                                            <option value="Coordinator">Coordinator</option>
                                            <option value="Cutter">Cutter</option>
                                            <option value="Delivery Boy">Delivery Boy</option>
                                            <option value="Designer">Designer </option>
                                            <option value="Doctor">Doctor </option>
                                            <option value="Driver">Driver </option>
                                            <option value="Engineer ">Engineer </option>
                                            <option value="Farmer ">Farmer  </option>
                                            <option value="Gardener ">Gardener </option>
                                            <option value="Helper">Helper  </option>
                                            <option value="House Boy ">House Boy </option>
                                            <option value="Housemaid ">Housemaid </option>
                                            <option value="Janitor ">Janitor  </option>
                                            <option value="Labour">Labour </option>
                                            <option value="Labourer ">Labourer  </option>
                                            <option value="Lawyer ">Lawyer </option>
                                            <option value="Lifeguard">Lifeguard </option>
                                            <option value="Machine Operator">Machine Operator</option>
                                            <option value="Manager">Manager</option>
                                            <option value="Marketing Executive">Marketing Executive  </option>
                                            <option value="Mason">Mason</option>
                                            <option value="Nurse ">Nurse  </option>
                                            <option value="Office Boy ">Office Boy </option>
                                            <option value="Painter ">Painter</option>
                                            <option value="Plumber">Plumber</option>
                                            <option value="Pharmacist">Pharmacist</option>
                                            <option value="Room Cleaner">Room Cleaner </option>
                                            <option value="Teacher ">Teacher</option>
                                            <option value="Technician ">Technician </option>
                                            <option value="Therapist ">Therapist </option>
                                            <option value="Typist ">Typist </option>
                                            <option value="Waiter">Waiter </option>
                                            <option value="Watcher">Watcher</option>
                                            <option value="Welder">Welder </option>
                                            <option value="Worker">Worker </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Age</label>
                                        <select name="age" class="form-control" id="age">
                                            <option selected="selected" value="">Select your Age </option>
                                            <option value="18-20">18-20</option>
                                            <option value="21-25">21-25 </option>
                                            <option value="26-30">26-30</option>
                                            <option value="31-35">31-35 </option>
                                            <option value="33-40">33-40 </option>
                                            <option value="41-45">41-45</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Quantity</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Religion</label>
                                        <select name="religion" class="form-control">
                                            <option selected="">Select Religion</option>
                                            <option>Muslim</option>
                                            <option>Non Muslim</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Experience</label>
                                        <select name="experience" class="form-control" id="experience" style="margin-bottom: 7px;">
                                            <option selected="selected" value="">Select your Experience</option>
                                            <option value="None">None </option>
                                            <option value="Local Experience">Local Experience</option>
                                            <option value="Gulf Experience">Gulf Experience</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Salary</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Contract Period</label>
                                        <input class="form-control" type="text">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label>Remarks</label>
                                        <textarea class="form-control" type="text"></textarea>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Register Now</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <!-- Section: Features -->


    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-color="#1f1f1f">
        <?php $this->view('inc/footer_main.php'); ?>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a> </div>
<!-- end wrapper -->

<?php $this->view('inc/footer_js.php'); ?>

</body>
</html>