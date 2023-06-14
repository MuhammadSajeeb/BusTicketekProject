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
                    <h4 class="page-title pull-left">Edit Trips</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="/dashboard">Home</a></li>
                        <li><span>Edit Trips</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                <div class="user-profile pull-right">
                    <img class="avatar user-thumb" src="{{asset('panel/assets/images/author/avatar.png')}}" alt="avatar">
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
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">


                        <div class="data-tables">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Trip</h5>
                                        {{-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> --}}
                                    </div>
                                    <div class="modal-body">
                                        <form action="/editTrip" method="POST" class="needs-validation" novalidate=""  enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-row">

                                                <div class="col-md-4 mb-3">
                                                    <input type="hidden" name="trip_id" value="{{$trip->id}}" required>
                                                    <label for="validationCustom02">Trip No</label>
                                                    <input type="text" class="form-control" id="validationCustom02" value="{{$trip->trip_no}}" required="" name="trip_no" readonly >
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please enter trip number.
                                                    </div>
                                                </div>

                                                    <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Select Operator</label>
                                                    <select id="operator" class="form-control" name="operatorname" required>
                                                        <option value="{{$operator->id}}" selected>{{$operator->name}}</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select operator.
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Select Bus Type</label>
                                                    <select id="buses" class="form-control" name="bus_id" required="">
                                                        <option value="{{$bus->id}}" selected>{{$operator->name}},{{$bus->bus_type}},{{$bus->plate_no}}</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select bus type.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Departure Date</label>

                                                    <input type="text" name="departure_date"class="form-control" id="datepicker3" placeholder="Departure Date" value="{{$trip->travel_date}}" required="">


                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please select departure date.
                                                        </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Arrival Date</label>

                                                    <input type="text" name="arrival_date"class="form-control" id="datepicker4" value="{{$trip->arrival_date}}" required="">


                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please select arrival date.
                                                        </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Depart From</label>

                                                    <input type="text" name="depart_from"class="form-control" id="deptfrom" value="{{$trip->depart_from}}" required="">


                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please enter Depart from.
                                                        </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Arrive at</label>

                                                    <input type="text" name="arrive_at"class="form-control" id="arriveat" value="{{$trip->arrive_at}}" required="">


                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please enter arrive at.
                                                        </div>
                                                </div>



                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Depart Time</label>

                                                    <input type="text" name="departure_time"class="form-control" id="timepicker1" value="{{$trip->departure_time}}" required="">


                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please select Depart date.
                                                        </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Arrival Time</label>

                                                    <input type="text" name="arrival_time"class="form-control" id="timepicker2" value="{{$trip->arrival_time}}" required="">


                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please select Arrival time.
                                                        </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Fare </label>
                                                    <div class="input-group">

                                                        <input type="text" class="form-control" id="validationCustomUsername" value="{{$trip->price}}" aria-describedby="inputGroupPrepend" required="" name="price">
                                                        <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                        <div class="invalid-feedback">
                                                            Please enter a fare.
                                                        </div>
                                                    </div>
                                                </div>


                                                    <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Status</label>
                                                    <select class="form-control" name="status">
                                                        <option></option>
                                                        <option value="1" selected="">Active</option >
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a status.
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Available Seats from</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="validationCustomUsername" value="{{$trip->available_seats_from}}" aria-describedby="inputGroupPrepend" required="" name="seats_from">
                                                        <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                        <div class="invalid-feedback">
                                                            Please enter seat No.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Available Seats upto</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="validationCustomUsername" value="{{$trip->available_seats_upto}}" aria-describedby="inputGroupPrepend" required="" name="seats_upto">
                                                        <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                        <div class="invalid-feedback">
                                                            Please enter seat No.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Allowable Luggage</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="validationCustomUsername" value="{{$trip->allowable_luggage}}" aria-describedby="inputGroupPrepend" required="" name="allowable_luggage">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please enter Allowable Luggage.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Extra Luggage Fee</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="validationCustomUsername" value="{{$trip->extra_luggage_fee}}" aria-describedby="inputGroupPrepend" required="" name="extra_luggage_fee">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Please enter Extra Luggage Fee.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="modal-footer">

                                                <a href="javascript:history.back()" class="btn btn-warning">Cancel</a>
                                                <button class="btn btn-success" type="submit" name="addticket"> Edit Trip</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
                    <!-- data table end -->


@endsection
