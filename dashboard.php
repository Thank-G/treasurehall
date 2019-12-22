<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Work+Sans:300" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- SideBar -->
            <div class="col-md-3 p-3 sidebar">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus enim, quod modi ex perferendis aperiam, accusantium nesciunt assumenda placeat voluptate ab odit natus? Hic, nam? Unde perspiciatis exercitationem voluptas animi.
            </div> <!-- SideBar -->

            <!-- Main Content -->
            <div class="col-md-9 p-3 main-content">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-bold">ICAN</h4>
                        </div>
                        <div class="card-body">
                            <!-- FOUNDATION -->
                            <h4 class="card-title pricing-card-title">FOUNDATION</h4>
                            <!-- <p class="font-weight-bold text-muted">(New students)</p>
                            <ul class="list-unstyled mt-3 mb-4" id="foundation">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="ican-foundation-new-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="ican-foundation-new-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="ican-foundation-new-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="ican-foundation-new-four-papers"></span></li>
                                <li>5 Papers: <span class="font-weight-bold text-muted" id="ican-foundation-new-five-papers"></span></li>
                            </ul> -->
                            <p class="font-weight-bold text-muted">(Returning students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦17500</del></span> <span class="font-weight-bold text-muted" id="ican-foundation-returning-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦30000</del></span> <span class="font-weight-bold text-muted" id="ican-foundation-returning-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦42000</del> <span class="font-weight-bold text-muted" id="ican-foundation-returning-three-papers"></span> </li>
                                <li>4 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦49000</del> </span> <span class="font-weight-bold text-muted" id="ican-foundation-returning-four-papers"></span></li>
                                <li>5 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦55000</del> </span> <span class="font-weight-bold text-muted" id="ican-foundation-returning-five-papers"></span></li>
                            </ul>
                            <p class="font-weight-bold text-muted">(First 20 students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="ican-foundation-promo-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="ican-foundation-promo-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="ican-foundation-promo-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="ican-foundation-promo-four-papers"></span></li>
                                <li>5 Papers: <span class="font-weight-bold text-muted" id="ican-foundation-promo-five-papers"></span></li>
                            </ul>
                            <hr>


                            <!-- SKILLS -->
                            <h4 class="card-title pricing-card-title">SKILLS</h4>
                            <p class="font-weight-bold text-muted">(Returning students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦21000</del></span> <span class="font-weight-bold text-muted" id="ican-skills-returning-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦33000</del></span> <span class="font-weight-bold text-muted" id="ican-skills-returning-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦44000</del> <span class="font-weight-bold text-muted" id="ican-skills-returning-three-papers"></span> </li>
                                <li>4 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦52000</del> </span> <span class="font-weight-bold text-muted" id="ican-skills-returning-four-papers"></span></li>
                                <li>5 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦58000</del> </span> <span class="font-weight-bold text-muted" id="ican-skills-returning-five-papers"></span></li>
                            </ul>
                            <p class="font-weight-bold text-muted">(First 20 students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="ican-skills-promo-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="ican-skills-promo-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="ican-skills-promo-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="ican-skills-promo-four-papers"></span></li>
                                <li>5 Papers: <span class="font-weight-bold text-muted" id="ican-skills-promo-five-papers"></span></li>
                            </ul>
                            <hr>


                            <!-- PROFESSIONAL -->
                            <h4 class="card-title pricing-card-title">PROFESSIONAL</h4>
                            <p class="font-weight-bold text-muted">(Returning students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦23000</del></span> <span class="font-weight-bold text-muted" id="ican-professional-returning-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦34000</del></span> <span class="font-weight-bold text-muted" id="ican-professional-returning-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦45000</del> <span class="font-weight-bold text-muted" id="ican-professional-returning-three-papers"></span> </li>
                                <li>4 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦53000</del> </span> <span class="font-weight-bold text-muted" id="ican-professional-returning-four-papers"></span></li>
                                <li>5 Papers: <span class="font-weight-bold text-muted"><del style="margin-right: 8px;">₦60000</del> </span> <span class="font-weight-bold text-muted" id="ican-professional-returning-five-papers"></span></li>
                            </ul>
                            <p class="font-weight-bold text-muted">(First 20 students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="ican-professional-promo-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="ican-professional-promo-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="ican-professional-promo-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="ican-professional-promo-four-papers"></span></li>
                                <li>5 Papers: <span class="font-weight-bold text-muted" id="ican-professional-promo-five-papers"></span></li>
                            </ul>
                            <a href="ican-form.php" class="btn btn-lg btn-block btn-outline-primary">Get started</a>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-bold">CITN</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title pricing-card-title">FOUNDATION</h4>
                            <p class="font-weight-bold text-muted">(Regular)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="citn-foundation-regular-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="citn-foundation-regular-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="citn-foundation-regular-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="citn-foundation-regular-four-papers"></span></li>
                            </ul>
                            <p class="font-weight-bold text-muted">(First 10 students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="citn-foundation-promo-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="citn-foundation-promo-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="citn-foundation-promo-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="citn-foundation-promo-four-papers"></span></li>
                            </ul><hr>
                            <h4 class="card-title pricing-card-title">PROF TAX I</h4>
                            <p class="font-weight-bold text-muted">(Regular)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="citn-prof-tax-i-regular-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-i-regular-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-i-regular-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-i-regular-four-papers"></span></li>
                            </ul>
                            <p class="font-weight-bold text-muted">(First 10 students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="citn-prof-tax-i-promo-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-i-promo-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-i-promo-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-i-promo-four-papers"></span></li>
                            </ul><hr>
                            <h4 class="card-title pricing-card-title">PROF TAX II</h4>
                            <p class="font-weight-bold text-muted">(Regular)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="citn-prof-tax-ii-regular-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-ii-regular-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-ii-regular-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-ii-regular-four-papers"></span></li>
                            </ul>
                            <p class="font-weight-bold text-muted">(First 10 students)</p>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="citn-prof-tax-ii-promo-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-ii-promo-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-ii-promo-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-ii-promo-four-papers"></span></li>
                            </ul><hr>
                            <h4 class="card-title pricing-card-title">PROF TAX III</h4>
                            <p class="font-weight-bold text-muted">(Regular)</p>
                            <!-- <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="citn-prof-tax-iii-regular-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-iii-regular-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-iii-regular-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-iii-regular-four-papers"></span></li>
                            </ul> -->
                            <p class="font-weight-bold text-muted">(First 10 students)</p>
                            <!-- <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="citn-prof-tax-iii-promo-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-iii-promo-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-iii-promo-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="citn-prof-tax-iii-promo-four-papers"></span></li>
                            </ul> -->
                            <a href="citn-form.php" class="btn btn-lg btn-block btn-outline-primary">Get started</a>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-bold">ATSWA</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title pricing-card-title">ATSWA I</h4>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="atswa-i-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="atswa-i-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="atswa-i-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="atswa-i-four-papers"></span></li>
                            </ul><hr>
                            <h4 class="card-title pricing-card-title">ATSWA II</h4>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="atswa-ii-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="atswa-ii-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="atswa-ii-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="atswa-ii-four-papers"></span></li>
                            </ul><hr>                          
                            <h4 class="card-title pricing-card-title">ATSWA III</h4>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 Paper: <span class="font-weight-bold text-muted" id="atswa-iii-one-paper"></span></li>
                                <li>2 Papers: <span class="font-weight-bold text-muted" id="atswa-iii-two-papers"></span></li>
                                <li>3 Papers: <span class="font-weight-bold text-muted" id="atswa-iii-three-papers"></span></li>
                                <li>4 Papers: <span class="font-weight-bold text-muted" id="atswa-iii-four-papers"></span></li>
                            </ul>
                            <a href="atswa-form.php" class="btn btn-lg btn-block btn-outline-primary">Get started</a>
                        </div>
                    </div>
                </div>
            </div> <!-- Main Content -->
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</body>

</html>