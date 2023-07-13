<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    


</head>

<body>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card">
                {{-- <div class="card-header">
                    <h1 class="card-title">
                        <i class='bx bx-left-arrow-alt'></i>
                        Application Form
                    </h1>
                </div> --}}
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-sm-12 row">
                            <h1 class="card-title text-white">
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('home') }}" class="text-white">
                                        <i class='bx bx-left-arrow-alt'></i>
                                    </a>
                                    <span class="h3"> Application Form</span>
                                    
                                    {{-- <div class="ms-auto">
                                        <a href="{{ route('home') }}">
                                            <i class='bx bxs-x-circle text-white h1'></i>
                                        </a>
                                    </div> --}}
                                </div>
                            </h1>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body">
                    {{-- @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif --}}
                    @if (Session::has('approved'))
                        <div class="alert alert-danger">
                            {{ Session::get('approved') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                            @endforeach
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('register.driver') }}" method="POST" enctype="multipart/form-data"
                        class="row g-3">
                        @csrf
                        <div class="col-md-8 row">
                            {{-- role --}}
                            <div class="col-md-12">
                                <div class="mb-3">
                                    {{-- <label for="firstName" class="form-label">First Name</label> --}}
                                    <input type="number" name="role" class="form-control" id="role"
                                        value="2" hidden required>
                                </div>
                            </div>
                            {{-- firstname --}}
                            <div class="col-md-4">
                                <div class="mb-3">
                                    {{-- <label for="firstName" class="form-label">First Name</label> --}}
                                    <input type="text" name="firstName" class="form-control" id="firstName"
                                        placeholder="First Name" required>
                                </div>
                            </div>
                            {{-- Last Name --}}
                            <div class="col-md-4">
                                <div class="mb-3">
                                    {{-- <label for="lastName" class="form-label">Last Name</label> --}}
                                    <input type="text" name="lastName" class="form-control" id="lastName"
                                        placeholder="Last Name" required>
                                </div>
                            </div>
                            {{-- Middle Name --}}
                            <div class="col-md-4">
                                <div class="mb-3">
                                    {{-- <label for="lastName" class="form-label">Last Name</label> --}}
                                    <input type="text" name="middleName" class="form-control" id="middleName"
                                        placeholder="Middle Name">
                                </div>
                            </div>

                            {{-- Gender --}}
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <input type="text" name="gender" class="form-control" id="gender"
                                        placeholder="Gender" required>
                                </div>
                            </div>

                            {{-- Age --}}
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <input type="number" name="age" class="form-control" id="age"
                                        placeholder="Age" required>
                                </div>
                            </div>

                            {{-- Birthplace --}}
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <input type="text" name="birthplace" class="form-control" id="birthplace"
                                        placeholder="Birthplace" required>
                                </div>
                            </div>

                            {{-- Nationality --}}
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <input type="text" name="nationality" class="form-control" id="nationality"
                                        placeholder="Nationality" required>
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

                            {{-- Nationality --}}
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Email" required>
                                </div>
                            </div>

                            {{-- birthdate --}}
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="date" name="birthdate" class="form-control" id="birthdate"
                                        placeholder="Birthdate" required>
                                </div>
                            </div>

                            {{-- Municipality --}}
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="text" name="municipality" class="form-control" id="municipality"
                                        placeholder="Municipality" required>
                                </div>
                            </div>

                            {{-- Zip Code --}}
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="number" name="zipcode" class="form-control" id="zipcode"
                                        placeholder="Zip Code" required>
                                </div>
                            </div>

                            {{-- Barangay --}}
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" name="barangay" class="form-control" id="barangay"
                                        placeholder="Barangay" required>
                                </div>
                            </div>

                            {{-- Street --}}
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" name="street" class="form-control" id="street"
                                        placeholder="Street" required>
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

                            {{-- ID No --}}
                            {{-- <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="number" name="idNumber" class="form-control" id="idNumber"
                                        placeholder="ID NO." required>
                                </div>
                            </div> --}}

                            {{-- ORCR --}}
                            {{-- <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="number" name="orcr" class="form-control" id="orcr"
                                        placeholder="ORCR" required>
                                </div>
                            </div> --}}

                            {{-- Vehicle Plate Number --}}
                            {{-- <div class="col-md-4">
                                <div class="mb-3">
                                    <input type="text" name="plateNumber" class="form-control" id="plateNumber"
                                        placeholder="Vehicle Plate Number" required>
                                </div>
                            </div> --}}

                        </div>
                        {{-- driver licensed and Profile--}}
                        <div class="col-md-4">
                            <div class="col-md-12 mx-auto">
                                <div class="mb-3">
                                    <label for="image" class="form-label text-success text-center h6">Upload your
                                        Profile and Driver's Licensed</label>
                                    <input type="file" name="image" class="form-control" id="image"
                                      multiple credits="false" required>
                                      <label for="image" class="form-label text-secondary text-center"><b>Note: Guidelines to upload a documents,</b><br/><span class="text-danger"> <b>Profile First then License to avoid rejected documents</b></span></label>
                                </div>
                            </div>
                        </div>

                       
                            <div class="mb-3">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid w-50">
                                        <button class="btn btn-primary">Register Driver</button>
                                    </div>
                                </div>
                            </div>
                       
                        
                        <div class="mb-3 text-center d-flex justify-content-center">
                            <div class="d-grid">
                                <span class="text-secondary">Are you looking for a driver ? <a href="{{ route('register') }}" class="text-primary "><b>Register here</b></a> </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <script>
        // Register the plugin
        FilePond.registerPlugin(FilePondPluginImagePreview);
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement);
        FilePond.setOptions({
            server: {
                process: '/tmp-upload',
                revert: '/tmp-delete',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
                // restore: './restore/',
                // load: './load/',
                // fetch: './fetch/',
            },
        });
    </script>
</body>

</html>
