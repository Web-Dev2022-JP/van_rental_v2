<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bataan Van Rental Service</title>
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.2/css/bootstrap.min.css"> --}}
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
   
        {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/home/home.css') }}"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/home/burgermenu_v2.css') }}"> --}}
   
        <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('theming/universal.css') }}">
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 navigation-header">
                    @auth
                        @if (auth()->user()->role == 1)
                            <a href="{{ url('/client-dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ 'Client' }}</a>
                        @elseif(auth()->user()->role == 2)
                            <a href="{{ url('/driver-dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ 'Driver' }}</a>
                        @else
                        <a href="{{ url('/admin-dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ 'Admin' }}</a>
                        @endif
                        
                    @else
            
                           <!-- Flex container for login and registration links -->
                        <div class="d-flex justify-content-end">
                        
                            <a href="{{ route('login') }}" class="text-white me-2" style="text-decoration: none"><b>Login</b></a>
                            <div class="border me-2"></div>
                            @if (Route::has('register'))
                                <a id="registration-id" class="text-white" style="text-decoration: none; cursor: pointer"><b>Register</b></a>
                            @endif
                        </div>
                        {{-- <div class="hamburger-container">
                            <div class="hamburger-menu">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                            <div class="dropdown-items not-visible">
                                <a href="{{ route('login') }}" class="text-black" style="text-decoration: none"><b>Login</b></a>
                                <p class="text-black">|</p>
        
                                @if (Route::has('register'))
                                    <a id="registration-id" class="text-black" style="text-decoration: none; cursor: pointer"><b>Register</b></a>
                                @endif
                            </div>
                        </div> --}}

                        {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary"> --}}
                            <div class="container-fluid">
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                              </button>
                              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                <a class="navbar-brand" href="#">Hidden brand</a>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                  <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                  </li>
                                </ul>
                                <form class="d-flex" role="search">
                                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                  <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                              </div>
                            </div>
                          </nav>
                    @endauth
                </div>
            @endif
            <main>
                @section('content')
                {{-- banner --}}
                <div class="container-fluid border banner p-4">
                    <h4 class="text-center mb-3">UNLOCK ADVENTURE ON FOUR WHEELS WITH OUR VAN RENTAL SERVICE</h4>
                    <h1 class="text-center mb-3">BATAAN VAN SERVICE</h1>
                </div>
                <div class="container-fluid border bg-light p-2 row mx-auto" style="width: 98%;border-radius:10px">
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
                <div class="row p-3">

                    <div class="col-sm-3 mb-3 mb-sm-0 van-col">
                        <div class="card van-card position-relative">
                            <span class="position-absolute top-10 end-0  p-2 primary-bg border border-light">
                                <span>Book Now!</span>
                              </span>
                            <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                            <div class="card-body text-center primary-color">
                                <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                                <div class="row d-flex justify-content-center gap-1">
                                    <div class="col-lg-4 col-md-4 card welcome-bags-card primary-color">
                                        <div class="text-center welcome-card-text">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                            </div>
                                            <div class="pt-2 welcome-bags-card-text primary-color">
                                                <div class="h5 mb-0"> Bags</div>
                                                <div><b> 8 Bags</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 card welcome-people-card primary-color">
                                        <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                            </div>
                                            <div class="pt-2 welcome-people-card-text primary-color">
                                                <div class="h5 mb-0"> People</div>
                                                <div><b> 11 Seater</b></div>
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

                    <div class="col-sm-3 mb-3 van-col">
                        <div class="card van-card position-relative">
                            <span class="position-absolute top-10 end-0  p-2 primary-bg border border-light">
                                <span>Book Now!</span>
                              </span>
                            <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                            <div class="card-body text-center primary-color">
                                <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                                <div class="row d-flex justify-content-center gap-1">
                                    <div class="col-lg-4 col-md-4 card welcome-bags-card primary-color">
                                        <div class="text-center welcome-card-text">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                            </div>
                                            <div class="pt-2 welcome-bags-card-text primary-color">
                                                <div class="h5 mb-0"> Bags</div>
                                                <div><b> 8 Bags</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 card welcome-people-card primary-color">
                                        <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                            </div>
                                            <div class="pt-2 welcome-people-card-text primary-color">
                                                <div class="h5 mb-0"> People</div>
                                                <div><b> 11 Seater</b></div>
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

                    <div class="col-sm-3 mb-3 van-col">
                        <div class="card van-card position-relative">
                            <span class="position-absolute top-10 end-0  p-2 primary-bg border border-light">
                                <span>Book Now!</span>
                              </span>
                            <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                            <div class="card-body text-center primary-color">
                                <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                                <div class="row d-flex justify-content-center gap-1">
                                    <div class="col-lg-4 col-md-4 card welcome-bags-card primary-color">
                                        <div class="text-center welcome-card-text">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                            </div>
                                            <div class="pt-2 welcome-bags-card-text primary-color">
                                                <div class="h5 mb-0"> Bags</div>
                                                <div><b> 8 Bags</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 card welcome-people-card primary-color">
                                        <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                            </div>
                                            <div class="pt-2 welcome-people-card-text primary-color">
                                                <div class="h5 mb-0"> People</div>
                                                <div><b> 11 Seater</b></div>
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

                    <div class="col-sm-3 mb-3 van-col">
                        <div class="card van-card position-relative">
                            <span class="position-absolute top-10 end-0  p-2 primary-bg border border-light">
                                <span>Book Now!</span>
                              </span>
                            <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                            <div class="card-body text-center primary-color">
                                <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                                <div class="row d-flex justify-content-center gap-1">
                                    <div class="col-lg-4 col-md-4 card welcome-bags-card primary-color">
                                        <div class="text-center welcome-card-text">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                            </div>
                                            <div class="pt-2 welcome-bags-card-text primary-color">
                                                <div class="h5 mb-0"> Bags</div>
                                                <div><b> 8 Bags</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 card welcome-people-card primary-color">
                                        <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                            </div>
                                            <div class="pt-2 welcome-people-card-text primary-color">
                                                <div class="h5 mb-0"> People</div>
                                                <div><b> 11 Seater</b></div>
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

                    <div class="col-sm-3 mb-3 van-col">
                        <div class="card van-card position-relative">
                            <span class="position-absolute top-10 end-0  p-2 primary-bg border border-light">
                                <span>Book Now!</span>
                              </span>
                            <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                            <div class="card-body text-center primary-color">
                                <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                                <div class="row d-flex justify-content-center gap-1">
                                    <div class="col-lg-4 col-md-4 card welcome-bags-card primary-color">
                                        <div class="text-center welcome-card-text">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                            </div>
                                            <div class="pt-2 welcome-bags-card-text primary-color">
                                                <div class="h5 mb-0"> Bags</div>
                                                <div><b> 8 Bags</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 card welcome-people-card primary-color">
                                        <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                            </div>
                                            <div class="pt-2 welcome-people-card-text primary-color">
                                                <div class="h5 mb-0"> People</div>
                                                <div><b> 11 Seater</b></div>
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

                    <div class="col-sm-3 mb-3 van-col">
                        <div class="card van-card position-relative">
                            <span class="position-absolute top-10 end-0  p-2 primary-bg border border-light">
                                <span>Book Now!</span>
                              </span>
                            <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                            <div class="card-body text-center primary-color">
                                <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                                <div class="row d-flex justify-content-center gap-1">
                                    <div class="col-lg-4 col-md-4 card welcome-bags-card primary-color">
                                        <div class="text-center welcome-card-text">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                            </div>
                                            <div class="pt-2 welcome-bags-card-text primary-color">
                                                <div class="h5 mb-0"> Bags</div>
                                                <div><b> 8 Bags</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 card welcome-people-card primary-color">
                                        <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                            </div>
                                            <div class="pt-2 welcome-people-card-text primary-color">
                                                <div class="h5 mb-0"> People</div>
                                                <div><b> 11 Seater</b></div>
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

                    <div class="col-sm-3 mb-3 van-col">
                        <div class="card van-card position-relative">
                            <span class="position-absolute top-10 end-0  p-2 primary-bg border border-light">
                                <span>Book Now!</span>
                              </span>
                            <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                            <div class="card-body text-center primary-color">
                                <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                                <div class="row d-flex justify-content-center gap-1">
                                    <div class="col-lg-4 col-md-4 card welcome-bags-card primary-color">
                                        <div class="text-center welcome-card-text">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                            </div>
                                            <div class="pt-2 welcome-bags-card-text primary-color">
                                                <div class="h5 mb-0"> Bags</div>
                                                <div><b> 8 Bags</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 card welcome-people-card primary-color">
                                        <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                            </div>
                                            <div class="pt-2 welcome-people-card-text primary-color">
                                                <div class="h5 mb-0"> People</div>
                                                <div><b> 11 Seater</b></div>
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

                    <div class="col-sm-3 mb-3 van-col">
                        <div class="card van-card position-relative">
                            <span class="position-absolute top-10 end-0  p-2 primary-bg border border-light">
                                <span>Book Now!</span>
                              </span>
                            <img src="{{ asset('img/default-van-img.webp') }}" class="card-img-top" alt="van">
                            <div class="card-body text-center primary-color">
                                <h5 class="card-title h3 mb-5">2018 TOYOTA HI-ACE VAN</h5>
                                <div class="row d-flex justify-content-center gap-1">
                                    <div class="col-lg-4 col-md-4 card welcome-bags-card primary-color">
                                        <div class="text-center welcome-card-text">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-shopping-bags h1' style="font-size: 3em;"></i>
                                            </div>
                                            <div class="pt-2 welcome-bags-card-text primary-color">
                                                <div class="h5 mb-0"> Bags</div>
                                                <div><b> 8 Bags</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 card welcome-people-card primary-color">
                                        <div class="text-center" style="display: flex; align-items:center;justify-content:center">
                                            <div class="pt-2 me-2">
                                                <i class='bx bxs-user-plus h1' style="font-size: 3em"></i>
                                            </div>
                                            <div class="pt-2 welcome-people-card-text primary-color">
                                                <div class="h5 mb-0"> People</div>
                                                <div><b> 11 Seater</b></div>
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
           
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
        
        {{-- calendar --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
        <script src="{{ asset('js/calendar.js') }}"></script>
        
        {{-- custom js --}}
          {{-- <script src="{{ asset('assets/js/burgermenu/burgermenu.js') }}"></script> --}}
          <script src="{{ asset('js/register-popups.js') }}"></script>
    </body>
</html>
