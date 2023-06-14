@extends('operator.layout')

@section('header')
    <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    {{-- <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">

                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>


                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="panel/assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="panel/assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="panel/assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>




                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div> --}}
                </div>
            </div>
            <!-- header area end -->
@endsection


@section('page-title')
<!-- page title area start -->
    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Trips</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="/dashboard">Home</a></li>
                        <li><span>Trips</span></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="panel/assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">NUB-BUS ADMIN <i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Message</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="/logout">Log Out</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- page title area end -->
@endsection


@section('inner-content')
    <div class="alert-dismiss">
        @if (session()->has('success'))
            <div class="alert alert-success alert-block" style="width: 30%;position: absolute;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('success') }}</strong>
            </div>
        @endif
        @if (session()->has('alert'))
            <div class="alert alert-danger alert-block" style="width: 30%;position: absolute;">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session()->get('alert') }}</strong>
            </div>
        @endif
    </div>
    <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-flat btn-outline-success mb-3" href="/newTrip">Add new trip</a>
                                <div class="col-md-12">
                                    <div class="data-tables">

                                    <table cellspacing="0" id="dataTable" class="text-center table table-bordered table-striped">

                                        <thead class="bg-light text-capitalize">
                                           <tr>
                                                <th>Trip number</th>
                                                <th>Operator Name</th>
                                                <th>Bus type</th>
                                                <th>Departure</th>
                                                <th>Arrival</th>
                                                <th>Departure Date</th>
                                                <th>Arrival Date</th>
                                                <th>Fare(ETB)</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trips as $trip)
                                                <tr>
                                                    <td>{{$trip->trip_no}}</td>
                                                    <td>{{$trip->Bus->Operator->name}}</td>
                                                    <td>{{$trip->Bus->bus_type}},{{$trip->Bus->plate_no}}</td>
                                                    <td>{{$trip->depart_from}}</td>
                                                    <td>{{$trip->arrive_at}}</td>
                                                    <td>
                                                        {{$trip->travel_date}}
                                                        <br>
                                                        {{$trip->departure_time}}
                                                    </td>
                                                    <td>
                                                        {{$trip->arrival_date}}
                                                        <br>
                                                        {{$trip->arrival_time}}
                                                    </td>
                                                    <td>{{$trip->price}}</td>
                                                    <td>
                                                        @if ($trip->status)
                                                            <span class="confirmed _dot badge badge-success">Active</span>
                                                        @else
                                                            <span class="pending_dot badge badge-warning">In Active</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/operator/editTrip/{{$trip->id}}" class="btn btn-secondary" style="display: inline;">Edit</a>
                                                        <a href="/operator/trips/{{$trip->id}}" class="btn btn-success" style="display: inline;">View</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
@endsection
