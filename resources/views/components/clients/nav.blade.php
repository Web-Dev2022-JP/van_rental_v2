@section('client-nav')
<nav class="navbar fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white mt-1" href="#"><h3 class="red">BATAAN VAN RENTAL</h3></a>
      <div class="d-flex">
        <a class="navbar-toggler border-0 text-white" style="text-decoration: none" data-bs-toggle="offcanvas" data-bs-target="#settings" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="bx bx-info-square position-relative">
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                    {{-- <span class="visually-hidden">New alerts</span> --}}
                  </span>
            </span>
          </a>
        <a class="navbar-toggler border-0 text-white" style="text-decoration: none" data-bs-toggle="offcanvas" data-bs-target="#settings" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="bx bx-bell position-relative">
                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                    {{-- <span class="visually-hidden">New alerts</span> --}}
                  </span>
            </span>
          </a>
          <a class="navbar-toggler border-0 text-white" style="text-decoration: none" data-bs-toggle="offcanvas" data-bs-target="#settings" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span>{{ Auth::user()->firstname }}</span>
            <span class="bx bx-dots-vertical-rounded"></span>
          </a>
      </div>

      {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
          <li class="nav-item">
            <a class="nav-link text-white active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">LOCATION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('about') }}">ABOUT</a>
          </li>
        </ul>
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>

        <ul class="navbar-nav ">
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->firstname }}
            </a>
        
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
        
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </li>
        </ul>
      </div> --}}

      <div class="offcanvas offcanvas-end" tabindex="-1" id="settings" aria-labelledby="offcanvasNavbarLabel" style="max-width: 40%;background: #274C77;">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Settings</h5>
          <a class="text-white bx bx-x" data-bs-dismiss="offcanvas" aria-label="Close" style="text-decoration: none"></a>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="#">
                        <span class="bx bxs-home"></span>
                        <span class="mx-2">HOME</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <span class="bx bxs-wrench"></span>
                        <span class="mx-2">SERVICES</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">
                        <span class="bx bxs-map"></span>
                        <span class="mx-2">LOCATION</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about') }}">
                        <span class="bx bxs-info-circle"></span>
                        <span class="mx-2">ABOUT</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about') }}">
                        <span class="bx bxs-user"></span>
                        <span class="mx-2">PROFILE</span>
                    </a>
                </li>
                
              </ul>
        </div>
        <div class="offcanvas-footer p-3">
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger form-control mx-auto" type="submit">
                    <span class="bx bx-log-out"></span>
                    Logout
                </button>
            </form>
        </div>
      </div>
    </div>
</nav>
@endsection