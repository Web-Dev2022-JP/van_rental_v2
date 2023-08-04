{{-- @extends('../components.frequently')
@extends('../components.details') --}}
{{-- @extends('details') --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

  {{-- header --}}
    @include('components.clients.header.head')
    @yield('header')
    {{-- style --}}
    @yield('links')
</head>

<body>
  {{-- navigation --}}
    @include('components.clients.nav')
    @yield('client-nav')

    <main>
        {{-- van section --}}
        {{-- @include('components.clients.van')
        @yield('contents') --}}

        {{-- Include details section --}}
        {{-- @section('details-modal')
        @include('components.details')
        @endsection --}}

        {{-- Include frequently section --}}
        {{-- @section('frequently')
        @include('components.frequently')
        @endsection
        @section('frequently')
        @include('modals.about-driver')
        @endsection --}}

        {{-- Render the content sections --}}
        {{-- @yield('content')
        @yield('details-modal')
        @yield('frequently')
        @yield('about-driver-modal') --}}

        {{-- v1.1 --}}
        @yield('contents')
    </main>


    @include('components.clients.footer.footer')
    @yield('footer')

    @yield('script')
</body>

</html>
