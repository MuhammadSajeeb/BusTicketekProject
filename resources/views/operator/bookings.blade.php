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
                    <h4 class="page-title pull-left">Bookings</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="/dashboard">Home</a></li>
                        <li><span>Bookings</span></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="panel/assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">NUB-BUS ADMIN<i class="fa fa-angle-down"></i></h4>
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
    <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">

                                    <div class="data-tables">

                                    <table cellspacing="0" id="dataTable" class="text-center table table-bordered table-striped">

                                        <thead class="bg-light text-capitalize">
                                           <tr>
                                                <th>Order number</th>
                                                <td>Passanger Name</td>

                                                <th>Seat Number</th>
                                            	<th>Operator</th>
                                                <th>Bus type</th>
                                                <th>Departure</th>
                                                <th>Arrival</th>
                                                <th>Fare(ETB)</th>
                                                <th>Order Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td>{{$booking->order_number}}</td>
                                                    <td>{{$booking->passenger_name}}</td>
                                                    <td>{{$booking->seat_no}}</td>
                                                    <td>{{$booking->Trip->Bus->Operator->name}}</td>
                                                    <td>
                                                        {{$booking->Trip->Bus->bus_type}}
                                                        {{$booking->Trip->Bus->plate_no}}
                                                    </td>
                                                    <td>{{$booking->Trip->depart_from}}</td>
                                                    <td>{{$booking->Trip->arrive_at}}</td>
                                                    <td>{{$booking->price}}</td>
                                                    <td>
                                                        @if ($booking->is_confirmed)
                                                            <span class="confirmed _dot badge badge-success">Confirmed </span>
                                                        @else
                                                            <span class="pending_dot badge badge-warning">Pending</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-secondary-{{ $booking->id }}">
                                                            <i class="fas fa-edit">
                                                            </i>
                                                        </button>
                                                        <div class="modal fade" id="modal-secondary-{{ $booking->id }}">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content bg-secondary">
                                                                    <div class="modal-header">
                                                                    <h4 class="modal-title">Approve Booking</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form method="post" action="{{route('booking.approve',$booking->id)}}" style="width: 100%;"  enctype="multipart/form-data">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <input type="text" required  class="form-control" name="tt_number" placeholder="TT Number"/><br/>
                                                                            <div class="modal-footer justify-content-between">
                                                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-outline-light">Save changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <!-- /.modal -->
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
@endsection
