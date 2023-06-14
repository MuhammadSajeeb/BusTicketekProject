@extends('layout')
<style>

    /* User Profile */
    .profile-left-tab {
        border: 1px solid #eee;
        box-shadow: 0 0 30px rgb(127 137 161/20%);
        min-height: 500px;
        display: flex;
    }

    li.top-li {
        padding: 15px;
        text-align: center;
    }

    .profile-left-tab li .active {
        background-color: #03a050 !important;
        color: #fff !important;
    }

    .profile-left-tab li a {
        padding: 8px 15px;
        display: block;
        text-align: left;
        color: #3e3e52;
        font-weight: 500;
        border-radius: 0;
        border: 0;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: 0px;
        margin: 0;
        border-bottom: 1px solid #ddd;
        text-decoration: none;
        cursor: pointer;
    }

    .profile-right-tab-content {
        border: 1px solid #eee;
        box-shadow: 0 0 30px rgb(127 137 161/20%);
        min-height: 500px;
        padding: 20px;
    }

    .tab-content > .active {
        display: block;
    }

    .wlc_msg {
        font-size: 20px;
        text-transform: capitalize;
        margin: 0;
        border-bottom: 1px dashed #00a14a;
        color: #333;
        padding-bottom: 10px;
        font-weight: 500;
    }

    .login_section {
        margin: 90px 0px 0px;
    }

    ul.nav.nav-tabs.profile-left-tab {
        display: flex;
        flex-direction: column;
    }

    .profile-right-tab-content .form-gp input {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
    }

    .form-gp {
        position: relative;
        margin-bottom: 15px;
    }

    .form-gp label {
        display: block;
    }

    .form-gp input {
        width: 100%;
        height: 44px;
        border: 1px solid #c8c8c8;
        outline: none !important;
        box-shadow: none !important;
        padding: 10px;
        border-radius: 5px;
        font-size: 14px;
    }

    .btn.mid_cont_btn {
        color: #fff !important;
        background: #03a050;
        border-color: #03a050;
        box-shadow: none !important;
        font-size: 18px;
        font-weight: 600;
        outline: none !important;
        transition: all ease-in-out .3s;
        margin: 0 auto;
        padding: 6px 50px;
        border-radius: 30px;
        min-height: 44px;
        text-transform: uppercase;
    }

    .profile-right-tab-content .form-gp .icon {
        top: 46px !important;
    }

    .form-gp .icon {
        position: absolute;
        right: 10px;
        color: #3333336b;
        font-size: 16px;
        top: 13px;
    }
