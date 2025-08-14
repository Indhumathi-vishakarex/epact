<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings</title>
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<!-- Bootstrap & Fonts -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Bootstrap JS (CDN) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<!-- Local Styles -->
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

            <!-- Sidebar -->
         
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 mb-5">
                <!-- ---------------------------- -->
                <div id="leave-requests" class="">
                    <h4 class="mx-3 mb-3"><i class="fas fa-cogs text-green me-2"></i>Account Settings</h4>
                    <p class="mx-3 text-sm-muted">Manage your account preferences, security, and language options below.</p>
                  
            {{-- announcement and notification --}}
            
             @include('Employee.partials.navbar')
                    <!-- ---------------------------- -->


                    <!-- Change Password -->
                    <div class="container py-1">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card shadow-sm border-0 rounded-3">
                                    <div class="card-body">

                                        <!-- Language Preference -->
                                        <div class="border rounded-4 p-4 bg-light">
                                            <h5 class="mb-3"><i class="fas fa-language me-2 text-secondary"></i>Language Preference</h5>

                                            <form>
                                                <div class="row g-3 align-items-end">
                                                    <div class="col-md-6">
                                                        <label for="languageSelect" class="form-label">Select Your Language</label>
                                                        <select class="form-select" id="languageSelect">
                                        <!-- <option selected disabled>Choose language</option> -->
                                        <option value="en">English</option>
                                        <option value="ta">Tamil</option>
                                        <option value="hi">Hindi</option>
                                        <option value="te">Telugu</option>
                                        <option value="ml">Malayalam</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-success" style="width: fit-content;">
                                        <i class="fas fa-save me-1"></i>Save Preference
                                    </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Alert -->
                                        <div class="d-flex align-items-center alert alert-warning alert-dismissible fade show mt-4" role="alert">
                                            <i class="fas fa-shield-alt me-2"></i>
                                            <strong>Security Tip:</strong> You may receive a confirmation email after changing sensitive account information.
                                            <button type="button" class="btn-close" style="padding: 10px;" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>

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
        <!-- jQuery for div toggling -->
     <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- External Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Animate.css is a stylesheet, so it should be <link>, not <script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


        <script>
            function togglePassword(id, el) {
                const input = document.getElementById(id);
                const icon = el.querySelector('i');
                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove("bi-eye-slash-fill");
                    icon.classList.add("bi-eye-fill");
                } else {
                    input.type = "password";
                    icon.classList.remove("bi-eye-fill");
                    icon.classList.add("bi-eye-slash-fill");
                }
            }
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