@extends('layout')

@section('hero')
    <section id="hero1" class="d-flex align-items-center">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section><!-- End Hero -->
@endsection

@section('main')
    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Cancel Booking</h2>
                </div>

                <div class="row content d-flex flex-row align-items-center">
                    <div class="col-lg-12 d-flex flex-column justify-content-center text-center">
                        <form action="/cancelTrip" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="sr-only" for="inlineFormInputGroupUsername">Order Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-ticket-alt"></i></div>
                                        </div>
                                        <input type="text"  name="order_number" class="form-control js-example-basic-single" placeholder="Ticket or Order Number" required="">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="sr-only" for="inlineFormInputGroupUsername">Phone Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-phone"></i></div>
                                        </div>
                                        <input type="tel"  name="phone" class="form-control js-example-basic-single" placeholder="Phone Number" required="">
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <div class="text-center"><input class="btnsubmit" type="submit" value="Search Order" /> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
        @if ($orders=Session::get('bookings'))
            <section>
                <div class="container">

                    <div class="section-title">
                        <h2>Booking info</h2>
                    </div>

                    <div class="row content d-flex flex-row align-items-center">
                        <div class="col-lg-12 d-flex flex-column align-items-center text-center">
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
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{$order->order_number}}</td>
                                                <td>{{$order->passenger_name}}</td>
                                                <td>{{$order->phone}}</td>
                                                <td>{{$order->Trip->depart_from}} - {{$order->Trip->arrive_at}}</td>
                                                <td>{{$order->seat_no}}</td>
                                                <td>{{$order->Trip->travel_date}}</td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$order->id}}">
                                                        <i class="fas fa-trash"></i>
                                                        Delete
                                                    </a>
                                                    <div class="modal fade" id="exampleModalLong{{$order->id}}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content bg-danger">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Warning!</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete order {{$order->order_number}}?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                                    <form method="post" action="{{route('booking.delete',$order->id)}}" style="display: inline;">
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
            </section>
        @endif
    </main>
@endsection
