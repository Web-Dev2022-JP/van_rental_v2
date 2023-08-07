@extends('dashboard.layouts.driver-dashboard')
@section('contents')
    {{-- <div class="content container-fluid"> --}}

    {{-- <div class="page-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="page-title mb-0">Dashboard <span class="text-secondary">| Welcome {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}.</span></h3>
            </div>
            <div class="col-md-6">
                <ul class="breadcrumb mb-0 p-0 float-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><span>Dashboard</span></li>
                </ul>
            </div>
        </div>
    </div> --}}

    {{-- <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
                <span class="float-left"><img src="{{ asset('assets/img/dash/dash-1.png') }}" alt=""
                        width="80"></span>
                <div class="dash-widget-info text-right">
                    <span><b>Vehicle Registration</b></span><br>
                    <span id="status"></span><br>
                    <a class="" href="{{ route('register.vehicle') }}">Registration</a> |
                    <a class="" id="vehicle-status" href="#">Status</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
                <div class="dash-widget-info text-left d-inline-block">
                    <span><b>Maintenance</b></span><br>
                    <span id="status"><b class="text-warning">Maintenance Status</b></span><br>
                    
                    <a class="" id="vehicle-status" href="#">Status</a>
                </div>
                <span class="float-right"><img src="{{ asset('assets/img/dash/dash-2.png') }}" width="80"
                        alt=""></span>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
                <span class="float-left"><img src="{{ asset('assets/img/dash/dash-3.png') }}" alt=""
                        width="80"></span>
                <div class="dash-widget-info text-right">
                    <span>Earnings</span>
                    <h3>0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
                <div class="dash-widget-info d-inline-block text-left">
                    <span>Expenses</span>
                    <h3 id="request-content">0</h3>
                </div>
                <span class="float-right"><img src="{{ asset('assets/img/dash/dash-4.png') }}" alt=""
                        width="80"></span>
            </div>
        </div>
    </div> --}}
    {{-- all drivers --}}
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                All Client's
                            </div>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <div class=" mt-sm-0 mt-2">
                                <button class="btn btn-outline-primary mr-2"><img
                                        src="{{ asset('assets/img/excel.png') }}" alt=""><span
                                        class="ml-2">Excel</span></button>
                                <button class="btn btn-outline-danger mr-2"><img src="{{ asset('assets/img/pdf.png') }}"
                                        alt="" height="18"><span
                                        class="ml-2">PDF</span></button>
                                <button class="btn btn-light" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h"></i></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table custom-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name </th>
                                    <th>Email</th>
                                    <th>Nationality</th>
                                    <th>Contact</th>
                                    <th>Address</th>
                                    <th>Status</th>   
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody id="driver-table">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- driver statistic --}}
    {{-- <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
                <span class="float-left"><img src="{{ asset('assets/img/dash/dash-1.png') }}" alt=""
                        width="80"></span>
                <div class="dash-widget-info text-right">
                    <span>Finished</span>
                    <h3>0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
                <div class="dash-widget-info text-left d-inline-block">
                    <span>Clients</span>
                    <h3>0</h3>
                </div>
                <span class="float-right"><img src="{{ asset('assets/img/dash/dash-2.png') }}" width="80"
                        alt=""></span>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
                <span class="float-left"><img src="{{ asset('assets/img/dash/dash-3.png') }}" alt=""
                        width="80"></span>
                <div class="dash-widget-info text-right">
                    <span>Reports</span>
                    <h3>0</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="dash-widget dash-widget5">
                <div class="dash-widget-info d-inline-block text-left">
                    <span>Requests</span>
                    <h3 id="request-content">0</h3>
                </div>
                <span class="float-right"><img src="{{ asset('assets/img/dash/dash-4.png') }}" alt=""
                        width="80"></span>
            </div>
        </div>
    </div> --}}
    {{-- client statistic --}}
    {{-- <div class="row">
        <div class="col-lg-6 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="page-title">
                                Drivers Statistics
                            </div>
                        </div>
                        <div class="col text-right">
                            <div class=" mt-sm-0 mt-2">
                                <button class="btn btn-light" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h"></i></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="page-title">
                                Client Statistics
                            </div>
                        </div>
                        <div class="col text-right">
                            <div class=" mt-sm-0 mt-2">
                                <button class="btn btn-light" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h"></i></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart2"></div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- total member --}}
    {{-- <div class="row">
        <div class="col-lg-6 col-md-12 col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="page-title">
                                Events
                            </div>
                        </div>
                        <div class="col text-right">
                            <div class=" mt-sm-0 mt-2">
                                <button class="btn btn-light" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h"></i></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="calendar" class=" overflow-hidden"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="page-title">
                                Total Member
                            </div>
                        </div>
                        <div class="col text-right">
                            <div class=" mt-sm-0 mt-2">
                                <button class="btn btn-light" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h"></i></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center overflow-hidden">
                    <div id="chart3"> </div>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- reports --}}
    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                Reports
                            </div>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <div class=" mt-sm-0 mt-2">
                                <button class="btn btn-outline-primary mr-2"><img
                                        src="{{ asset('assets/img/excel.png') }}" alt=""><span
                                        class="ml-2">Excel</span></button>
                                <button class="btn btn-outline-danger mr-2"><img src="{{ asset('assets/img/pdf.png') }}"
                                        alt="" height="18"><span
                                        class="ml-2">PDF</span></button>
                                <button class="btn btn-light" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h"></i></button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="table-responsive">
                                <table class="table custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Name </th>
                                            <th>Email</th>
                                            
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white"><img
                                                            src="{{ asset('assets/img/profile/img-1.jpg') }}"
                                                            alt=""></a><a
                                                        href="profile.html">Parker <span></span></a></h2>
                                            </td>
                                            <td>ST-0d001</td>
                                            <td>Mr. Johnson</td>
                                            <td>973-584-58700</td>
                                            <td>9946 Baker Rd. Marysville, </td>
                                            <td>20/1/2021</td>
                                            <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                            <td class="text-right">
                                                <a href="edit-student.html"
                                                    class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal"
                                                    data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white"><img
                                                            src="{{ asset('assets/img/profile/img-2.jpg') }}"
                                                            alt=""></a><a
                                                        href="profile.html">Smith <span></span></a></h2>
                                            </td>
                                            <td>ST-0d002</td>
                                            <td>Mr. Luke Idaman</td>
                                            <td>973-584-58700</td>
                                            <td>193 S. Harrison Drive </td>
                                            <td>20/1/2021</td>
                                            <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                            <td class="text-right">
                                                <a href="edit-student.html"
                                                    class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal"
                                                    data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white"><img
                                                            src="{{ asset('assets/img/profile/img-3.jpg') }}"
                                                            alt=""></a><a
                                                        href="profile.html">Hensley<span></span></a></h2>
                                            </td>
                                            <td>ST-0d003</td>
                                            <td>Mr. Kevin H</td>
                                            <td>973-584-58700</td>
                                            <td>8949 Golf St. Palm Coast </td>
                                            <td>20/1/2021</td>
                                            <td><img src="assets/img/pdf.png" alt=""></td>
                                            <td class="text-right">
                                                <a href="edit-student.html"
                                                    class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal"
                                                    data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white"><img
                                                            src="{{ asset('assets/img/profile/img-4.jpg') }}"
                                                            alt=""></a><a
                                                        href="profile.html">Friesen<span></span></a></h2>
                                            </td>
                                            <td>ST-0d004</td>
                                            <td>Mr. Randy O</td>
                                            <td>973-584-58700</td>
                                            <td>23 Ohio Court Alexandria </td>
                                            <td>20/1/2021</td>
                                            <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                            <td class="text-right">
                                                <a href="edit-student.html"
                                                    class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal"
                                                    data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white"><img
                                                            src="{{ asset('assets/img/profile/img-5.jpg') }}"
                                                            alt=""></a><a
                                                        href="profile.html">Jackson<span></span></a></h2>
                                            </td>
                                            <td>ST-0d005</td>
                                            <td>Mr. Steven</td>
                                            <td>973-584-58700</td>
                                            <td>338 North Cleveland Rd </td>
                                            <td>20/1/2021</td>
                                            <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                            <td class="text-right">
                                                <a href="edit-student.html"
                                                    class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal"
                                                    data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white"><img
                                                            src="{{ asset('assets/img/profile/img-6.jpg') }}"
                                                            alt=""></a><a
                                                        href="profile.html">Mason<span></span></a></h2>
                                            </td>
                                            <td>ST-0d006</td>
                                            <td>Mr. Ervin</td>
                                            <td>973-584-58700</td>
                                            <td>7909 W. Sunnyslope St. </td>
                                            <td>20/1/2021</td>
                                            <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                            <td class="text-right">
                                                <a href="edit-student.html"
                                                    class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal"
                                                    data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html"
                                                        class="avatar text-white"><img
                                                            src="{{ asset('assets/img/profile/img-7.jpg') }}"
                                                            alt=""></a>
                                                    <a href="profile.html">Garrett <span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d007</td>
                                            <td>Mr. Marquz</td>
                                            <td>973-584-58700</td>
                                            <td>7361 Dunbar Street </td>
                                            <td>20/1/2021</td>
                                            <td><img src="{{ asset('assets/img/pdf.png') }}" alt=""></td>
                                            <td class="text-right">
                                                <a href="edit-student.html"
                                                    class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal"
                                                    data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- notification box --}}
    {{-- <div class="notification-box">
        <div class="msg-sidebar notifications msg-noti">
            <div class="topnav-dropdown-header">
                <span>Messages</span>
            </div>
            <div class="drop-scroll msg-list-scroll">
                <ul class="list-box">
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Richard Miles </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item new-message">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Ruth C. Gault</span>
                                    <span class="message-time">1 Aug</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Tarah Shropshire </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Mike Litorus</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Catherine Manseau </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">D</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Domenic Houston </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">B</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Buster Wigton </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">R</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Rolland Webber </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">C</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author"> Claire Mapes </span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">M</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Melita Faucher</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">J</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Jeffery Lalor</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">L</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Loren Gatlin</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <div class="list-item">
                                <div class="list-left">
                                    <span class="avatar">T</span>
                                </div>
                                <div class="list-body">
                                    <span class="message-author">Tarah Shropshire</span>
                                    <span class="message-time">12:28 AM</span>
                                    <div class="clearfix"></div>
                                    <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="topnav-dropdown-footer">
                <a href="chat.html">See all messages</a>
            </div>
        </div>
    </div> --}}
    {{-- </div> --}}

    <!-- main contents -->
    <div class="head navbar bg-body-tertiary mx-3 mt-3 pngtree-img-file-document-icon-png-image_913759 container-fluid border rounded"
        style="width: 97.8%;">
        <h5 class="mx-4 mt-2"><span class="text-success mx-2"><b>|</b></span>Dashboard | <span
                class="text-secondary h6">Welcome {{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span> </h5>
        <div class="d-flex mx-3  mt-2">
            <span class="h5 me-4">
                <i class='bx bxs-home'></i>
            </span>
            <span class="h6 me-2">
                <span>Home</span>
            </span>
            <span class="h5 me-2">
                <i class='bx bx-chevrons-right'></i>
            </span>
            <span class="h6">
                <a href="#">Dashboard</a>
            </span>
        </div>
    </div>
    <!-- boxes -->
    <div class="mx-3 mt-3" style="overflow-x: hidden">
        <div class="row">

            <div class="col-sm-3 mb-3 mb-sm-0" id="box">
                <div class="card p-4" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-sm-4 col-4">
                            <span class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/dash/dash-1.png') }}" alt="dash-1" width="80">
                            </span>
                        </div>
                        <div class="col-sm-8 col-8">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <span class="mx-auto mb-2"><b>Vehicle Registration</b></span>
                                <span class="mx-auto text-white mb-2" id="status"></span>
                                <div class="d-flex mx-auto">
                                    <a class="mr-1 me-1" href="{{ route('register.vehicle') }}">Registration</a>
                                    <span class="text-success">|</span>
                                    <a class="ml-1 mx-1" id="vehicle-status" href="#">Status</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mb-3 mb-sm-0" id="box">
                <div class="card p-4" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-sm-4 col-4">
                            <span class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/dash/dash-2.png') }}" alt="dash-1" width="80">
                            </span>
                        </div>
                        <div class="col-sm-8 col-8">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <span class="mx-auto"><b>Vehicle Maintenance</b></span>
                                <span class="mx-auto text-danger">Not Available</span>
                                <div class="d-flex mx-auto">
                                    <a class="mr-1 me-1" href="#">Set Status</a>
                                    {{-- <span class="text-success">|</span> --}}
                                    {{-- <a class="ml-1 mx-1" id="vehicle-status" href="#">Status</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mb-3 mb-sm-0" id="box">
                <div class="card p-4" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-sm-4 col-4">
                            <span class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/dash/dash-3.png') }}" alt="dash-1" width="80">
                            </span>
                        </div>
                        <div class="col-sm-8 col-8">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <span class="mx-auto text-danger"><b>Not Available</b></span>
                                <span class="mx-auto text-secondary">version 2.0</span>
                                {{-- <div class="d-flex mx-auto">
                          <a class="mr-1 me-1" href="{{ route('register.vehicle') }}">Registration</a>
                          <span class="text-success">|</span>
                          <a class="ml-1 mx-1" id="vehicle-status" href="#">Status</a>
                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 mb-3 mb-sm-0" id="box">
                <div class="card p-4" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-sm-4 col-4">
                            <span class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/dash/dash-3.png') }}" alt="dash-1" width="80">
                            </span>
                        </div>
                        <div class="col-sm-8 col-8">
                            <div class="d-flex flex-column justify-content-center h-100">
                                <span class="mx-auto text-danger"><b>Not Available</b></span>
                                <span class="mx-auto text-secondary">version 2.0</span>
                                {{-- <span class="mx-auto" id="status"></span>
                        <div class="d-flex mx-auto">
                          <a class="mr-1 me-1" href="{{ route('register.vehicle') }}">Registration</a>
                          <span class="text-success">|</span>
                          <a class="ml-1 mx-1" id="vehicle-status" href="#">Status</a>
                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- table -->
    <div class='row p-3 mx-auto'>
        <div class='col-md-12 bg-light p-3 border rounded'>
            <span class="mx-2">Customer Information Table</span>
            <input type="number" id="driver-id" value="{{ Auth::user()->id }}" hidden>
            <div class='table-responsive'>
                <table class='table table-hover' id='booked'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Contact No.</th>
                            <th>Email</th>
                            <th>Destination</th>
                            <th>Pick Up</th>
                            <th>Land Mark</th>
                            <th>Date of Trip</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
    @include('components.drivers.customer-info')
    @yield('customer.info')

    {{-- @include('components.drivers.chatroom')
    @yield('driver.chat.customer') --}}
    <!-- boxes -->
    {{-- <div class="card mx-3 mt-3 p-4" style="overflow-x: hidden">
        <div class="row">
            <div class="col-sm-3 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
          </div>
    </div> --}}
@endsection

@section('script')
    <script>
        let dataTable = null;

        const getAllBooked = async (response) => {
            if (!dataTable) {
                dataTable = $('#booked').DataTable({
                    "data": response,
                    "responsive": true,
                    dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'rt>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        // 'copy', 'spacer', 'csv', 'spacer', 'excel', 'spacer', 'pdf',
                        // 'spacer', 
                        {
                            extend: 'print',
                            text: 'Print',
                            exportOptions: {
                                columns: [0, 1, 2, 3, 4, 5,
                                6], // Specify the columns to include in the print view
                            }
                        },
                    ],
                    "columns": [{
                            data: "id",
                            render(data, type, row, meta) {
                                return `<p>BKD-${row.id}</p>`
                            }
                        },
                        {
                            data: "contact",
                            render(data, type, row, meta) {
                                return `<p>+63${row.contact}</p>`
                            }
                        },
                        {
                            data: "email"
                        },
                        {
                            data: "destination"
                        },
                        {
                            data: "pickup"
                        },
                        {
                            data: "landmark"
                        },
                        {
                            data: "dateoftrip"
                        },
                        {
                            data: "status", render(data,type,row,meta){
                                return `<p><span class="badge ${row.status === 'pending' ? 'text-bg-warning' : status === 'accepted' ? 'text-bg-success' : 'text-bg-danger'}">${row.status}</span></p>`
                            }
                        },
                        {
                            data: "user_id",
                            render(data, type, row, meta) {
                                var a = `
                            <a href="#" value="${row.id}" id="view" class="">view more</a>
                        `;
                                return a;
                            }
                        },
                    ]
                });
            } else {
                dataTable.clear().rows.add(response).draw(); // Update the data and redraw the table
            }
        }

        const sendRequest = async () => {
            const id = $('#driver-id').val();
            $.ajax({
                url: `/getAllBooked/${id}`,
                type: "GET",
                dataType: "json",
                success: function(res) {
                    getAllBooked(res);
                    clickHandler(res)
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        $(document).ready(function() {
            sendRequest();
            setInterval(sendRequest, 10000); // Refresh the data every 3 seconds

        });

        const clickHandler = async (data) => {
            // console.log(data)
            $(document).on('click', '#view', function(e) {
                var view_id = parseInt($(this).attr("value"), 10);
                // Use the find() method to find the object with the specified ID
                const foundObject = data.find(obj => obj.id === view_id);
                // console.log(foundObject)
                $('#customerInfo').offcanvas('show')
                $('#firstname').val(foundObject.firstname)
                $('#middlename').val(foundObject.middlename)
                $('#lastname').val(foundObject.lastname)
                $('#contact').val(foundObject.contact)
                $('#email').val(foundObject.email)
                $('#destination').val(foundObject.destination)
                $('#pickup').val(foundObject.pickup)
                $('#landmark').val(foundObject.landmark)
                $('#dateoftrip').val(foundObject.dateoftrip)
                $('#pax').val(foundObject.pax + ' Person')
                $('#daysandhours').val(foundObject.daysandhours + ' Hour/s')
                $('#time').val(convertTo12HourFormat(foundObject.pickuptime))
                $('#chat-driver-side').attr('value',foundObject.sender_id)
            })

            
        }

        // convert time to AM/PM
        const convertTo12HourFormat = (time) => {
            // Parse the time into hours and minutes
            const [hours, minutes] = time.split(":").map(Number);

            // Determine if it's AM or PM
            const period = hours >= 12 ? "PM" : "AM";

            // Convert hours to 12-hour format
            const hours12Format = hours % 12 || 12;

            // Return the time in AM/PM format
            return `${hours12Format}:${minutes.toString().padStart(2, "0")} ${period}`;
        }

        // testing phase
        const NotifyUser = async (message) => {
            if ('Notification' in window) {
                Notification.requestPermission()
                    .then(permission => {
                        if (permission === 'granted') {
                            // Permission granted, you can now show notifications
                            const notification = new Notification('Title', {
                                body: 'This is the notification message.',
                                icon: 'path/to/icon.png' // Optional
                            });

                            // You can also handle notification events
                            notification.onclick = () => {
                                // Handle notification click
                            };
                        }
                    });
            }
        }
    </script>
@endsection
