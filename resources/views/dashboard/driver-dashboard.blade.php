{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Page</title>

    <link rel="stylesheet" href="{{ asset('css/driver.css') }}">
</head>

<body>
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
                    <p class="badge badge-success"><b> {{ 'pending status' }}</b></p>
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

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Driver Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    {{-- <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-v2.css') }}">

    {{-- <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" /> --}}

    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
 <![endif]-->

</head>

<body>

    <div class="main-wrapper">

        <div class="header-outer">
            <div class="header">
                <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars"
                        aria-hidden="true"></i></a>
                <a id="toggle_btn" class="float-left" href="javascript:void(0);">
                    <img src="{{ asset('assets/img/sidebar/icon-21.png') }}" alt="">
                </a>

                <ul class="nav float-left">
                    <li>
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="search.html">
                                <input class="form-control" type="text" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    <li>
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="search.html">
                                {{-- driver id --}}
                                <input class="form-control driver-id" type="hidden" name="driver-id"
                                    value="{{ auth()->user()->id }}">
                            </form>
                        </div>
                        {{-- id --}}
                        {{-- <input type="" name="driver-id" value="{{ auth()->user()->id }}"> --}}
                    </li>
                    </li>
                    <li>
                        <a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img
                                src="{{ asset('assets/img/logo1.png') }}" alt="" width="30"
                                height="30"></a>
                    </li>
                </ul>


                <ul class="nav user-menu float-right">
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="{{ asset('assets/img/sidebar/icon-22.png') }}" alt="">
                            <span
                                class="position-absolute top-1 start-100 translate-middle badge rounded-pill bg-danger"
                                id="notif-counts">
                                9
                            </span>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span>Notifications</span>
                            </div>
                            <div class="drop-scroll">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">
                                                    <img alt="John Doe" src="{{ asset('assets/img/user-06.jpg') }}"
                                                        class="img-fluid rounded-circle">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">John Doe</span> is
                                                        now following you </p>
                                                    <p class="noti-time"><span class="notification-time">4 mins
                                                            ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="activities.html">
                                            <div class="media">
                                                <span class="avatar">T</span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Tarah
                                                            Shropshire</span> sent you a message.</p>
                                                    <p class="noti-time"><span class="notification-time">6 mins
                                                            ago</span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="activities.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img
                                src="{{ asset('assets/img/sidebar/icon-23.png') }}" alt=""> </a>
                    </li>
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class=" nav-link user-link" data-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle driver-profile"
                                    src="assets/img/user-06.jpg" width="30" alt="Driver">
                                <span class="status online"></span></span>
                            <span>{{ auth()->user()->firstname }}</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">My Profile</a>
                            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                            <a class="dropdown-item" href="settings.html">Settings</a>
                            <a class="dropdown-item">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Logout</button>
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
                <div class="dropdown mobile-user-menu float-right">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('assets/img/logo1.png') }}" width="40" height="40"
                                alt="">
                            <span class="text-uppercase">Van Rental</span>
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <li class="menu-title">Menu</li>
                        <li class="active">
                            <a href="index.html"><img src="{{ asset('assets/img/sidebar/icon-1.png') }}"
                                    alt="icon"><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-2.png') }}"
                                    alt="icon"> <span>
                                    booked</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-teachers.html"><span>All Booked</span></a></li>
                                {{-- <li><a href="add-teacher.html"><span>Add Teacher</span></a></li>
                                <li><a href="edit-teacher.html"><span>Edit Teacher</span></a></li>
                                <li><a href="about-teacher.html"><span>About Teacher</span></a></li> --}}
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-3.png') }}"
                                    alt="icon"> <span>
                                    Clients</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-students.html"><span>All Clients</span></a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="{{ asset('assets/img/sidebar/icon-5.png') }}"
                                    alt="icon">
                                <span>Apps</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Email</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="compose.html"><span>Compose Mail</span></a></li>
                                        <li>
                                            <a href="inbox.html"> <span> Inbox</span> </a>
                                        </li>
                                        <li><a href="mail-view.html"><span>Mailview</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="chat.html"> Chat <span
                                            class="badge badge-pill bg-primary float-right">5</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="voice-call.html"><span>Voice Call</span></a></li>
                                        <li><a href="video-call.html"><span>Video Call</span></a></li>
                                        <li><a href="incoming-call.html"><span>Incoming Call</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contacts.html"><span> Contacts</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html"><img src="{{ asset('assets/img/sidebar/icon-6.png') }}"
                                    alt="icon">
                                <span>Calendar</span></a>
                        </li>
                        {{-- <li>
                            <a href="exam-list.html"><img src="{{ asset('assets/img/sidebar/icon-7.png') }}" alt="icon">
                                <span>Exam list</span></a>
                        </li> --}}
                        <li>
                            <a href="holidays.html"><img src="{{ asset('assets/img/sidebar/icon-8.png') }}"
                                    alt="icon">
                                <span>Holidays</span></a>
                        </li>
                        <li>
                            <a href="calendar.html"><img src="{{ asset('assets/img/sidebar/icon-9.png') }}"
                                    alt="icon"><span>
                                    Events</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="{{ asset('assets/img/sidebar/icon-10.png') }}"
                                    alt="icon"><span>
                                    Accounts </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="invoices.html"><span>Invoices</span></a></li>
                                {{-- <li><a href="payments.html"><span>Payments</span></a></li>
                                <li><a href="expenses.html"><span>Expenses</span></a></li>
                                <li><a href="provident-fund.html"><span>Provident Fund</span></a></li>
                                <li><a href="taxes.html"><span>Taxes</span></a></li> --}}
                            </ul>
                        </li>



                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            
            @include('components.drivers.home')
            {{-- @include('components.drivers.viewModal') --}}
            @include('components.drivers.vehicle-registration')
           

            @yield('driver-home')
            {{-- @yield('view.modal') --}}
            @yield('vehicle-registration')
        </div>


        

    </div>


    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>

    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>

    <script src="{{ asset('assets/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fullcalendar.js') }}"></script>

    {{-- <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/plugins/raphael/raphael-min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/apexcharts.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/chart-data.js') }}"></script> --}}

    {{-- toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script> --}}
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/driver/driver.js') }}"></script>


    
</body>

</html>
