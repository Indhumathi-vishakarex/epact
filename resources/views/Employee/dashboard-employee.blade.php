<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Removed duplicate bootstrap bundle import -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('style.css') }}" rel="stylesheet">

</head>

<body>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet">

    <style>
         :root {
            --shadow-dark: rgba(0, 0, 0, 0.3);
            --shadow-light: rgba(255, 255, 255, 0.8);
        }
        
        .toggle-wrapper {
            width: 260px;
            border-radius: 12px;
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            box-shadow: 3px 3px 6px var(--shadow-dark), -3px -3px 6px var(--shadow-light);
            background-color: rgb(242, 242, 242);
            font-family: 'Space Grotesk', sans-serif;
            z-index: 1;
        }
        
        .toggle-wrapper .text {
            font-size: 18px;
            color: rgb(135, 135, 135);
            font-weight: 600;
        }
        
        input#checkToggle {
            display: none;
        }
        
        input#checkToggle:checked+.button .dott {
            left: calc(100% - 27px);
            background-color: #1aa942;
        }
        
        .button {
            position: relative;
            width: 60px;
            height: 30px;
            border-radius: 30px;
            box-shadow: inset 2px 2px 5px var(--shadow-dark), inset -2px -2px 5px var(--shadow-light);
            cursor: pointer;
        }
        
        .button .dott {
            position: absolute;
            width: 20px;
            height: 20px;
            color: transparent;
            left: 5px;
            top: 50%;
            transform: translateY(-50%);
            border-radius: 50%;
            background-color: #e73e00;
            box-shadow: 3px 3px 6px var(--shadow-dark), -3px -3px 6px var(--shadow-light);
            transition: all 0.3s;
        }
        
        .toggle-status {
            font-size: 14px;
            color: #6d6d6d;
            font-weight: 500;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById('checkToggle');
            const statusText = document.getElementById('checkStatusText');

            // Load stored state
            const savedStatus = localStorage.getItem('checkStatus');
            if (savedStatus === 'in') {
                toggle.checked = true;
                statusText.innerText = 'Checked In';
            }

            toggle.addEventListener('change', () => {
                if (toggle.checked) {
                    localStorage.setItem('checkStatus', 'in');
                    statusText.innerText = 'Checked In';
                } else {
                    localStorage.setItem('checkStatus', 'out');
                    statusText.innerText = 'Checked Out';
                }
            });
        });
    </script>

    <!-- START HEADER -->
    @include('Employee.partials.header')
 


     {{-- <div class="modal-overlay" id="documentModal">
            <div class="modal-content">
                <h2>Upload Required Documents</h2>
                <p class="subtext">To continue using the dashboard, please upload the necessary documents below.</p>

                <form id="documentForm">
                    <label>NDA <span class="text-danger">*</span></label>
                    <input type="file" name="nda" required><br>

                    <label>License <span class="text-danger">*</span></label>
                    <input type="file" name="license" required><br>

                    <label>Passport <span class="text-danger">*</span></label>
                    <input type="file" name="passport" required><br>

                    <label>Offer Letter</label>
                    <input type="file" name="offer"><br>

                    <label>Aadhar Card / Government ID</label>
                    <input type="file" name="aadhar"><br>

                    <label>Experience Letters</label>
                    <input type="file" name="experience"><br>

                    <button type="submit" class="submit-btn bg-green">Submit Documents</button>
                </form>

            </div>
        </div>  --}}

   @include('Employee.partials.sidebar')
        <main class="col-md-9 ms-sm-auto col-lg-10 mb-5">
            <!-- ---------------------------- -->

            <!-- Profile Summary -->
            <div class="row g-4 p-4 align-items-center mb-4">
                <div class="col-12 d-flex flex-wrap align-items-center justify-content-between mob-profile">
                    <!-- Profile Section -->
                    <div class="d-flex align-items-center flex-wrap">
                        <img src="data:image/jpeg;base64,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"
                            class="rounded-circle me-3 mb-2" style="object-fit: cover;" width="80" height="80" alt="User">
                        <div class="me-4 mb-2">
                            <h4 class="mb-1">Kishore Anand</h4>
                            <p class="mb-0 text-muted">Software Engineer | Joined: 15 Mar 2022</p>
                            <div class="mt-1">
                                <small class="badge bg-secondary text-light me-2">Remote</small>
                                <small class="badge bg-secondary text-light me-2">Tech Team</small>
                                <small class="badge bg-secondary text-light">Full-time</small>
                            </div>
                        </div>
                    </div>

                    <!-- Vertical Line -->
                    <div class="d-none d-md-block" style="width: 1px; height: 60px; background: #b7b7b7ac;"></div>

                    <!-- Check-in/out Toggle -->
                    <div class="d-flex align-items-center checkToggle mt-3 bg-white mt-md-0 ms-md-3">
                        <div class="toggle-status me-3" id="checkStatusText">Checked Out</div>
                        <input type="checkbox" id="checkToggle" />
                        <label for="checkToggle" class="button">
                           <div class="dott"></div>
                        </label>
                    </div>
                </div>
            </div>
            <!-- Alert -->
            <div class="d-flex align-items-center alert alert-warning alert-dismissible fade show mt-4" role="alert">
                <i class="fas fa-shield-alt me-2"></i>
                <strong>Alert:</strong> If you want modify or change details of yours, Please contact HR to change.
                <button type="button" class="btn-close" style="padding: 12px;" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <!-- <h2 class=" mb-4"><i class="bi-calendar-plus text-green mx-2"></i>Leave Application</h2> -->
            <hr style="color: #33333360;" class="mb-4">

            {{-- announcement and notification --}}
            
             @include('Employee.partials.navbar')
            <!-- ---------------------------- -->


            <!-- Stat Cards -->
            <div class="row g-4 mb-2 bg-white rounded-3 mx-1 my-2">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="text-center text-white">Total Present Days</h6>
                        <h3 class="text-center text-white">124</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="text-center text-white">Leaves Taken</h6>
                        <h3 class="text-center text-white">8</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="text-center text-white">Documents Uploaded</h6>
                        <h3 class="text-center text-white">12</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="text-center text-white">Announcements</h6>
                        <h3 class="text-center text-white">3</h3>
                    </div>
                </div>
            </div>
            <hr style="color: #9a9a9a;" class="mt-4">
            <style>
                .status-card {
                    display: flex;
                    align-items: center;
                    background-color: #fff;
                    border-radius: 12px;
                    padding: 15px;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                    transition: 0.3s;
                    /* height: 100%; */
                }
                
                .status-card .icon {
                    font-size: 26px;
                    margin-right: 15px;
                }
                
                .status-card h6 {
                    font-size: 14px;
                    margin: 0;
                    color: #555;
                }
                
                .status-card .time {
                    font-size: 18px;
                    font-weight: bold;
                    margin: 5px 0;
                }
                
                .status-card .desc {
                    font-size: 12px;
                    color: #999;
                }
                /* Exact colors from image */
                
                .green {
                    border-left: 5px solid #209a28;
                }
                /* Check In */
                
                .red {
                    border-left: 5px solid #209a28;
                }
                /* Check Out */
                
                .purple {
                    border-left: 5px solid #209a28;
                }
                /* Break */
                
                .blue {
                    border-left: 5px solid #209a28;
                }
                /* Reminder */
                
                .darkgreen {
                    border-left: 5px solid #209a28;
                }
                /* Check In Hours */
                
                .orange {
                    border-left: 5px solid #209a28;
                }
                /* To Check Out */
                /* Responsive tweaks */
                
                @media (max-width: 992px) {
                    .status-card {
                        flex-direction: column;
                        text-align: center;
                    }
                    .status-card .icon {
                        margin: 0 0 10px 0;
                    }
                }
            </style>
            <div class="container mt-4">
                <div class="row bg-white p-4 rounded-3">
                    <!-- Left Column - Today Attendance -->
                    <div class="col-lg-6">
                        <h5><i class="fas fa-calendar-check me-2 mb-2"></i>Today Attendance</h5>
                        <div class="row g-3">
                            <div class="col-md-5">
                                <div class="card status-card green">
                                    <i class="text-success mb-3 fas fa-sign-in-alt icon"></i>
                                    <div>
                                        <h6 class="text-success">Check In</h6>
                                        <p class="time">09:20 am</p>
                                        <span class="desc">On Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card status-card red">
                                    <i class="text-danger mb-3 fas fa-sign-out-alt icon"></i>
                                    <div>
                                        <h6 class="text-danger">Check Out</h6>
                                        <p class="time">00:00 pm</p>
                                        <span class="desc">Go Home</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card status-card purple">
                                    <i class="mb-3 fas fa-coffee icon"></i>
                                    <div>
                                        <h6>Break Time</h6>
                                        <p class="time">00:30 min</p>
                                        <span class="desc">Avg Time 30 min</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card status-card blue">
                                    <i class="mb-3 fas fa-calendar-day icon"></i>
                                    <div>
                                        <h6>Reminder Days</h6>
                                        <p class="time">28</p>
                                        <span class="desc">Working Days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Your Activity -->
                    <div class="col-lg-6 row">
                        <h5><i class="fas fa-history me-2"></i>Your Activity</h5>
                        <div class="card status-card darkgreen mb-4">
                            <div class=" col-md-10">
                                <i class="ms-4 mb-3 fas fa-hourglass-start icon"></i>
                                <h6>Check In Hours</h6>
                                <p class="time">05.30 mins</p>
                                <span class="desc">Total: 08 hrs</span>
                            </div>
                        </div>
                        <div class="card status-card orange">
                            <div class=" col-md-10">
                                <i class="ms-4 mb-3 fas fa-hourglass-end icon"></i>
                                <h6>To Check Out</h6>
                                <p class="time">02.30 mins</p>
                                <span class="desc">Remaining</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <hr style="color: #9a9a9a;" class="mt-4">

            <!-- Announcements & Documents -->
            <div class="row g-4 mt-2 px-3">
                <!-- Latest Announcements -->
                <div class="card bg-white text-dark rounded-4 p-4 shadow-sm col-md-6">
                    <!-- <h4>Stay Updated with Company News</h4> -->
                    <h5 class="mb-4">📢 Latest Announcements</h5>
                    <p class="text-sm-muted"> <i class="bi bi-exclamation-circle-fill mx-2"></i>Get the latest updates, important notices, and announcements from your organization—all in one place.</p>
                    <div class="d-flex align-items-center mb-3 bg-white shadow-sm p-3 rounded-3">
                        <img src="https://i.pravatar.cc/40?img=3" alt="Avatar" class="rounded-circle me-3" width="40" height="40">
                        <div>
                            <h6 class="mb-0 text-dark">HR Team</h6>
                            <small class="text-muted">@hrmanager</small>
                            <p class="mb-0 mt-1">🎉 Quarterly bonus distribution this Friday!</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3 bg-white shadow-sm p-3 rounded-3">
                        <img src="https://i.pravatar.cc/40?img=4" alt="Avatar" class="rounded-circle me-3" width="40" height="40">
                        <div>
                            <h6 class="mb-0 text-dark">Admin Office</h6>
                            <small class="text-muted">@admin_office</small>
                            <p class="mb-0 mt-1">📦 New ID cards available at reception.</p>
                        </div>
                    </div>
                    <a href="{{route('announcement')}}"><button class="btn-custom  text-white mt-3" style="width: fit-content;">📬 View All</button></a>
                </div>
                <!-- Document Status -->
                <div class="col-md-6">
                    <div class="card p-4 shadow-sm rounded-4">
                        <!-- <h4>Access Your Uploaded Documents</h4> -->
                        <h5 class="mb-4">📁 My Documents</h5>
                        <p class="text-sm-muted"> <i class="bi bi-exclamation-circle-fill mx-2"></i>Securely view and manage your personal documents such as ID proofs, certificates.</p>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4" id="documentCardsContainer">
                            <div class="inner-card rounded-4 p-3 text-center bg-white shadow-sm">
                                <i class="bi bi-shield-lock-fill text-danger fs-2"></i>
                                <h6 class="mt-2 mb-1">NDA</h6>
                                <small class="text-muted">Updated: Jul: 2025</small><br>
                                <a href="${doc.content}" download="${doc.name}" class=" mt-2">
                                    <i class="bi bi-download"></i>
                                </a>
                            </div>
                            <div class="inner-card rounded-4 p-3 text-center bg-white shadow-sm">
                                <i class="bi bi-file-earmark-text-fill text-primary fs-2"></i>
                                <h6 class="mt-2 mb-1">Aadhar</h6>
                                <small class="text-muted">Updated: Jul: 2025</small><br>
                                <a href="${doc.content}" download="${doc.name}" class=" mt-2">
                                    <i class="bi bi-download"></i>
                                </a>
                            </div>
                            <div class="inner-card rounded-4 p-3 text-center bg-white shadow-sm">
                                <i class="bi bi-person-vcard-fill text-success fs-2"></i>
                                <h6 class="mt-2 mb-1">PAN card</h6>
                                <small class="text-muted">Updated: Jul: 2025</small><br>
                                <a href="${doc.content}" download="${doc.name}" class=" mt-2">
                                    <i class="bi bi-download"></i>
                                </a>
                            </div>
                            <div class="inner-card rounded-4 p-3 text-center bg-white shadow-sm">
                                <i class="bi bi-briefcase-fill text-warning fs-2"></i>
                                <h6 class="mt-2 mb-1">Experience Certificate</h6>
                                <small class="text-muted">Updated: Jul: 2025</small><br>
                                <a href="${doc.content}" download="${doc.name}" class=" mt-2">
                                    <i class="bi bi-download"></i>
                                </a>
                            </div>
                            <div class="inner-card rounded-4 p-3 text-center bg-white shadow-sm">
                                <i class="bi bi-mortarboard-fill text-info fs-2"></i>
                                <h6 class="mt-2 mb-1">Educational certificate</h6>
                                <small class="text-muted">Updated: Jul: 2025</small><br>
                                <a href="${doc.content}" download="${doc.name}" class=" mt-2">
                                    <i class="bi bi-download"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <hr style="color: #9a9a9a;;">
                <!-- Charts & Graphs -->
                <div class="row g-2 mt-4 bg-white rounded-3 p-4">
                    <!-- Attendance Chart -->
                    <div class="col-md-6">
                        <div class="card shadow-sm rounded-4">
                            <div class="card-body">
                                <h6 class="card-title mb-3">Monthly Attendance</h6>
                                <p class="text-sm-muted"> <i class="bi bi-exclamation-circle-fill mx-2"></i>Analyze how your leaves are distributed across different categories like casual, sick, and earned leave.</p>
                                <div class="rounded-3 performanceBar  animate__animated animate__fadeIn">
                                    <canvas id="performanceBar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Leave Distribution -->
                    <div class="col-md-6">
                        <div class="card shadow-sm rounded-4">
                            <h6 class="card-title m-3">Leave Type Distribution</h6>
                            <p class="text-sm-muted mx-3"> <i class="bi bi-exclamation-circle-fill mx-2"></i>Review your attendance for the current month with detailed daily records and summaries detailed.</p>
                            <div class="card-body" style="width: 100%; align-self: center;">
                                <canvas id="leaveChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    <footer class="footer skin-light-footer" style="background-color: white;">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <img src="../assets/img/w-Epact.png" class="img-footer img-flio
                           " alt="logo">
                            <div class="footer-add">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo</p>
                            </div>
                            <div class="foot-socials">
                                <ul>
                                    <li><a href="JavaScript:Void(0);" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="JavaScript:Void(0);" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ps-xl-5">
                        <div class="footer-widget">
                            <h4 class="widget-title">The Company</h4>
                            <ul class="footer-menu">
                                <li><a href="../index.html"><i class="fa-solid fa-angle-double-right"></i> Home</a></li>
                                <li><a href="../about.html"><i class="fa-solid fa-angle-double-right"></i> About Us</a></li>
                                <li><a href="../pricing.html"><i class="fa-solid fa-angle-double-right"></i> Pricing</a></li>
                                <li><a href="../faq.html"><i class="fa-solid fa-angle-double-right"></i> FAQ</a></li>
                                <li><a href="../contact.html"><i class="fa-solid fa-angle-double-right"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="footer-menu">
                                <li><a href="../login.html"><i class="fa-solid fa-angle-double-right"></i> Employer Login</a></li>
                                <li><a href="../employee-login.html"><i class="fa-solid fa-angle-double-right"></i> Employee Login</a></li>
                                <li><a href="../terms.html"><i class="fa-solid fa-angle-double-right"></i> Terms & Conditions</a></li>
                                <li><a href="../privacy.html"><i class="fa-solid fa-angle-double-right"></i> Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Contact Us On</h4>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-solid fa-phone-volume"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:02033765250">020 3376 5250</a></p>
                                </div>
                            </div>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon"><i class="fa-regular fa-envelope"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Drop A Mail</h6>
                                    <p><a href="mailto:info@epact.com">info@epact.com</a></p>
                                </div>
                            </div>
                            <div class="vl-elfo-group">
                                <div class="vl-elfo-icon" style="width: revert-layer !important; "><i class="fa-solid fa-map-marker-alt"></i></div>
                                <div class="vl-elfo-caption">
                                    <h6>Reach Us</h6>
                                    <p>Unit 5, EN1 1SP, United Kingdom</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" style="height: 4vh !important;">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 text-center">
                        <p class="mb-0">&copy; 2025 <a href="index.html">Winngoo EPact</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!-- jQuery for section toggling -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- External CDNs -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            overflow-y: scroll;
            padding: 20px 10px;
        }
        
        .modal-content {
            background: #fff;
            padding: 2rem 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
            text-align: center;
            animation: fadeIn 0.4s ease-in-out;
        }
        
        .modal-content h2 {
            margin-bottom: 10px;
            font-size: 24px;
            color: #333;
        }
        
        .modal-content .subtext {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }
        
        .modal-content label {
            display: block;
            text-align: left;
            font-weight: bold;
            margin: 10px 0 5px;
        }
        
        .modal-content input[type="file"] {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        
        .submit-btn {
            background: #007BFF;
            color: #fff;
            padding: 10px 25px;
            border: none;
            border-radius: 8px;
            margin-top: 20px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .submit-btn:hover {
            background: #0056b3;
        }
        
        @keyframes fadeIn {
            from {
                transform: scale(0.95);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
    <script>
        const STORAGE_KEY = "uploadedDocuments";

        const ICONS = {
            offer: "bi-file-earmark-text-fill text-primary",
            nda: "bi-shield-lock-fill text-danger",
            aadhar: "bi-person-vcard-fill text-success",
            experience: "bi-briefcase-fill text-warning",
            education: "bi-mortarboard-fill text-info"
        };

        const LABELS = {
            offer: "Offer Letter",
            nda: "NDA",
            aadhar: "Aadhar Card",
            experience: "Experience Letter",
            education: "Educational Certificate"
        };

        const getFormattedDate = () => {
            const date = new Date();
            return date.toLocaleString("default", {
                month: "short",
                year: "numeric"
            });
        };

        const saveToLocalStorage = (files, callback) => {
            let filesToRead = 0;
            let filesRead = 0;

            for (let key in files) {
                if (files[key]) filesToRead++;
            }

            for (let key in files) {
                const file = files[key];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function() {
                        const storedData = JSON.parse(localStorage.getItem(STORAGE_KEY)) || {};
                        storedData[key] = {
                            name: file.name,
                            type: file.type,
                            content: reader.result,
                            updated: getFormattedDate()
                        };
                        localStorage.setItem(STORAGE_KEY, JSON.stringify(storedData));
                        filesRead++;

                        if (filesRead === filesToRead) {
                            localStorage.setItem("documentsUploaded", "true");
                            renderCards();
                            callback();
                        }
                    };
                    reader.readAsDataURL(file);
                }
            }
        };

        const renderCards = () => {
            const container = document.getElementById("documentCardsContainer");
            const documents = JSON.parse(localStorage.getItem(STORAGE_KEY));
            container.innerHTML = "";

            if (!documents) return;

            for (let key in documents) {
                const doc = documents[key];
                const icon = ICONS[key] || "bi-file-earmark";
                const label = LABELS[key] || key;

                const card = document.createElement("div");
                card.className = "col";
                card.innerHTML = `
        <div class="inner-card rounded-4 p-3 text-center bg-white shadow-sm">
          <i class="bi ${icon} fs-2"></i>
          <h6 class="mt-2 mb-1">${label}</h6>
          <small class="text-muted">Updated: ${doc.updated}</small><br>
          <a href="${doc.content}" download="${doc.name}" class=" mt-2">
            <i class="bi bi-download"></i>
          </a>
        </div>
      `;
                container.appendChild(card);
            }
        };

        window.addEventListener("load", () => {
            const uploaded = localStorage.getItem("documentsUploaded") === "true";
            if (!uploaded) {
                document.getElementById("documentModal").style.display = "flex";
            } else {
                renderCards();
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            if (!localStorage.getItem("docsSubmitted")) {
                document.getElementById("documentModal").style.display = "flex";
            } else {
                document.getElementById("documentModal").style.display = "none";
            }

            document.getElementById("documentForm").addEventListener("submit", function(e) {
                e.preventDefault();
                const form = e.target;
                const files = {
                    nda: form.nda.files[0],
                    license: form.license.files[0],
                    passport: form.passport.files[0],
                    offer: form.offer.files[0],
                    aadhar: form.aadhar.files[0],
                    experience: form.experience.files[0]
                };
                localStorage.setItem("docsSubmitted", "true");
                document.getElementById("documentModal").style.display = "none";
                alert("Documents submitted successfully!");
            });
        });
    </script>

    <script>
        // Donut Style Pie Chart (Followers by Gender / Leave Distribution)
        new Chart(document.getElementById('leaveChart'), {
            type: 'doughnut',
            data: {
                labels: ['Sick Leave', 'Casual Leave', 'Earned Leave', 'Remaining Leaves'],
                datasets: [{
                    data: [5, 3, 2, 1],
                    backgroundColor: ['#ff4d88', '#4d79ff', '#ffc107', '#ddd'],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                cutout: '50%',
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            usePointStyle: true,
                            padding: 20
                        }
                    },
                    tooltip: {
                        backgroundColor: '#333',
                        titleColor: '#fff',
                        bodyColor: '#fff'
                    }
                }
            }
        });

        // Horizontal Bar Chart (Top Followers by Location / Attendance)
        new Chart(document.getElementById('performanceBar').getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Performance Score',
                    data: [75, 80, 70, 85, 90, 88],
                    backgroundColor: '#1daa61'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Add 'active' class to current nav link

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebarNav');
            const toggleBtn = document.getElementById('sidebarToggle');
            sidebar.classList.toggle('show');
            toggleBtn.style.display = sidebar.classList.contains('show') ? 'none' : 'block';
        }

        function toggleCollapse(id) {
            const target = document.getElementById(id);
            const all = document.querySelectorAll('.collapse');
            all.forEach(el => {
                if (el !== target) el.classList.remove('show');
            });
            target.classList.toggle('show');
        }

        function setupSectionToggles() {
            document.querySelectorAll(".module-link").forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetId = this.dataset.target;
                    document.querySelectorAll(".module-section").forEach(section => {
                        section.style.display = "none";
                    });
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) targetSection.style.display = "block";
                    if (window.innerWidth <= 768) toggleSidebar();
                });
            });
        }


        // Link active Nav
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname.split("/").pop(); // e.g. add-emp.html
            const navLinks = document.querySelectorAll(".nav-link");

            navLinks.forEach(link => {
                const href = link.getAttribute("href");
                if (href && href.includes(currentPath)) {
                    // Highlight the current page link
                    link.classList.add("active");

                    // Expand its parent dropdown (if any)
                    const parentCollapse = link.closest(".collapse");
                    if (parentCollapse) {
                        parentCollapse.classList.add("show");

                        // Set the toggle button's aria-expanded to true
                        const toggle = document.querySelector(`[data-bs-toggle="collapse"][href="#${parentCollapse.id}"]`);
                        if (toggle) {
                            toggle.setAttribute("aria-expanded", "true");
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>