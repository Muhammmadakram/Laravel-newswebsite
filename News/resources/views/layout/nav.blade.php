 <!-- Navbar Start -->
 <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
    <a href="{{ url('/dashboard')}}" class="navbar-brand d-flex d-lg-none me-4">
        <h3 class="text-dark mb-0">Abuzaid news</h3>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="{{ asset('admin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                @if(Auth::check())
                <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
            @endif

            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                {{-- <a href="{{ route('profile.show') }}" class="dropdown-item">My Profile</a>
                <a href="{{ route('profile.show') }}" class="dropdown-item">Settings</a> --}}
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>

            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->

