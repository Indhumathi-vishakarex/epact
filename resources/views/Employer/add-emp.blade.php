<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Dashboard</title>

<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <style>
        .badge {
            padding: 0;
        }
    </style>
    <!-- START HEADER -->
    @include('Employer.partials.header')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
                   @include('Employer.partials.sidebar')
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 content">
                <!-- My Profile -->

                <!-- Add Employee -->
                <div id="add-employee" class="">
                    <h4 class="section-heading">Add Employee</h4>
                    <!-- Top Navbar -->
                    <nav class="navbar top-nav navbar-expand-lg navbar-white bg-none shadow-sm px-3">
                        <!-- <a class="navbar-brand fw-bold" href="#">🏢 EPact</a> -->

                        <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                            <!-- Announcements -->
                            <li class="nav-item position-relative">
                                <a href="{{route('emp-announcement')}}" class="nav-link">
                                    <i class="bi bi-megaphone fs-5"></i>
                                    <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                                </a>
                            </li>

                            <!-- Notifications -->
                            <li class="nav-item position-relative">
                                <a href="{{route('emp-notification')}}" class="nav-link">
                                    <i class="bi bi-bell fs-5"></i>
                                    <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <form id="addEmployeeForm" class="card p-4">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Employee ID</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empId" placeholder="Emp001" value="EMP001" disabled required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">First Name</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empFirstName" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Last Name</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empLastName">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Personal Email</label><span class="required text-danger mx-1">*</span>

                                <input type="email" class="form-control" id="empPersonalEmail">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Office Email</label><span class="required text-danger mx-1">*</span>

                                <input type="email" class="form-control" id="empEmail" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Password</label><span class="required text-danger mx-1">*</span>

                                <input type="password" class="form-control" id="empPassword" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Join Date</label><span class="required text-danger mx-1">*</span>

                                <input type="date" class="form-control" id="empJoinDate" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Designation</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empDesignation" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Phone Number</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empPhone" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Emergency Contact</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empEmergencyContact">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Shift Time</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empShift" placeholder="10.00Am - 6.00Pm">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Department</label>
                                <select class="form-select" id="empDepartment" required>
                                <option selected disabled>Choose...</option>
                                <option>IT</option>
                                <option>HR</option>
                                <option>Finance</option>
                                <option>Marketing</option>
                            </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Employee Type</label><span class="required text-danger mx-1">*</span>
                                <select class="form-select" id="empType">
                                <option selected disabled>Choose...</option>
                                <option>Permanent</option>
                                <option>Intern</option>
                                <option>Contract</option>
                            </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Gender</label><span class="required text-danger mx-1">*</span>
                                <select class="form-select" id="empGender">
                               <option selected disabled>Choose...</option>
                               <option>Male</option>
                               <option>Female</option>
                               <option>Other</option>
                            </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Blood Group</label><span class="required text-danger mx-1">*</span>
                                <select class="form-select" id="empGender">
                                <option selected disabled>Choose...</option>
                                <option>A+</option>
                                <option>A−</option>
                                <option>B+</option>
                                <option>B−</option>
                                <option>AB+</option>
                                <option>AB−</option>
                                <option>O+</option>
                                <option>O−</option>
                            </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Date of Birth</label><span class="required text-danger mx-1">*</span>

                                <input type="date" class="form-control" id="empDob">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address 1</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empAddress1">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Address 2</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empAddress2">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Salary</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empSalary">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">City</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empCity">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Postal Code</label><span class="required text-danger mx-1">*</span>

                                <input type="text" class="form-control" id="empPostal">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Upload Profile Photo</label><span class="required text-danger mx-1">*</span>

                                <input type="file" class="form-control" style="line-height: 46px;" accept="image/png, image/jpeg">
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-custom" style="width: fit-content !important;">Create Employee</button>
                            <!-- <button type="submit" class="btn mx-3 btn-outline-success" style="width: fit-content !important;">Reset</button> -->
                        </div>
                    </form>
                </div>
                <!-- Manage Employee -->

        </div>
        </main>
    </div>
    </div>
    <div id="footer">
        @include('Frontend.layouts.footer')
    </div>
    <!-- jQuery for section toggling -->
    <script src="./js/pages.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/rangeslider.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
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
    <style>

    </style>
</body>

</html>