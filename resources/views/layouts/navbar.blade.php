<nav class="navbar navbar-expand  bg-white topbar mb-4 static-top shadow">
    {{-- @if ($errors->any()){
        @dd($errors->all())
    }
    @endif --}}

    <!-- Tombol ini bisa Anda hubungkan dengan JavaScript kustom untuk toggle sidebar jika perlu -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle me-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline me-auto ms-md-3 my-2 my-md-0 w-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari untuk..."
                aria-label="Search" aria-describedby="button-search">
            <button class="btn btn-primary" type="button" id="button-search">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ms-auto">

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle" style="font-size: 0.6em; padding: .35em .55em;">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <li><h6 class="dropdown-header">Alerts Center</h6></li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="me-3">
                            <div class="icon-circle bg-primary text-white" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="fw-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                </li>
                <!-- Tambahkan item lainnya sesuai kebutuhan -->
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a></li>
            </ul>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge bg-danger rounded-pill position-absolute top-0 start-100 translate-middle" style="font-size: 0.6em; padding: .35em .55em;">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <li><h6 class="dropdown-header">Message Center</h6></li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="flex-shrink-0 me-3">
                            <img class="rounded-circle" src="https://placehold.co/60x60" alt="..." style="width: 40px; height: 40px;">
                        </div>
                        <div class="fw-bold">
                            <div class="text-truncate">Hi there! Need help with a problem?</div>
                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a></li>
            </ul>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="me-2 d-none d-lg-inline text-gray-600 small"> @auth {{ auth()->user()->name}} @endauth @guest Guest @endguest</span>
                <img class="img-profile rounded-circle" src="{{ asset('template/img/undraw_profile.svg') }}" style="width: 32px; height: 32px;">
            </a>
            <!-- Dropdown - User Information -->
            <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">
                <li><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Activity Log</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#confirmationLogoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Logout
                    </button>
                </li>
            </ul>
        </li>
    </ul>
    @include('pages.resident.confirmation-logout')
</nav>
