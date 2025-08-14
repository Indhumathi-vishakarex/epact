  <div class="row px-2 w-100" style="justify-self: center;">
        <!-- Sidebar -->
        <button class="sidebar-toggle d-md-none btn btn-primary" id="sidebarToggle" onclick="toggleSidebar()">☰ Menu</button>

        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar" id="sidebarNav">
            <h4 class="cancel-btn d-md-none" id="cancel-btn" onclick="toggleSidebar()">×</h4>
            <h5 class="mt-3">Employee Panel</h5>
            <div class="nav flex-column">
                <a href="{{route('dashboard-employee')}}" class="nav-link">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>

                <a href="{{route('profile')}}" class="nav-link">
                    <i class="bi bi-person-lines-fill me-2"></i> My Profile
                </a>

                <a href="{{route('settings')}}" class="nav-link">
                    <i class="fas fa-cogs me-2"></i> Settings
                </a>

                <a href="{{route('attendance')}}" class="nav-link">
                    <i class="bi bi-clock-history me-2"></i> My Attendance
                </a>

                <a href="{{route('leave-application')}}" class="nav-link">
                    <i class="bi bi-calendar-check me-2"></i> Leave Requests
                </a>

                <a href="{{route('documents')}}" class="nav-link">
                    <i class="bi bi-folder-check me-2"></i> My Documents
                </a>

                <a href="{{route('announcement')}}" class="nav-link">
                    <i class="bi bi-megaphone-fill me-2"></i> Announcements
                </a>

                <a href="{{route('notification')}}" class="nav-link">
                    <i class="bi bi-bell-fill me-2"></i> Notifications
                </a>

                 <a href="{{route('support')}}" class="nav-link">
                        <i class="bi bi-headset me-2"></i> Support / Contact HR
                    </a>
            </div>
        </nav>
    