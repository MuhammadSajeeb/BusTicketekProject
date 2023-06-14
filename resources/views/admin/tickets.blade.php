@extends('admin.layout')


@section('header')
    <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
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
                    </div>
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
                    <h4 class="page-title pull-left">Tickets</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="/dashboard">Home</a></li>
                        <li><span>Tickets</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="panel/assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Nub-Bus Admin <i class="fa fa-angle-down"></i></h4>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Message</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="/logout">Log Out</a>
                    </div>
                </div>
            </div>
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
                        <div class="col-md-12">
                            <div class="data-tables">

                            <table cellspacing="0" id="dataTable" class="text-center table table-bordered table-striped">

                                <thead class="bg-light text-capitalize">
                                    <tr>
                                        <td>Ticket number</td>
                                        <td>Customer Name</td>
                                        <td>Seat Number</td>
                                        <td>Operator</td>
                                        <td>Bus type</td>
                                        <td>Departure</td>
                                        <td>Arrival</td>
                                        <td>Fare(ETB)</td>
                                        <td>Order Status</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tickets as $ticket)
                                        <tr>
                                            <td>{{$ticket->ticket_number}}</td>
                                            <td>{{$ticket->passenger_name}}</td>
                                            <td>{{$ticket->seat_no}}</td>
                                            <td>{{$ticket->Trip->Bus->Operator->name}}</td>
                                            <td>
                                                {{$ticket->Trip->Bus->bus_type}}
                                                {{$ticket->Trip->Bus->plate_no}}
                                            </td>
                                            <td>{{$ticket->Trip->depart_from}}</td>
                                            <td>{{$ticket->Trip->arrive_at}}</td>
                                            <td>{{$ticket->price}}</td>
                                            <td>
                                                @if ($ticket->is_confirmed)
                                                    <span class="confirmed _dot badge badge-success">Confirmed </span>
                                                @else
                                                    <span class="pending_dot badge badge-warning">Pending</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-secondary-{{ $ticket->id }}">
                                                    <i class="fas fa-edit">
                                                    </i>
                                                </button>
                                                <div class="modal fade" id="modal-secondary-{{ $ticket->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content bg-secondary">
                                                            <div class="modal-header">
                                                            <h4 class="modal-title">Approve Ticket</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body justify-content-center">
                                                                <form method="post" action="{{route('ticket.approve',$ticket->id)}}" style="width: 100%;"  enctype="multipart/form-data">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="row">
                                                                        <table class="text-center table table-bordered table-striped">
                                                                            <thead class="bg-light text-capitalize">
                                                                                <tr>
                                                                                    <td>Bank</td>
                                                                                    <td>Recipt Number</td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="bg-light">
                                                                                <tr>
                                                                                    <td><b>{{$ticket->bank}}</b></td>
                                                                                    <td>{{$ticket->tt_number}}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-outline-light">Approve</button>
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
    </div>
@endsection
