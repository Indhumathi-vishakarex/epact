<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employer Dashboard</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

</head>

<body>
    <!-- START HEADER -->
   @include('Employer.partials.header')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
 @include('Employer.partials.sidebar')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 content">
                <div id="dashboard" class="module-section">
                    <h4>Welcome to Your Dashboard</h4>
                    <p class="mb-5 mt-3 text-sm-muted">Quick Overview: Check attendance, documents, and announcements.</p>
                    <nav class="navbar top-nav navbar-expand-lg navbar-white bg-none shadow-sm px-3">
                        <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                            <li class="nav-item position-relative">
                                <a href="./announcement.html" class="nav-link">
                                    <i class="bi bi-megaphone fs-5"></i>
                                    <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                                </a>
                            </li>

                            <li class="nav-item position-relative">
                                <a href="./notification.html" class="nav-link">
                                    <i class="bi bi-bell fs-5"></i>
                                    <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                                </a>
                            </li>
                        </ul>
                    </nav>


                    <!-- Statistic Cards Row -->
                    <div class="row g-3 mb-2 top-card">
                        <!-- Total Employees -->
                        <div class="col-md-3">
                            <div class="card glass-card p-3 shadow-lg text-center animate__animated animate__zoomIn">
                                <h6 class="text-white">Total Employees</h6>
                                <h2 class="fw-bold  text-white" id="totalEmp">0</h2>
                            </div>
                        </div>
                        <!-- Approved Employees -->
                        <div class="col-md-3">
                            <div class="card glass-card p-3 shadow-lg text-center animate__animated animate__zoomIn">
                                <h6 class="text-white">Approved Employees</h6>
                                <h2 class="fw-bold  text-white" id="approvedEmp">0</h2>
                            </div>
                        </div>
                        <!-- Pending Employees -->
                        <div class="col-md-3">
                            <div class="card glass-card p-3 shadow-lg text-center animate__animated animate__zoomIn">
                                <h6 class="text-white">Pending Employees</h6>
                                <h2 class="fw-bold  text-white" id="pendingEmp">0</h2>
                            </div>
                        </div>
                        <!-- Rejected Employees -->
                        <div class="col-md-3">
                            <div class="card glass-card p-3 shadow-lg text-center animate__animated animate__zoomIn">
                                <h6 class="text-white">Rejected Employees</h6>
                                <h2 class="fw-bold text-danger text-white" id="rejectedEmp">0</h2>
                            </div>
                        </div>
                    </div>

                    <hr style="color: rgb(192, 192, 192); position: relative; top: 22px;">
                    <h4 class="pt-5">Overview of Employees</h4>
                    <p class="text-sm-muted">individual who works for an organization in exchange for compensation, typically a salary or wages, and benefits</p>
                    <div class="d-flex mob-flex">

                        <div class="dashboard-grid w-50 p-4">

                            <!-- Yet to Punch In -->
                            <div class="dashboard-card border-accent-pink">
                                <span class="card-badge">5</span>
                                <h5>Yet to Punch In</h5>
                                <div class="people-avatars">
                                    <div class="person-circle"><img src="../assets/avatar/avatar1.jpg" alt=""></div>
                                    <div class="person-circle"><img src="../assets/avatar/avatar4.webp" alt=""></div>
                                    <div class="person-circle"><img src="../assets/avatar/avatar3.jpg" alt=""></div>
                                    <div class="person-circle"><img src="../assets/avatar/avatar4.webp" alt=""></div>
                                </div>
                            </div>

                            <!-- Punch In -->
                            <div class="dashboard-card border-accent-red">
                                <span class="card-badge">7</span>
                                <h5>Punch In</h5>
                                <div class="people-avatars">
                                    <div class="person-circle"><img src="../assets/avatar/avatar6.jpg" alt=""></div>
                                    <div class="person-circle"><img src="../assets/avatar/avatar5.jpg" alt=""></div>
                                </div>
                            </div>

                            <!-- Leave -->
                            <div class="dashboard-card border-accent-purple">
                                <span class="card-badge">4</span>
                                <h5>Leave</h5>
                                <div class="people-avatars">
                                    <div class="person-circle"><img src="../assets/avatar/avatar7.jpg" alt=""></div>
                                    <div class="person-circle"><img src="../assets/avatar/avatar8.jpg" alt=""></div>
                                </div>
                            </div>

                            <!-- Permission -->
                            <div class="dashboard-card border-accent-blue">
                                <span class="card-badge">6</span>
                                <h5>Permission</h5>
                                <div class="people-avatars">
                                    <div class="person-circle"><img src="../assets/avatar/avatar1.jpg" alt=""></div>
                                    <div class="person-circle"><img src="../assets/avatar/avatar4.webp" alt=""></div>
                                    <div class="person-circle"><img src="../assets/avatar/avatar3.jpg" alt=""></div>
                                    <div class="person-circle"><img src="../assets/avatar/avatar4.webp" alt=""></div>
                                </div>
                            </div>

                            <!-- Punch Out -->
                            <div class="dashboard-card border-accent-green">
                                <span class="card-badge">1</span>
                                <h5>Punch Out</h5>
                                <div class="people-avatars">
                                    <div class="person-circle"><img src="../assets/avatar/avatar9.jpg" alt=""></div>
                                </div>
                            </div>

                            <!-- Special Mention -->
                            <div class="dashboard-card border-accent-gold">
                                <span class="card-badge">1 🎁</span>
                                <h5>Special Mention</h5>
                                <div class="people-avatars">
                                    <div class="person-circle"><img src="../assets/avatar/avatar1.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-5 desk-pie w-50 p-4">
                            <div class="card glass-card p-3 shadow-sm animate__animated animate__fadeIn">
                                <h5 class="mb-3">Employee Analytics</h5>
                                <canvas id="analyticsPie"></canvas>
                            </div>
                        </div>
                    </div>



                    <hr style="color: rgb(192, 192, 192); position: relative; top: 22px;">


                    <!-- Performance and Analytics Section -->
                    <div class="row g-3">
                        <h5 class="mb-3 pt-5">Employee Performance</h5>
                        <p class="text-sm-muted">Employee performance refers to how well an individual fulfills their job responsibilities and contributes to the overall success of an organization</p>
                        <!-- Performance Bar Chart -->
                        <div class="col-md-12 d-flex mob-bar">
                            <div class="col-md-6 card glass-card p-3 performanceBar shadow-sm animate__animated animate__fadeIn">
                                <canvas id="performanceBar"></canvas>
                            </div>
                            <div class="col-md-6 pie-png img-fluid">
                                <img class="floating mt-5 rounded-3" style="width: 60%; object-fit: cover; height: 300px; display: flex; justify-self: center; position: relative; bottom: 40px;" src="../assets/img/Dashboard page/Employee Performance List option 3.png" alt="">
                            </div>
                        </div>
                        <!-- Analytics Pie Chart -->
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
    {{-- <div id="footer">

    </div> --}}


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

