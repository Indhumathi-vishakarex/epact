<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Dashboard</title>
 
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

<!-- Bootstrap Bundle JS (only once, includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- START HEADER -->
  
    <!-- Navigation -->
       @include('Employer.partials.header')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
                 @include('Employer.partials.sidebar')
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 content">
                <h3 class="mb-4">Terminated Employees</h3>
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
                <div id="terminate-employee" class="">
                    <div class="card p-3 mt-3">
                        <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search employees...">
                        <div class="table-responsive table-responsive-lg table-responsive-md">
                            <table class="table table-trendy align-middle" id="terminatedTable">
                                <thead class="table-success">
                                    <tr>
                                        <th style="text-align: center;">No.</th>
                                        <th style="text-align: center;">EmpID</th>
                                        <th>Employee Name</th>
                                        <th>Designation</th>
                                        <th>Termination Date</th>
                                        <th>Reason for Termination</th>
                                        <th>Termination Details</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <nav>
                            <ul id="pagination" class="pagination mb-0"></ul>
                        </nav>
                    </div>
                </div>
                <div class="modal fade" id="detailsModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title text-white">Termination Details</h5>
                                <button type="button" style="position: absolute; right: 32px;" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body" style="line-height: 0px;" id="modalDetailsContent">
                                <!-- Details will be loaded here -->
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
   <!-- jQuery (CDN preferred for caching) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('js/pages.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        const recordsPerPage = 5;
        let currentPage = 1;
        let terminated = [];


        // Model popup
        function showDetails(emp) {
            const content = `
            <p><strong>Name:</strong> ${emp.name}</p>
            <p><strong>Designation:</strong> ${emp.designation}</p>
            <p><strong>Termination Date:</strong> ${emp.date}</p>
            <p><strong>Reason:</strong> ${emp.reason}</p>
            <p><strong>Details:</strong><br>${emp.details}</p>
         `;
            document.getElementById('modalDetailsContent').innerHTML = content;

            const modal = new bootstrap.Modal(document.getElementById('detailsModal'));
            modal.show();
        }

        // 
        function renderTable() {
            const tbody = document.querySelector('#terminatedTable tbody');
            tbody.innerHTML = '';

            const query = document.getElementById('searchInput').value.toLowerCase();
            const filtered = terminated.filter(emp =>
                Object.values(emp).some(val => val.toLowerCase().includes(query))
            );

            const totalPages = Math.ceil(filtered.length / recordsPerPage);
            const start = (currentPage - 1) * recordsPerPage;
            const paginated = filtered.slice(start, start + recordsPerPage);

            if (filtered.length === 0) {
                tbody.innerHTML = '<tr><td colspan="7" class="text-center text-danger">No terminated employees found.</td></tr>';
            } else {
                paginated.forEach((emp, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                         <td style="text-align:center;">${start + index + 1}</td>
                        <td style="text-align: center;">EMP${String(start + index + 1).padStart(3, '0')}</td>
                         <td>${emp.firstName + ' ' + emp.lastname}</td>
                         <td>${emp.designation}</td>
                         <td>${emp.date}</td>
                         <td class="fw-bold">${emp.reason}</td>
                        <td>
                           <button class="btn btn-outline-primary btn-sm" onclick='showDetails(${JSON.stringify(emp)})'>Details</button>
                        </td>
                         <td><button id="status" style="width:max-content;">Terminated</button></td>
                     `;
                    tbody.appendChild(row);
                });
            }

            renderPagination(filtered.length, totalPages);
        }

        function renderPagination(totalItems, totalPages) {
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            const addPage = (label, page, disabled = false, active = false) => {
                const li = document.createElement('li');
                li.className = `page-item ${disabled ? 'disabled' : ''} ${active ? 'active' : ''}`;
                li.innerHTML = `<a class="page-link" href="#">${label}</a>`;
                if (!disabled) {
                    li.onclick = (e) => {
                        e.preventDefault();
                        currentPage = page;
                        renderTable();
                    };
                }
                pagination.appendChild(li);
            };

            addPage('<i class="bi bi-chevron-double-left my-custom-class"></i>', currentPage - 1, currentPage === 1);

            let dotsAdded = false;
            for (let i = 1; i <= totalPages; i++) {
                if (i <= 2 || i > totalPages - 2 || (i >= currentPage - 1 && i <= currentPage + 1)) {
                    addPage(i, i, false, i === currentPage);
                    dotsAdded = false;
                } else if (!dotsAdded) {
                    const li = document.createElement('li');
                    li.className = 'page-item disabled';
                    li.innerHTML = `<span class="page-link">...</span>`;
                    pagination.appendChild(li);
                    dotsAdded = true;
                }
            }

            addPage('<i class="bi bi-chevron-double-right my-custom-class"></i>', currentPage + 1, currentPage === totalPages);
        }

        document.getElementById('searchInput').addEventListener('input', function() {
            currentPage = 1;
            renderTable();
        });

        function loadTerminatedEmployees() {
            terminated = JSON.parse(localStorage.getItem('terminatedEmployees') || '[]');
            currentPage = 1;
            renderTable();
        }

        document.addEventListener('DOMContentLoaded', loadTerminatedEmployees);

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
    <style>
        @media (max-width: 500px) {
            .table-responsive {
                max-width: max-content;
                overflow-x: scroll;
            }
        }
        
        .tbody {
            max-width: max-content;
            overflow-x: scroll;
        }
        
        .badge {
            padding: 0;
        }
        
        #terminatedTable td:nth-child(6) {
            text-align: center;
        }
        
        .table td {
            vertical-align: middle;
            word-break: break-word;
        }
        
        #status {
            color: #fff;
            border: none;
            border-radius: 4px;
            background-color: rgb(237, 66, 66);
            margin: 10px 0;
        }
        
        .table td {
            vertical-align: middle;
            word-break: break-word;
        }
        
        #pagination .page-link {
            color: rgb(13, 120, 54);
            border: 1px solid rgb(13, 120, 54);
            border-radius: 50px;
            margin: 0 4px;
        }
        
        #modalDetailsContent {
            white-space: pre-wrap;
            /* keeps line breaks and wraps long lines */
            word-break: break-word;
            /* breaks long words */
            max-height: 400px;
            /* optional: limit height */
            overflow-y: auto;
            /* adds scrollbar if content overflows */
        }
        
        #pagination .active .page-link {
            background-color: green;
            color: #fff;
            border-color: green;
        }
        
        #pagination .disabled .page-link {
            color: #999;
            border-color: #ddd;
            background-color: #f8f9fa;
            pointer-events: none;
        }
        
        #pagination {
            justify-content: center;
            margin-top: 20px;
        }
        
        .my-custom-class {
            background: white;
            border: none !important;
        }
        
        tr td {
            border-top: none !important;
        }
        
        .bi-chevron-double-left,
        .bi-chevron-double-right {
            background: white;
            border: none !important;
        }
    </style>
</body>

</html>