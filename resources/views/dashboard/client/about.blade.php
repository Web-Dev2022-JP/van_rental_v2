<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Driver</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/calendar.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css"
        integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('css/about/about.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <h3>BATAAN VAN RENTAL</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="{{ route('client-dash') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">LOCATION</a>
                    </li>
                    {{-- <li class="nav-item">
                <a class="nav-link text-white" href="#">ABOUT</a>
              </li> --}}
                </ul>
                {{-- <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form> --}}

                <ul class="navbar-nav ">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <br>
    <main style="padding-top: 30px;">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 class="text-center" id="driver-info">DRIVER INFORMATION</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="mb-3 row justify-content-center">
                                    <div id="name" class="col-md-4">COMPANY NAME:</div>
                                    <div id="content" class="col-md-8">MACS VAN RENTALS</div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <div id="name" class="col-md-4">NAME:</div>
                                    <div id="content" class="col-md-8">MARVIN CELLOZA</div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <div id="name" class="col-md-4">AGE:</div>
                                    <div id="content" class="col-md-8">40</div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <div id="name" class="col-md-4">ADDRESS:</div>
                                    <div id="content" class="col-md-8">MARIVELES, BATAAN</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="mb-3 row justify-content-center">
                                    <div id="name" class="col-md-4">COMPANY NAME:</div>
                                    <div id="content" class="col-md-8">MACS VAN RENTALS</div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <div id="name" class="col-md-4">NAME:</div>
                                    <div id="content" class="col-md-8">MARVIN CELLOZA</div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <div id="name" class="col-md-4">AGE:</div>
                                    <div id="content" class="col-md-8">40</div>
                                </div>
                                <div class="mb-3 row justify-content-center">
                                    <div id="name" class="col-md-4">ADDRESS:</div>
                                    <div id="content" class="col-md-8">MARIVELES, BATAAN</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 mt-5 text-center">
                <h1 id="driver-info">SERVICE OFFERED</h1>
                <h4 id="secondary">ALL-OUT ROUNDTRIPS. (VAN AND DRIVER ONLY)</h4>
                <h5 id="secondary">OUT OF TOWN RATES</h5>
            </div>

            <div class="col-md-12 p-5">
                <div class="row">
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">Tagaytay, Laguna, Cavite, Enchanted Kingdom, Splash Island, Pansol</h5>
                          <p class="card-text">PHP 4,500 day tour (PHP 300.00 per hour in excess of 8 hours)PHP 7,000 overnight (24 hours)Excluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">Antipolo, Baras, Binangonan, Montalban, San Mateo (9 Waves Resort), Tanay, Taytay</h5>
                          <p class="card-text">PHP 4,000 day tour (PHP 300.00 per hour in excess of 8 hours)PHP 7,000 overnight (24 hours)Excluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">Bataan, Subic, Batangas, Tarlac, Nueva Ecija</h5>
                          <p class="card-text">PHP 4,500 day tour (PHP 300.00 per hour in excess of 8 hours)PHP 8,000 overnight (24 hours)Excluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">Bulacan, pampanga</h5>
                          <p class="card-text">PHP 4,500 day tour (PHP 300.00 per hour in excess of 8 hours)PHP 8,000 overnightExcluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">zambales, quezon</h5>
                          <p class="card-text">PHP 5,000 day tour (PHP 300.00 per hour in excess of 8 hours)PHP 9,500 overnight (24 hours)Excluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">panggasinan</h5>
                          <p class="card-text">PHP 6,000 day tour (PHP 300.00 per hour in excess of 8 hours)PHP 11,000 overnight (24 hours)PHP 11,000 (2 days)PHP 17,000 (3 days)PHP 23,000 (4 days) PHP 28,000 (5 days)Excluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">baguio, la union</h5>
                          <p class="card-text">PHP 9,500 (overnight)PHP 10,000 (2 days)PHP 14,500 (3 days) PHP 19,000 (4 days)PHP 24,000 (5 days)Excluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">Pagudpud, Ilocos, Cagayan Valley, Camarines, Sagada</h5>
                          <p class="card-text">PHP 12,000 (2 days)PHP 17,000 (3 days)PHP 23,000 (4 days)PHP 29,000 (5 days)Excluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 id="secondary-content" class="card-title">bicol region </h5>
                          <p class="card-text">PHP 12,000 (2 days)PHP 17,000 (3 days)PHP 23,000 (4 days)PHP 29,000 (5 days)Excluded: Diesel/Parking fee/Toll fee/Driver's meals</p>
                        </div>
                      </div>
                    </div>
                    
                    <div class="mb-3 text-center d-flex justify-content-center">
                        <div class="d-grid">
                             <a id="name"  href="{{ asset('inquiry') }}" class="text-white btn btn-info"><b>INQUIRE NOW</b></a>
                        </div>
                    </div>
                    
                  </div>
            </div>

        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    {{-- calendar --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>


    {{-- custom js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
