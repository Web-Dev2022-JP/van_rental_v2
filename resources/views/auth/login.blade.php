<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/login_v2.css') }}">
</head>

<body>
    <div class="row justify-content-center align-items-center p-5">
        <div class="col-lg-4">
            <div class="login-form">
                <div class="login-form-header">
                    <div class="form-info">
                        <i class='bx bxs-user'></i>
                        <span class="h3"> Login</span>
                    </div>
                    <a class="close-btn" href="{{ route('home') }}">
                        <i class='bx bxs-x-circle h1'></i>
                    </a>
                </div>
                <div class="login-form-body">
                    {{-- Error Message --}}
                    @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    {{-- Status --}}
                    @if (Session::has('approved'))
                        <div class="alert alert-danger">
                            {{ Session::get('approved') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        @if (Session::has('is_activated'))
                            @if (Session::get('is_activated') == 0)
                                {{-- OTP --}}
                                <div class="mb-3">
                                    <input type="text" name="otp" class="form-control" id="otp" placeholder="Enter your OTP" required>
                                </div>
                            @endif
                        @endif
                        <div class="mb-4">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                        <div class="mb-4 text-center text-primary">
                            <div class="d-grid">
                                <a class="forgot-password" href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="mb-4 d-flex justify-content-center">
                            <button class="btn btn-success login-btn"><b>Sign in</b></button>
                        </div>
                        {{-- <div class="mb-4">
                            <div class="d-grid">
                                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                            </div>
                        </div> --}}

                        <div class="mb-3 text-center d-flex justify-content-center">
                            <div class="d-grid">
                                <span class="register-here text-secondary">Don't have an account ? <a href="{{ route('register') }}" class="text-primary "><b>Register here</b></a> </span>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- script for otp --}}
    {{-- <script></script> --}}
</body>

</html>
