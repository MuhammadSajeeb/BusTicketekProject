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
            <h4 class="page-title pull-left">Dashboard</h4>
            <ul class="breadcrumbs pull-left">
                <li><a href="index.html">Home</a></li>
                <li><span>Dashboard</span></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-6 clearfix">
        <div class="user-profile pull-right">
            <img class="avatar user-thumb" src="panel/assets/images/author/avatar.png" alt="avatar">
            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">NUB-BUS ADMIN <i class="fa fa-angle-down"></i></h4>
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
        <!-- sales report area start -->
        <div class="sales-report-area sales-style-two">
            <div class="row">
                <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                    <div class="single-report">
                        <div class="s-sale-inner pt--30 mb-3">
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Ticket Sold</h4>
                                <select class="custome-select border-0 pr-3">
                                    <option selected="">Last 7 Days</option>
                                    <option value="0">Last 7 Days</option>
                                </select>
                            </div>
                        </div>
                        <canvas id="coin_sales4" height="100"></canvas>
                    </div>
                </div>
                <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                    <div class="single-report">
                        <div class="s-sale-inner pt--30 mb-3">
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Gross Profit</h4>
                                <select class="custome-select border-0 pr-3">
                                    <option selected="">Last 7 Days</option>
                                    <option value="0">Last 7 Days</option>
                                </select>
                            </div>
                        </div>
                        <canvas id="coin_sales5" height="100"></canvas>
                    </div>
                </div>
                <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                    <div class="single-report">
                        <div class="s-sale-inner pt--30 mb-3">
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">Orders</h4>
                                <select class="custome-select border-0 pr-3">
                                    <option selected="">Last 7 Days</option>
                                    <option value="0">Last 7 Days</option>
                                </select>
                            </div>
                        </div>
                        <canvas id="coin_sales6" height="100"></canvas>
                    </div>
                </div>
                <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                    <div class="single-report">
                        <div class="s-sale-inner pt--30 mb-3">
                            <div class="s-report-title d-flex justify-content-between">
                                <h4 class="header-title mb-0">New Customers</h4>
                                <select class="custome-select border-0 pr-3">
                                    <option selected="">Last 7 Days</option>
                                    <option value="0">Last 7 Days</option>
                                </select>
                            </div>
                        </div>
                        <canvas id="coin_sales7" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- sales report area end -->
        <!-- order list area start -->
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="header-title">Todays Order List</h4>
                <div class="table-responsive">
                    <table class="dbkit-table">
                        <tbody>
                            <tr class="heading-td mainheader">
                                <td>Customer Name</td>
                                <td>Ticket Number</td>
                                <td>Order Status</td>
                                <td>Client Number</td>
                                <td>Seat Number</td>
                                <td>View Order</td>
                            </tr>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket->passenger_name}}</td>
                                    <td>{{$ticket->ticket_number}}</td>
                                    <td>
                                        @if ($ticket->is_confirmed)
                                            <span class="confirmed _dot badge badge-success">Confirmed </span>
                                        @else
                                            <span class="pending_dot badge badge-warning">Pending</span>
                                        @endif
                                    </td>
                                    <td>{{$ticket->phone}}</td>
                                    <td>{{$ticket->seat_no}}</td>
                                    <td class="btn btn-flat btn-success mb-3">View Order</td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="pending_dot badge badge-warning">Pending</span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td class="btn btn-flat btn-success mb-3">View Order</td>
                            </tr>
                            <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="confirmed _dot badge badge-success">Confirmed </span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td class="btn btn-flat btn-success mb-3">View Order</td>
                            </tr>
                            <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="pending_dot badge badge-danger">Canceled</span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td class="btn btn-flat btn-success mb-3">View Order</td>
                            </tr>
                            <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="confirmed _dot badge badge-success">Confirmed </span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td class="btn btn-flat btn-success mb-3">View Order</td>
                            </tr> --}}

                        </tbody>
                    </table>
                </div>
                <div class="pagination_area pull-right mt-5">
                    <ul>
                        <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- visitor graph area start -->
        <div class="card mt-5">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-5">
                    <h4 class="header-title mb-0">Visitor Graph</h4>
                    <select class="custome-select border-0 pr-3">
                        <option selected="">Last 7 Days</option>
                        <option value="0">Last 7 Days</option>
                    </select>
                </div>
                <div id="visitor_graph"></div>
            </div>
        </div>
        <!-- visitor graph area end -->


    </div>
@endsection
