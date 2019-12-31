<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MISCELANEOUS PROGRAMS REGISTRATION FORM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- SideBar -->
            <div class="col-md-3 p-3 sidebar text-white">
                <h4 class="text-center py-2" style="text-decoration: underline">MISCELANEOUS EXAM TUTORIAL</h4>

                <h6 class="text-center py-1">NOTE FOR STUDENTS :</h6>
                <P class="text-center pt-2 py-1"> “These are special programs, the fees and duration would be provided on request and based on the trainees circumstances”.</P>
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
                            <h3 class="mb-3 font-weight-bold text-center">MISCELANEOUS PROGRAMS REGISTRATION FORM</h3>
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
                                        <input type="text" class="form-control" id="miscelaneousRegNum" placeholder="MISCELANEOUS EXAM REGISTRATION NUMBER" value="" name="first_name" required>
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

                                
                                <div class="row">
                                    <div class="col-md-12 pt-3 pb-1">
                                        <label for="options" class="font-weight-bold text-muted mr-3">OPTIONS:</label>
                                        <input type="radio" name="weekday" id="weekday" class="mr-1 ml-1"> WEEKDAYS (MONDAYS, WEDNESDAYS & FRIDAYS)
                                        <input type="radio" name="weekday" id="weekend" class="ml-1 mr-1"> WEEKENDS (4 SATURDAYS)
                                        <div class="invalid-feedback">
                                            Valid is required.
                                        </div>
                                    </div>
                                </div>

                                <h5 class="mt-3 font-weight-bold pb-3" style="text-decoration: underline">COURSES REGISTERED</h5>
                                <div class="row" id="miscelaneous-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="sage" id="sage">
                                        <label for="sage" class="mr-3">SAGE</label> <span id="sagePrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="excel" id="excel">
                                        <label for="excel" class="mr-3">EXCEL</label> <span id="excelPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="quickbooks" id="quickbooks">
                                        <label for="quickbooks" class="mr-3">QUICKBOOKS</label> <span id="quickbooksPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="cisa" id="cisa">
                                        <label for="cisa" class="mr-3">CISA</label> <span id="cisaPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="f_modelling" id="fModelling">
                                        <label for="f modelling" class="mr-3">F/MODELLING</label> <span id="fModellingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="power_point" id="powerPoint">
                                        <label for="power point" class="mr-3">POWER POINT</label> <span id="powerPointPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="soft_skills" id="softSkills">
                                        <label for="soft skills" class="mr-3">SOFT SKILLS</label> <span id="softSkillsPrice"> </span>
                                    </div>
                                </div>

                                <div class="row just-center">
                                    <div class="col-md-4 mb-3 courses-selected" id="miscelaneous-count">
                                        <h6>MISCELANEOUS COURSES</h6>
                                        <p class="font-weight-bold py-2">Number of papers: <span id="miscelaneous-papers">0</span></p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected" id="total-courses-selected">
                                        <h6>TOTAL PAPERS</h6>
                                        <p class="font-weight-bold py-2">Number of papers: <span id="miscelaneous-total-papers">0</span> </p>
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
                                <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="miscelaneous-invoice.php"> Continue to checkout</a></button> -->
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
    <script src="./js/miscelaneous.js"></script>
    <script src="./js/validation.js"></script>
</body>

</html>