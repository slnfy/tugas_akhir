<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="">
        <img src="{{ asset('img/favicon1.jpeg') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Archive App</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ (Request::is('dashboard') ? "active" : "") }}" href="{{ route('dashboard.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manajemen</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (Request::is('penyimpanan') ? "active" : "") }}" href="{{ route('penyimpanan.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-archive text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Arsip</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ (Request::is('user') ? "active" : "") }}" href="{{ route('user.index') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-user-group text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">User</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>