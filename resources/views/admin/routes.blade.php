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
                    <h4 class="page-title pull-left">Routes</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="/dashboard">Home</a></li>
                        <li><span>Routes</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="panel/assets/images/author/avatar.png" alt="avatar">
                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">NUB-BUS ADMIN<i class="fa fa-angle-down"></i></h4>
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
            <div class="col-md-12">
                    @if (session('success'))
                        <div class="text-success">
                            {{ session('success') }}
                        </div>
                    @endif
            </div>
        </div>
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                 <a data-toggle="modal" data-target="#addroute"  class="btn btn-flat btn-outline-success mb-3" href="#">Add Route</a>
                                <div class="col-md-12">
                                    <div class="data-tables">

                                    <table cellspacing="0" id="dataTable" class="text-center table table-bordered table-striped">

                                        <thead class="bg-light text-capitalize">
                                           <tr>

                                                <th>Departure - Arrival</th>
                                                <th>Boarding or Dropping</th>

                                                <th>place</th>
                                            	<th>Time</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($routes as $route)
                                                <tr>

                                                    <td>{{$route->Trip->depart_from}} -> {{$route->Trip->arrive_at}}</td>
                                                    <td>{{$route->boarding_dropping}}</td>
                                                    <td>{{$route->place}}</td>
                                                    <td>{{$route->time}}</td>
                                                    <td>
                                                        <a class="btn btn-danger btn-sm" href="{{route('route.destroy',$route->id)}}">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Delete
                                                        </a>
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
      <!-- Add route Modal -->
        <div class="modal fade " id="addroute">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add route</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                            <form class="needs-validation" novalidate="" action="/addRoute" method="POST">
                                @csrf
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom05">Select Trip</label>
                                    <select class="form-control" name="trip_id">
                                        <option></option>
                                        @foreach ($trips as $trip)
                                            <option value="{{$trip->id}}">{{$trip->Bus->Operator->name}} | {{$trip->Bus->plate_no}} | {{$trip->depart_from}} -> {{$trip->arrive_at}} | {{$trip->travel_date}}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a Trip.
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">Select point</label>
                                    <select class="form-control" name="boarding_dropping">
                                        <option></option>
                                        <option value="Dropping">Dropping Point</option>
                                        <option value="Boarding">Boarding Point</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select point.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom01">Routing time/place</label>

                                    <table class="table table-bordered" id="dynamic_field1">
                                    <tr>
                                    <td><input type="time" name="route_time[]" placeholder="Enter time" class="form-control name_list" /></td>
                                    <td><input type="text" name="route_place[]" placeholder="Enter place" class="form-control name_list" /></td>
                                    <td><button type="button" name="add2" id="add2" class="btn btn-success">Add More</button></td>
                                    </tr>
                                    </table>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                            Please enter bus type.
                                        </div>
                                </div>



                    </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                <button class="btn btn-success" type="submit" name="submit"> Add route</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
