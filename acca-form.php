<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACCA Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- SideBar -->
            <div class="col-md-3 p-3 sidebar text-white">
                <h4 class="text-center py-2" style="text-decoration: underline">ACCA TUTORIAL FEES</h4>
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

                <h6 class="text-center pt-3">FREE ITEMS :</h6>
                <p class="text-center">1. BRANDED NOTEBOOKS</p>
                <p class="text-center">2. BRANDED PEN</p>
                <p class="text-center">3. CAREER AND STUDY ADVISORY</p>
                <p class="text-center">4. ENLISTMENT ON JOB/IT PLACEMENT</p>
                <p class="text-center">5. FREE READING SPACE EVERY DAY OF THE WEEK</p>
                <p class="text-center">6. PROCESING OF ICAN SCHOLARSHIP (FOR PRIZE WINNERS)</p>

                <h6 class="text-center pt-3">SUBSIDIZED/SUPPORT ITEMS :</h6>
                <p class="text-center">HARD COPY STUDY TEXTS, REVISION KITS, Q & A PACKS, ETC.</p>

                <h6 class="text-center pt-2 py-1">10% DISCOUNT APPLIES TO EACH ADDITIONAL PAPER AFTER THE FIRST PAPER.</h6>
                <h6 class="text-center py-1">60% DOWN PAYMENT, 40% NEXT 30 DAYS.</h6>
                <h6 class="text-center py-1">ADMIN FEE : N5,000 ONLY</h6>
                <h6 class="text-center py-1">NO PART PAYMENT AFTER 2 MONTHS OF THE DIET. </h6>
                <h6 class="text-center py-1">REFUND OF 30% OF TUTORIAL FEE TO PRIZE WINNERS</h6>

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
                            <h3 class="mb-3 font-weight-bold text-center">ACCA REGISTRATION FORM</h3>
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
                                        <input type="text" class="form-control" id="accaRegNum" placeholder="ACCA REGISTRATION NUMBER" value="" name="first_name" required>
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

                                <h5 class="mt-5 font-weight-bold py-3" style="text-decoration: underline">COURSES REGISTERED</h5>
                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">APPPLIED KNOWLEDGE LEVEL</h6>
                                <div class="row" id="acca-applied-knowledge-level-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="accountant" id="accountant_business">
                                        <label for="accountant" class="mr-3">ACCOUNTANT IN BUSINESS</label> <span id="accountantBusinessPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="management" id="management_accounting">
                                        <label for="management" class="mr-3">MANAGEMENT ACCOUNTING</label> <span id="managementAccountingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="financial" id="financial_accounting">
                                        <label for="financial" class="mr-3">FINANCIAL ACCOUNTING</label> <span id="financialAccountingPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">APPLIED SKILLS LEVEL</h6>
                                <div class="row" id="acca-applied-skills-level-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="corporate_business" id="corporateBusiness">
                                        <label for="corporate & business law" class="mr-3">CORPORATE & BUSINESS LAW</label> <span id="corporateBusinessPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="performance_management" id="performanceManagement">
                                        <label for="performance management" class="mr-3">PERFORMANCE MANAGEMENT</label> <span id="performanceManagementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="acca_taxation" id="accaTaxation">
                                        <label for="acca taxation" class="mr-3">TAXATION</label> <span id="accaTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="financial_reporting" id="financialReporting">
                                        <label for="financial reporting" class="mr-3">FINANCIAL REPORTING</label> <span id="financialReportingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="audit_assurance" id="auditAssurance">
                                        <label for="audit assurance" class="mr-3">AUDIT & ASSURANCE</label> <span id="auditAssurancePrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="financial_management" id="financialManagement">
                                        <label for="financial management" class="mr-3">FINANCIAL MANAGEMENT</label> <span id="financialManagementPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">STRATEGIC PROFESSIONAL LEVEL</h6>
                                <div class="row" id="acca-strategic-professional-level-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="ethics_professional" id="ethicsModule" disabled>
                                        <label for="ethics & professional module" class="mr-3">ETHICS & PROFESSIONAL MODULE</label> <span id="ethicsModulePrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="reporting" id="strategicBusinessReporting">
                                        <label for="strategic business leader" class="mr-3">STRATEGIC BUSINESS REPORTING</label> <span id="strategicBusinessReportingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="strategic_business_leader" id="strategicBusinessLeader">
                                        <label for="strategic business leader" class="mr-3">STRATEGIC BUSINESS LEADER</label> <span id="strategicBusinessLeaderPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="advanced_financial" id="advancedFinManagement">
                                        <label for="advanced financial management" class="mr-3">ADVANCED FINANCIAL MANAGEMENT</label> <span id="advancedFinManagementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="advanced_management" id="advancedManagement">
                                        <label for="advanced performance management" class="mr-3">ADVANCED PERFORMANCE MANAGEMENT</label> <span id="advancedManagementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="advanced_taxation" id="advancedTaxation" disabled>
                                        <label for="advanced taxation and assurance" class="mr-3">ADVANCED TAXATION</label> <span id="advancedTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="advanced_audit" id="advancedAudit">
                                        <label for="advanced audit and assurance" class="mr-3">ADVANCED AUDIT & ASSURANCE</label> <span id="advancedAuditPrice"> </span>
                                    </div>
                                </div>
                                <!-- <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">ADVANCED TAXATION</h6>
                                <div class="row" id="acca-advanced-taxation-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="advanced_audit" id="advancedAudit">
                                        <label for="advanced audit and assurance" class="mr-3">ADVANCED AUDIT & ASSURANCE</label> <span id="advancedAuditPrice"> </span>
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-4 mb-3 courses-selected" id="acca-applied-knowledge-level-count">
                                        <h6>APPPLIED KNOWLEDGE LEVEL</h6>
                                        <p class="font-weight-bold">Number of papers: <span id="acca-applied-knowledge-level-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="acca-applied-knowledge-level-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>APPPLIED SKILLS LEVEL</h6>
                                        <p class="font-weight-bold">Number of papers: <span id="acca-applied-skills-level-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="acca-applied-skills-level-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>STRATEGIC PROFESSIONAL LEVEL</h6>
                                        <p class="font-weight-bold">Number of papers: <span id="acca-strategic-professional-level-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="acca-strategic-professional-level-amount">0</p>
                                    </div>
                                    <!-- 
                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>ADVANCED TAXATION</h6>
                                        <p class="font-weight-bold">Number of paper: <span id="acca-advanced-taxation-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="acca-advanced-taxation-amount">0</p>
                                    </div> -->

                                    <div class="col-md-3 mb-3 courses-selected" id="total-courses-selected">
                                        <h6>TOTAL AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="acca-total-amount">0</p>
                                        <p class="font-weight-bold">Number of papers: <span id="acca-total-papers">0</span> </p>
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
                                            <strong>I have read and agreed to the</strong> <a href="terms.php" class="pl-1">terms and conditions</a>
                                        </label>
                                        <div class="error" id="termsErr"></div>
                                    </div>
                                </div><br>
                                <!-- 
                                <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="acca-invoice.php"> Continue to checkout</a></button> -->
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
        <script src="./js/acca.js"></script>
        <script src="./js/validation.js"></script>
</body>

</html>