@section('navigation')
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
                    <span class="user-img"><img class="rounded-circle driver-profile"
                            src="assets/img/user-06.jpg" width="30" alt="Admin">
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
@endsection