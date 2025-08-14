<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documents</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/epact-globe.webp') }}">

<!-- Bootstrap & Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Styles -->
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

   
            <main class="col-md-9 ms-sm-auto col-lg-10 mb-5">

                <!-- ---------------------------- -->
                <div id="leave-requests" class="">
                    <h4 class="mx-3 mb-3"><i class="bi-file-earmark-text text-green"></i> My Documents</h4>
                    <p class="mx-3 text-sm-muted">This module allows employers to view, approve, and manage employee leave requests.</p>
                

                      {{-- announcement and notification --}}
            
             @include('Employee.partials.navbar')
                    <!-- ---------------------------- -->

                    <div class="container mt-4">
                        <div class="card shadow-sm rounded-4 p-4">
                            <!-- Upload Form -->
                            <!-- <form id="uploadForm" class="row g-3 mb-4">
                        <div class="col-md-6">
                           <label for="docType" class="form-label">Document Type</label>
                           <select id="docType" class="form-select" required>
                              <option value="">-- Select Document --</option>
                              <option>Offer Letter</option>
                              <option>NDA</option>
                              <option>Aadhar Card</option>
                              <option>Educational Certificates</option>
                              <option>Experience Letters</option>
                              <option>Termination Letter</option>
                           </select>
                        </div>
                        <div class="col-md-6">
                           <label for="docFile" class="form-label">Choose File</label>
                           <input type="file" class="form-control" id="docFile" required />
                        </div>
                        <div class="col-12">
                           <button type="submit" class="btn btn-success w-auto px-4">Upload</button>
                        </div>
                     </form> -->
                            <!-- Documents Table -->
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead class="bg-green2 text-white">
                                        <tr>
                                            <th class="text-center">Icon</th>
                                            <th>Document Name</th>
                                            <th>Upload Date</th>
                                            <th>Updated By</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="docTableBody">
                                        <tr>
                                            <td class="text-center">
                                                <i class="bi bi-person-vcard-fill fs-5 text-green"></i>
                                            </td>
                                            <td>
                                                <a href="${doc.fileUrl}" target="_blank" class="btn btn-sm ms-2 btn-outline-secondary">Aadhar card</a>
                                            </td>
                                            <td>2025-07-20</td>
                                            <td>HR</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="bi bi-credit-card-fill fs-5 text-green"></i>
                                            </td>
                                            <td>
                                                <a href="${doc.fileUrl}" target="_blank" class="btn btn-sm ms-2 btn-outline-secondary">PAN card</a>
                                            </td>

                                            <td>2025-07-21</td>
                                            <td>Employee</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="bi bi-file-earmark-text-fill fs-5 text-green"></i>
                                            </td>
                                            <td>
                                                <a href="${doc.fileUrl}" target="_blank" class="btn btn-sm ms-2 btn-outline-secondary">Offer letter</a>
                                            </td>
                                            <td>2025-07-18</td>
                                            <td>HR</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <i class="bi bi-journal-richtext fs-5 text-green"></i>
                                            </td>
                                            <td>
                                                <a href="${doc.fileUrl}" target="_blank" class="btn btn-sm ms-2 btn-outline-secondary">Degree certificate</a>
                                            </td>
                                            <td>2025-07-19</td>
                                            <td>Employee</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                    </tbody>
                                </table>
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
     <!-- jQuery (Load from CDN or local as fallback) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('assets/js/jquery.min.js') }}"><\/script>')</script>

<!-- Bootstrap & Popper -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/js/rangeslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Animate.css (CSS file should be in <link>, not <script>) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <script>
            const docTable = document.getElementById("docTableBody");
            const form = document.getElementById("uploadForm");

            let uploadedDocs = []; // Dummy in-memory store

            form.addEventListener("submit", (e) => {
                e.preventDefault();
                const type = document.getElementById("docType").value;
                const file = document.getElementById("docFile").files[0];
                if (!type || !file) return;

                const now = new Date();
                const expiryDate = new Date(now.setMonth(now.getMonth() + 6)).toISOString().split("T")[0]; // Simulate 6-month expiry

                uploadedDocs.push({
                    type,
                    filename: file.name,
                    status: "Pending",
                    uploaded: new Date().toLocaleDateString(),
                    expiry: expiryDate,
                });

                renderDocs();
                form.reset();
            });

            function renderDocs() {
                docTable.innerHTML = "";

                uploadedDocs.forEach((doc, i) => {
                    const isExpiringSoon =
                        new Date(doc.expiry) - new Date() < 30 * 24 * 60 * 60 * 1000;

                    const tr = document.createElement("tr");
                    tr.innerHTML = `
               <td>${doc.type}</td>
               <td>
                 <span class="badge ${getStatusClass(doc.status)}">${doc.status}</span>
               </td>
               <td>${doc.uploaded}</td>
               <td>
                 ${doc.expiry}
                 ${
                   isExpiringSoon
                     ? '<span class="badge bg-warning text-dark ms-2">Expiring Soon</span>'
                     : ""
                 }
               </td>
               <td>
                 <a href="#" class="btn btn-sm btn-outline-success me-2" download="${doc.filename}"><i class="bi bi-download"></i></a>
                 <button class="btn btn-sm btn-outline-danger" onclick="deleteDoc(${i})"><i class="bi bi-trash"></i></button>
               </td>
             `;
                    docTable.appendChild(tr);
                });
            }

            function deleteDoc(index) {
                uploadedDocs.splice(index, 1);
                renderDocs();
            }

            function getStatusClass(status) {
                switch (status) {
                    case "Approved":
                        return "bg-success";
                    case "Pending":
                        return "bg-secondary";
                    case "Rejected":
                        return "bg-danger";
                    default:
                        return "bg-dark";
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