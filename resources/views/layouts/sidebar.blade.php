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
            <a href="/dashboard" class="nav-link text-white  {{ request()->is('dashboard') ? 'active' : '' }}">
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
</div>
