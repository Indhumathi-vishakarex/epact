<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Winngoo E-Pact</title>
    <link rel="icon" type="image/x-icon" href="assets/img/epact-globe.webp">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Colors CSS -->
    <link href="assets/css/colors.css" rel="stylesheet">
    <link href="assets/css/epact.css" rel="stylesheet">

</head>

<body>

    <style>
        .nav-menu+.nav-menu>li:first-child {
            margin-right: 20px !important;
        }
        
        .list-buttons.ms-2 {
            margin-left: 0!important;
        }
        
        .price-card:hover .btn-light2 {
            border-color: #ffc107 !important;
            /* Yellow */
            color: #ffc107 !important;
        }
        
        .btn-light2 {
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
    </style>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="preloader">
        <div class="preloader"><span></span><span></span></div>
    </div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
   
@include('frontend.layouts.header')
        <!-- Navigation -->
     
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- Top header  -->


        <!-- ============================ Hero Banner  Start================================== -->
        <div class="slider-home">
            <div class="slider-banner">

                <!-- Single Item -->
                <div class="bg-cover" style="background:url(./assets/img/Home-Banners/home\ banner\ 1\ variation\ 2.jpg)" data-overlay="5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-12">
                                <div class="slider-caption">
                                    <h1 class="text-light">Real Jobs, Real People, Real Success</h1>
                                    <p class="fs-5 text-light">The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="bg-cover" style="background:url(./assets/img/Home-Banners/home\ banner\ 2\ variation\ 1.jpg)" data-overlay="5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-12">
                                <div class="slider-caption">
                                    <h1 class="text-light">Discover Jobs. Take Action. Win Big.</h1>
                                    <p class="fs-5 text-light">The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="bg-cover" style="background:url(./assets/img/Home-Banners/home\ banner\ 3\ variation\ 2.jpg)" data-overlay="5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-12">
                                <div class="slider-caption">
                                    <h1 class="text-light">Find Work. Build Skills. Grow Fast.</h1>
                                    <p class="fs-5 text-light">The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Item -->
                <div class="bg-cover" style="background:url(./assets/img/Home-Banners/home\ banner\ 4\ variation\ 2.jpg)" data-overlay="5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-12">
                                <div class="slider-caption">
                                    <h1 class="text-light">One Click Closer to Your Next Big Opportunity</h1>
                                    <p class="fs-5 text-light">The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ============================ Hero Banner End ================================== -->


        <!-- ============================ Top Features & Process Start ================================== -->
        <section>
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <div class="sec-heading center">
                            <h2>Features & Process</h2>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center gx-xl-4 gx-lg-4">

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-1">
                        <div class="work-process mb-5">
                            <div class="work-process-icon"><span><i class="fa-solid fa-file-shield text-main"></i></span></div>
                            <div class="work-process-caption">
                                <h4>Search Job</h4>
                                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
                            </div>
                        </div>

                        <div class="work-process mb-5">
                            <div class="work-process-icon"><span><i class="fa-solid fa-paste text-main"></i></span></div>
                            <div class="work-process-caption">
                                <h4>FIND JOB</h4>
                                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
                            </div>
                        </div>

                        <div class="work-process mb-5">
                            <div class="work-process-icon"><span><i class="fa-solid fa-unlock text-main"></i></span></div>
                            <div class="work-process-caption">
                                <h4>Create Account</h4>
                                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
                            </div>
                        </div>

                        <div class="work-process">
                            <div class="work-process-icon"><span><i class="fa-solid fa-user-clock text-main"></i></span></div>
                            <div class="work-process-caption">
                                <h4>HIRE EMPLOYEE</h4>
                                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 order-xl-2 order-lg-3 order-md-3">
                        <div class="eslio-pincc m-auto">
                            <img src="assets/img/mobile-screen.webp" class="img-fluid" alt="mobile">
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 order-xl-3 order-lg-2 order-md-2">
                        <div class="work-process mb-5">
                            <div class="work-process-icon"><span><i class="fa-solid fa-laptop-file text-main"></i></span></div>
                            <div class="work-process-caption">
                                <h4>START WORK</h4>
                                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
                            </div>
                        </div>

                        <div class="work-process mb-5">
                            <div class="work-process-icon"><span><i class="fa-solid fa-business-time text-main"></i></span></div>
                            <div class="work-process-caption">
                                <h4>Submit Bid</h4>
                                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
                            </div>
                        </div>

                        <div class="work-process mb-5">
                            <div class="work-process-icon"><span><i class="fa-solid fa-sack-dollar text-main"></i></span></div>
                            <div class="work-process-caption">
                                <h4>PAY MONEY</h4>
                                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
                            </div>
                        </div>

                        <div class="work-process">
                            <div class="work-process-icon"><span><i class="fa-regular fa-face-laugh-wink text-main"></i></span></div>
                            <div class="work-process-caption">
                                <h4>HAPPY USER</h4>
                                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ============================ Top Features & Process End ================================== -->


        <!-- ============================ Hire Box End ================================== -->
        <section class="p-0">
            <div class="container-fluid px-0">
                <div class="row gx-0">

                    <div class="col-xl-6 col-lg-6 col-md-12 bg-dark">
                        <div class="hired-box-slack">
                            <div class="hired-box-caption">
                                <h2 class="text-light">Hire talents & experts for your web development</h2>
                                <p class="text-light fw-light opacity-75">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
                            </div>
                            <div class="hired-box-btns">
                                <a href="./login.html" class="btn btn-lg btn-main font--bold px-5">Employee Login</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 bg-main">
                        <div class="hired-box-slack">
                            <div class="hired-box-caption">
                                <h2 class="text-light">We Are Expert In Web design and development</h2>
                                <p class="text-light fw-light opacity-75">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
                            </div>
                            <div class="hired-box-btns">
                                <a href="./login.html" class="btn btn-lg btn-dark font--bold px-5">Employer Login</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ============================ Hire Box End ================================== -->

        <!-- ============================ Why Choose Us Start ================================== -->
        <section class="pb-4">
            <div class="container">

                <div class="row justify-content-between">

                    <div class="col-xl-5 col-lg-5 col-md-12 col-12 text-center">
                        <div class="side-thumber-wrap">
                            <div class="side-effect"></div>
                            <div class="side-thumber-img">
                                <figure><img src="assets/img/Home-page/Features & Process Section Images/Left Side Image variation 2.png" class="img-fluid" alt=""></figure>
                            </div>
                        </div>

                        <div class="app-wrap d-flex flex-wrap gap-4 justify-content-center">
                            <!-- Apple Store -->
                            <a href="#" class="d-flex align-items-center border rounded-3 px-3 py-2 gap-2 download-apple" style="min-width: 250px;">
                                <div class="social-icon">
                                    <img class="img-fluid" src="assets/img/applestore.png" width="60" alt="applestore" />
                                </div>
                                <div class="social-caption">
                                    <p class="text-uppercase footer-text m-0">Get it on</p>
                                    <h5 class="text-dark m-0 text-nowrap">Apple Store</h5>
                                </div>
                            </a>

                            <!-- Google Play -->
                            <a href="#" class="d-flex align-items-center border rounded-3 px-3 py-2 gap-2 download-google" style="min-width: 250px;">
                                <div class="social-icon">
                                    <img class="img-fluid" src="assets/img/play-store.png" width="60" alt="googleplay" />
                                </div>
                                <div class="social-caption">
                                    <p class="text-uppercase footer-text m-0">Get it on</p>
                                    <h5 class="text-dark m-0 text-nowrap">Google Play</h5>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="col-xl-5 col-lg-6 col-md-12 col-12">
                        <div class="choose-us-head">
                            <div class="choose-us-wriops mb-2"><span class="fw-medium label-light-warning px-3 py-2 rounded">Employee Features</span></div>
                            <div class="choose-title">
                                <h2 class="lh-base">Trusted & Popular<br>Features</h2>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                            </div>
                            <div class="jobstock-icon-box-list mt-4">
                                <ul>

                                    <li>
                                        <div class="vib-list-wrap21">
                                            <div class="vib-list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="vib-list-caption">
                                                <h5>#1 Quality Job</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vib-list-wrap21">
                                            <div class="vib-list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="vib-list-caption">
                                                <h5>Top Companies</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vib-list-wrap21">
                                            <div class="vib-list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="vib-list-caption">
                                                <h5>International Jobs</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vib-list-wrap21">
                                            <div class="vib-list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="vib-list-caption">
                                                <h5>No Extra Charges</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <div class="clearfix"></div>
        <!-- ============================ Why Choose Us End ====================== -->


        <!-- ============================ Why Choose Us Start ================================== -->
        <section class="pt-0 gray-simple">
            <div class="container">

                <div class="row justify-content-between">

                    <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                        <div class="p-lg-5 p-md-0 pt-md-5">
                            <!-- Heading -->
                            <div class="mb-4 mb-sm-7">
                                <span class="fw-medium label-light-success px-3 py-2 rounded">Employer Features</span>
                                <h2 class="mt-2 lh-base">Best Job Search platform<br>Experience for you</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                            </div>
                            <!-- End Heading -->

                            <div class="jobstock-icon-box-list mt-4">
                                <ul>

                                    <li>
                                        <div class="vib-list-wrap21">
                                            <div class="vib-list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="vib-list-caption">
                                                <h5>#1 Quality Job</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vib-list-wrap21">
                                            <div class="vib-list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="vib-list-caption">
                                                <h5>Top Companies</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vib-list-wrap21">
                                            <div class="vib-list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="vib-list-caption">
                                                <h5>International Jobs</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="vib-list-wrap21">
                                            <div class="vib-list-icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="vib-list-caption">
                                                <h5>No Extra Charges</h5>
                                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-5 col-lg-5 col-md-12 col-12 text-center">
                        <div class="side-thumber-wrap">
                            <div class="side-effect"></div>
                            <div class="side-thumber-img">
                                <figure><img src="assets/img/Home-page/Features & Process Section Images/Right Side Image Variation 2.png" class="img-fluid" alt=""></figure>
                            </div>
                        </div>

                        <div class="app-wrap d-flex flex-wrap gap-4 justify-content-center">
                            <!-- Apple Store -->
                            <a href="#" class="d-flex align-items-center border rounded-3 px-3 py-2 gap-2 download-apple" style="min-width: 250px;">
                                <div class="social-icon">
                                    <img class="img-fluid" src="assets/img/applestore.png" width="60" alt="applestore" />
                                </div>
                                <div class="social-caption">
                                    <p class="text-uppercase footer-text m-0">Get it on</p>
                                    <h5 class="text-dark m-0 text-nowrap">Apple Store</h5>
                                </div>
                            </a>

                            <!-- Google Play -->
                            <a href="#" class="d-flex align-items-center border rounded-3 px-3 py-2 gap-2 download-google" style="min-width: 250px;">
                                <div class="social-icon">
                                    <img class="img-fluid" src="assets/img/play-store.png" width="60" alt="googleplay" />
                                </div>
                                <div class="social-caption">
                                    <p class="text-uppercase footer-text m-0">Get it on</p>
                                    <h5 class="text-dark m-0 text-nowrap">Google Play</h5>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <div class="clearfix"></div>
        <!-- ============================ Why Choose Us End ====================== -->


        <!-- ============================ Our Price End ================================== -->
        <section id="pricing">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="sec-heading center">
                            <h2>Explore our Prices</h2>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center gx-4 gy-4">

                    <!-- Single Box -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card border rounded-4 p-4 mb-0 price-card">
                            <div class="card-headers">
                                <div class="head-title-wroop mb-2">
                                    <h6 class="text-main fw-bold mb-0">Basic</h6>
                                    <h4><sup class="fw-bold">£</sup><span class="fs-1">10</span><sub class="text-sm-muted">\month</sub></h4>
                                </div>
                                <div class="head-btn-wroop">
                                    <button type="button" class="btn btn-md full-width btn-light-main fw-medium rounded-3">Get Started</button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body pb-0">
                                <ul class="row gy-4 p-0 pb-0">
                                    <li class="fw-medium col-12 ps-0"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Basic Employee Profiles</li>
                                    <li class="fw-medium col-12 ps-0"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Attendance Tracking</li>
                                    <li class="fw-medium col-12 ps-0"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Leave Management (Limited)</li>
                                    <li class="fw-medium col-12 ps-0"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Basic Reports</li>
                                </ul>
                            </div>
                            <a href="pricing.html">
                                <div class="head-btn-wroop w-100 justify-content-center d-flex py-3">
                                    <button type="button" class="btn btn-md w-50 btn-light2 border-success text-success rounded-3">Know More</button>
                                </div>
                            </a>

                        </div>
                    </div>

                    <!-- Single Box -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card border rounded-4 p-4 price-card bg-second mb-0">
                            <div class="card-headers">
                                <div class="head-title-wroop mb-2">
                                    <h6 class="text-warning fw-bold mb-0">STANDARD</h6>
                                    <h4 class="text-light"><sup class="fw-bold opacity-75">£</sup><span class="fs-1">20</span><sub class="text-sm-muted text-light opacity-75">\month</sub></h4>
                                </div>
                                <div class="head-btn-wroop">
                                    <button type="button" class="btn btn-md full-width btn-warning fw-medium rounded-3">Get Started</button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body pb-0">
                                <ul class="row gy-4 p-0 pb-0">
                                    <li class="fw-medium col-12 ps-0 text-light"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-light bg-transparent me-2"><i class="fa-solid fa-check"></i></span>Basic Employee Profiles</li>
                                    <li class="fw-medium col-12 ps-0 text-light"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-light bg-transparent me-2"><i class="fa-solid fa-check"></i></span>Attendance Tracking</li>
                                    <li class="fw-medium col-12 ps-0 text-light"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-light bg-transparent me-2"><i class="fa-solid fa-check"></i></span>Leave Management (Limited)</li>
                                    <li class="fw-medium col-12 ps-0 text-light"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-light bg-transparent me-2"><i class="fa-solid fa-check"></i></span>Basic Reports</li>
                                </ul>
                            </div>
                            <a href="pricing.html">
                                <div class="head-btn-wroop w-100 justify-content-center d-flex py-3">
                                    <button type="button" class="btn btn-md w-50 border-warning text-warning rounded-3">Know More</button>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Single Box -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="card border rounded-4 price-card p-4 mb-0">
                            <div class="card-headers">
                                <div class="head-title-wroop mb-2">
                                    <h6 class="text-main fw-bold mb-0">Premium</h6>
                                    <h4><sup class="fw-bold">£</sup><span class="fs-1">30</span><sub class="text-sm-muted">\month</sub></h4>
                                </div>
                                <div class="head-btn-wroop">
                                    <button type="button" class="btn btn-md full-width btn-light-main fw-medium rounded-3">Get Started</button>
                                </div>
                            </div>
                            <hr>
                            <div class="card-body pb-0">
                                <ul class="row gy-4 p-0 pb-0">
                                    <li class="fw-medium col-12 ps-0"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Basic Employee Profiles</li>
                                    <li class="fw-medium col-12 ps-0"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Attendance Tracking</li>
                                    <li class="fw-medium col-12 ps-0"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Leave Management (Limited)</li>
                                    <li class="fw-medium col-12 ps-0"><span class="square--30 circle d-inline-flex align-items-center justify-content-center text-success bg-light-success me-2"><i class="fa-solid fa-check"></i></span>Basic Reports</li>
                                </ul>
                            </div>
                            <a href="pricing.html">
                                <div class="head-btn-wroop w-100 justify-content-center d-flex py-3">
                                    <button class="btn btn-md w-50 btn-light2 border-success text-success rounded-3">
									Know More
									</button>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- ============================ Our Price End ================================== -->


        <!-- ============================ Call To Action ================================== -->
        <section class="bg-cover call-action-container bg-second" style="background:url(assets/img/bg2.png)no-repeat;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">

                        <div class="call-action-wrap">
                            <div class="call-action-caption">
                                <h2 class="text-light">Get In Touch With Us</h2>
                                <p class="fs-6 text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
                            </div>
                            <div class="call-action-form">
                                <form>
                                    <div class="newsltr-form">
                                        <input type="text" class="form-control" placeholder="Enter Your email">
                                        <button type="button" class="btn btn-main">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ============================ Call To Action End ================================== -->

        <!-- ============================ Footer Start ================================== -->
        <div id="footer"></div>
        <!-- ============================ Footer End ================================== -->


        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/rangeslider.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/counterup.min.js"></script>


    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->


    <script>
        fetch("header.html")
            .then(res => res.text())
            .then(data => {
                document.getElementById("header").innerHTML = data;

                // 1. Initialize dropdown after header loads
                const dropdownTriggerList = document.querySelectorAll('[data-bs-toggle="dropdown"]');
                dropdownTriggerList.forEach(dropdownTriggerEl => {
                    new bootstrap.Dropdown(dropdownTriggerEl);
                });

                // 2. Mark active nav link
                const currentPage = window.location.pathname.split("/").pop();
                const navLinks = document.querySelectorAll(".nav-menu li a");
                navLinks.forEach(link => {
                    const href = link.getAttribute("href").split("/").pop();
                    if (currentPage === href || (currentPage === "" && href === "index.html")) {
                        link.parentElement.classList.add("active");
                    } else {
                        link.parentElement.classList.remove("active");
                    }
                });
            });

        // Load footer
        fetch("footer")
            .then(res => res.text())
            .then(data => {
                document.getElementById("footer").innerHTML = data;
            });
    </script>
</body>

</html>