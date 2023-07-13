<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> --}}

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/driver.css') }}">
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav> --}}

    <div class="container2">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="/logo.jpg" alt="">
                        <span class="nav-item">DashBoard</span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Profile</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-wallet"></i>
                        <span class="nav-item">Wallet</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-chart-bar"></i>
                        <span class="nav-item">Analytics</span>
                    </a></li>
                {{-- <li><a href="">
                        <i class="fas fa-tasks"></i>
                        <span class="nav-item">Tasks</span>
                    </a></li> --}}
                <li><a href="">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Settings</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a></li>
                <li><a href="" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">
                          <form action="{{ route('logout') }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="text-align: center; color:red">Logout</button>
                          </form>
                        </span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1>Manage Vehicle</h1>
                <i class="fas fa-user-cog"></i>
            </div>
            <div class="main-skills">
                <div class="card">
                    <i class="fas fa-laptop-code"></i>
                    <h3>Register vehicle</h3>
                    <p>Join Over 1 million driver.</p>
                    <a href="{{ route('register.vehicle') }}">Get Started</a>
                </div>
                <div class="card">
                    <i class="fab fa-wordpress"></i>
                    <h3>In-development</h3>
                    <p>Join Over 3 million Students.</p>
                    <button>Get Started</button>
                </div>
                <div class="card">
                    <i class="fas fa-palette"></i>
                    <h3>In-development</h3>
                    <p>Join Over 2 million Students.</p>
                    <button>Get Started</button>
                </div>
                <div class="card">
                    <i class="fab fa-app-store-ios"></i>
                    <h3>In-development</h3>
                    <p>Join Over 1 million Students.</p>
                    <button>Get Started</button>
                </div>
            </div>

            <section class="main-course">
                <h1>History of Booked</h1>
                <div class="course-box">
                    <ul>
                        <li class="active">In progress</li>
                        <li>explore</li>
                        <li>incoming</li>
                        <li>finished</li>
                    </ul>
                    <div class="course">
                        <div class="box">
                            <h3>Booked-1 In-development</h3>
                            <p>80% - progress</p>
                            <button>continue</button>
                            <i class="fab fa-html5 html"></i>
                        </div>
                        <div class="box">
                            <h3>Booked-1 In-development</h3>
                            <p>50% - progress</p>
                            <button>continue</button>
                            <i class="fab fa-css3-alt css"></i>
                        </div>
                        <div class="box">
                            <h3>Booked-1 In-development</h3>
                            <p>30% - progress</p>
                            <button>continue</button>
                            <i class="fab fa-js-square js"></i>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</body>

</html>
