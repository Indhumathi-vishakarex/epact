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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/epact.css') }}" rel="stylesheet">
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

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
                <!-- My Profile -->
                <div id="my-profile" class="module-section mt-2">
                    <div class="profile-text">
                        <h4 class="mb-2 fw-bold">My Profile</h4>
                        <p class="text-muted mb-4">Fill in your personal and location details.</p>
                    </div>
                    <!-- Top Navbar -->
                    <nav class="navbar top-nav navbar-expand-lg navbar-white bg-none shadow-sm px-3">
                        <ul class="navbar-nav ms-auto d-flex flex-row gap-3">
                            <!-- Announcements -->
                            <li class="nav-item position-relative">
                                <a href="{{route('emp-announcement')}}" class="nav-link">
                                    <i class="bi bi-megaphone fs-5"></i>
                                    <span class="rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                                </a>
                            </li>
                            <li class="nav-item position-relative">
                                <a href="{{route('emp-notification')}}" class="nav-link">
                                    <i class="bi bi-bell fs-5"></i>
                                    <span class="rounded-pill bg-danger position-absolute top-0 start-100 translate-middle text-danger badge-small fw-bold">.</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <hr>

                    {{-- nav bar  of notification and announcement --}}


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
                                <img src="../assets/img/author-1.png" style="background: #81b19085; border-radius: 100px; width: 100px; height: 100px; object-fit: contain;" alt="">
                                <button style="position: absolute; bottom: 0; right: 0; background: #12a940; color: white; border: none; border-radius: 50%; width: 30px; height: 30px; font-size: 16px; cursor: pointer;" onclick="document.getElementById('uploadProfilePic').click()">✎</button>
                                <input type="file" id="uploadProfilePic" style="display: none;" accept="image/*">
                            </div>
                        </div>

                    </div>
                    <div class="card p-4 mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="section-heading mb-0">Personal Information</h5>
                            <button id="editProfileBtn" type="button" class="btn-custom" onclick="toggleEditMode()">✎ Edit</button>
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
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card shadow-sm border-0 rounded-3">
                                <div class="card-body">

                                    <!-- Change Password Section -->
                                    <div class="border rounded-3 p-4 mb-5 bg-light">
                                        <h5 class="mb-3"><i class="fas fa-lock me-2 text-secondary"></i>Change Password</h5>

                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-4 position-relative">
                                                    <label for="currentPassword" class="form-label">Current Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="currentPassword" placeholder="••••••••">
                                                    <span class="position-absolute top-50 end-0 translate-middle-y mt-3 me-4" onclick="togglePassword('currentPassword', this)" style="cursor: pointer;">
                                             <i class="bi bi-eye-slash-fill"></i>
                                          </span>
                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="newPassword" class="form-label">New Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                                                    <span class="position-absolute top-50 end-0 translate-middle-y mt-3 me-4" onclick="togglePassword('newPassword', this)" style="cursor: pointer;">
                                             <i class="bi bi-eye-slash-fill"></i>
                                          </span>
                                                </div>

                                                <div class="col-md-4 position-relative">
                                                    <label for="confirmPassword" class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Re-enter new password">
                                                    <span class="position-absolute top-50 end-0 translate-middle-y mt-3 me-4" onclick="togglePassword('confirmPassword', this)" style="cursor: pointer;">
                                             <i class="bi bi-eye-slash-fill"></i>
                                          </span>
                                                </div>
                                            </div>


                                            <div class="mt-3 d-flex row align-items-center">
                                                <small class="text-muted">
                                          <i class="fas fa-info-circle me-1"></i>Password must be at least 8 characters and include symbols.
                                          </small>
                                                <button type="submit" class="btn btn-primary my-3 mx-2" style="width: fit-content;">
                                          <i class="fas fa-key me-1"></i>Update Password
                                          </button>
                                            </div>
                                        </form>
                                    </div>

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

                                    <!-- Optional: Alert -->
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

        </div>

        <!-- List Employees -->

        </main>
    </div>
    {{-- </div>
    <div id="footer">

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
        function toggleEditMode() {
            const formInputs = document.querySelectorAll('.edit-area input');
            const editBtn = document.getElementById('editProfileBtn');
            const saveBtn = document.getElementById('saveBtn');

            const isDisabled = formInputs[0].disabled;

            formInputs.forEach(input => {
                const excludedFields = ['email', 'phone', 'company'];
                if (!excludedFields.includes(input.id)) {
                    input.disabled = !isDisabled;
                }
            });

            if (isDisabled) {
                editBtn.textContent = 'Cancel';
                saveBtn.style.display = 'block';
            } else {
                editBtn.textContent = '✎ Edit';
                saveBtn.style.display = 'none';
            }
        }

        // Disable all inputs on load except email, phone, company
        document.addEventListener('DOMContentLoaded', function() {
            const formInputs = document.querySelectorAll('.edit-area input');
            formInputs.forEach(input => input.disabled = true);
        });
    </script>

    <script>
        function togglePassword(id, iconSpan) {
            const input = document.getElementById(id);
            const icon = iconSpan.querySelector('i');

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove('bi-eye-slash-fill');
                icon.classList.add('bi-eye-fill');
            } else {
                input.type = "password";
                icon.classList.remove('bi-eye-fill');
                icon.classList.add('bi-eye-slash-fill');
            }
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

        function setupSectionToggles() {
            const links = document.querySelectorAll(".module-link");
            const sections = document.querySelectorAll(".module-section");

            links.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();
                    const targetId = this.dataset.target;

                    sections.forEach(section => section.classList.remove("active"));

                    const target = document.getElementById(targetId);
                    if (target) target.classList.add("active");

                    if (window.innerWidth <= 768) toggleSidebar();
                });
            });

            // Automatically activate first section on load
            if (sections.length) {
                sections[0].classList.add("active");
            }
        }
        const section = document.getElementById("my-profile");
        if (section) {
            section.style.display = "block";
        }

        // Show correct section when menu item is clicked
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll(".module-link");

            links.forEach(link => {
                link.addEventListener("click", function(e) {
                    e.preventDefault();

                    // 1. Hide all sections
                    document.querySelectorAll(".module-section").forEach(section => {
                        section.style.display = "none";
                    });

                    // 2. Show the section that was clicked
                    const targetId = this.getAttribute("data-target");
                    const targetSection = document.getElementById(targetId);
                    if (targetSection) {
                        targetSection.style.display = "block";
                    }

                    // 3. Remove 'active' from all links and add to the clicked one
                    document.querySelectorAll(".nav-link").forEach(nav => nav.classList.remove("active"));
                    this.classList.add("active");

                    // 4. Expand the parent dropdown
                    const parentCollapse = this.closest(".collapse");
                    if (parentCollapse) {
                        parentCollapse.classList.add("show");

                        const toggle = document.querySelector(`[href="#${parentCollapse.id}"]`);
                        if (toggle) {
                            toggle.setAttribute("aria-expanded", "true");
                        }
                    }

                    // Close sidebar on mobile
                    if (window.innerWidth <= 768) toggleSidebar();
                });
            });
        });
        window.addEventListener('DOMContentLoaded', () => {
            const hash = window.location.hash.replace('#', '');
            if (hash) {
                document.querySelectorAll(".module-section").forEach(section => {
                    section.style.display = "none";
                });
                const targetSection = document.getElementById(hash);
                if (targetSection) targetSection.style.display = "block";
            }
        });

        
    </script>
</body>

</html>