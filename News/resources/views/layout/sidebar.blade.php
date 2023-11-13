  <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ url('/dashboard')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-dark">Abuzaid News</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('admin/img/user.jpg') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                @if(Auth::check())
                <h6 class="mb-0 ">{{ Auth::user()->name }}</h6>
                @endif
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('/dashboard') }}" class="nav-item nav-link
{{ Request::is('dashboard') ? 'active' : '' }}">
<i
      class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            {{-- <a href="widget.html" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Manage Employes</a> --}}
            {{-- <a href="{{ url('/newsban') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>News Banner</a>
                  <a href="{{ url('/newshome')}}" class="nav-item nav-link "><i class="fa fa-chart-bar  me-2"></i>Home News</a> --}}
         <a href="{{ url('/newsflash')}}" class="nav-item nav-link"><i class="fas fa-check-circle me-2"></i>News Flash</a>

                  <a href="{{ url('/newscategory')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>News Category</a>
                    <a href="{{ url('/author')}}" class="nav-item nav-link"><i class="fa fa-user-tie me-2"></i>Author</a>
                    <a href="{{ url('/post')}}" class="nav-item nav-link {{ (Request::is('updatepost*') || Request::is('formpost*')) ? 'active' : '' }}"><i class="fa fa-laptop me-2"></i>Post</a>


            {{-- <a href="chart.html" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Manage Jobs</a> --}}

        </div>
    </nav>
</div>
<!-- Sidebar End -->
<script>
  const currentUrl = window.location.href;
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  navLinks.forEach(link => {
      if (link.href === currentUrl) {
          link.classList.add('active');
      }
  });
</script>

