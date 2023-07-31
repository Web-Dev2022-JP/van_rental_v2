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
    @include('components.clients.nav')
    @yield('client-nav')
 
    <main>
        {{-- van section --}}
        @include('components.clients.van')
        @yield('contents')

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