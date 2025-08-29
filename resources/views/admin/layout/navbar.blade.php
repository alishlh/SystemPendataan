<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container-fluid">
        <!-- Sidebar Toggle -->
        <button class="navbar-toggler" type="button" id="sidebarToggle">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Search Form -->
        <div class="search-form ms-3 d-none d-md-flex align-items-center">
            <i class="fas fa-search me-2 text-muted"></i>
            <input type="text" class="form-control form-control-sm" placeholder="Cari data...">
        </div>

        <!-- Right Section -->
        <div class="navbar-nav ms-auto align-items-center flex-row">
            <!-- Notifications -->
            <a class="nav-link position-relative me-3" href="#">
                <i class="fas fa-bell fa-lg"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3
                </span>
            </a>
            <!-- Messages -->
            <a class="nav-link position-relative me-3" href="#">
                <i class="fas fa-envelope fa-lg"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                    5
                </span>
            </a>

            <!-- User Dropdown -->
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                   id="userDropdown" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name=Admin+User&background=1a56db&color=fff"
                         alt="Admin" class="rounded-circle me-2" width="35" height="35">
                    <div class="d-none d-sm-block">
                        <span class="fw-semibold d-block">Admin User</span>
                        <small class="text-muted">Administrator</small>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user me-2 text-primary"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cog me-2 text-secondary"></i> Settings
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