<!-- Charts Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Example Values - Replace with your own data source
            const total = 150;
            const approved = 120;
            const pending = 20;
            const rejected = 10;

            document.getElementById('totalEmp').innerText = total;
            document.getElementById('approvedEmp').innerText = approved;
            document.getElementById('pendingEmp').innerText = pending;
            document.getElementById('rejectedEmp').innerText = rejected;

            // Bar Chart
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

            // Pie Chart
            new Chart(document.getElementById('analyticsPie').getContext('2d'), {
                type: 'pie',
                data: {
                    labels: ['Approved', 'Pending', 'Rejected'],
                    datasets: [{
                        data: [approved, pending, rejected],
                        backgroundColor: ['#1daa61', '#ffc107', '#dc3545'],
                        borderWidth: 3,
                        borderColor: '#fff',
                        hoverOffset: 15
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        tooltip: {
                            enabled: true
                        }
                    }
                }
            });

        });
    </script>

    <script>
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
        document.addEventListener("DOMContentLoaded", () => {
            renderLeaveTable(leaveRequests);
            setupSectionToggles();

            // Force display of leave-requests section if it's the current page
            const section = document.getElementById("leave-requests");
            if (section) {
                section.style.display = "block";
            }
        });
    </script>


    <style>
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        
        .dashboard-card {
            background: rgb(255, 255, 255);
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.4);
            padding: 20px;
            color: #333;
            position: relative;
            transition: all 0.3s ease-in-out;
        }
        
        .dashboard-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
        }
        
        .dashboard-card h5 {
            margin-bottom: 15px;
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .people-avatars {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }
        
        .person-circle {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            overflow: hidden;
            border: 2px solid rgba(255, 255, 255, 0.7);
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        
        .person-circle:hover {
            transform: scale(1.15);
        }
        
        .person-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .top-card {
            background-color: rgb(255, 255, 255);
            padding: 10px;
            border-radius: 10px;
        }
        
        .card-badge {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 12px;
            background: #333;
            color: #fff;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        /* Left border accents */
        
        .border-accent-pink {
            border-left: 5px solid #57dbf8;
        }
        
        .border-accent-red {
            border-left: 5px solid #ff416c;
        }
        
        .border-accent-purple {
            border-left: 5px solid #7f00ff;
        }
        
        .border-accent-blue {
            border-left: 5px solid #ecc30e;
        }
        
        .border-accent-green {
            border-left: 5px solid #00db92;
        }
        
        .border-accent-gold {
            border-left: 5px solid #f923ce;
        }
        /* Fonts & Colors */
        
        body {
            /* transition: all 0.3s ease-in-out; */
            font-family: 'Jost', sans-serif;
            background: linear-gradient(to right, #fbfffa, #eff6f2);
            color: #2b2b2b;
        }
        
        h4,
        h5,
        h6 {
            font-weight: 600;
        }
        
        .navbar,
        .topbar,
        .sidebar {
            backdrop-filter: blur(10px);
        }
        /* Topbar Animation */
        /* .topbar {
    animation: slideDown 1s ease-out;
} */
        
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        /* Statistic Cards */
        
        .card {
            border: none;
            border-radius: 18px;
            transition: transform 0.3s, box-shadow 0.3s;
            background: linear-gradient(145deg, #ffffff, #f3f3f3);
            box-shadow: 8px 8px 16px #d1d9e6, -8px -8px 16px #ffffff;
        }
        
        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 12px 12px 24px #c5c5c5, -12px -12px 24px #ffffff;
        }
        /* Statistic Number Animation */
        
        #totalEmp,
        #approvedEmp,
        #pendingEmp,
        #rejectedEmp {
            transition: color 0.5s;
        }
        
        #totalEmp:hover,
        #approvedEmp:hover,
        #pendingEmp:hover,
        #rejectedEmp:hover {
            color: #2980b9;
            cursor: pointer;
        }
        /* Cards Color Accents */
        
        .col-md-3:nth-child(1) .card {
            background: linear-gradient(to right, #2193b0, #6dd5ed);
            height: 150px;
            justify-content: center;
        }
        
        .col-md-3:nth-child(2) .card {
            background: linear-gradient(to right, #56ab2f, #a8e063);
            height: 150px;
            justify-content: center;
        }
        
        .col-md-3:nth-child(3) .card {
            background: linear-gradient(to right, #f7971e, #ffd200);
            height: 150px;
            justify-content: center;
        }
        
        .col-md-3:nth-child(4) .card {
            background: linear-gradient(to right, #cb2d3e, #ef473a);
            height: 150px;
            justify-content: center;
        }
        /* Performance and Analytics Cards */
        
        .col-md-7 .card,
        .col-md-5 .card {
            background: linear-gradient(to bottom right, #ffffff, #e3fdea);
        }
        /* Charts Resizing */
        
        #performanceBar,
        #analyticsPie {
            max-height: 340px;
            margin-top: 10px;
        }
        /* Animated Line Under Title */
        
        @keyframes growLine {
            from {
                width: 0;
            }
            to {
                width: 80px;
            }
        }
        /* Smooth Hover Glow Effect */
        
        .card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2), 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        /* Bounce In Animation */
        
        .animate__zoomIn {
            animation: bounceIn 1s;
        }
        
        @keyframes bounceIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            50% {
                transform: scale(1.1);
                opacity: 1;
            }
            100% {
                transform: scale(1);
            }
        }
        /* Fade In Animation */
        
        .animate__fadeIn {
            animation: fadeIn 1s;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Navbar Badge Dot */
        
        .badge-small {
            font-size: 10px;
            position: relative;
            top: 15px;
            padding: 2px 6px;
        }
        /* Mobile Sidebar Toggle */
        
        #sidebarToggle {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 12px;
            margin: 10px;
            border-radius: 5px;
        }
        
        @media (max-width: 768px) {
            .mob-flex {
                flex-direction: column !important;
            }
            .desk-pie {
                width: 100% !important;
            }
            .dashboard-grid {
                width: 100% !important;
            }
            .dashboard-card {
                margin-bottom: 15px;
            }
            .analytics-pie .card {
                margin-top: 10px;
            }
            .dashboard-card h5 {
                font-size: 16px;
            }
            .card h5 {
                font-size: 18px;
            }
            .analytics-pie {
                width: 100% !important;
                margin-top: 20px;
            }
            .pie-png {
                width: 0px;
                height: 0px;
                display: none;
            }
            .performanceBar {
                width: 100% !important;
            }
        }
    </style>
</body>

</html>