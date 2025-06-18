<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <div class="sidebar-brand d-flex align-items-center justify-content-center px-3 mt-3">
        <a href="#" class="d-flex flex-column align-items-center text-white text-decoration-none" id="toggleSidebarAction">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            @if (Auth::user()->role === 'admin')
                <span>ADMIN</span>
            @elseif (Auth::user()->role === 'staf')
                <span>STAF</span>
            @else
                <span>PENGUNJUNG</span>
            @endif
        </a>
    </div>

    @if (Auth::user()->role === 'admin' || Auth::user()->role === 'staf')
        <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
    @endif

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

    @if (Auth::user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pengunjung.index') }}">
                <i class="fas fa-users"></i>
                <span>Pengunjung</span>
            </a>
        </li>
    @endif
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/tiket')}}">
            <i class="fas fa-ticket-alt"></i>
            Tiket
        </a>
    </li>
    @if (Auth::user()->role === 'admin')
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
                <i class="fas fa-user"></i>
                <span>User</span>
            </a>
        </li>
    @endif
</ul>
