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

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

</head>

<body>

    <style>
        body {
            background: #f4f7fa;
            font-family: 'Jost', sans-serif;
        }
        
        .badge {
            padding: 4px 6px;
            font-weight: 400;
            position: relative;
            right: -8px;
        }
        
        .announcement-card {
            background: #fff;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
        }
        
        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: contain;
            margin-right: 15px;
        }
        
        .announcement-text {
            font-size: 16px;
            margin-top: 10px;
        }
        
        .bottom-icons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 14px;
        }
        
        .bottom-icons i {
            margin-right: 5px;
            color: #7c7c7c;
            cursor: pointer;
        }
        
        .bottom-icons span {
            color: #7c7c7c;
            font-weight: 500;
        }
    </style>
    <!-- START HEADER -->
  @include('Employer.partials.header')
    <!-- Navigation -->
 
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
                @include('Employer.partials.sidebar')
            <!-- Main Content -->

            <main class="col-md-9 ms-sm-auto col-lg-10 content">
                <div class="container mb-5">
                    <h2 class="fw-bold">Employee Attendance</h2>
                    <p class="text-sm-muted mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                    <!-- Filter Section -->
                    <div class="row mb-4" style="border-radius: 10px; background: white;padding: 1.5rem 0px;">
                        <div class="col-md-2">
                            <label class="form-label">Month & Year</label>
                            <input type="month" class="form-control" id="filterMonthYear">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label for="employeeSearch" class="form-label">Search Employee</label>
                            <input type="text" id="employeeSearch" class="form-control" placeholder="Enter employee name...">
                        </div>
                        <div class="col-md-4 d-flex align-items-end mb-2">
                            <button class="btn btn-custom w-50" onclick="filterAttendance()">Filter</button>
                        </div>
                        <div class="mt-3" style="padding: 1rem 2rem; background: white; border-radius: 10px;">
                            <table class="table-trendy" id="employeeTable">
                                <thead>
                                    <tr>
                                        <!-- <th><input type="checkbox" id="selectAll" onclick="toggleAllCheckboxes(this)"></th> -->
                                        <th>No</th>
                                        <th>EmpID</th>
                                        <th>Employee Name</th>
                                        <th class="text-center">Days Present</th>
                                        <th class="text-center">Days Absent</th>
                                        <th class="text-center">Leave Applied</th>
                                        <th class="text-center">Total Working Days</th>
                                        <th>Attendance %</th>
                                    </tr>
                                </thead>

                                <tbody id="attendanceBody">
                                    <!-- Data will be injected via JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Attendance Table -->
                </div>
            </main>
        </div>
    </div>
    {{-- <div id="footer"></div> --}}
    @include('Frontend.layouts.footer')
 
    <!-- jQuery for section toggling -->
   <script src="{{ asset('js/pages.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const dummyAttendanceData = [{
            id: 'EMP001',
            name: 'Jones Fazil',
            present: 22,
            absent: 2,
            leave: 1,
            workingDays: 25
        }, {
            id: 'EMP002',
            name: 'Jane Optimal',
            present: 20,
            absent: 4,
            leave: 1,
            workingDays: 25
        }, {
            id: 'EMP003',
            name: 'Michael Kane',
            present: 18,
            absent: 5,
            leave: 2,
            workingDays: 25
        }, {
            id: 'EMP004',
            name: 'Paramasivan',
            present: 25,
            absent: 0,
            leave: 0,
            workingDays: 25
        }, ];

        function renderAttendance(data) {
            const tbody = document.getElementById('attendanceBody');
            tbody.innerHTML = '';

            data.forEach((emp, index) => {
                const attendancePercent = ((emp.present / emp.workingDays) * 100).toFixed(2);
                const row = `
         <tr>
            <td>${index + 1}</td>
            <td>${emp.id}</td>
            <td>${emp.name}</td>
            <td class="text-center">${emp.present}</td>
            <td class="text-center">${emp.absent}</td>
            <td class="text-center">${emp.leave}</td>
            <td class="text-center">${emp.workingDays}</td>
            <td><span class="badge ${attendancePercent >= 90 ? 'bg-success' : 'bg-warning'}">${attendancePercent}%</span></td>
         </tr>
      `;
                tbody.innerHTML += row;
            });
        }

        // Filter Function (currently filters only by name)
        function filterAttendance() {
            const search = document.getElementById('employeeSearch').value.toLowerCase();
            const filtered = dummyAttendanceData.filter(emp =>
                emp.name.toLowerCase().includes(search)
            );
            renderAttendance(filtered);
        }

        // Initialize attendance on page load
        document.addEventListener('DOMContentLoaded', function() {
            renderAttendance(dummyAttendanceData);
        });
    </script>


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
        #attendanceBody tr td {
            border-top: 0 !important;
            line-height: 3;
        }
    </style>
</body>

</html>
<script>
</script>