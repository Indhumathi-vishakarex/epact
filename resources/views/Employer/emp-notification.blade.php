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
        .nav-item {
            max-width: fit-content;
        }
        
        .nav-tabs {
            padding: 0 0 10px 0;
        }
        
        .badge {
            padding: 4px 6px;
            font-weight: 400;
            position: relative;
            right: -8px;
        }
        
        .card {
            border-radius: 20px;
            background: linear-gradient(135deg, #ffffff, #f4f7fa);
        }
        
        .nav-tabs .nav-link.active {
            background: linear-gradient(135deg, #0d9847, #29af0b);
            color: white;
            border: none;
            width: fit-content !important;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .nav-tabs .nav-link {
            color: #333;
            width: fit-content !important;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .nav-tabs .nav-link:hover {
            width: fit-content !important;
            background-color: #0a0a0a0a;
        }
        
        .announcement-card {
            background: #fff;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s;
        }
        
        .announcement-card:hover {
            transform: scale(1.02);
            cursor: pointer;
        }
        
        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: contain;
            margin-right: 15px;
        }
        
        .bottom-icons button {
            justify-content: flex-start !important;
            gap: 20px;
            font-size: 14px;
            padding: 6px 12px;
        }
        
        @media (max-width: 768px) {
            .nav-tabs {
                display: -webkit-inline-box !important;
                overflow: scroll !important;
                scrollbar-width: none !important;
            }
            .nav-tabs .nav-link {
                font-size: 14px;
            }
            .profile-img {
                width: 40px;
                height: 40px;
            }
        }
        
        hr {
            margin: 0rem 0;
            color: #0000003b;
        }
        
        @media (max-width: 780px) {
            .announcement-text {
                font-size: 14px;
            }
            .bottom-icons {
                flex-direction: row;
                display: flex;
                align-items: flex-start;
                gap: 8px;
            }
            .bottom-icons button {
                font-size: 14px;
                padding: 0 17%;
                width: -webkit-fill-available !important;
            }
        }
        
        #allNotifications {
            display: block;
            overflow: scroll;
            height: 100vh;
            scrollbar-width: none;
        }
        
        .modal-header .btn-close {
            position: absolute;
            right: 14px;
        }
        
        #historyNotifications .announcement-card {
            background-color: transparent;
            border: none;
            box-shadow: 0 0 0 0;
        }
        
        .notification-card {
            cursor: pointer;
            margin-bottom: 15px;
        }
        
        .modal-body {
            white-space: pre-wrap;
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


            <main class="col-md-9 ms-sm-auto col-lg-10 mb-5">
                <h3 class="px-2">Notifications</h3>
                <p class="mb-3 px-2 w-75 text-sm-muted">We are sent Notifications for you.</p>
                <nav class="navbar top-nav navbar-expand-lg navbar-white bg-none shadow-sm px-3">
                    <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                        <li class="nav-item position-relative">
                            <a href="{{route('emp-announcement')}}" class="nav-link">
                                <i class="bi bi-megaphone fs-5"></i>
                                <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                            </a>
                        </li>

                        <li class="nav-item position-relative">
                            <a href="{{route('emp-notification')}}" class="nav-link">
                                <i class="bi bi-bell fs-5"></i>
                                <span class="badge rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="card p-3 mb-4 shadow-lg border-0 animate__animated animate__fadeIn">
                    <ul class="nav nav-tabs d-flex justify-content-center gap-5" id="notificationTabs" role="tablist">
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link active w-100 fw-bold" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">New <span class="badge bg-dark">0</span></button>
                        </li>
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link w-100 fw-bold" id="permission-tab" data-bs-toggle="tab" data-bs-target="#permission" type="button" role="tab">Permission <span class="badge bg-dark">0</span></button>
                        </li>
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link w-100 fw-bold" id="leave-tab" data-bs-toggle="tab" data-bs-target="#leave" type="button" role="tab">Leave <span class="badge bg-dark">0</span></button>
                        </li>
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link w-100 fw-bold" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes" type="button" role="tab">Notes <span class="badge bg-dark">0</span></button>
                        </li>
                        <li class="nav-item flex-fill text-center" role="presentation">
                            <button class="nav-link w-100 fw-bold" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab">History <span class="badge bg-dark" id="historyBadge">1</span></button>
                        </li>
                    </ul>

                    <div class="tab-content mt-4 animate__animated animate__fadeIn">
                        <div class="tab-pane fade show active" id="all" role="tabpanel">
                            <div id="allNotifications"></div>
                        </div>
                        <div class="tab-pane fade" id="permission" role="tabpanel">
                            <div id="permissionNotifications"></div>
                        </div>
                        <div class="tab-pane fade" id="leave" role="tabpanel">
                            <div id="leaveNotifications"></div>
                        </div>
                        <div class="tab-pane fade" id="notes" role="tabpanel">
                            <div id="notesNotifications"></div>
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
            id: 3,
            name: "Guna",
            role: "Web Developer",
            message: "Request leave for 26.02.2025 due to sister marriage.",
            type: "leave",
            time: "5 min ago",
            date: "16/07/2025",
            image: "../assets/img/author-22.png"
        }, {
            id: 4,
            name: "Manager",
            role: "Admin",
            message: "Reminder to update your KYC details.",
            type: "notes",
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
            document.querySelector('#permission-tab .badge').innerText = notifications.filter(n => n.type === 'permission').length;
            document.querySelector('#leave-tab .badge').innerText = notifications.filter(n => n.type === 'leave').length;
            document.querySelector('#notes-tab .badge').innerText = notifications.filter(n => n.type === 'notes').length;
            document.querySelector('#history-tab .badge').innerText = 1;
        }

        function renderNotifs() {
            document.getElementById('allNotifications').innerHTML = notifications.map(createCard).join('');
            document.getElementById('permissionNotifications').innerHTML = notifications.filter(n => n.type === 'permission').map(createCard).join('');
            document.getElementById('leaveNotifications').innerHTML = notifications.filter(n => n.type === 'leave').map(createCard).join('');
            document.getElementById('notesNotifications').innerHTML = notifications.filter(n => n.type === 'notes').map(createCard).join('');
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
        fetch('navbar.html').then(res => res.text()).then(data => {
            document.getElementById('navbar-placeholder').innerHTML = data;
        });

        // const announcements = [{
        //     title: "Team Outing this Friday!",
        //     date: "15/07/2025"
        // }, {
        //     title: "Salary credited on 31st",
        //     date: "14/07/2025"
        // }, ];

        // let list = announcements.map(a => `
        //     <div class="alert alert-primary d-flex justify-content-between">
        //         <span><strong>${a.title}</strong></span>
        //         <small>${a.date}</small>
        //     </div>`).join('');
        // document.getElementById("announcementList").innerHTML = list;
    </script>

</body>

</html>