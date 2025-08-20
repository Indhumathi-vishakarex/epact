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
    const csrfToken = '{{ csrf_token() }}';

    // Load stored state
    const savedStatus = localStorage.getItem('checkStatus');
    if (savedStatus === 'in') {
        toggle.checked = true;
        statusText.innerText = 'Checked In';
    }

    toggle.addEventListener('change', async () => {
        if (toggle.checked) {
            // Check In API
            try {
                const res = await fetch('{{ url("employee/check-in") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({}),
                    credentials: 'same-origin'
                });
                const data = await res.json();
                if (data.status) {
                    localStorage.setItem('checkStatus', 'in');
                    statusText.innerText = 'Checked In';
                    alert(data.message);
                } else {
                    toggle.checked = false;
                    alert(data.message);
                }
            } catch (err) {
                toggle.checked = false;
                alert('Check-In failed.');
            }
        } else {
            // Check Out API
            try {
                const res = await fetch('{{ url("employee/check-out") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({ comment: 'Checked out via web' }),
                    credentials: 'same-origin'
                });
                const data = await res.json();
                if (data.status) {
                    localStorage.setItem('checkStatus', 'out');
                    statusText.innerText = 'Checked Out';
                    alert(data.message);
                } else {
                    toggle.checked = true;
                    alert(data.message);
                }
            } catch (err) {
                toggle.checked = true;
                alert('Check-Out failed.');
            }
        }
    });
});
</script>


    <!-- START HEADER -->
    @include('Employee.partials.header')
 


     

   @include('Employee.partials.sidebar')

{{--  
    <div class="modal-overlay" id="documentModal">
    <div class="modal-content">
        <h2>Upload Required Documents</h2>
        <p class="subtext">To continue using the dashboard, please upload the necessary documents below.</p>

        <form id="documentForm" 
              action="{{ url('/Update/' . auth()->guard('employee')->user()->id) }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf
      <label>profile</label>
            <input type="file" name="profile"><br> 

              <label>signature_uload<span class="text-danger">*</span></label>
    <input type="file" name="signature_uload" ><br>

            <label>License <span class="text-danger">*</span></label>
    <input type="file" name="driving_license" required><br>

    <label>Passport <span class="text-danger">*</span></label>
    <input type="file" name="passport" required><br>

    <label>Offer Letter <span class="text-danger">*</span></label>
    <input type="file" name="offerletter"><br>

            <button type="submit" class="submit-btn bg-green">Submit Documents</button>
        </form>
    </div>
</div> --}}


            {{-- <label>NDA <span class="text-danger">*</span></label>
            <input type="file" name="nda" required><br>

            <label>License <span class="text-danger">*</span></label>
            <input type="file" name="driving_license" required><br>

            <label>Passport <span class="text-danger">*</span></label>
            <input type="file" name="passport" required><br>

            <label>Offer Letter</label>
            <input type="file" name="offerletter"><br>

            <label>Aadhar Card / Government ID</label>
            <input type="file" name="aadhar"><br>

            <label>Experience Letters</label>
            <input type="file" name="experience"><br> --}}
       
        <main class="col-md-9 ms-sm-auto col-lg-10 mb-5">
            <!-- ---------------------------- -->

            <!-- Profile Summary -->
            <div class="row g-4 p-4 align-items-center mb-4">
                <div class="col-12 d-flex flex-wrap align-items-center justify-content-between mob-profile">
                    <!-- Profile Section -->
                    <div class="d-flex align-items-center flex-wrap">
                        <img src="{{ asset(Auth::guard('employee')->user()->profile ?? 'assets/img/default.png') }}"
                            class="rounded-circle me-3 mb-2" style="object-fit: cover;" width="80" height="80" alt="User">
                        <div class="me-4 mb-2">
                             <h4 class="mb-1">
        {{ Auth::guard('employee')->user()->first_name ?? '' }}
        {{ Auth::guard('employee')->user()->last_name ?? '' }}
    </h4>
                             <p class="mb-0 text-muted">
        {{ Auth::guard('employee')->user()->designation ?? 'Employee' }} | 
        Joined: {{ Auth::guard('employee')->user()->created_at->format('d M Y') }}
    </p>

                            
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
                        <h3 class="text-center text-white">{{ $totalPresentDays }}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="text-center text-white">Leaves Taken</h6>
                        <h3 class="text-center text-white">{{ $leavesTaken}}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="text-center text-white">Documents Uploaded</h6>
                        <h3 class="text-center text-white">{{$uploadedDocsCount}}</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="text-center text-white">Announcements</h6>
                        <h3 class="text-center text-white">8</h3>
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
                                       <p class="time">
                @if(!empty($todayAttendance) && $todayAttendance->check_in)
                    {{ \Carbon\Carbon::parse($todayAttendance->check_in)->format('h:i A') }}
                @else
                    --:--
                @endif
            </p>
                                        <span class="desc">On Time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card status-card red">
                                    <i class="text-danger mb-3 fas fa-sign-out-alt icon"></i>
                                    <div>
                                        <h6 class="text-danger">Check Out</h6>
            <p class="time">
                @if(!empty($todayAttendance) && $todayAttendance->check_out)
                    {{ \Carbon\Carbon::parse($todayAttendance->check_out)->format('h:i A') }}
                @else
                  not checkedout
                @endif
            </p>

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
                                        <p class="time">{{$remainingWorkingDays}}</p>
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
                                  <p class="time">
            {{ $workedHours ?? '--:--' }}</p>        <span class="desc">Total: {{ $totalOfficeHours }} hrs</span>
                            </div>
                        </div>
                        <div class="card status-card orange">
                            <div class=" col-md-10">
                                <i class="ms-4 mb-3 fas fa-hourglass-end icon"></i>
                                <h6>To Check Out</h6>
                               <p class="time">
            {{ $remainingHours ?? '--:--' }}
        </p>
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
        
        .modal-content h2 {
   display: block;
   margin-top: 10px;
   color: #000;
   z-index: 10000;
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
    {{-- <script>
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
    </script> --}}
@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            alert("{{ session('success') }}"); // show update message
            document.getElementById("documentModal").style.display = "none"; // hide popup form
        });
    </script>
@endif

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