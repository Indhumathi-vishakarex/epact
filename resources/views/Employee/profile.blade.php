<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<!-- External CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Bootstrap JS (only once) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <!-- START HEADER -->
 
    <!-- Navigation -->
 
  
  @include('Employee.partials.header')
    @include('Employee.partials.sidebar')


            <main class="col-md-9 ms-sm-auto col-lg-10 content">
                <!-- My Profile -->
                <div id="my-profile" class="mt-2">
                    <div class="profile-text">
                        <h4 class="mb-2 fw-bold">My Profile</h4>
                        <p class="text-muted mb-4">Fill in your personal and location details.</p>
                    </div>
                    <!-- Top Navbar -->
                   
            {{-- announcement and notification --}}
            
             @include('Employee.partials.navbar')
                    <hr>
                    <div class="profile-area" style="display: flex; justify-content: space-between !important; align-items: center; width: 100%; padding: 20px; background: #fff; border-radius: 10px;">

                        <!-- Left Side Text -->
                        <div style="max-width: 50%;" class="left-content-profile">
                            <p style="margin: 0; color: #555; line-height: 1.5;">
                                You are currently assigned to the <strong>Web Development</strong> team.<br> Remember to check your daily tasks and weekly goals!
                            </p>
                        </div>

                        <!-- Right Side Profile -->
                        <div class="profile-image" style="display: flex; align-items: center; gap: 15px;">
                            <div class="d-flex flex-column text-start" style="gap: 15px;">
                                <h4 style="margin: 0;">William Turner</h4>
                                <p style="margin: 0; font-size: 14px; color: #6c757d;">Web Developer</p>
                            </div>
                            <div style="position: relative;">
                                <img src="../assets/img/author-2.png" style="background: #81b19085; border-radius: 100px; width: 100px; height: 100px; object-fit: contain;" alt="">
                                <button style="position: absolute; bottom: 0; right: 0; background: #12a940; color: white; border: none; border-radius: 50%; width: 30px; height: 30px; font-size: 16px; cursor: pointer;" onclick="document.getElementById('uploadProfilePic').click()">✎</button>
                                <input type="file" id="uploadProfilePic" style="display: none;" accept="image/*">
                            </div>
                        </div>

                    </div>
                    <div class="card p-4 mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="section-heading mb-0">Personal Information</h5>
                            <!-- <button id="editProfileBtn" type="button" class="btn-custom" onclick="toggleEditMode()">✎ Configure</button> -->
                        </div>
                        <div class="row p-4 g-3 edit-area">
                            <div class="col-md-6">
                                <label class="form-label prolabel">First Name</label><span class="required text-danger mx-1">*</span>
                                <input type="text" class="form-control text-sm-muted" value="William" required disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label prolabel">Last Name</label><span class="required text-danger mx-1">*</span>
                                <input type="text" class="form-control text-sm-muted" value="Turner" required disabled>
                            </div>
                            <div class="col-6">
                                <label class="form-label prolabel">Company Name</label><span class="required text-danger mx-1">*</span>
                                <input id="company" type="text" placeholder="Company Name" class="form-control text-sm-muted" value="Epact Solutions Ltd" required disabled>
                            </div>
                            <div class="col-6">
                                <label class="form-label prolabel">Email</label><span class="required text-danger mx-1">*</span>
                                <input id="email" type="text" placeholder="Email" class="form-control text-sm-muted" value="william.turner@epact.com" required disabled>
                            </div>
                            <div class="col-6">
                                <label class="form-label prolabel">Phone</label><span class="required text-danger mx-1">*</span>
                                <input id="phone" type="tel" placeholder="phone" class="form-control text-sm-muted" placeholder="phone" value="+44 020 3376 5250" required disabled>
                            </div>
                        </div>

                        <div class="p-4 mt-4 edit-area">
                            <h5 class="section-heading">Additional Information</h5>
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label prolabel">Address Line 1</label><span class="required text-danger mx-1">*</span>
                                    <input type="text" class="form-control text-sm-muted" value="221B Baker Street" required disabled>
                                </div>
                                <div class="col-6">
                                    <label class="form-label prolabel">Address Line 2</label><span class="required text-danger mx-1">*</span>
                                    <input type="text" class="form-control text-sm-muted" value="Marylebone" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label prolabel">City</label><span class="required text-danger mx-1">*</span>
                                    <input type="text" class="form-control text-sm-muted" value="London" required disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label prolabel">Postal Code</label><span class="required text-danger mx-1">*</span>
                                    <input type="text" class="form-control text-sm-muted" value="NW1 6XE" required disabled>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label prolabel">Country</label><span class="required text-danger mx-1">*</span>
                                    <input type="text" class="form-control text-sm-muted" value="United Kingdom" required disabled>
                                </div>
                                <div class="col-6">
                                    <button type="button" id="saveBtn" class="btn btn-success w-auto mt-4" style="display: none;">Save Profile</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Change Password -->
                <div id="change-password" class="module-section">
                    <h4>Change Password</h4>
                    <p class="text-sm-muted">Secure your account by changing your password. Use a combination of letters, numbers, and symbols.</p>
                    <div class="f-card card p-3 mt-3 w-75">
                        <form style="display: flex; flex-direction: column; gap: 13px;">
                            <div class="col-6 position-relative pass-form">
                                <label class="form-label">Current Password</label>
                                <input type="password" class="form-control text-sm-muted icon-password" id="currentPassword" placeholder="Current Password" required>
                                <span class="toggle-password" onclick="togglePassword('currentPassword', this)">
                              <i class="bi bi-eye-slash-fill"></i>
                           </span>
                            </div>

                            <div class="col-6 position-relative pass-form">
                                <label class="form-label">New Password</label>
                                <input type="password" class="form-control text-sm-muted icon-password" id="newPassword" placeholder="New Password" required>
                                <span class="toggle-password" onclick="togglePassword('newPassword', this)">
                              <i class="bi bi-eye-slash-fill"></i>
                           </span>
                            </div>

                            <div class="col-6 position-relative pass-form">
                                <label class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control text-sm-muted icon-password" id="confirmPassword" placeholder="Confirm New Password" required>
                                <span class="toggle-password" onclick="togglePassword('confirmPassword', this)">
                              <i class="bi bi-eye-slash-fill"></i>
                           </span>
                            </div>

                            <button class="btn btn-custom mt-4 w-25">Update Password</button>
                        </form>
                    </div>
                </div>
        </div>

        <!-- List Employees -->

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