<?php include('citn-process.php'); ?>

<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CITN Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- SideBar -->
            <div class="col-md-3 p-3 sidebar text-white">
            <h4 class="text-center py-2" style="text-decoration: underline">CITN TUTORIAL FEES</h4>
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

                <p class="text-center pt-3">4. TREASUREHALL TRAINING</p>
                <p class="text-center">FIDELITY BANK</p>
                <p class="text-center">A/C 4011337253</p>

                <h6 class="text-center py-1">60% DOWN PAYMENT, 40% NEXT 30 DAYS.</h6>
                <h6 class="text-center py-1">ADMIN FEE : N5,000 ONLY</h6>
                <h6 class="text-center py-1">NO PART PAYMENT AFTER 2 MONTHS OF THE DIET. </h6>
                <h6 class="text-center py-1">REFUND OF 50% OF TUTORIAL FEE TO PRIZE WINNERS</h6>

            </div> <!-- SideBar -->

            <!-- Main Content -->
            <div class="col-md-9 p-3 main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <h3 class="mb-3 font-weight-bold text-center">CITN REGISTRATION FORM</h3>
                            <form class="needs-validation" novalidate>
                                <div id="error_msg" class="mb-5"></div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="firstname" placeholder="FIRST NAME" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="lastname" placeholder="LAST NAME" required>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="regnumber" placeholder="CITN REGISTRATION NUMBER" required>
                                        <span></span>
                                        <div class="invalid-feedback">
                                            Valid ican registration number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="nyscgmcode" placeholder="NYSC GM/CODE" required>
                                        <span></span>
                                        <div class="invalid-feedback">
                                            Valid nysc gm/code is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="options" class="font-weight-bold text-muted mr-3">OPTIONS:</label>
                                        <input type="radio" name="options" class="options" value="weekday" required> WEEKDAY
                                        <input type="radio" name="options" class="options" value="weekend" required> WEEKEND
                                        <div class="invalid-feedback">
                                            Option is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="gender" class="font-weight-bold text-muted mr-3">GENDER</label>
                                        <input type="radio" name="gender" class="gender"  value="male" required> MALE
                                        <input type="radio" name="gender" class="gender"  value="female" required> FEMALE
                                        <div class="invalid-feedback">
                                           Gender is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="status" class="font-weight-bold text-muted mr-3">MARITAL STATUS</label>
                                        <input type="radio" name="status" class="status"  value="single" required> Single
                                        <input type="radio" name="status" class="status"  value="married" required> Married
                                        <div class="invalid-feedback">
                                            Status is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="phonenumber" placeholder="PHONE NUMBER" required>
                                        <div class="invalid-feedback">
                                            Valid phone number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="phonenumber2" placeholder="OTHER" >
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="sponsor" placeholder="SPONSOR" >
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="employer" placeholder="EMPLOYER" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Valid employer name is required.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="homeaddress" placeholder="HOME ADDRESS" required>
                                    <div class="invalid-feedback">
                                        Please enter your home address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="EMAIL ADDRESS" required>
                                    <div class="invalid-feedback">
                                        Valid email address required.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" id="qualifications" placeholder="QUALIFICATIONS" required>
                                    <div class="invalid-feedback">
                                        Valid qualifications required.
                                    </div>
                                </div>

                                <h5 class="mt-5 font-weight-bold" style="text-decoration: underline">COURSES REGISTERED</h5>
                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">FOUNDATION</h6>
                                <div class="row" id="citn-foundation-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="foundations" id="principletaxation" value="principletaxation">
                                        <label for="principletaxation" class="mr-3">PRINCIPLES OF TAXATION</label> <span id="principleTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="foundations" id="accounting" value="accounting">
                                        <label for="accounting" class="mr-3">ACCOUNTING</label> <span id="accountingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="foundations" id="genprinciples" value="genprinciples">
                                        <label for="genprinciples" class="mr-3">GEN PRINCIPLES OF LAW</label> <span id="genPrinciplesPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="foundations" id="economics" value="economics">
                                        <label for="economics" class="mr-3">ECONOMICS</label> <span id="economicsPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">PROF TAX I</h6>
                                <div class="row" id="citn-prof-tax-i-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="proftaxi" id="quantitativestech" value="quantitativestech">
                                        <label for="quantitativestech" class="mr-3">QUANTITATIVES TECH</label> <span id="quantitativesTechPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="proftaxi" id="revenuelaw" value="revenuelaw">
                                        <label for="revenuelaw" class="mr-3">REVENUE LAW</label> <span id="revenueLawPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="proftaxi" id="incometaxation" value="incometaxation">
                                        <label for="incometaxation" class="mr-3">INCOME TAXATION</label> <span id="incomeTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="proftaxi" id="indirecttaxation" value="indirecttaxation">
                                        <label for="indirecttaxation" class="mr-3">INDIRECT TAXATION</label> <span id="indirectTaxationPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">PROF TAX II</h6>
                                <div class="row" id="citn-prof-tax-ii-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="proftaxii" id="taxationecommerce" value="taxationecommerce">
                                        <label for="taxationecommerce" class="mr-3">TAXATION OF E-COMMERCE</label> <span id="taxationE-commercePrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="proftaxii" id="strategyrisk" value="strategyrisk">
                                        <label for="strategyrisk" class="mr-3">STRATEGY, RISK & ETHICS</label> <span id="strategyRiskPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="proftaxii" id="taxaudit" value="taxaudit">
                                        <label for="taxaudit" class="mr-3">TAX AUDIT & INV</label> <span id="taxAuditPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="proftaxii" id="intanationaltaxation" value="intanationaltaxation">
                                        <label for="intanationaltaxation" class="mr-3">INTERNATIONAL TAXATION</label> <span id="intanationalTaxationPrice"> </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3 courses-selected" id="foundation-count">
                                        <h6>FOUNDATION</h6>
                                        <p class="font-weight-bold">Number of papers: <span class="foundationcount" id="citn-foundation-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold foundationamount" id="citn-foundation-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>PROF TAX I</h6>
                                        <p class="font-weight-bold">Number of papers: <span class="proftaxicount" id="citn-prof-tax-i-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold proftaxiamount" id="citn-prof-tax-i-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>PROF TAX II</h6>
                                        <p class="font-weight-bold">Number of papers: <span class="proftaxiicount" id="citn-prof-tax-ii-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold proftaxiiamount" id="citn-prof-tax-ii-amount">0</p>
                                    </div>

                                    <div class="col-md-3 mb-3 courses-selected" id="total-courses-selected">
                                        <h6>TOTAL AMOUNT (₦)</h6>
                                        <p class="font-weight-bold totalamount" id="citn-total-amount">0</p>
                                        <p class="font-weight-bold">Number of papers: <span class="totalcount" id="citn-total-papers">0</span> </p>
                                    </div>
                                </div>


                                <h6 class="mt-5 font-weight-bold text-center" style="text-decoration: underline">HOW YOU GOT TO KNOW ABOUT THIS TRAINING</h6>

                                <div class="row py-3">
                                    <div class="col-md-12 mb-3">
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="card" required> FLYER
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="newspaper"> NEWSPAPER
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="website"> WEBSITE
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="instagram"> INSTAGRAM
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="facebook"> FACEBOOK
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="twitter"> TWITTER
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="sms"> SMS/EMAIL
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="nysc"> NYSC VENUE
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="friend"> A FRIEND
                                        <input type="radio" name="howdidyouknow" class="howdidyouknow" value="signage"> SIGNAGE<br>
                                        <div class="invalid-feedback">
                                           Valid feedback is required.
                                        </div>
                                        <label for="validationServer01">OTHER</label>
                                        <input type="text" class="form-control" placeholder="PLEASE SPECIFY" id="validationServer01">
                                    </div>
                                </div>

                                <div class="form-inline">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="validCheck3" required>
                                        <label class="form-check-label" for="validCheck3">
                                            <strong>I have read and agreed to the</strong> <a href="terms.php" class="pl-1">terms and conditions</a>
                                        </label>
                                        <div class="error" id="termsErr"></div>
                                    </div>
                                </div><br>

                                <button class="btn btn-lg btn-block btn-outline-primary font-weight-bold" id="register">REGISTER</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="./js/citn.js"></script>
        <script src="./js/validation.js"></script>
        <script src="./js/citnajax.js"></script>
</body>

</html>