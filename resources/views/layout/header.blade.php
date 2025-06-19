<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow w-100">

    <h1 class="h3 mb-0 text-gray-800">@yield('judul')</h1>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Profil</span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

        @if (auth()->check() && auth()->user()->role === 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{route('konfirmasi.index')}}" >
                    <i class="fas fa-bell"></i>
                    {{-- <span class="badge badge-danger badge-counter">
                        {{ $pengunjung }}
                    </span> --}}
                </a>
            </li>
        @endif

    </ul>
</nav>
