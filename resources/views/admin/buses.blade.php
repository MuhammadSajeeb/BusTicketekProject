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
                    <h4 class="page-title pull-left">Buses</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="/dashboard">Home</a></li>
                        <li><span>Buses</span></li>
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
                    <div class="row">
                        <a data-toggle="modal" data-target="#addnewbus" class="btn btn-flat btn-outline-success mr-3" href="#">Add new bus</a>
                        {{-- <a data-toggle="modal" data-target="#addseats"  class="btn btn-flat btn-outline-success mr-3" href="#">Add seat number</a> --}}
                        <a data-toggle="modal" data-target="#addaminities"  class="btn btn-flat btn-outline-success mr-3" href="#">Add amenities</a>
                    </div>
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">

                            <div class="card-body">

                                <div class="data-tables">

                                    <table cellspacing="0" id="dataTable" class="text-center table table-bordered table-striped">

                                        <thead class="bg-light text-capitalize">
                                           <tr>
                                               <th>Image</th>
                                                <th>Plate number</th>
                                            	<th>Operator</th>
                                                <th>Bus type</th>
                                                <th>Total # of seats</th>
                                                <th>Status</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($buses as $bus)
                                                <tr>
                                                    <td><img src="/{{$bus->image_url}}" width="150" height="150"/></td>
                                                    <td>{{$bus->plate_no}}</td>
                                                    <td>{{$bus->Operator->name}}</td>
                                                    <td>{{$bus->bus_type}}</td>
                                                    <td>{{$bus->no_of_seats}}</td>
                                                    <td>
                                                        @if ($bus->status=="Active")
                                                            <span class="badge badge-success">Active</span>
                                                        @else
                                                            <span class="badge badge-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$bus->id}}" href="#">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Delete
                                                        </a>
                                                        <div class="modal fade" id="exampleModalLong{{$bus->id}}">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content bg-danger">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Warning!</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete Bus {{$bus->plate_no}}?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                        <form method="post" action="{{route('bus.delete',$bus->id)}}" style="display: inline;">
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
                    <!-- data table end -->

                      <!-- Add new bus Modal -->
                                <div class="modal fade " id="addnewbus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add new bus</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="/buses" method="POST" class="needs-validation" novalidate="" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-row">



                                               <div class="col-md-3 mb-3">
                                                    <label for="validationCustom05">Select Operator</label>
                                                    <select class="form-control" name="operator_id" required>
                                                        <option></option>
                                                        @foreach ($operators as $operator)
                                                           <option value="{{$operator->id}}">{{$operator->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a Operator.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Bus type</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required="" name="bus_type">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please enter bus type.
                                                        </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Bus plate number</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="ex: AA,03,88803" value="" required="" name="plate_no">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please enter bus plate number.
                                                        </div>
                                                </div>
                                                 <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Total number of seats</label>
                                                    <div class="input-group">

                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="ex: 60" aria-describedby="inputGroupPrepend" required="" name="no_of_seats">
                                                        <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                        <div class="invalid-feedback">
                                                            Please enter a total number of seats.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 mb-3">
                                                    <label for="validationCustomUsername">Photo</label>
                                                    <div class="input-group">

                                                        <input type="file" class="form-control" id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend" required="" name="photo">
                                                        <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                        <div class="invalid-feedback">
                                                            Please upload a valid format.
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="form-row">




                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom05">Status</label>
                                                    <select class="form-control" name="status">
                                                <option></option>
                                                <option value="Active" selected="">Active</option >
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                                    <div class="invalid-feedback">
                                                        Please select a status.
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                <button class="btn btn-success" type="submit" name="addbus"> Add bus</button>
                                            </div>
                                             </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                  <!-- Add aminities Modal -->
                                <div class="modal fade " id="addaminities">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add aminities</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                 <form action="/operator/aminities" method="POST" class="needs-validation" novalidate="" >
                                                    @csrf
                                                    <div class="form-row">

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Select Bus</label>
                                                    <select class="form-control" name="bus_id" required>
                                                        <option></option>
                                                        @foreach ($buses as $bus)
                                                            <option value="{{$bus->id}}">{{$bus->bus_type}},{{$bus->plate_no}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select a Bus.
                                                    </div>
                                                </div>



                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Aminitie</label>

                                                    <table class="table table-bordered" id="dynamic_field">
                                                        <tr>
                                                            <td><input type="text" name="aminities[]" placeholder="Enter aminities" class="form-control name_list" required/></td>
                                                            <td><button type="button" name="add" id="add1" class="btn btn-success">Add More</button></td>
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



                                            <div class="form-row">




                                            </div>



                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                <button class="btn btn-success" type="submit" name="submit"> Add aminities</button>
                                            </div>
                                             </form>
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
                                                 <form class="needs-validation" novalidate="" action="insert.php" method="POST">
                                            <div class="form-row">



                                               <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Select Operator</label>
                                                    <select class="form-control" name="operatorname">
                                                <option></option>
                                                <option value="0" selected=""></option >
                                                <option value="0" selected="">SKY Bus Transport</option >
                                                <option value="1">Zemen Bus Transport</option>
                                            </select>
                                                    <div class="invalid-feedback">
                                                        Please select a Operator.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Select Bus</label>
                                                    <select class="form-control" name="operatorname">
                                                <option></option>
                                                <option value="0" selected=""></option >
                                                <option value="0" selected="">Volvo(AA,03,88803)</option >
                                                <option value="1">TATA(ORO,03,89595)</option>
                                            </select>
                                                    <div class="invalid-feedback">
                                                        Please select a Operator.
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Select point</label>
                                                    <select class="form-control" name="operatorname">
                                                <option></option>
                                                <option value="0" selected=""></option >
                                                <option value="0" selected="">Dropping Point</option >
                                                <option value="1">Boarding Point</option>
                                            </select>
                                                    <div class="invalid-feedback">
                                                        Please select point.
                                                    </div>
                                                </div>



                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Routing time/place</label>

                                                    <table class="table table-bordered" id="dynamic_field1">
                                                    <tr>
                                                    <td><input type="time" name="routetime[]" placeholder="Enter time" class="form-control name_list" /></td>
                                                    <td><input type="text" name="routeplace[]" placeholder="Enter place" class="form-control name_list" /></td>
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


                                            <script type="text/javascript">
                                                        $(document).ready(function(){
                                                        var i=1;
                                                        $('#add2').click(function(){
                                                        i++;
                                                        $('#dynamic_field1').append('<tr id="row'+i+'"><td><input type="time" name="routetime[]" placeholder="Enter time" class="form-control name_list" /></td><td><input type="text" name="routeplace[]" placeholder="Enter place" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
                                                        });

                                                        $(document).on('click', '.btn_remove', function(){
                                                        var button_id = $(this).attr("id");
                                                        $('#row'+button_id+'').remove();
                                                        });
                                                        });
                                            </script>
                                            <div class="form-row">

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Status</label>
                                                    <select class="form-control" name="status">
                                                <option></option>
                                                <option value="0" selected="">Active</option >
                                                <option value="1">Inactive</option>
                                            </select>
                                                    <div class="invalid-feedback">
                                                        Please select a status.
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

                                   {{-- <!-- Add seats Modal -->
                                <div class="modal fade " id="addseats">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add Seats number</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                 <form class="needs-validation" novalidate="" action="insert.php" method="POST">
                                            <div class="form-row">




                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Select Operator</label>
                                                   <select id="operator" class="form-control" name="operatorname" required="">
                                                    <option></option>
                                                    @foreach ($operators as $operator)
                                                        <option value="{{$operator->id}}">{{$operator->name}}</option>
                                                    @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select operator.
                                                    </div>
                                                </div>

                                               <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Select Bus Type</label>
                                                    <select id="buses" class="form-control" name="operatorname" required="">

                                                    <?php
                                                       /* $sql = "SELECT * FROM bus WHERE op_id='$op_id'";
                                                        $result = mysqli_query($db, $sql);
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo '<option value="'.$row['op_id'].'">' . $row['op_name']. '</option>';
                                                        }*/



                                                    ?>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select bus type.
                                                    </div>
                                                </div>



                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom01">Seat numbers</label>

                                                    <table class="table table-bordered" id="dynamic_field2">
                                                    <tr>
                                                    <td>
                                                    <select class="form-control name_list" name="deck[]">
                                                    <option></option>
                                                    <option value="0" selected="">Lower Deck</option>
                                                    <option value="1">Upper Deck</option>
                                                    </select>
                                                    </td>
                                                    <td><input type="text" name="seatno[]" placeholder="Enter seat number" class="form-control name_list" /></td>
                                                    <td><button type="button" name="add2" id="add3" class="btn btn-success">Add More</button></td>
                                                    </tr>
                                                    </table>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                            Please enter seat number.
                                                        </div>
                                                </div>



                                            </div>


                                            <script type="text/javascript">
                                                        $(document).ready(function(){
                                                            var i=1;
                                                            $('#add3').click(function(){
                                                                i++;
                                                                $('#dynamic_field2').append('<tr id="row'+i+'"><td><select class="form-control name_list" name="deck[]"> <option></option><option value="0" selected="">Lower Deck</option><option value="1">Upper Deck</option></select></td><td><input type="text" name="seatno[]" placeholder="Enter seat number" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
                                                                });

                                                                $(document).on('click', '.btn_remove', function(){
                                                                var button_id = $(this).attr("id");
                                                                $('#row'+button_id+'').remove();
                                                            });
                                                        });
                                            </script>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                <button class="btn btn-success" type="submit" name="submit"> Add seat</button>
                                            </div>
                                             </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                </div>
            </div>
        </div>
@endsection