</style>
@section('main')
    <section class="login_section pt-t pt-md-5">
        <div class="container">
            @if (Session::get('success'))
                <section>
                    <div class="container">
                        <div class="row content d-flex flex-row align-items-center">
                            <div class="alert alert-success alert-dismiss" style="width: 50%;position: absolute;">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ Session::get('success') }}</strong>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
                <div class="row">
                <div class="col-md-3 col-sm-3 col-12">
                    <ul class="nav nav-tabs profile-left-tab">
                        <li class="top-li my-2">
                            <h4 class="name">{{auth()->user()->name}}</h4>
                            <p class="user-phn">{{auth()->user()->phone}}</p>
                        </li>
                        <li>
                            <a class="active" data-toggle="tab" data-target="#profile">
                                <i class="fa fa-user"></i>&nbsp; Profile </a>
                        </li>
                        <li>
                            <a data-target="#my_bookings" data-toggle="tab">
                                <i class="fa fa-briefcase"></i>&nbsp; My bookings </a>
                        </li>
                        <li>
                            <a data-target="#edit_profile" data-toggle="tab">
                                <i class="fa fa-edit"></i>&nbsp; Edit profile </a>
                        </li>
                        <li>
                            <a data-target="#chg_password" data-toggle="tab">
                                <i class="fa fa-key"></i>&nbsp; Change password </a>
                        </li>
                        <li>
                            <a href="/logout" class="text-dark">
                                <i class="fa fa-sign-out-alt"></i>&nbsp; Sign out </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-9 col-12 ps-sm-0">
                    <div class="tab-content profile-right-tab-content">
                        <div class="tab-pane active" id="profile">
                            <h2 class="wlc_msg">Welcome !! <strong>{{auth()->user()->name}}</strong>
                            </h2>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover my-bookin-tbl">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <strong>Name: </strong>
                                                </td>
                                                <td>{{auth()->user()->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Enter: </strong>
                                                </td>
                                                <td>{{auth()->user()->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Phone: </strong>
                                                </td>
                                                <td>{{auth()->user()->phone}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="edit_profile" role="tabpanel">
                            <h2 class="wlc_msg">Edit profile</h2>
                            <div id="succMsg"></div>
                            <div id="dngrMsg"></div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <form action="{{route('update.profile')}}" method="post">
                                        @csrf
                                        <div>
                                            <div class="form-gp">
                                                <label for="cFirstName">Name</label>
                                                <input id="cFirstName" type="text" value="{{auth()->user()->name}}"
                                                       name="name" required="">
                                                <span class="icon"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="form-gp">
                                                <label for="cusPhone">Enter</label>
                                                <input id="cusPhone" type="email" disabled="disabled"
                                                       value="{{auth()->user()->email}}" autocomplete="off"
                                                       required="">
                                                <span class="icon"> <i class="fa fa-envelope"></i></span>
                                            </div>
                                            <div class="form-gp">
                                                <label for="cusEmail">Phone</label>
                                                <input id="cusEmail" type="text" value="{{auth()->user()->phone}}"
                                                       name="phone" autocomplete="off">
                                                <span class="icon"> <i class="fa fa-phone"></i></span>
                                            </div>
                                            <div class="submit-btn-area">
                                                <button class="btn mid_cont_btn" type="submit">Update profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="chg_password" role="tabpanel">
                            <h2 class="wlc_msg">Change password</h2>
                            <div id="passsuccMsg"></div>
                            <div id="passdngrMsg"></div>
                            <div class="row mt-3">
                                <div class="col-lg-6 col-md-7 col-sm-12 col-12">
                                    <div>
                                        <form action="{{ route('change.password') }}" method="post">
                                            @csrf
                                            <div class="form-gp togglePass1">
                                                <label for="current_password">Current password</label>
                                                <input id="current_password" type="password" name="current_password"
                                                       autocomplete="off" required="">
                                                <span class="icon"> <i class="fa fa-eye eye_icon"></i></span>
                                                <span class="errorTextMsg" id="currPassError"></span>
                                            </div>
                                            <div class="form-gp togglePass2">
                                                <label for="new_password">New password</label>
                                                <input id="new_password" type="password" name="new_password"
                                                       autocomplete="off" required="">
                                                <span class="icon">   <i class="fa fa-eye eye_icon"></i></span>
                                                <span class="errorTextMsg" id="newPassError"></span>
                                            </div>
                                            <div class="form-gp togglePass3">
                                                <label for="confirm_password">Confirm Password</label>
                                                <input id="confirm_password" type="password" name="new_confirm_password"
                                                       autocomplete="off" required="">
                                                <span class="icon">  <i class="fa fa-eye eye_icon"></i></span>
                                                <span class="errorTextMsg" id="confPassError"></span>
                                            </div>
                                            <div class="submit-btn-area">
                                                <button id="pass_form_submit"
                                                        class="btn mid_cont_btn" type="submit">Update password
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="my_bookings" role="tabpanel">
                            <h2 class="wlc_msg">My bookings</h2>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover table-condensed">
                                            <thead class="thead-light">
                                            <tr>
                                                <td class="">Order Number</td>
                                                <td class="">Passenger Name</td>
                                                <td class="">Phone</td>
                                                <td class="">Trip</td>
                                                <td class="">Seat Number</td>
                                                <td class="">Date</td>
                                                <td class="">Action</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($orders as $order)
                                                <tr>
                                                    <td>{{$order->order_number}}</td>
                                                    <td>{{$order->passenger_name}}</td>
                                                    <td>{{$order->phone}}</td>
                                                    <td>{{$order->Trip->depart_from}} - {{$order->Trip->arrive_at}}</td>
                                                    <td>{{$order->seat_no}}</td>
                                                    <td>{{$order->Trip->travel_date}}</td>
                                                    <td>
                                                        <a class="btn btn-danger btn-sm" data-toggle="modal"
                                                           data-target="#exampleModalLong{{$order->id}}">
                                                            <i class="fas fa-trash"></i>
                                                            Delete
                                                        </a>
                                                        <div class="modal fade" id="exampleModalLong{{$order->id}}">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content bg-danger">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Warning!</h5>
                                                                        <button type="button" class="close"
                                                                                data-dismiss="modal">
                                                                            <span>&times;</span></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete
                                                                        order {{$order->order_number}}?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                                class="btn btn-outline-light"
                                                                                data-dismiss="modal">Close
                                                                        </button>
                                                                        <form method="post"
                                                                              action="{{route('booking.delete',$order->id)}}"
                                                                              style="display: inline;">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <button type="submit"
                                                                                    class="btn btn-outline-light">Delete
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <div class="trip-msg">
                                                    <strong>You haven't booking yet.</strong>
                                                </div>
                                            @endforelse
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
