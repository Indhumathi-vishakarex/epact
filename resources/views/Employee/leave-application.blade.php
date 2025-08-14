<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leave application</title>
   <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<!-- Bootstrap & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Styles -->
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('style.css') }}" rel="stylesheet">

    <style>

    </style>
</head>

<body>
    <!-- START HEADER -->
    @include('Employee.partials.header')
    @include('Employee.partials.sidebar')
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 mb-5">
                <!-- ---------------------------- -->
                <div id="leave-requests" class="">
                    <h2 class=" mb-4"><i class="bi-calendar-plus text-green mx-2"></i>Leave Application</h2>
                    <hr style="color: #33333360;">
                  

                      {{-- announcement and notification --}}
            
             @include('Employee.partials.navbar')
                    <!-- ---------------------------- -->

                    <div class="container mt-4">
                        <!-- Submit Leave Request -->
                        <p class="text-sm-muted">Create Leave Application</p>
                        <div class="row px-2 d-flex justify-content-between">
                            <div class="card mb-4 shadow-sm col-md-6 px-0">
                                <div class="card-header fw-bold bg-green2 text-white">Apply Leave Request</div>
                                <div class="card-body">
                                    <form id="leaveForm">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="leaveType" class="form-label">Leave Type <span class="text-danger">*</span></label>
                                                <select class="form-select" id="leaveType" required>
                                       <option value="">Choose...</option>
                                       <option value="Sick Leave">Sick Leave</option>
                                       <option value="Casual Leave">Casual Leave</option>
                                       <option value="Earned Leave">Earned Leave</option>
                                       <option value="Earned Leave">Emergency Leave</option>
                                       <option value="Maternity/Paternity Leave">Maternity/Paternity Leave</option>
                                    </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="startDate" class="form-label">Start Date <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" id="startDate" required>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="endDate" class="form-label">End Date</label>
                                                <input type="date" class="form-control" id="endDate" required>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="reason" class="form-label">Reason <span class="text-danger">*</span></label>
                                                <textarea class="form-control" id="reason" rows="3" placeholder="Brief explanation..." required></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="docFile" class="form-label">Proof</label>
                                                <input type="file" class="form-control" id="docFile" required />
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-success">Submit Request</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Leave Balances -->
                            <div class="card mb-4 shadow-sm col-md-6 leave-balance px-0">
                                <div class="card-header fw-bold bg-second text-dark">Leave requests pending</div>
                                <div class="card-body p-0">
                                    <table class="table table-striped mb-0">
                                        <thead>
                                            <tr>
                                                <th>Leave Type</th>
                                                <th class="text-center">Available Days</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sick Leave</td>
                                                <td class="text-center">5</td>
                                            </tr>
                                            <tr>
                                                <td>Casual Leave</td>
                                                <td class="text-center">3</td>
                                            </tr>
                                            <tr>
                                                <td>Earned Leave</td>
                                                <td class="text-center">7</td>
                                            </tr>
                                            <tr>
                                                <td>Maternity/Paternity Leave</td>
                                                <td class="text-center">30</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <br>
                            <hr style="color: #33333360;">
                            <br>

                            <p class="text-sm-muted">Applied Leaves</p>
                            <!-- Leave History -->
                            <div class="card shadow-sm px-0">
                                <div class="card-header fw-bold bg-green text-white">Leave Requests</div>
                                <div class="card-body p-0">
                                    <table class="table table-responsive table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>E-ID</th>
                                                <th>Employee Name</th>
                                                <th>Leave Type</th>
                                                <th>Date Range</th>
                                                <th>Reason</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="leaveTableBody">
                                            <tr>
                                                <td>1</td>
                                                <td>EMP001</td>
                                                <td>Kishore Anand</td>
                                                <td>Casual Leave</td>
                                                <td>07/12/2025 - 22/12/2025</td>
                                                <td>Medical Checkup</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-success view-btn" data-bs-toggle="modal" data-bs-target="#leaveModal" data-id="EMP001" data-name="Kishore Anand" data-leave="Casual Leave" data-date="07/12/2025 - 22/12/2025" data-reason="classmodal-dialog modal-dialog-centered modal-lg modal-contentmodal-header bg-green text-white class=modal-title text-white">View</button>
                                                    <button class="btn btn-sm btn-outline-danger remove-btn"><i class="bi bi-trash"></i></button>
                                                </td>
                                            </tr>
                                            <script>
                                                document.querySelectorAll('.remove-btn').forEach(button => {
                                                    button.addEventListener('click', function() {
                                                        alert('Want to remove this data?')
                                                        this.closest('tr').remove();
                                                    });
                                                });
                                            </script>
                                        </tbody>
                                        <div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="leaveModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-green text-white">
                                                        <h5 class="modal-title text-white" id="leaveModalLabel">Leave Request Details</h5>
                                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row mb-2">
                                                            <div class="my-2 col-md-6"><strong>E-ID:</strong> <span id="modalEid"></span></div>
                                                            <div class="my-2 col-md-6"><strong>Employee Name:</strong> <span id="modalName"></span></div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="my-2 col-md-6"><strong>Leave Type:</strong> <span id="modalLeave"></span></div>
                                                            <div class="my-2 col-md-6"><strong>Date Range:</strong> <span id="modalDate"></span></div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="my-2 col-md-12"><strong>Reason:</strong> <span id="modalReason"></span></div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="my-2 col-md-12"><strong>Status:</strong> <span id="modalStatus" class="badge bg-warning"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            document.querySelectorAll(".view-btn").forEach(button => {
                                                button.addEventListener("click", function() {
                                                    document.getElementById("modalEid").innerText = this.dataset.id;
                                                    document.getElementById("modalName").innerText = this.dataset.name;
                                                    document.getElementById("modalLeave").innerText = this.dataset.leave;
                                                    document.getElementById("modalDate").innerText = this.dataset.date;
                                                    document.getElementById("modalReason").innerText = this.dataset.reason;

                                                    const statusText = this.dataset.status;
                                                    const modalStatus = document.getElementById("modalStatus");
                                                    modalStatus.innerText = statusText;

                                                    // Change badge color based on status
                                                    modalStatus.className = "badge"; // reset
                                                    if (statusText === "Pending") {
                                                        modalStatus.classList.add("bg-warning");
                                                    } else if (statusText === "Approved") {
                                                        modalStatus.classList.add("bg-success");
                                                    } else {
                                                        modalStatus.classList.add("bg-danger");
                                                    }
                                                });
                                            });
                                        </script>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            </div>
        </div>
        <footer class="footer skin-light-footer" style="background-color: white; box-shadow:0 8px 12px 0px;">
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
                                    <li><a href="./index.html"><i class="fa-solid fa-angle-double-right"></i> Home</a></li>
                                    <li><a href="./about.html"><i class="fa-solid fa-angle-double-right"></i> About Us</a></li>
                                    <li><a href="./pricing.html"><i class="fa-solid fa-angle-double-right"></i> Pricing</a></li>
                                    <li><a href="./faq.html"><i class="fa-solid fa-angle-double-right"></i> FAQ</a></li>
                                    <li><a href="./contact.html"><i class="fa-solid fa-angle-double-right"></i> Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">Quick Links</h4>
                                <ul class="footer-menu">
                                    <li><a href="../employee-login.html"><i class="fa-solid fa-angle-double-right"></i> Employee Login</a></li>
                                    <li><a href="../login.html"><i class="fa-solid fa-angle-double-right"></i> Employer Login</a></li>
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
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/rangeslider.js"></script>
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <script src="../assets/js/slick.js"></script>
        <script src="../assets/js/counterup.min.js"></script>
        <script src="../assets/js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
        <script>
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