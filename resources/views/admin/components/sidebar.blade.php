<style>
    .link{
        color: rgb(58, 55, 55);
        transition: .4s all;
    }
    .link:hover{
        padding: 30px;
        position: relative;
        transition: .3s ease-in-out;
    }
    .transirion:hover{
        transition: .2s esse all;
        margin-right: 12px;
    }
</style>

<nav class="pc-sidebar shadow">
    <div class="navbar-wrapper ">
      <div class="m-header shadow-sm"> 
        <a href="#" class="b-brand text-primary">
            <div class="logo" data-bs-theme="dark">
                <!-- ========   Change your logo from here   ============ -->
                <img src="{{ asset('img/bg/logo/logo-black.png') }}" alt="" width="230"/>
                {{-- <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.0</span> --}}
            </div>
        </a>
      </div>
      <div class="navbar-content">
        <div class="card pc-user-card ">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="{{ asset('../assets/images/user/avatar-1.jpg') }}" alt="user-image" class="user-avtar wid-45 rounded-circle" />
              </div>
              <div class="flex-grow-1 ms-3 me-2">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <small>Administrator</small>
              </div>
              <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              </a>
            </div>
            <div class="collapse pc-user-links" id="pc_sidebar_userlink">
              <div class="pt-3">
                <a href="#!">
                  <i class="ti ti-user"></i>
                  <span>My Account</span>
                </a>
                <a href="#!">
                  <i class="ti ti-settings"></i>
                  <span>Settings</span>
                </a>
                <a href="#!">
                  <i class="ti ti-lock"></i>
                  <span>Lock Screen</span>
                </a>
                <a href="/logout">
                  <i class="ti ti-power"></i>
                  <span>Logout</span>
                </a>
              </div>
            </div>
          </div>
        </div>
  

        <ul class="pc-navbar">
            <div class=" m-3 mt-4">
            <a href="/" ><b class="link pc-item p-2 rounded shadow-sm">Lihat Websit </b></a>

            </div>
            <li class="pc-item pc-caption">
            <label>Navigation</label>
          </li>
          <li class="pc-item"
          ><a href="/admin/dashboard" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-notification-status"></use>
              </svg>
            </span>
            <span class="pc-mtext">Dashboard</span></a
          ></li>
          </li>
          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document"></use>
                </svg>
              </span>
              <span class="pc-mtext">Data Master</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              <span class="pc-badge">7</span>
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('beranda.index') }}">Data Beranda</a></li>
              {{-- <li class="pc-item"><a class="pc-link" href="{{ route('post.index') }}   ">Data Post</a></li> --}}
              <li class="pc-item"><a class="pc-link" href="{{ route('profile.index') }}">Data Profile</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('artikel.index') }}">Data Artikel</a></li>
              {{-- <li class="pc-item"><a class="pc-link" href="{{ route('category.index') }}">Data Category Artikel</a></li> --}}
              <li class="pc-item"><a class="pc-link" href="{{ route('rfc.index'    ) }}">Data RFC2350</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('layanan.index') }}">Data Layanan</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('panduan.index') }}">Data Panduan</a></li>
              <li class="pc-item"><a class="pc-link" href="{{ route('kontak.index') }}">Data Kontak</a></li>
              {{-- <li class="pc-item"><a class="pc-link" href="{{ route('page.index' ) }}"> Data Page Setting</a></li> --}}
            </ul>
          </li>

          <li class="pc-item pc-hasmenu">
            <a href="#!" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-document"></use>
                </svg>
              </span>
              <span class="pc-mtext">Data Master</span>
              <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
              <span class="pc-badge">7</span>
            </a>
            <ul class="pc-submenu">
              <li class="pc-item"><a class="pc-link" href="{{ route('dinas.index') }}">Data Dinas</a></li>
              {{-- <li class="pc-item"><a class="pc-link" href="{{ route('profile.index') }}"></a></li> --}}
              <li class="pc-item"><a class="pc-link" href="{{ route('lapor.index') }}">Data Laporan</a></li>




          <li class="pc-item"
            ><a href ="{{ route('page.index') }}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-notification-status"></use>
                </svg>
              </span>
              <span class="pc-mtext">Page Setting</span></a
            ></li>
        </ul>
      </div>
    </div>
  </nav>