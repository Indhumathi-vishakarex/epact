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
        .badge-small {
            padding: 0;
        }
        
        table.table tr th {
            background-color: white;
        }
    </style>
    <!-- START HEADER -->
 
    <!-- Navigation -->
   @include('Employer.partials.header')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            
   @include('Employer.partials.sidebar')
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 content">
                <div id="document-verification" class="">
                    <h4 class="mb-3">Document Verification</h4>
                    <p class="text-muted">Review, approve, or reject employee documents securely.</p>
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
                    <!-- Filters -->
                    <div class="mb-3 col-md-3">
                        <label for="statusFilter" class="form-label">Filter by Status:</label>
                        <select id="statusFilter" class="form-select" onchange="filterDocumentsByStatus(this.value)">
                        <option value="">All</option>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                     </select>
                    </div>
                    <!-- Document Table -->
                    <div class="table-responsive">
                        <table class="table table-trendy">
                            <thead class="table-light bg-white" style="background: white !important;">
                                <tr>
                                    <th class="text-center">NO</th>
                                    <th>EmpID</th>
                                    <th>Employee</th>
                                    <th>Designation</th>
                                    <th>Documents</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="documentTableBody">
                                <!-- Documents dynamically inserted here -->
                            </tbody>
                            <div class="modal fade" id="fileListModal" tabindex="-1" aria-labelledby="fileListModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fileListModalLabel">Uploaded Files</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body" id="fileListContent">
                                            <!-- File list will be inserted here -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
        
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
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Doc verify
        // Document verify
        const sampleDocuments = [{
            employee: "John Doe",
            designation: "Developer",
            status: "Pending",
            files: [{
                name: "resume.pdf",
                url: "/uploads/resume.pdf"
            }, {
                name: "certificate.pdf",
                url: "/uploads/certificate.pdf"
            }, {
                name: "id_card.pdf",
                url: "/uploads/id_card.pdf"
            }]
        }, {
            employee: "Jane Smith",
            designation: "Designer",
            status: "Pending",
            files: [{
                name: "portfolio.pdf",
                url: "/uploads/portfolio.pdf"
            }]
        }];


        function loadDocumentVerification() {
            const tbody = document.getElementById("documentTableBody");
            tbody.innerHTML = "";

            sampleDocuments.forEach((doc, index) => {
                let fileDisplay;
                if (doc.files && doc.files.length > 1) {
                    // Show first file + count of remaining
                    fileDisplay = `
                <button class="btn btn-sm btn-outline-secondary" 
                    onclick="showFileList(${index})">
                    ${doc.files[0].name} (+${doc.files.length - 1} more) 
                </button>
            `;
                } else if (doc.files && doc.files.length === 1) {
                    // Single file — link directly
                    fileDisplay = `
                <a href="${doc.files[0].url}" target="_blank" class="btn btn-sm btn-outline-secondary">
                    ${doc.files[0].name}
                </a>
            `;
                } else {
                    fileDisplay = `<span class="text-muted">No files</span>`;
                }

                tbody.innerHTML += `
            <tr>
                <td style="text-align:center;">${index + 1}</td>
                <td>EMP${String(index + 1).padStart(3, '0')}</td>
                <td>${doc.employee}</td>
                <td>${doc.designation}</td>
                <td>${fileDisplay}</td>
                <td><span class="badge bg-${getStatusBadge(doc.status)}">${doc.status}</span></td>
                <td class="action">
                    <button class="btn btn-sm btn-success" onclick="updateDocStatus(${index}, 'Approved')">Approve</button>
                    <button class="btn btn-sm btn-danger" onclick="updateDocStatus(${index}, 'Rejected')">Reject</button>
                </td>
            </tr>
        `;
            });
        }

        function showFileList(index) {
            const doc = sampleDocuments[index];
            let content = "<ul class='list-group'>";
            doc.files.forEach(file => {
                content += `
            <li class="list-group-item">
                <a href="${file.url}" target="_blank">${file.name} <i class="ms-2 fas fa-download"></i></a> 
            </li>
        `;
            });
            content += "</ul>";
            document.getElementById("fileListContent").innerHTML = content;

            // Show Bootstrap modal
            const modal = new bootstrap.Modal(document.getElementById('fileListModal'));
            modal.show();
        }

        function getStatusBadge(status) {
            switch (status) {
                case 'Approved':
                    return 'success';
                case 'Rejected':
                    return 'danger';
                case 'Pending':
                    return 'warning';
                default:
                    return 'secondary';
            }
        }


        function updateDocStatus(index, newStatus) {
            sampleDocuments[index].status = newStatus;
            loadDocumentVerification();
        }

        function filterDocumentsByStatus(status) {
            const filtered = status ?
                sampleDocuments.filter(doc => doc.status === status) :
                sampleDocuments;
            const tbody = document.getElementById("documentTableBody");
            tbody.innerHTML = "";
            filtered.forEach((doc, i) => {
                tbody.innerHTML = "";

                sampleDocuments.forEach((doc, index) => {
                    let fileDisplay;
                    if (doc.files && doc.files.length > 1) {
                        // Show first file + count of remaining
                        fileDisplay = `
                <button class="btn btn-sm btn-outline-secondary" 
                    onclick="showFileList(${index})">
                    ${doc.files[0].name} (+${doc.files.length - 1} more) 
                </button>
            `;
                    } else if (doc.files && doc.files.length === 1) {
                        // Single file — link directly
                        fileDisplay = `
                <a href="${doc.files[0].url}" target="_blank" class="btn btn-sm btn-outline-secondary">
                    ${doc.files[0].name}
                </a>
            `;
                    } else {
                        fileDisplay = `<span class="text-muted">No files</span>`;
                    }

                    tbody.innerHTML += `
            <tr>
                <td style="text-align:center;">${index + 1}</td>
                <td>EMP${String(index + 1).padStart(3, '0')}</td>
                <td>${doc.employee}</td>
                <td>${doc.designation}</td>
                <td>${fileDisplay}</td>
                <td><span class="badge bg-${getStatusBadge(doc.status)}">${doc.status}</span></td>
                <td class="action">
                    <button class="btn btn-sm btn-success" onclick="updateDocStatus(${index}, 'Approved')">Approve</button>
                    <button class="btn btn-sm btn-danger" onclick="updateDocStatus(${index}, 'Rejected')">Reject</button>
                </td>
            </tr>
        `;
                });

            });
        }


        document.addEventListener("DOMContentLoaded", () => {
            loadDocumentVerification();
        });

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


        document.addEventListener("DOMContentLoaded", function() {
    const toggleBtn = document.querySelector('.nav-toggle');
    const sidebar = document.getElementById('sidebarNav');
    if (toggleBtn && sidebar) {
        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('show');
        });
    }
});

    </script>
</body>

</html>