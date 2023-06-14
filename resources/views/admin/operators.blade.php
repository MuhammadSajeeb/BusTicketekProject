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
                    <h4 class="page-title pull-left">Operators</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="/dashboard">Home</a></li>
                        <li><span>Operators</span></li>
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
                                <a data-toggle="modal" data-target="#addoperator" class="btn btn-flat btn-outline-success mb-3" href="#"><i class="ti-plus"></i> Add new operator</a>
                                <a data-toggle="modal" data-target="#import" class="btn btn-flat btn-outline-success mb-3" href="#"><i class="ti-import"></i> Import</a>

                                <div class="col-md-12">
                                    <div class="data-tables">

                                    <table cellspacing="0" id="dataTable" class="text-center table table-bordered table-striped">

                                        <thead class="bg-light text-capitalize">
                                           <tr>
                                                <th>Tin No.</th>
                                            	<th>Operator Name</th>
                                                <th>Contact Person</th>
                                                <th>Phone #</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($operators as $operator)
                                                <tr>
                                                    <td>{{$operator->tin_no}}</td>
                                                    <td>{{$operator->name}}</td>
                                                    <td>{{$operator->contact_person}}</td>
                                                    <td>{{$operator->phone}}</td>
                                                    <td>{{$operator->email}}</td>
                                                    <td>{{$operator->address}}</td>
                                                    <td>
                                                        @if ($operator->status)
                                                            <span class="badge badge-success">Active</span>
                                                        @else
                                                            <span class="badge badge-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$operator->id}}">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Delete
                                                        </a>
                                                        <div class="modal fade" id="exampleModalLong{{$operator->id}}">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content bg-danger">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Warning!</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete operator {{$operator->name}}?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                        <form method="post" action="{{route('operator.delete',$operator->id)}}" style="display: inline;">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-outline-light">Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                    <!-- data table end -->

                                <!-- Modal -->
                                <div class="modal fade" id="addoperator">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add new operator</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                 <form action="operators" method="POST" class="needs-validation" novalidate="" >
                                                     @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationCustom01">Operator Name</label>
                                                            <input type="text" class="form-control" id="validationCustom01" placeholder=""  required="" name="name">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please enter Operator Name.
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationCustom02">Phone number</label>
                                                            <input type="phone" class="form-control" id="validationCustom02" placeholder="+251-000-000-000"required="" name="phone">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                    Please enter phone number.
                                                                </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationCustomUsername">Email</label>
                                                            <div class="input-group">

                                                                <input type="email" class="form-control" id="validationCustomUsername" placeholder="example@example.com" aria-describedby="inputGroupPrepend" required="" name="email">
                                                                <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                                <div class="invalid-feedback">
                                                                    Please enter a valid email address.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-3">
                                                            <label for="validationCustomUsername">Contact Person</label>
                                                            <div class="input-group">

                                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Mr./Ms. Jone Doe" aria-describedby="inputGroupPrepend" required="" name="contact_person">
                                                                <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                                <div class="invalid-feedback">
                                                                    Please enter a valid name.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 mb-3">
                                                            <label for="validationCustom02">Operator address</label>
                                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Address/Sub City/Wereda/Building/Floor"  required="" name="address">
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Please enter valid address.
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <div class="form-row">


                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationCustom04">Tin #</label>
                                                            <input type="text" class="form-control" id="validationCustom04" placeholder="Your tin number"  name="tin_no">
                                                            <div class="invalid-feedback">
                                                                Please provide a valid tin number.
                                                            </div>
                                                        </div>

                                                        <div class="col-md-3 mb-3">
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



                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                        <button class="btn btn-success" type="submit" name="submit"> Add operator</button>
                                                    </div>
                                             </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                    <div class="modal fade" id="import">
                                    <div class="modal-dialog modal-small">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Import</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                 <form class="needs-validation" novalidate="" action="#.php" method="POST">
                                            <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Upload any .csv files: </label>
                                                    <input type="file" class="form-control" id="validationCustom01" placeholder="" value="" required="" name="importop">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please enter Operator Name.
                                                        </div>
                                                </div>





                                            </div>
                                            <div class="form-row">




                                            </div>



                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                <button class="btn btn-success" type="submit" name="submit"> Import</button>
                                            </div>
                                             </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
@endsection
