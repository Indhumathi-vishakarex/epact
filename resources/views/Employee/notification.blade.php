<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notifications</title>
   <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<!-- External CSS & Fonts -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- External JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Local CSS -->
<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('style.css') }}" rel="stylesheet">

</head>

<body>
    <style>

    </style>
  
  @include('Employee.partials.header')
    @include('Employee.partials.sidebar')
            <!-- Main Content -->


            <main class="col-md-9 ms-sm-auto col-lg-10 mb-5">
                <!-- ---------------------------- -->
                <div id="leave-requests" class="">
                    <h3 class="px-2">Notifications</h3>
                    <p class="mb-3 px-2 w-75 text-sm-muted">We are sent Notifications for you.</p>
                    
                    {{-- announcement and notification --}}
            
             @include('Employee.partials.navbar')
                    <!-- ---------------------------- -->


                    <div class="card p-3 mb-4 shadow-lg border-0 animate__animated animate__fadeIn">
                        <ul class="nav nav-tabs d-flex justify-content-center gap-5" id="notificationTabs" role="tablist">
                            <li class="nav-item flex-fill text-center" role="presentation">
                                <button class="nav-link active w-100 fw-bold" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">New <span class="badge bg-dark">0</span></button>
                            </li>

                            <li class="nav-item flex-fill text-center" role="presentation">
                                <button class="nav-link w-100 fw-bold" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab">History <span class="badge bg-dark" id="historyBadge">1</span></button>
                            </li>
                        </ul>

                        <div class="tab-content mt-4 animate__animated animate__fadeIn">
                            <div class="tab-pane fade show active" id="all" role="tabpanel">
                                <div id="allNotifications"></div>
                            </div>

                            <div class="tab-pane fade" id="history" role="tabpanel">
                                <div id="historyNotifications"></div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="notificationModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="notifModalTitle">Notification Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body" id="notifModalBody"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-custom" id="markReadBtn">Mark as Read</button>
                                    </div>
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
      
<!-- Load jQuery from CDN first -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Local JS -->
<script src="{{ asset('js/pages.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>

        <script>
            const notifications = [{
                id: 1,
                name: "Ganesh",
                role: "Web Developer",
                message: "Hey Ayisha, can you assign this task when you get a chance?",
                type: "notes",
                time: "5 min ago",
                date: "16/07/2025",
                image: "../assets/img/author-22.png"
            }, {
                id: 2,
                name: "Aruna",
                role: "UI UX Designer",
                message: "Requesting two-hour break.",
                type: "permission",
                time: "5 min ago",
                date: "16/07/2025",
                image: "../assets/img/author-22.png"
            }, {
                id: 5,
                name: "Manager",
                role: "Admin",
                message: "Reminder to update your KYC details.",
                type: "history",
                time: "5 min ago",
                date: "16/07/2025",
                image: "../assets/img/author-22.png"
            }];

            let historyNotifications = [];

            function createCard(n) {
                const buttons = (n.type === "leave" || n.type === "permission") ? `<hr><div class='mt-3 bottom-icons'><button class='btn btn-outline-danger btn-sm'>Decline</button><button class='btn btn-success btn-sm mx-3'>Accept</button></div>` : '';
                return `
            <div class='announcement-card card p-3 mb-3 animate__animated animate__fadeInUp' onclick='openNotification(${n.id})'>
                <div class='d-flex justify-content-between align-items-start mb-2'>
                    <div class='d-flex align-items-center'>
                        <img src='${n.image}' class='rounded-circle me-3' width='50' height='50' alt='profile'>
                        <div>
                            <h6 class='mb-0'>${n.name}</h6>
                            <small class='text-muted'>${n.role}</small>
                            <div class='announcement-text my-2'>${n.message}</div>
                            <p class='pb-2 text-sm-muted mb-0'>${n.time}</p>
                        </div>
                    </div>
                    <div class='text-end px-2'>
                        <small class='fw-semibold'>${n.date}</small><br>
                        <small class='text-muted'>Wednesday</small>
                    </div>
                </div>
                ${buttons}
            </div>
        `;
            }

            function openNotification(id) {
                const notif = notifications.find(n => n.id === id) || historyNotifications.find(n => n.id === id);
                if (!notif) return;
                document.getElementById('notifModalTitle').innerText = `${notif.name} - ${notif.role}`;
                document.getElementById('notifModalBody').innerHTML = `
            <p><strong>Message:</strong> ${notif.message}</p>
            <p><strong>Date:</strong> ${notif.date}</p>
            <p><strong>Time:</strong> ${notif.time}</p>
        `;
                document.getElementById('markReadBtn').onclick = function() {
                    markAsRead(id);
                    bootstrap.Modal.getInstance(document.getElementById('notificationModal')).hide();
                };
                new bootstrap.Modal(document.getElementById('notificationModal')).show();
            }

            function markAsRead(id) {
                const index = notifications.findIndex(n => n.id === id);
                if (index !== -1) {
                    historyNotifications.push(notifications.splice(index, 1)[0]);
                    renderNotifs();
                }
            }

            function updateBadges() {
                document.querySelector('#all-tab .badge').innerText = notifications.length;
                document.querySelector('#history-tab .badge').innerText = 1;
            }

            function renderNotifs() {
                document.getElementById('allNotifications').innerHTML = notifications.map(createCard).join('');
                document.getElementById('historyNotifications').innerHTML = historyNotifications.concat(notifications.filter(n => n.type === 'history')).map(createCard).join('');
                updateBadges();
            }

            document.addEventListener('DOMContentLoaded', renderNotifs);
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
            .notification-card {
                cursor: pointer;
                margin-bottom: 15px;
            }
            
            .modal-body {
                white-space: pre-wrap;
            }
        </style>
</body>

</html>
<script>
    fetch('navbar.html').then(res => res.text()).then(data => {
        document.getElementById('navbar-placeholder').innerHTML = data;
    });

    const announcements = [{
        title: "Team Outing this Friday!",
        date: "15/07/2025"
    }, {
        title: "Salary credited on 31st",
        date: "14/07/2025"
    }, ];

    let list = announcements.map(a => `
        <div class="alert alert-primary d-flex justify-content-between">
            <span><strong>${a.title}</strong></span>
            <small>${a.date}</small>
        </div>`).join('');
    document.getElementById("announcementList").innerHTML = list;
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