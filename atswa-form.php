<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATSWA Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- SideBar -->
            <div class="col-md-3 p-3 sidebar text-white">
            <h4 class="text-center py-2" style="text-decoration: underline">ATS TUTORIAL FEES</h4>
            <h6 class="text-center">PLEASE MAKE YOUR PAYMENT USING THE FOLLOWING ACCOUNT DETAILS :</h6>
                <p class="text-center pt-3">1. TREASUREHALL TRAINING</p>
                <p class="text-center">ZENITH BANK</p>
                <p class="text-center">A/C 1014002945</p>

                <p class="text-center pt-3">2. TREASUREHALL TRAINING</p>
                <p class="text-center">GT BANK</p>
                <p class="text-center">A/C 0168432779</p>

                <p class="text-center pt-3">3. TREASUREHALL TRAINING</p>
                <p class="text-center">ACCESS BANK</p>
                <p class="text-center">A/C 0700320475</p>

            <h6 class="text-center py-3">FREE ITEMS :</h6>
                <p class="text-center pt-3">1. BRANDED NOTEBOOKS</p>
                <p class="text-center">2. BRANDED PEN</p>
                <p class="text-center">3. CAREER AND STUDY ADVISORY</p>
                <p class="text-center">4. ENLISTMENT ON JOB/IT PLACEMENT</p>
                <p class="text-center">5. FREE READING SPACE EVERY DAY OF THE WEEK</p>
                <p class="text-center">6. PROCESING OF ICAN SCHOLARSHIP (FOR PRIZE WINNERS)</p>

                <h6 class="text-center py-3">SUBSIDIZED/SUPPORT ITEMS :</h6>
                <p class="text-center pt-3">1. EXEMPTION PROCESSING FOR ND HOLDERS</p>
                <p class="text-center">2. STUDENTS REGISTRATION WITH ATSWA/ICAN</p>
                <p class="text-center">3. EXAM REGISTRATION</p>
                <p class="text-center">4. PHOTOCOPY</p>
                <p class="text-center">5. MEAL</p>

                <h6 class="text-center py-1">60% DOWN PAYMENT, 40% NEXT 30 DAYS.</h6>
                <h6 class="text-center py-1">ADMIN FEE : N3,000 ONLY</h6>
                <h6 class="text-center py-1">NO PART PAYMENT AFTER 2 MONTHS OF THE DIET. </h6>
                <h6 class="text-center py-1">REFUND OF 50% OF TUTORIAL FEE TO PRIZE WINNERS</h6>

            </div> <!-- SideBar -->

            <!-- Main Content -->
            <div class="col-md-9 p-3 main-content">
                <div class="container">
                    <!-- <div class="py-5 text-center">
                        <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                        <h2>Checkout form</h2>
                        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                    </div> -->

                    <div class="row">
                        <!-- <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Your cart</span>
                                <span class="badge badge-secondary badge-pill">3</span>
                            </h4>
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Product name</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$12</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Second product</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$8</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Third item</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">$5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between bg-light">
                                    <div class="text-success">
                                        <h6 class="my-0">Promo code</h6>
                                        <small>EXAMPLECODE</small>
                                    </div>
                                    <span class="text-success">-$5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (USD)</span>
                                    <strong>$20</strong>
                                </li>
                            </ul>

                            <form class="card p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Promo code">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                        <div class="col-md-12 order-md-1">
                            <h3 class="mb-3 font-weight-bold text-center">ATSWA REGISTRATION FORM</h3>
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <!-- <label for="firstName">First name</label> -->
                                        <input type="text" class="form-control" id="firstName" placeholder="FIRST NAME" value="" name="first_name" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <!-- <label for="lastName">Last name</label> -->
                                        <input type="text" class="form-control" id="lastName" placeholder="LAST NAME" value="" name="last_name" required>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="icanRegNum" placeholder="ATSWA REGISTRATION NUMBER" value="" name="first_name" required>
                                        <div class="invalid-feedback">
                                            Valid ican registration number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="nyscCode" placeholder="NYSC GM/CODE" value="" name="last_name" required>
                                        <div class="invalid-feedback">
                                            Valid nysc gm/code is required.
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="diet" class="font-weight-bold text-muted mr-3">DIET:</label>
                                        <input type="radio" name="weekday" id="weekday"> WEEKDAY
                                        <input type="radio" name="weekday" id="weekend"> WEEKEND
                                        <div class="invalid-feedback">
                                            Valid is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="gender" class="font-weight-bold text-muted mr-3">GENDER</label>
                                        <input type="radio" name="gender" id="genderMale"> MALE
                                        <input type="radio" name="gender" id="genderFemale"> FEMALE
                                        <div class="invalid-feedback">
                                            Valid is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="status" class="font-weight-bold text-muted mr-3">MARITAL STATUS</label>
                                        <input type="radio" name="status" id="single"> Single
                                        <input type="radio" name="status" id="married"> Married
                                        <div class="invalid-feedback">
                                            Valid ican registration number is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="phoneNumber" placeholder="PHONE NUMBER" value="" name="phone_number" required>
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="otherNumber" placeholder="OTHER" name="other_number">
                                        <div class="invalid-feedback">
                                            Valid nysc gm/code is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <!-- <label for="firstName">First name</label> -->
                                        <input type="text" class="form-control" id="sponsor" placeholder="SPONSOR" value="" name="sponsor">
                                        <div class="invalid-feedback">
                                            Valid sponsor name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="self_sponsor" class="font-weight-bold text-muted mr-3">SELF SPONSOR</label>
                                        <input type="checkbox" name="self_sponsor" id="selfSponsor">
                                        <div class="invalid-feedback">
                                            Valid nysc gm/code is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="employer" placeholder="EMPLOYER" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        valid employer name is required.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="address" placeholder="HOME ADDRESS" required>
                                    <div class="invalid-feedback">
                                        Please enter your home address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="EMAIL ADDRESS" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="qualifications" placeholder="QUALIFICATIONS" required>
                                </div>

                                <h5 class="mt-5 font-weight-bold" style="text-decoration: underline">COURSES REGISTERED</h5>
                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">ATSWA I</h6>
                                <div class="row" id="atswa-i-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="economics" id="economics">
                                        <label for="economics" class="mr-3">ECONOMICS</label> <span id="economicsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="business" id="business">
                                        <label for="business" class="mr-3">BUSINESS LAW</label> <span id="businessPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="basic_accounting" id="basicAccounting">
                                        <label for="basic accounting" class="mr-3">BASIC ACCOUNTING</label> <span id="basicAccountingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="communicating_skills" id="communicatingSkills">
                                        <label for="communicating skills" class="mr-3">COMMUNICATING SKILLS</label> <span id="communicatingSkillsPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">ATSWA II</h6>
                                <div class="row" id="atswa-ii-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="financial_accounting" id="financialAccounting">
                                        <label for="financial accounting" class="mr-3">FINANCIAL ACCOUNTING</label> <span id="financialAccountingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="information_technology" id="informationTechnology">
                                        <label for="information technology" class="mr-3">INFORMATION TECHNOLOGY</label> <span id="informationTechnologyPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="public_sector" id="publicSectorAcc">
                                        <label for="public sector accounting" class="mr-3">PUBLIC SECTOR ACCOUNTING</label> <span id="publicSectorAccPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="quantitative_analysis" id="quantitativeAnalysis">
                                        <label for="quantitative analysis" class="mr-3">QUANTITATIVE ANALYSIS</label> <span id="quantitativeAnalysisPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">ATSWA III</h6>
                                <div class="row" id="atswa-iii-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="management" id="management">
                                        <label for="management" class="mr-3">MANAGEMENT</label> <span id="managementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="costing" id="costing">
                                        <label for="costing" class="mr-3">COSTING</label> <span id="costingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="tax" id="tax">
                                        <label for="tax" class="mr-3">TAX</label> <span id="taxPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="principles_auditing" id="principlesAuditing">
                                        <label for="principles of auditing" class="mr-3">PRINCIPLES OF AUDITING</label> <span id="principlesAuditingPrice"> </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3 courses-selected">
                                       <h6>ATSWA I</h6>
                                       <p class="font-weight-bold">Number of papers: <span id="atswa-i-papers">0</span></p>
                                       <h6>AMOUNT (₦)</h6>
                                       <p class="font-weight-bold" id="atswa-i-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>ATSWA II</h6>
                                        <p class="font-weight-bold">Number of papers:<span id="atswa-ii-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="atswa-ii-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>ATSWA III</h6>
                                        <p class="font-weight-bold">Number of papers:<span id="atswa-iii-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="atswa-iii-amount">0</p>
                                    </div>
                                    <div class="col-md-3 mb-3 courses-selected" id="ican-total-amount-selected">
                                        <h6>TOTAL AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="atswa-total-amount">0</p>
                                        <p class="font-weight-bold">Number of papers: <span id="atswa-total-papers">0</span>  </p>
                                    </div>
                                </div>

                                <h6 class="mt-5 font-weight-bold text-center" style="text-decoration: underline">HOW YOU GOT TO KNOW ABOUT THIS TRAINING</h6>

                                <div class="row py-3">
                                    <div class="col-md-12 mb-3">
                                        <label><input type="radio" name="training" value="card" required> FLYER</label>
                                        <label><input type="radio" name="training" value="newspaper"> NEWSPAPER</label>
                                        <label><input type="radio" name="training" value="website"> WEBSITE</label>
                                        <label><input type="radio" name="training" value="instagram"> INSTAGRAM</label>
                                        <label><input type="radio" name="training" value="facebook"> FACEBOOK</label>
                                        <label><input type="radio" name="training" value="twitter"> TWITTER</label>
                                        <label><input type="radio" name="training" value="sms"> SMS/EMAIL</label>
                                        <label><input type="radio" name="training" value="nysc"> NYSC VENUE</label>
                                        <label><input type="radio" name="training" value="friend"> A FRIEND</label>
                                        <label><input type="radio" name="training" value="signage"> SIGNAGE</label>
                                        <label for="validationServer01">OTHER</label>
                                        <input type="text" class="form-control" placeholder="PLEASE SPECIFY" id="validationServer01" value="">
                                    </div>
                                </div>
                                <div class="error" id="paymentErr"></div>

                                <div class="form-inline">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="validCheck3" required>
                                        <label class="form-check-label" for="validCheck3">
                                            <strong>I have read and agreed to the</strong><a href="terms.php" class="pl-1"> terms and conditions</a>
                                        </label>
                                        <div class="error" id="termsErr"></div>
                                    </div>
                                </div><br>
                    
                                <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button> -->
                                <button class="btn btn-lg btn-block btn-outline-primary">Proceed To Check Out</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- Main Content -->
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="./js/atswa.js"></script>
        <script src="./js/validation.js"></script>
</body>

</html>