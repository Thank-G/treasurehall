<!DOCTYPE html>
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
            <div class="col-md-3 p-3 sidebar">

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
                            <h3 class="mb-3 font-weight-bold text-center">CITN REGISTRATION FORM</h3>
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
                                        <input type="text" class="form-control" id="citnRegNum" placeholder="CITN REGISTRATION NUMBER" value="" name="first_name" required>
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

                                <h5 class="mt-5 font-weight-bold" style="text-decoration: underline">COURSES REGISTERED</h5>
                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">FOUNDATION</h6>
                                <div class="row" id="citn-foundation-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="principle" id="principle_taxation">
                                        <label for="principle" class="mr-3">PRINCIPLES OF TAXATION</label> <span id="principleTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="accounting" id="accounting">
                                        <label for="accounting" class="mr-3">ACCOUNTING</label> <span id="accountingPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="gen_principles" id="genPrinciples">
                                        <label for="gen principles" class="mr-3">GEN PRINCIPLES OF LAW</label> <span id="genPrinciplesPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="economics" id="economics">
                                        <label for="economics" class="mr-3">ECONOMICS</label> <span id="economicsPrice"> </span>
                                    </div>  
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">PROF TAX I</h6>
                                <div class="row" id="citn-prof-tax-i-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="quantitatives_tech" id="quantitativesTech">
                                        <label for="quantitatives tech" class="mr-3">QUANTITATIVES TECH</label> <span id="quantitativesTechPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="revenue_law" id="revenueLaw">
                                        <label for="revenue law" class="mr-3">REVENUE LAW</label> <span id="revenueLawPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="income_taxation" id="incomeTaxation">
                                        <label for="income taxation" class="mr-3">INCOME TAXATION</label> <span id="incomeTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="indirect_taxation" id="indirectTaxation">
                                        <label for="indirect taxation" class="mr-3">INDIRECT TAXATION</label> <span id="indirectTaxationPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">PROF TAX II</h6>
                                <div class="row" id="citn-prof-tax-ii-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="taxation_e-commerce" id="taxationE-commerce">
                                        <label for="taxation of e-commerce" class="mr-3">TAXATION OF E-COMMERCE</label> <span id="taxationE-commercePrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="strategy_risk" id="strategyRisk">
                                        <label for="strategy risk and ethics" class="mr-3">STRATEGY, RISK & ETHICS</label> <span id="strategyRiskPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="tax_audit" id="taxAudit">
                                        <label for="tax audit and inv" class="mr-3">TAX AUDIT & INV</label> <span id="taxAuditPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="intanational_taxation" id="intanationalTaxation">
                                        <label for="intanational taxation" class="mr-3">INTERNATIONAL TAXATION</label> <span id="intanationalTaxationPrice"> </span>
                                    </div>
                                </div>

                                <h6 class="mt-3 font-weight-bold" style="text-decoration: underline">PROF TAX III</h6>
                                <div class="row" id="citn-prof-tax-iii-courses-selected">
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="oil_taxation" id="oilTaxation">
                                        <label for="oil and gas taxation" class="mr-3">OIL, GAS TAXATION</label> <span id="oilTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="solid_taxation" id="solidTaxation">
                                        <label for="solid minerals taxation" class="mr-3">SOLID MINERALS TAXATION</label> <span id="solidTaxationPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="tax_management" id="taxManagement">
                                        <label for="tax management" class="mr-3">TAX MANAGEMENT</label> <span id="taxManagementPrice"> </span>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="checkbox" name="practical_taxation" id="practicalTaxation">
                                        <label for="practical cases in taxation" class="mr-3">PRACTICAL CASES IN TAXATION</label> <span id="practicalTaxationPrice"> </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3 courses-selected" id="foundation-count">
                                       <h6>FOUNDATION</h6>
                                       <p>Number of papers: <span id="citn-foundation-papers">0</span></p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>PROF TAX I</h6>
                                        <p>Number of papers: <span id="citn-prof-tax-i-papers">0</span></p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>PROF TAX II</h6>
                                        <p>Number of papers: <span id="citn-prof-tax-ii-papers">0</span></p>
                                    </div>

                                    <div class="col-md-4 mb-3 courses-selected">
                                        <h6>PROF TAX III</h6>
                                        <p>Number of papers: <span id="citn-prof-tax-iii-papers">0</span></p>
                                    </div>
                                </div>
                                        <div class="col-md-3 mb-3 courses-selected" id="total-courses-selected">
                                            <h6>TOTAL AMOUNT (₦)</h6> <p id="amount">50000</p>
                                            <p>Number of papers: <span id="citn-total-papers">0</span></p>
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



                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country</label>
                                        <select class="custom-select d-block w-100" id="country" required>
                                            <option value="">Choose...</option>
                                            <option>United States</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        <select class="custom-select d-block w-100" id="state" required>
                                            <option value="">Choose...</option>
                                            <option>California</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                </div>
                                <hr class="mb-4">

                                <h4 class="mb-3">Payment</h4>

                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                        <label class="custom-control-label" for="credit">Credit card</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="debit">Debit card</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="paypal">PayPal</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-name">Name on card</label>
                                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                        <small class="text-muted">Full name as displayed on card</small>
                                        <div class="invalid-feedback">
                                            Name on card is required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-number">Credit card number</label>
                                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Credit card number is required
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration">Expiration</label>
                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Expiration date required
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-cvv">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                        <div class="invalid-feedback">
                                            Security code required
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">

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
                                <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="citn-invoice.php"> Continue to checkout</a></button> -->
                                <a href="citn-invoice.php"><button class="btn btn-lg btn-block btn-outline-primary">Proceed To Check Out</button></a>
                            </form>
                        </div>
                    </div>
                </div> <!-- Main Content -->
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="./js/main.js"></script>
        <script src="./js/validation.js"></script>
</body>

</html>