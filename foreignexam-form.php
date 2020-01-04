<?php include('foreignexam-process.php'); ?>

<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foreign Exam Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- SideBar -->
            <div class="col-md-3 p-3 sidebar text-white">
                <h4 class="text-center py-2" style="text-decoration: underline">FOREIGN EXAM TUTORIAL FEES</h4>
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

                <p class="text-center pt-3">3. TREASUREHALL TRAINING</p>
                <p class="text-center">FIDELITY BANK</p>
                <p class="text-center">A/C 4011337253</p>

                <h6 class="text-center py-1">NOTE FOR STUDENTS</h6>
                <P class="text-center pt-2 py-1">We only prepare students for the exam. We also support our students with admission placement and Visa processing for studies.</P>
                <P class="text-center py-1">Rates may be changed without notice.</P>
                <P class="text-center pt-2 py-3"> “Also there are some courses that are disabled for now, please, the fees would be provided on request”.</P>
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
                            <h3 class="mb-3 font-weight-bold text-center">FOREIGN EXAM REGISTRATION FORM</h3>
                            <form class="needs-validation" novalidate>
                            <div id="error_msg" class="mb-5"></div>
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
                                        <input type="text" class="form-control" id="regnumber" placeholder="FOREIGN EXAM REGISTRATION NUMBER" value="" name="first_name" required>
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

                                <h5 class="mt-5 font-weight-bold py-3" style="text-decoration: underline">COURSES REGISTERED</h5>
                                <h6 class="mt-3 pb-3 font-weight-bold" style="text-decoration: underline">WEEKDAYS ( MONDAYS, WEDNESDAYS & FRIDAYS ) { TIME: 10:00 A.M. - 12:00 P.M. DURATION: 1-2 MONTHS }</h6>
                                <div class="row" id="foreign-weekdays-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekdays" name="ielts" id="ieltsWeekdays">
                                        <label for="ielts" class="mr-3">IELTS</label> <span id="ieltsWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekdays" name="toefl" id="toeflWeekdays">
                                        <label for="toefl" class="mr-3">TOEFL</label> <span id="toeflWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekdays" name="sat" id="satWeekdays" disabled>
                                        <label for="sat" class="mr-3">SAT</label> <span id="satWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekdays" name="gmat" id="gmatWeekdays">
                                        <label for="gmat" class="mr-3">GMAT</label> <span id="gmatWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekdays" name="gre" id="greWeekdays" disabled>
                                        <label for="gre" class="mr-3">GRE</label> <span id="greWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekdays" name="pte" id="pteWeekdays" disabled>
                                        <label for="pte" class="mr-3">PTE</label> <span id="pteWeekdaysPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 pb-3 font-weight-bold" style="text-decoration: underline">WEEKENDS ( 4 SATURDAYS ) { TIME: 11:00 A.M. - 4:00 P.M. DURATION: 1-2 MONTHS }</h6>
                                <div class="row" id="foreign-weekends-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekends" name="ielts" id="ieltsWeekends">
                                        <label for="ielts" class="mr-3">IELTS</label> <span id="ieltsWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekends" name="toefl" id="toeflWeekends">
                                        <label for="toefl" class="mr-3">TOEFL</label> <span id="toeflWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekends" name="sat" id="satWeekends" disabled>
                                        <label for="sat" class="mr-3">SAT</label> <span id="satWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekends" name="gmat" id="gmatWeekends">
                                        <label for="gmat" class="mr-3">GMAT</label> <span id="gmatWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekends" name="gre" id="greWeekends" disabled>
                                        <label for="gre" class="mr-3">GRE</label> <span id="greWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" class="weekends" name="pte" id="pteWeekends" disabled>
                                        <label for="pte" class="mr-3">PTE</label> <span id="pteWeekendsPrice"> </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3 courses-selected" id="foreign-exam-count">
                                        <h6>WEEKDAYS</h6>
                                        <p class="font-weight-bold">Number of papers: <span class="weekdayscount" id="foreign-weekdays-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold weekdaysamount" id="foreign-weekdays-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>WEEKENDS</h6>
                                        <p class="font-weight-bold">Number of papers: <span class="weekendscount" id="foreign-weekends-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold weekendsamount" id="foreign-weekends-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected" id="total-courses-selected">
                                        <h6>TOTAL AMOUNT (₦)</h6>
                                        <p class="font-weight-bold totalamount" id="foreign-total-amount">0</p>
                                        <p class="font-weight-bold">Number of papers: <span class="totalcount" id="foreign-total-papers">0</span> </p>
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
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/foreignexam.js"></script>
    <script src="./js/validation.js"></script>
    <script src="./js/foreignexamajax.js"></script>

</body>

</html>