<!DOCTYPE html>
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
                <h6 class="text-center">For enquiry, please call.</h6>
                <p class="text-center">08063899367</p>
                <p class="text-center">08030915072</p>
                <p class="text-center">07089676799</p>


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
                            <h3 class="mb-3 font-weight-bold text-center">FOREIGN EXAM REGISTRATION FORM</h3>
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
                                        <input type="text" class="form-control" id="foreignRegNum" placeholder="FOREIGN EXAM REGISTRATION NUMBER" value="" name="first_name" required>
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
                                <h6 class="mt-3 pb-3 font-weight-bold" style="text-decoration: underline">WEEKDAYS ( MONDAYS, WEDNESDAYS & FRIDAYS ) { TIME: 10:00 A.M. - 12:00 P.M. DURATION: 1-2 MONTHS }</h6>
                                <div class="row" id="foreign-weekdays-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="ielts" id="ieltsWeekdays">
                                        <label for="ielts" class="mr-3">IELTS</label> <span id="ieltsWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="toefl" id="toeflWeekdays">
                                        <label for="toefl" class="mr-3">TOEFL</label> <span id="toeflWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="sat" id="satWeekdays">
                                        <label for="sat" class="mr-3">SAT</label> <span id="satWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="gmat" id="gmatWeekdays">
                                        <label for="gmat" class="mr-3">GMAT</label> <span id="gmatWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="gre" id="greWeekdays">
                                        <label for="gre" class="mr-3">GRE</label> <span id="greWeekdaysPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="pte" id="pteWeekdays">
                                        <label for="pte" class="mr-3">PTE</label> <span id="pteWeekdaysPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 pb-3 font-weight-bold" style="text-decoration: underline">WEEKENDS ( 4 SATURDAYS ) { TIME: 11:00 A.M. - 4:00 P.M. DURATION: 1-2 MONTHS }</h6>
                                <div class="row" id="foreign-weekends-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="ielts" id="ieltsWeekends">
                                        <label for="ielts" class="mr-3">IELTS</label> <span id="ieltsWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="toefl" id="toeflWeekends">
                                        <label for="toefl" class="mr-3">TOEFL</label> <span id="toeflWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="sat" id="satWeekends">
                                        <label for="sat" class="mr-3">SAT</label> <span id="satWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="gmat" id="gmatWeekends">
                                        <label for="gmat" class="mr-3">GMAT</label> <span id="gmatWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="gre" id="greWeekends">
                                        <label for="gre" class="mr-3">GRE</label> <span id="greWeekendsPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="pte" id="pteWeekends">
                                        <label for="pte" class="mr-3">PTE</label> <span id="pteWeekendsPrice"> </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3 courses-selected" id="foreign-exam-count">
                                        <h6>WEEKDAYS</h6>
                                        <p class="font-weight-bold">Number of papers: <span id="foreign-weekdays-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="foreign-weekdays-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>WEEKENDS</h6>
                                        <p class="font-weight-bold">Number of papers: <span id="foreign-weekends-papers">0</span></p>
                                        <h6>AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="foreign-weekends-amount">0</p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected" id="total-courses-selected">
                                        <h6>TOTAL AMOUNT (₦)</h6>
                                        <p class="font-weight-bold" id="foreign-total-amount">0</p>
                                        <p class="font-weight-bold">Number of papers: <span id="foreign-total-papers">0</span> </p>
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
                                <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="foreign-invoice.php"> Continue to checkout</a></button> -->
                                <button class="btn btn-lg btn-block btn-outline-primary">Proceed To Check Out</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- Main Content -->
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/foreignexam.js"></script>
    <script src="./js/validation.js"></script>
</body>

</html>