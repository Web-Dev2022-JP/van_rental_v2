{{-- @extends('../components.frequently')
@extends('../components.details') --}}
{{-- @extends('details') --}}
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>

     <!-- Styles -->
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

     <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
    
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#"><h3 class="red">BATAAN VAN RENTAL</h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
            {{-- <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form> --}}

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
          </div>
        </div>
    </nav>
 
    <main>
      @section('content')
      {{-- banner --}}
      <div class="container-fluid border banner p-4" style="width: 98%;border-radius:10px;margin-top:4.8em">
          <h4 class="text-center mb-3">UNLOCK ADVENTURE ON FOUR WHEELS WITH OUR VAN RENTAL SERVICE</h4>
          <h1 class="text-center mb-3">BATAAN VAN SERVICE</h1>
      </div>
      <div class="container-fluid border bg-light p-2 mt-1 row mx-auto" style="width: 98%;border-radius:10px">
          <div class="col-sm-3 text-success h5">
              <i class='bx bxs-check-circle'></i>
              <span>Best Available Rates</span>
          </div>
          <div class="col-sm-3 d-flex justify-content-center text-success h5" style="align-items: center">
              <i class='bx bxs-check-circle'></i>
              <span>Best Available Rates</span>
          </div>
          <div class="col-sm-3 d-flex justify-content-center text-success h5" style="align-items: center">
              <i class='bx bxs-check-circle'></i>
              <span>Best Available Rates</span>
          </div>
          <div class="col-sm-3 d-flex justify-content-end text-success h5" style="align-items: center">
              <i class='bx bxs-check-circle'></i>
              <span>Best Available Rates</span>
          </div>
      </div>
      {{-- section van  --}}
      <div class="container-fluid van-container p-0 mt-5" style="width: 98%;border-radius:10px">
          <div class="row van-row">
              <div class="col-sm-3 van-col">
                  <div class="card van-card">
                      <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                      <div class="card-body text-center">
                          <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                          <div class="row d-flex justify-content-center gap-1">
                              <div class="col-lg-4 col-md-4 card"
                                  style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                  <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                      <div class="pt-2 me-2">
                                          <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                      </div>
                                      <div class="pt-2">
                                          <div class="text-secondary h5 mb-0"> Bags</div>
                                          <div style="color: rgb(2, 47, 61);"><b> 8 Bags</b></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 card"
                                  style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                  <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                      <div class="pt-2 me-2">
                                          <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                      </div>
                                      <div class="pt-2">
                                          <div class="text-secondary h5 mb-0"> People</div>
                                          <div style="color: rgb(2, 47, 61);"><b> 11 Seater</b></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-8 mb-3" style="margin: auto">
                          <input class="btn btn-secondary form-control" type="button" value="View Details" data-bs-toggle="modal" data-bs-target="#details-modal">
                      </div>
                  </div>
              </div>
              <div class="col-sm-3 van-col">
                  <div class="card van-card">
                      <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                      <div class="card-body text-center">
                          <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                          <div class="row d-flex justify-content-center gap-1">
                              <div class="col-lg-4 col-md-4 card"
                                  style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                  <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                      <div class="pt-2 me-2">
                                          <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                      </div>
                                      <div class="pt-2">
                                          <div class="text-secondary h5 mb-0"> Bags</div>
                                          <div style="color: rgb(2, 47, 61);"><b> 8 Bags</b></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 card"
                                  style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                  <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                      <div class="pt-2 me-2">
                                          <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                      </div>
                                      <div class="pt-2">
                                          <div class="text-secondary h5 mb-0"> People</div>
                                          <div style="color: rgb(2, 47, 61);"><b> 11 Seater</b></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-8 mb-3" style="margin: auto">
                          <input class="btn btn-secondary form-control" type="button" value="View Details" data-bs-toggle="modal" data-bs-target="#details-modal">
                      </div>
                  </div>
              </div>
              <div class="col-sm-3 van-col">
                  <div class="card van-card">
                      <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                      <div class="card-body text-center">
                          <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                          <div class="row d-flex justify-content-center gap-1">
                              <div class="col-lg-4 col-md-4 card"
                                  style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                  <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                      <div class="pt-2 me-2">
                                          <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                      </div>
                                      <div class="pt-2">
                                          <div class="text-secondary h5 mb-0"> Bags</div>
                                          <div style="color: rgb(2, 47, 61);"><b> 8 Bags</b></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-4 col-md-4 card"
                                  style="width: 40%;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                  <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                      <div class="pt-2 me-2">
                                          <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                      </div>
                                      <div class="pt-2">
                                          <div class="text-secondary h5 mb-0"> People</div>
                                          <div style="color: rgb(2, 47, 61);"><b> 11 Seater</b></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-8 mb-3" style="margin: auto">
                          <input class="btn btn-secondary form-control" type="button" value="View Details" data-bs-toggle="modal" data-bs-target="#details-modal">
                      </div>
                  </div>
              </div>
  
  
              <div class="col-sm-4 van-col d-flex justify-content-center" style="margin-top: -5em">
                  <button class="btn btn-info text-white"><b>VIEW MORE</b></button>
              </div>
          </div>
      </div>
        @endsection
        {{-- Include details section --}}
        @section('details-modal')
        @include('components.details')
        @endsection

        {{-- Include frequently section --}}
        @section('frequently')
        @include('components.frequently')
        @endsection
        @section('frequently')
        @include('modals.about-driver')
        @endsection

        {{-- Render the content sections --}}
        @yield('content')
        @yield('details-modal')
        @yield('frequently')
        @yield('about-driver-modal')
    </main>
   

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    {{-- calendar --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>


     {{-- custom js --}}
     <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{ asset('js/calendar.js') }}"></script>
     

     {{-- sweetalert --}}
     {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     <script src="{{ asset('js/popups.js') }}"></script>
     
     @if(session('showAlert'))
     <script>
       // Usage:
        const instance = new To();
        instance.showSuccessAlert(`{{ session('name') }}`);
    </script>
    @endif
</body>
</html>