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
        .badge-small {
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
                <!-- Leave Request -->
                <div id="leave-requests">
                    <h4 class="mb-3">Leave Requests Management</h4>
                    <div class="card p-3 mb-4">
                        <p>This module allows employers to view, approve, and manage employee leave requests.</p>
                    </div>
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
                    <!-- Filter Options -->
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="filterEmployee" placeholder="Search by Employee">
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" id="filterType">
                           <option value="">All Leave Types</option>
                           <option>Sick Leave</option>
                           <option>Casual Leave</option>
                           <option>Vacation</option>
                        </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" id="filterDate">
                        </div>
                        <div class="col-md-3">
                            <button class="btn w-50 d-flex align-items-center justify-content-center gap-2" style="background-color: #0f814b; color: #fff; border-radius: 4px;" onclick="applyLeaveFilter()">
                        <i class="bi bi-funnel-fill"></i> Filter
                        </button>
                        </div>
                    </div>
                    <!-- Leave Requests Table -->
                    <div class="bg-white px-4 py-3 border-1">
                        <table class="table table-trendy">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>EmpID</th>
                                    <th>Employee Name</th>
                                    <th>Leave Type</th>
                                    <th>Date Range</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="leaveRequestsTableBody">
                                <!-- Example row -->
                                <tr>
                                    <td>1</td>
                                    <td>Kishore Anand</td>
                                    <td>Sick Leave</td>
                                    <td>2025-07-15 to 2025-07-17</td>
                                    <td>Rest</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td>
                                        <button class="btn btn-success btn-sm me-1" onclick="approveLeave(this.closest('tr'))">Approve</button>
                                        <button class="btn btn-danger btn-sm" onclick="rejectLeave(this.closest('tr'))">Reject</button>
                                    </td>
                                </tr>
                                <!-- Add rows dynamically -->
                            </tbody>
                        </table>
                        <div class="modal fade" id="reasonModal" tabindex="-1" aria-labelledby="reasonModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-success">
                                        <h5 class="modal-title text-white" id="reasonModalLabel">Leave Reason</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Name:</strong> <span id="employeeName"></span></p>
                                        <p><strong>Type:</strong> <span id="typeText"></span></p>
                                        <p><strong>Reason:</strong> <span id="reasonText"></span></p>
                                        <p><strong>Date range:</strong> <span id="dateRange"></span></p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <!-- Reason view model -->
    <script>
        function showReason(reason, employee, type, date) {
            document.getElementById("employeeName").innerText = employee;
            document.getElementById("typeText").innerText = type;
            document.getElementById("reasonText").innerText = reason;
            document.getElementById("dateRange").innerText = date; // fixed ID

            const modal = new bootstrap.Modal(document.getElementById("reasonModal"));
            modal.show();
        }
    </script>


    <script>
        // toggle
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
        // Leave app
        const leaveRequests = [{
                name: "Kishore Anand",
                type: "Sick Leave",
                from: "2025-07-15",
                to: "2025-07-17",
                reason: "Fever and rest",
                status: "Pending"
            }, {
                name: "Nithya Raj",
                type: "Vacation",
                from: "2025-07-10",
                to: "2025-07-15",
                reason: "Family trip",
                status: "Approved"
            }
            // Add more mock data as needed
        ];

        function applyLeaveFilter() {
            const nameQuery = document.getElementById("filterEmployee").value.toLowerCase();
            const typeQuery = document.getElementById("filterType").value;
            const dateQuery = document.getElementById("filterDate").value;

            const filtered = leaveRequests.filter(leave => {
                const matchesName = leave.name.toLowerCase().includes(nameQuery);
                const matchesType = !typeQuery || leave.type === typeQuery;
                const matchesDate = !dateQuery || (leave.from <= dateQuery && leave.to >= dateQuery);
                return matchesName && matchesType && matchesDate;
            });

            renderLeaveTable(filtered);
        }

        function renderLeaveTable(data) {
            const tbody = document.getElementById("leaveRequestsTableBody");
            tbody.innerHTML = "";

            if (data.length === 0) {
                tbody.innerHTML = `<tr><td colspan="7" class="text-center text-muted">No matching records found.</td></tr>`;
                return;
            }

            data.forEach((leave, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
            <td>${index + 1}</td>
            <td style="text-align: center;">EMP${String(index + 1).padStart(3, '0')}</td>
            <td>${leave.name}</td>
            <td>${leave.type}</td>
            <td>${leave.from} to ${leave.to}</td>
            <td>
              <button class="btn btn-outline-success btn-sm"
                onclick="showReason('${leave.reason}', '${leave.name}', '${leave.type}', '${leave.from} to ${leave.to}')">Details</button>
            </td>
            <td><span class="badge bg-${leave.status === "Approved" ? "success" : leave.status === "Rejected" ? "danger" : "warning text-dark"}">${leave.status}</span></td>
            <td class="action">
              <button class="btn btn-success btn-sm me-1">Approve</button>
              <button class="btn btn-outline-danger btn-sm">Reject</button>
            </td>
        `;
                tbody.appendChild(row);
            });
        }


        // Initialize table on load
        document.addEventListener("DOMContentLoaded", () => renderLeaveTable(leaveRequests));

        function toggleSidebar() {
            const sidebar = document.getElementById('sidebarNav');
            const toggleBtn = document.getElementById('sidebarToggle');
            sidebar.classList.toggle('show');
            toggleBtn.style.display = sidebar.classList.contains('show') ? 'none' : 'block';
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
            const currentPath = window.location.pathname.split("/").pop();
            const navLinks = document.querySelectorAll(".nav-link");

            navLinks.forEach(link => {
                const href = link.getAttribute("href");
                if (href && href.includes(currentPath)) {
                    link.classList.add("active");

                    const parentCollapse = link.closest(".collapse");
                    if (parentCollapse) {
                        parentCollapse.classList.add("show");

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