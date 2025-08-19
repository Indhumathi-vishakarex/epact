            <button class="sidebar-toggle" id="sidebarToggle" onclick="toggleSidebar()">☰ Menu</button>
            <nav class="col-md-3 col-lg-2 d-md-block sidebar" id="sidebarNav">
                <h4 class="cancel-btn" id="cancel-btn" onclick="toggleSidebar()">×</h4>
                <h5>Dashboard</h5>
                <div class="nav flex-column">
                    <a href="{{route('dashboard-employer')}}" class="nav-link" data-target="dashboard">
                        <i class="bi bi-speedometer2 me-2"></i> My Dashboard
                    </a>

                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#accountMenu" role="button" aria-expanded="false" aria-controls="accountMenu" onclick="toggleCollapse('accountMenu')">
                            <i class="bi bi-person-circle me-2"></i> My Account
                        </a>
             
<div class="collapse" id="accountMenu">
<a href="{{route('account')}}" class="nav-link ms-3 module-link" data-target="my-profile">
    <i class="bi bi-person-lines-fill me-2"></i> My Profile
</a>
<a href="{{route('account')}}#change-password" class="nav-link ms-3 module-link" data-target="change-password">
    <i class="bi bi-lock-fill me-2"></i> Settings
</a>

</div>


                     
                    </div>

                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#employeeMenu" role="button" aria-expanded="false" aria-controls="employeeMenu" onclick="toggleCollapse('employeeMenu')">
                            <i class="bi bi-people-fill me-2"></i> Manage Employee
                        </a>
                        <div class="collapse" id="employeeMenu">
                            <a href="{{route('emp-list')}}" class="nav-link ms-3" data-target="list-employees">
                                <i class="bi bi-list-ul me-2"></i> List Employees
                            </a>
                            <a href="{{route('add-emp')}}" class="nav-link ms-3" data-target="add-employee">
                                <i class="bi bi-person-plus-fill me-2"></i> Add Employee
                            </a>
                            <a href="{{route('terminate-emp')}}" class="nav-link ms-3" data-target="terminate-employee">
                                <i class="bi bi-person-dash-fill me-2"></i> Terminated Employee
                            </a>
                        </div>
                    </div>

                    <a class="nav-link" href="{{route('doc-verify')}}" data-target="document-verification">
                        <i class="bi bi-file-earmark-check-fill me-2"></i> Document Verification
                    </a>
                    <a class="nav-link" href="{{route('leave-app')}}" data-target="leave-requests">
                        <i class="bi bi-calendar-check-fill me-2"></i> Leave Applications
                    </a>
                    <a class="nav-link" href="{{route('emp-attendance')}}" data-target="attendance">
                        <i class="bi bi-clock-history me-2"></i> Attendance
                    </a>
                    <a class="nav-link" href="{{route('emp-announcement')}}" data-target="announcements">
                        <i class="bi bi-megaphone-fill me-2"></i> Announcements
                    </a>
                    <a class="nav-link" href="{{route('emp-notification')}}" data-target="notifications">
                        <i class="bi bi-bell-fill me-2"></i> Notifications
                    </a>
                    <a href="{{route('emp-chat')}}" class="nav-link">
                        <i class="bi bi-headset me-2"></i> Support / Contact HR
                    </a>
                </div>
            </nav>