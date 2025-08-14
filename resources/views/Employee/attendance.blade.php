<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Attendance</title>
 <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('style.css') }}" rel="stylesheet">

    <style>
        .badge {
            font-size: 0.75rem;
            padding: 0.4em 0.6em;
        }
        
        table th,
        table td {
            vertical-align: middle;
        }
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
                    <h4 class="mb-4 px-3"><i class="bi-calendar-check text-green px-1"></i>Attendance Log</h4>
                    

                      {{-- announcement and notification --}}
            
             @include('Employee.partials.navbar')
                    <!-- ---------------------------- -->

                    <div class="bg-white p-4" style="border-radius: 10px;">
                        <input type="date" id="filter-date" class="form-control w-auto mb-4" />
                        <div class="table-responsive">
                            <table class="table table-hover align-middle text-center">
                                <thead class="bg-green2 text-white">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Check-In</th>
                                        <th scope="col">Check-Out</th>
                                        <th scope="col">Worked Hours</th>
                                        <th scope="col">Break Duration</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody id="attendance-body">
                                    <!-- Sample Rows (Replace with dynamic data) -->
                                    <tr>
                                        <td>2025-07-22</td>
                                        <td>09:00 AM</td>
                                        <td>06:00 PM</td>
                                        <td>8 hrs</td>
                                        <td>1 hr</td>
                                        <td><span class="badge bg-success">Present</span></td>
                                    </tr>
                                    <tr>
                                        <td>2025-07-21</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td><span class="badge bg-danger">Absent</span></td>
                                    </tr>
                                    <tr>
                                        <td>2025-07-20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td><span class="badge bg-info text-dark">Holiday</span></td>
                                    </tr>
                                    <tr>
                                        <td>2025-07-19</td>
                                        <td>10:15 AM</td>
                                        <td>07:00 PM</td>
                                        <td>7.5 hrs</td>
                                        <td>0.75 hr</td>
                                        <td><span class="badge bg-warning text-dark">Late</span></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <ul id="pagination" class="pagination justify-content-center mt-4"></ul>
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

<!-- External scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">



        <!-- Filetr -->
        <script>
            const attendanceData = [{
                    date: '2025-07-22',
                    checkin: '09:00 AM',
                    checkout: '06:00 PM',
                    hours: '8 hrs',
                    break: '1 hr',
                    status: 'Present'
                }, {
                    date: '2025-07-21',
                    checkin: '--',
                    checkout: '--',
                    hours: '--',
                    break: '--',
                    status: 'Absent'
                }, {
                    date: '2025-07-20',
                    checkin: '--',
                    checkout: '--',
                    hours: '--',
                    break: '--',
                    status: 'Holiday'
                }, {
                    date: '2025-07-19',
                    checkin: '10:15 AM',
                    checkout: '07:00 PM',
                    hours: '7.5 hrs',
                    break: '0.75 hr',
                    status: 'Late'
                },
                // Add more data as needed
            ];

            const statusClass = {
                'Present': 'bg-success',
                'Absent': 'bg-danger',
                'Holiday': 'bg-info text-dark',
                'Late': 'bg-warning text-dark'
            };

            function renderTable(data) {
                const tbody = document.getElementById('attendance-body');
                tbody.innerHTML = '';

                data.forEach((entry, index) => {
                    const tr = document.createElement('tr');

                    tr.innerHTML = `
                <td>${index + 1}</td>
                <td>${entry.date}</td>
                <td>${entry.checkin}</td>
                <td>${entry.checkout}</td>
                <td>${entry.hours}</td>
                <td>${entry.break}</td>
                <td><span class="badge ${statusClass[entry.status] || 'bg-secondary'}">${entry.status}</span></td>
            `;

                    tbody.appendChild(tr);
                });
            }

            document.getElementById('filter-date').addEventListener('change', function() {
                const selectedDate = this.value;
                if (selectedDate) {
                    const filtered = attendanceData.filter(row => row.date === selectedDate);
                    renderTable(filtered);
                } else {
                    renderTable(attendanceData);
                }
            });

            // Initial render
            renderTable(attendanceData);
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const rowsPerPage = 20;
                const table = document.querySelector("table tbody");
                const rows = Array.from(table.querySelectorAll("tr"));
                const totalPages = Math.ceil(rows.length / rowsPerPage);
                const pagination = document.getElementById("pagination");

                let currentPage = 1;

                function displayRows(page) {
                    const start = (page - 1) * rowsPerPage;
                    const end = start + rowsPerPage;

                    rows.forEach((row, index) => {
                        row.style.display = index >= start && index < end ? "" : "none";
                    });
                }

                function createPageButton(page, label = null, isActive = false, isDisabled = false) {
                    const li = document.createElement("li");
                    li.className = `page-item ${isActive ? "active" : ""} ${isDisabled ? "disabled" : ""}`;
                    const a = document.createElement("a");
                    a.className = "page-link";
                    a.href = "#";
                    a.textContent = label || page;
                    a.addEventListener("click", function(e) {
                        e.preventDefault();
                        if (!isDisabled && currentPage !== page) {
                            currentPage = page;
                            displayRows(currentPage);
                            renderPagination();
                        }
                    });
                    li.appendChild(a);
                    return li;
                }

                function renderPagination() {
                    pagination.innerHTML = "";

                    // Prev button
                    pagination.appendChild(createPageButton(currentPage - 1, "<<", false, currentPage === 1));

                    const visiblePages = [];
                    if (totalPages <= 7) {
                        for (let i = 1; i <= totalPages; i++) visiblePages.push(i);
                    } else {
                        if (currentPage <= 4) {
                            visiblePages.push(1, 2, 3, 4, "...", totalPages);
                        } else if (currentPage >= totalPages - 3) {
                            visiblePages.push(1, "...", totalPages - 3, totalPages - 2, totalPages - 1, totalPages);
                        } else {
                            visiblePages.push(1, "...", currentPage - 1, currentPage, currentPage + 1, "...", totalPages);
                        }
                    }

                    visiblePages.forEach(p => {
                        if (p === "...") {
                            const li = document.createElement("li");
                            li.className = "page-item disabled";
                            li.innerHTML = `<span class="page-link">...</span>`;
                            pagination.appendChild(li);
                        } else {
                            pagination.appendChild(createPageButton(p, null, currentPage === p));
                        }
                    });

                    // Next button
                    pagination.appendChild(createPageButton(currentPage + 1, ">>", false, currentPage === totalPages));
                }

                displayRows(currentPage);
                renderPagination();
            });
        </script>
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