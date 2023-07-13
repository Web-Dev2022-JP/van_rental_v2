<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-sm-12 row">
                            <h1 class="card-title text-white">
                                <div class="d-flex align-items-center">
                                    <i class='bx bxs-user-rectangle h1'></i>
                                    <span class="h3"> Create Account</span>
                                    
                                    <div class="ms-auto">
                                        <a href="{{ route('home') }}">
                                            <i class='bx bxs-x-circle text-white h1'></i>
                                        </a>
                                    </div>
                                </div>
                            </h1>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST" class="row g-3">
                        @csrf
                        {{-- first name --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required>
                            </div>
                        </div>
                        {{-- last name --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" required>
                            </div>
                        </div>
                        {{-- middle name --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <input type="text" name="middlename" class="form-control" id="middlename" placeholder="Middle Name" required>
                            </div>
                        </div>
                        {{-- Contact --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="tel" name="contact" class="form-control" id="contact"
                                    placeholder="Contact: +63" required pattern="[0-9]{10}"
                                    title="Please enter a valid 10-digit mobile number">
                                <div class="invalid-feedback">Please enter a valid 10-digit mobile number.</div>
                            </div>
                        </div>
                        {{-- email --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                            </div>
                        </div>
                        {{-- birthdate --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="date" name="birthdate" class="form-control" id="birthdate" placeholder="Birthdate" required>
                            </div>
                        </div>
                        {{-- Municipal --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" name="municipal" class="form-control" id="municipal" placeholder="Municipal" required>
                            </div>
                        </div>
                        {{-- Zip Code --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <input type="number" name="zipcode" class="form-control" id="zipcode" placeholder="Zip Code" required>
                            </div>
                        </div>
                        {{-- Barangay --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <input type="text" name="barangay" class="form-control" id="barangay" placeholder="Barangay" required>
                            </div>
                        </div>
                        {{-- Street --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <input type="text" name="street" class="form-control" id="street" placeholder="Street" required>
                            </div>
                        </div>
                        {{-- password --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" required>
                            </div>
                        </div>

                        {{-- confirm password --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary"><b>Create account</b></button>
                            </div>
                        </div>
                        <div class="mb-3 text-center d-flex justify-content-center">
                            <div class="d-grid">
                                <span class="text-secondary">Are you a driver? <a href="{{ route('register.driver') }}" class="text-primary "><b>Register here</b></a> </span>
                            </div>
                        </div>
                        {{-- <div class="mb-3">
                            <div class="d-grid">
                                <a href="{{ route('register.driver') }}" class="btn btn-primary">Driver</a>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>