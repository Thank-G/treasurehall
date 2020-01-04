<?php include('acca-process.php'); ?>

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

                <h6 class="text-center pt-3">NOTE FOR STUDENTS</h6>
                <P class="text-center py-1"> “There are some courses that are disabled for now, please, the fees would be provided on request”.</P>
                <h6 class="text-center">For enquiry, please call.</h6>
                <p class="text-center">08063899367</p>
                <p class="text-center">08030915072</p>
                <p class="text-center">07089676799</p>


            </div> <!-- SideBar -->

            <!-- Main Content -->
            <div class="col-md-9 p-3 main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 order-md-1">
                            <h3 class="mb-3 font-weight-bold text-center">ACCA REGISTRATION FORM</h3>
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
                                        <input type="text" class="form-control" id="regnumber" placeholder="ACCA REGISTRATION NUMBER" required>
                                        <span></span>
                                        <div class="invalid-feedback">
                                            Valid ican registration number is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="nysccode" class="form-control" id="nysccode" placeholder="NYSC GM/CODE" required>
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
                                        <input type="radio" name="gender" class="gender" value="male" required> MALE
                                        <input type="radio" name="gender" class="gender" value="female" required> FEMALE
                                        <div class="invalid-feedback">
                                            Gender is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="status" class="font-weight-bold text-muted mr-3">MARITAL STATUS</label>
                                        <input type="radio" name="status" class="status" value="single" required> Single
                                        <input type="radio" name="status" class="status" value="married" required> Married
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
                                        <input type="text" class="form-control" id="phonenumber2" placeholder="OTHER">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="sponsor" placeholder="SPONSOR">
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

                                <h5 class="mt-5 font-weight-bold py-3" style="text-decoration: underline">COURSES REGISTERED</h5>
                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">APPPLIED KNOWLEDGE LEVEL</h6>
                                <div class="row" id="acca-applied-knowledge-level-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedknowledge" name="accountant" id="accountant_business">
                                        <label for="accountant" class="mr-3">ACCOUNTANT IN BUSINESS</label> <span id="accountantBusinessPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedknowledge" name="management" id="management_accounting">
                                        <label for="management" class="mr-3">MANAGEMENT ACCOUNTING</label> <span id="managementAccountingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedknowledge" name="financial" id="financial_accounting">
                                        <label for="financial" class="mr-3">FINANCIAL ACCOUNTING</label> <span id="financialAccountingPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">APPLIED SKILLS LEVEL</h6>
                                <div class="row" id="acca-applied-skills-level-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedskills" name="corporate_business" id="corporateBusiness">
                                        <label for="corporate & business law" class="mr-3">CORPORATE & BUSINESS LAW</label> <span id="corporateBusinessPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedskills" name="performance_management" id="performanceManagement">
                                        <label for="performance management" class="mr-3">PERFORMANCE MANAGEMENT</label> <span id="performanceManagementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedskills" name="acca_taxation" id="accaTaxation">
                                        <label for="acca taxation" class="mr-3">TAXATION</label> <span id="accaTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedskills" name="financial_reporting" id="financialReporting">
                                        <label for="financial reporting" class="mr-3">FINANCIAL REPORTING</label> <span id="financialReportingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedskills" name="audit_assurance" id="auditAssurance">
                                        <label for="audit assurance" class="mr-3">AUDIT & ASSURANCE</label> <span id="auditAssurancePrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="appliedskills" name="financial_management" id="financialManagement">
                                        <label for="financial management" class="mr-3">FINANCIAL MANAGEMENT</label> <span id="financialManagementPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">STRATEGIC PROFESSIONAL LEVEL</h6>
                                <div class="row" id="acca-strategic-professional-level-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="strtegicprof" name="ethics_professional" id="ethicsModule" disabled>
                                        <label for="ethics & professional module" class="mr-3">ETHICS & PROFESSIONAL MODULE</label> <span id="ethicsModulePrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="strtegicprof" name="reporting" id="strategicBusinessReporting">
                                        <label for="strategic business leader" class="mr-3">STRATEGIC BUSINESS REPORTING</label> <span id="strategicBusinessReportingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="strtegicprof" name="strategic_business_leader" id="strategicBusinessLeader">
                                        <label for="strategic business leader" class="mr-3">STRATEGIC BUSINESS LEADER</label> <span id="strategicBusinessLeaderPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="strtegicprof" name="advanced_financial" id="advancedFinManagement">
                                        <label for="advanced financial management" class="mr-3">ADVANCED FINANCIAL MANAGEMENT</label> <span id="advancedFinManagementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="strtegicprof" name="advanced_management" id="advancedManagement">
                                        <label for="advanced performance management" class="mr-3">ADVANCED PERFORMANCE MANAGEMENT</label> <span id="advancedManagementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="strtegicprof" name="advanced_taxation" id="advancedTaxation" disabled>
                                        <label for="advanced taxation and assurance" class="mr-3">ADVANCED TAXATION</label> <span id="advancedTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="strtegicprof" name="advanced_audit" id="advancedAudit">
                                        <label for="advanced audit and assurance" class="mr-3">ADVANCED AUDIT & ASSURANCE</label> <span id="advancedAuditPrice"> </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3 courses-selected" id="acca-applied-knowledge-level-count">
                                        <h6>APPPLIED KNOWLEDGE LEVEL</h6>
                                        <p class="font-weight-bold">Number of papers: <span class="appliedknowledgecount" id="acca-applied-knowledge-level-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold appliedknowledgeamount" id="acca-applied-knowledge-level-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>APPPLIED SKILLS LEVEL</h6>
                                        <p class="font-weight-bold">Number of papers: <span class="appliedskillscount" id="acca-applied-skills-level-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold appliedskillsamount" id="acca-applied-skills-level-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>STRATEGIC PROFESSIONAL LEVEL</h6>
                                        <p class="font-weight-bold">Number of papers: <span class="strategicprofcount" id="acca-strategic-professional-level-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold strategicprofamount" id="acca-strategic-professional-level-amount">0</p>
                                    </div>

                                    <div class="col-md-3 mb-3 courses-selected" id="total-courses-selected">
                                        <h6>TOTAL AMOUNT (₦)</h6>
                                        <p class="font-weight-bold totalamount" id="acca-total-amount">0</p>
                                        <p class="font-weight-bold">Number of papers: <span class="totalcount" id="acca-total-papers">0</span> </p>
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
                                <!-- <button class="btn btn-lg btn-block btn-outline-primary">Proceed To Check Out</button> -->
                            </form>
                        </div>
                    </div>
                </div> <!-- Main Content -->
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="./js/acca.js"></script>
        <script src="./js/validation.js"></script>
        <script src="./js/accaajax.js"></script>

</body>

</html>