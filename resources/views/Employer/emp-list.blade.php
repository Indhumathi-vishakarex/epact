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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/faq.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/epact.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

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
                <!-- List Employees -->
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
                <div id="list-employees" class="mt-5">
                    <div class="card p-3 mt-3">
                        <div class="col emp-head d-flex justify-content-between">
                            <div class="d-flex row w-75">
                                <h4 style="align-self: center;">Employee List</h4>
                                <p class="text-sm-muted w-75">View and manage all employee profiles in one place. Search, filter, and take quick actions like view details, update information, or manage status easily from this centralized list."</p>
                                <button class="mx-4 btn btn-outline-secondary btn-sm" style="border-radius: 20px; height: 30px; margin-left: 40px !important;" onclick="refreshEmployees()"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                            </div>
                            <input type="text" id="searchInput" class="w-25 form-control mb-3 mx-3" placeholder="Name/ID/Designation/phone">
                            <a style="width: 15%;" href="./add-emp.html">
                                <div class="btn-custom d-flex justify-content-center align-items-center" style="height: 54px;">Add Employee</div>
                            </a>
                        </div>
                        <input type="text" id="searchInputM" class="w-25 form-control mb-3" placeholder="Search employees...">
                        <div class="modal fade" id="terminateModal" tabindex="-1" aria-labelledby="terminateModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title text-white" id="terminateModalLabel">Terminate Employee</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p id="terminateEmployeeDetails" class="mb-3 fw-bold text-center"></p>
                                        <div class="mb-3">
                                            <label for="terminationReason" class="form-label">Reason</label>
                                            <input type="text" class="form-control" id="terminationReason" placeholder="Enter reason">
                                        </div>
                                        <div class="mb-3">
                                            <label for="terminationReason" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="terminationReason" placeholder="Enter reason">
                                        </div>
                                        <div class="mb-3">
                                            <label for="terminationDetails" class="form-label">Details</label>
                                            <textarea class="form-control" id="terminationDetails" placeholder="Enter details" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button class="btn btn-danger" onclick="confirmTermination()">Confirm Termination</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="overflow-x: auto; max-width: 100%;">
                            <table class="table-trendy table-trendy-main" id="employeeTable">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll" onclick="toggleAllCheckboxes(this)"></th>
                                        <th>No</th>
                                        <th>EmpID</th>
                                        <th>Name</th>
                                        <th>E-Mail</th>
                                        <th>Designation</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="employeeTableBody">
                                    <!-- add more entries as needed -->
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination" id="paginationControls"></div>
                    </div>
                </div>
                <div id="viewModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog modal-lg modal-dialog-centered  w-100" style="max-width: 100%;">
                        <div class="modal-content">
                            <div class="modal-header bg-success text-white">
                                <h5 class="modal-title text-light" style="letter-spacing: 1px;">EMPLOYEE DETAILS</h5>
                                <button type="button" style="    top: -25px; position: relative; right: 16px; " class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row justify-content-center" id="viewModalBody">
                                <!-- Filled dynamically by JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Employee -->
            </main>
        </div>
    </div>
    <div id="footer">
        @include('Frontend.layouts.footer')
    </div>
  
    <script>
        function togglePassword(id, el) {
            const input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
                el.innerHTML = '<i class="bi bi-eye-fill"></i>';
            } else {
                input.type = "password";
                el.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
            }
        }



        // Terminate Employees
        let selectedEmployee = {};

        function openTerminatePopup(firstName, lastName, designation, phone) {
            selectedEmployee = {
                firstName,
                lastName,
                designation,
                phone
            };
            document.getElementById('terminateEmployeeDetails').innerText =
                `Are you sure you want to terminate ${firstName} ${lastName} (${designation})?`;
            const modal = new bootstrap.Modal(document.getElementById('terminateModal'));
            modal.show();
        }

        function confirmTermination() {
            const reason = document.getElementById('terminationReason').value.trim();
            const details = document.getElementById('terminationDetails').value.trim();
            if (!reason || !details) {
                alert('Please fill in both fields.');
                return;
            }

            let terminatedList = JSON.parse(localStorage.getItem('terminatedEmployees') || '[]');
            terminatedList.push({
                ...selectedEmployee,
                reason,
                details,
                date: new Date().toLocaleDateString()
            });
            localStorage.setItem('terminatedEmployees', JSON.stringify(terminatedList));

            bootstrap.Modal.getInstance(document.getElementById('terminateModal')).hide();
            alert('Employee terminated successfully!');
        }

        // Attach listener when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.row-checkbox');
            checkboxes.forEach(cb => {
                cb.addEventListener('change', updateTerminateButtonVisibility);
            });
        });
        //   
        let employeeData = [];
        let currentPage = 1;
        const itemsPerPage = 10;

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
        document.getElementById("searchInput").addEventListener("input", function() {
            const query = this.value.toLowerCase().trim();
            const rows = document.querySelectorAll("#employeeTable tbody tr");

            rows.forEach(row => {
                const rowText = row.innerText.toLowerCase();
                if (rowText.includes(query)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
        document.getElementById("searchInputM").addEventListener("input", function() {
            const query = this.value.toLowerCase().trim();
            const rows = document.querySelectorAll("#employeeTable tbody tr");

            rows.forEach(row => {
                const rowText = row.innerText.toLowerCase();
                if (rowText.includes(query)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });

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

            // Leave req
            function approveLeave(row) {
                row.querySelector('.badge').textContent = "Approved";
                row.querySelector('.badge').className = "badge bg-success";
            }

            function rejectLeave(row) {
                row.querySelector('.badge').textContent = "Rejected";
                row.querySelector('.badge').className = "badge bg-danger";
            }

            // Activate default section on load
            const defaultSection = document.getElementById("dashboard");
            if (defaultSection) defaultSection.classList.add("active");
        }

        function fetchEmployeeData() {
            fetch('employees.json')
                .then((res) => res.json())
                .then((data) => {
                    employeeData = data;
                    renderEmployeeTable();
                })
                .catch((err) => console.error('Error loading employee data:', err));
        }

        function renderEmployeeTable() {
            const tbody = document.getElementById("employeeTableBody");
            const pagination = document.getElementById("paginationControls");
            if (!tbody || !pagination) return;

            tbody.innerHTML = "";
            pagination.innerHTML = "";

            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedItems = employeeData.slice(start, end);

            paginatedItems.forEach((emp, index) => {
                const row = document.createElement("tr");
                row.dataset.visible = "true";

                let statusLabel = emp.statusLabel ? emp.statusLabel.toLowerCase() : "active";
                let statusClass = "status-active";
                if (statusLabel === "inactive") statusClass = "status-inactive";
                else if (statusLabel === "pending") statusClass = "status-pending";

                const empDataText = `${emp.firstName} ${emp.lastName} - ${emp.designation}, Phone: ${emp.phone}`;

                row.innerHTML = `
            <td><input type="checkbox" class="row-checkbox"></td>
            <td style="text-align: center;">${start + index + 1}</td>
            <td style="text-align: center;">EMP${String(start + index + 1).padStart(3, '0')}</td>
            <td>${emp.firstName} ${emp.lastName}</td>
            <td>${emp.email}</td>
            <td><strong>${emp.designation}</strong><br><small>${emp.department}</small></td>
            <td>${emp.phone}</td>
            <td><span class="status-dot ${statusClass}"></span>${statusLabel.charAt(0).toUpperCase() + statusLabel.slice(1)}</td>
            <td class="action d-flex">
                <button class="btn btn-sm btn-secondary" onclick="showEmployeeDetails(${start + index})">View</button>
                <button class="btn btn-sm btn-success" onclick="storeEmployeeData(${index})">Edit</button>
                <button class="btn btn-sm btn-danger-custom" onclick="openTerminatePopup('${emp.firstName}', '${emp.lastName}', '${emp.designation}', '${emp.phone}')">Terminate</button>
                <div class="dropdown">
                    <button class="btn btn-sm btn-success dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-share"></i></button>
                    <ul class="dropdown-menu p-2">
                        <li>
                            <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(location.href)}&quote=${encodeURIComponent(empDataText)}" target="_blank">
                                <i class="bi bi-facebook text-primary"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://api.whatsapp.com/send?text=${encodeURIComponent(empDataText)}" target="_blank">
                                <i class="bi bi-whatsapp text-success"></i> WhatsApp
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=${encodeURIComponent(empDataText)}" target="_blank">
                                <i class="bi bi-twitter text-info"></i> Twitter
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        `;
                tbody.appendChild(row);
            });

            // Pagination logic with Prev, Numbers, Next
            const pageCount = Math.ceil(employeeData.length / itemsPerPage);
            const maxVisiblePages = 5; // show first few numbers, then "..."
            let startPage = Math.max(1, currentPage - 2);
            let endPage = Math.min(pageCount, currentPage + 2);

            // Previous button
            const prevBtn = document.createElement("button");
            prevBtn.className = "btn btn-outline-secondary btn-prev btn-sm mx-1";
            prevBtn.innerHTML = '<i class="bi bi-chevron-double-left"></i>';
            prevBtn.disabled = currentPage === 1;
            prevBtn.onclick = function() {
                if (currentPage > 1) {
                    currentPage--;
                    renderEmployeeTable();
                }
            };
            pagination.appendChild(prevBtn);

            // First page always shown
            if (startPage > 1) {
                const firstPageBtn = document.createElement("button");
                firstPageBtn.className = "btn btn-outline-primary btn-sm mx-1";
                firstPageBtn.textContent = 1;
                firstPageBtn.onclick = function() {
                    currentPage = 1;
                    renderEmployeeTable();
                };
                pagination.appendChild(firstPageBtn);

                if (startPage > 2) {
                    const dots = document.createElement("span");
                    dots.className = "mx-2";
                    dots.textContent = "...";
                    pagination.appendChild(dots);
                }
            }

            // Middle pages
            for (let i = startPage; i <= endPage; i++) {
                const btn = document.createElement("button");
                btn.className = "btn btn-outline-primary btn-sm mx-1";
                btn.textContent = i;
                if (i === currentPage) btn.classList.add("active");
                btn.onclick = function() {
                    currentPage = i;
                    renderEmployeeTable();
                };
                pagination.appendChild(btn);
            }

            // Last page
            if (endPage < pageCount) {
                if (endPage < pageCount - 1) {
                    const dots = document.createElement("span");
                    dots.className = "mx-2";
                    dots.textContent = "...";
                    pagination.appendChild(dots);
                }

                const lastPageBtn = document.createElement("button");
                lastPageBtn.className = "btn btn-outline-primary btn-sm mx-1";
                lastPageBtn.textContent = pageCount;
                lastPageBtn.onclick = function() {
                    currentPage = pageCount;
                    renderEmployeeTable();
                };
                pagination.appendChild(lastPageBtn);
            }

            // Next button
            const nextBtn = document.createElement("button");
            nextBtn.className = "btn btn-outline-primary btn-sm mx-1";
            nextBtn.innerHTML = '<i class="bi bi-chevron-double-right"></i>';

            nextBtn.disabled = currentPage === pageCount;
            nextBtn.onclick = function() {
                if (currentPage < pageCount) {
                    currentPage++;
                    renderEmployeeTable();
                }
            };
            pagination.appendChild(nextBtn);
        }

        function storeEmployeeData(index) {
            const employee = employeeData[index];
            localStorage.setItem('selectedEmployee', JSON.stringify(employee));
            window.location.href = './manage-emp.html';
        }


        function renderPaginationButtons() {
            const pagination = document.getElementById("paginationControls");
            pagination.innerHTML = "";
            const pageCount = Math.ceil(employeeData.length / itemsPerPage);

            for (let i = 1; i <= pageCount; i++) {
                const btn = document.createElement("button");
                btn.className = "btn btn-outline-primary btn-sm mx-1";
                btn.textContent = i;
                if (i === currentPage) btn.classList.add("active");
                btn.addEventListener("click", () => {
                    currentPage = i;
                    renderEmployeeTable();
                });
                pagination.appendChild(btn);
            }
        }

        function showEmployeeDetails(index) {
            const emp = employeeData[index];
            const modalBody = `
               <div class="text-center mb-4">
               <img src="${emp.image}" alt="${emp.firstName}" class="rounded-circle mb-3" style="width: 100px; height: 100px;">
               <h5>${emp.firstName} ${emp.lastName}</h5>
               <p class="text-muted">${emp.designation}</p>
               </div>
             
               
               <div class="col-md-6">
                  <div class="text-center pb-4 mb-3"><p class="text-sm-muted text-align-start">Personal Details</p></div>
                  <div class="row g-3 mb-4">
                        <div class="col-md-3"><strong>Employee ID:</strong> ${emp.id}</div>
                        <div class="col-md-3"><strong>Phone:</strong> ${emp.phone}</div>
                        <div class="col-md-3"><strong>Email:</strong> ${emp.email}</div>
                        <div class="col-md-3"><strong>Password:</strong> ${emp.password}</div>
                        <div class="col-md-3"><strong>Personal Email:</strong> ${emp.personalEmail}</div>
                        <div class="col-md-3"><strong>Join Date:</strong> ${emp.joinDate}</div>
                        <div class="col-md-3"><strong>Emergency Contact:</strong> ${emp.emergencyContact}</div>
                        <div class="col-md-3"><strong>DOB:</strong> ${emp.dob}</div>
                        <div class="col-md-3"><strong>Gender:</strong> ${emp.gender}</div>
                        <div class="col-md-3"><strong>Blood Group:</strong> ${emp.bloodGroup}</div>
                        <div class="col-md-3"><strong>Department:</strong> ${emp.department}</div>
                        <div class="col-md-3"><strong>Shift:</strong> ${emp.shift}</div>
                        <div class="col-md-3"><strong>Type:</strong> ${emp.type}</div>
                        <div class="col-md-3"><strong>Salary:</strong> ${emp.salary}</div>
                        <div class="col-md-3"><strong>Address:</strong> ${emp.address}</div>
                        <div class="col-md-3"><strong>City:</strong> ${emp.city}</div>
                        <div class="col-md-3"><strong>Postal Code:</strong> ${emp.postalCode}</div>
                  </div>
               </div>
         
               <div class="documents-section col-md-5">
                  <p class="text-sm-muted pb-4 mb-3">Uploaded Documents</p>
                  <div class="documents-grid">
                     
                     <!-- NDA -->
                     <a href="./dummy record/epact.pdf" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="document-card">
                           <img src="./assets/img/Employee List Page/NDA.png" class="w-50 mb-3" alt="">
                           <h4 class="doc-title">NDA</h4>
                           <p class="doc-status">${emp.nda ? 'Uploaded' : ''}</p>
                           <i class="bi bi-download"></i>
                        </div>
                     </a>
         
                     <!-- Offer Letter -->
                     <a href="./dummy record/offer-letter.pdf" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="document-card">
                           <img src="./assets/img/Employee List Page/Offer letter.png" class="w-50 mb-3" alt="">
                           <h4 class="doc-title">Offer Letter</h4>
                           <p class="doc-status">${emp.offerLetter ? 'Uploaded' : ''}</p>
                           <i class="bi bi-download"></i>
                        </div>
                     </a>
         
                     <!-- Aadhar / ID Proof -->
                     <a href="./dummy record/aadhar.pdf" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="document-card">
                           <img src="./assets/img/Employee List Page/Id proof.png" class="w-50 mb-3" alt="">
                           <h4 class="doc-title">Aadhar / ID Proof</h4>
                           <p class="doc-status">${emp.aadharCard ? 'Uploaded' : ''}</p>
                           <i class="bi bi-download"></i>
                        </div>
                     </a>
         
                     <!-- Educational Certificates -->
                     <a href="./dummy record/education.pdf" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="document-card">
                           <img src="./assets/img/Employee List Page/Educational certificate.png" class="w-50 mb-3" alt="">
                           <h4 class="doc-title">Educational Certificates</h4>
                           <p class="doc-status">${emp.education ? 'Uploaded' : ''}</p>
                           <i class="bi bi-download"></i>
                        </div>
                     </a>
         
                     <!-- Experience Letters -->
                     <a href="./dummy record/experience.pdf" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="document-card">
                           <img src="./assets/img/Employee List Page/exprience letter.png" class="w-50 mb-3" alt="">
                           <h4 class="doc-title">Experience Letters</h4>
                           <p class="doc-status">${emp.experience ? 'Uploaded' : ''}</p>
                           <i class="bi bi-download"></i>
                        </div>
                     </a>
         
                     <!-- PAN Card (existing example) -->
                     <a href="./dummy record/pan.pdf" target="_blank" style="text-decoration: none; color: inherit;">
                        <div class="document-card">
                           <img src="./assets/img/Employee List Page/pan card.png" class="w-50 mb-3" alt="">
                           <h4 class="doc-title">PAN Card</h4>
                           <p class="doc-status">${emp.panCard ? 'Uploaded' : ''}</p>
                           <i class="bi bi-download"></i>
                        </div>
                     </a>
                  </div>
         
                  <div class="text-center pt-5 mb-3">
                     <p class="text-sm-muted">Attendance Overview</p>
                  </div>
                  <canvas id="attendanceChart" style="min-width: 300px; max-height: 300px;"></canvas>
               </div>
         
               
         
            `;

            document.getElementById("viewModalBody").innerHTML = modalBody;

            document.getElementById("viewModalBody").innerHTML = modalBody;
            new bootstrap.Modal(document.getElementById("viewModal")).show();

            setTimeout(() => {
                const ctx = document.getElementById('attendanceChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['2019', '2020', '2021', '2022', '2023', '2024', '2025', '2026'],
                        datasets: [{
                            label: 'Attendance %',
                            data: [80, 90, 75, 95, 80, 90, 75, 95],
                            backgroundColor: '#198754',
                            barPercentage: 0.5,
                            categoryPercentage: 0.5
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100,
                                ticks: {
                                    stepSize: 10
                                }
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            }, 300);

        }



        function toggleAllCheckboxes(source) {
            const checkboxes = document.querySelectorAll(".row-checkbox");
            checkboxes.forEach(cb => cb.checked = source.checked);
        }

        document.addEventListener("DOMContentLoaded", () => {
            fetchEmployeeData();
            setupSectionToggles();
        });

        function toggleAllCheckboxes(source) {
            const checkboxes = document.querySelectorAll(".row-checkbox");
            checkboxes.forEach(cb => cb.checked = source.checked);
        }

        document.addEventListener("DOMContentLoaded", () => {
            fetchEmployeeData();
            setupSectionToggles();
        });

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
        .badge {
            padding: 0;
        }
        
        .documents-section {
            /* max-width: 1000px; */
            margin: 0 !important;
            text-align: center;
        }
        
        .documents-heading {
            font-size: 28px;
            margin-bottom: 30px;
            font-weight: 600;
        }
        
        .documents-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        
        .documents-grid img {
            width: 35% !important;
        }
        
        .document-card {
            background: linear-gradient(135deg, #ffffff, #f4f7fa);
            border-radius: 16px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 268px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .document-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        
        .doc-icon {
            font-size: 48px;
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }
        
        .document-card:hover .doc-icon {
            transform: scale(1.2);
        }
        
        .doc-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        
        .doc-status {
            font-size: 14px;
            color: #555;
        }
        /* Colors */
        
        .text-primary {
            color: #007bff;
        }
        
        .text-success {
            color: #28a745;
        }
        
        .text-warning {
            color: #ffc107;
        }
        
        .text-danger {
            color: #dc3545;
        }
        /* Responsive */
        
        @media (max-width: 768px) {
            .documents-grid {
                flex-direction: column;
                align-items: center;
            }
            .document-card {
                width: 263px !important;
            }
            .modal-dialog {
                margin: 0;
            }
            .emp-head a {
                width: 55% !important;
            }
        }
        
        .document-card {
            width: 170px;
            height: 220px;
        }
    </style>
</body>

</html>