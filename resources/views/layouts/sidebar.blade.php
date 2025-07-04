<!-- Sidebar -->
<div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white bg-primary" id="sidebar">
    <!-- Sidebar Brand -->
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">CRUD <sup>2</sup></span>
    </a>
    <hr>
    <!-- Navigasi -->
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-white {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="fa fa-tachometer-alt me-2"></i>
                Dashboard
            </a>
        </li>

        <!-- Menu Dropdown Manajemen Data -->
        <li>
            <a href="#submenuManajemen" data-bs-toggle="collapse" class="nav-link text-white {{ request()->is('resident*') ? 'active' : '' }}">
                <i class="fa fa-database me-2"></i>
                Manajemen Data
            </a>
            <ul class="collapse nav flex-column ms-1 {{ request()->is('resident*') ? 'show' : '' }}" id="submenuManajemen" data-bs-parent="#sidebar">
                <li>
                    <a href="/resident" class="nav-link text-white {{ request()->is('resident*') ? 'active' : '' }}">
                        <i class="fa fa-users me-2"></i>
                        Penduduk
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="nav-link text-white">
                <i class="fa fa-table me-2"></i>
                Tables
            </a>
        </li>
    </ul>
    <hr>
    <!-- User Dropdown (Contoh) -->
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://placehold.co/32x32/ffffff/000000?text=A" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Admin</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
