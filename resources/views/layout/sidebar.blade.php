<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <div class="sidebar-brand d-flex align-items-center justify-content-center px-3">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none" id="toggleSidebarAction">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-2">@yield('user')</div>
        </a>
    </div>

    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{url('/dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Menu
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/film')}}">
            <i class="fas fa-fw fa-folder"></i>
            Film
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/jadwal')}}">
            <i class="fas fa-fw fa-calendar"></i>
            Jadwal
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/pengunjung')}}">
            <i class="fas fa-user"></i>
            Pengunjung
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/tiket')}}">
            <i class="fas fa-ticket-alt"></i>
            Tiket
        </a>
    </li>
</ul>
