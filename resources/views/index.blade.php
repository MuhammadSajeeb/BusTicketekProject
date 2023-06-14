@extends('layout')

@section('hero')
    <section id="hero" class="d-flex align-items-center mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                     data-aos="fade-up" data-aos-delay="200">
                    <h1>Bus Ticket Booking Platform</h1>
                    <h2>Your one stop bus ticket booking platform for your travel!</h2>
                    <div class="d-lg-flex">
                        <div class="d-lg-flex mb-3">
                            <form action="/result" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Depart From</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-location-pin"></i></div>
                                            </div>
                                            @php
                                                $arr = $trips_routes->toArray();
                                                $trips = array_unique(array_column($arr, 'depart_from'));
                                            @endphp
                                            <select name="depart_from" class="form-control" id="" required="">
                                                <option value="" selected disabled>Depart from</option>
{{--                                                <option value="" selected>Select</option>--}}

                                                @foreach($trips as $trips_route)

                                                    <option value="{{$trips_route}}">{{$trips_route}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Arrive at</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-location-pin"></i></div>
                                            </div>
                                            @php
                                                $arr1 = $trips_routes->toArray();
                                                $arrive_at= array_unique(array_column($arr1, 'arrive_at'));
                                            @endphp
                                            <select name="arrive_at" class="form-control" id="" required="">
                                                <option value="" selected disabled>Arrive at</option>
                                                {{--                                                <option value="" selected>Select</option>--}}

                                                @foreach($arrive_at as $trips_route)

                                                    <option value="{{$trips_route}}">{{$trips_route}}</option>
                                                @endforeach
                                            </select>
{{--                                            <input type="text" class="form-control" id="arriveat" name="arrive_at"--}}
{{--                                                   placeholder="Arrive at" required="">--}}
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label class="sr-only" for="inlineFormInputGroupUsername">Departure Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="ti-calendar"></i></div>
                                            </div>
                                            <input type="text" name="travel_date" class="form-control" id="datepicker1"
                                                   placeholder="Departure Date" required="" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <div class="text-center"><input class="btnsubmit" type="submit"
                                                                        value="Search Buses" name="submit"/></div>
                                    </div>
                                </div>


                            </form>


                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                @auth()
                    <div class="section-title recom-wrap">
                        <h5>Recommendation Routes : </h5>
                        @foreach($recommendeds as $recommended)
                            <h6><span style="color:#ddd;"><i class="ti-location-pin" aria-hidden="true"></i></span>
 {{$recommended['depart_from'] ??null}} to {{$recommended['arrive_at'] ??null}}</h6>
                        @endforeach

                    </div>
            @endauth
            </div>

        </div>

    </section><!-- End Hero -->
@endsection

@section('main')
    <main id="main">

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>OUR AVAILABLE ROUTES</h2>
                </div>

                <div class="row content d-flex flex-row align-items-center">
                    @foreach($trips_routes as $trips_route)
                        <div class="col-lg-4 text-center">
                            <div class="route_wrap">
                                <img src="{{asset('img/indexicons/map.png')}}" alt="Location">
                                <h3 class="title-01"> {{$trips_route->depart_from }} - {{ $trips_route->arrive_at}}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End About Us Section -->


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>WHY BOOK WITH US?</h2>
                </div>

                <div class="row content d-flex flex-row align-items-center">
                    <div class="col-lg-4 d-flex flex-column align-items-center text-center f">

                        <div class="feature-wrap">
                            <div class="mb-3 feature-box">
                                <img src="{{asset('img/indexicons/bus.png')}}" alt="">
                            </div>
                            <div>
                                <h4 class="title-01">MULTIPLE BUS OPERATORS</h4>
                                <p>Several bus service providers available on our platforms</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column align-items-center text-center ">

                        <div class="feature-wrap">
                            <div class="mb-3 feature-box">
                                <img src="{{asset('img/indexicons/booking.png')}}" alt="">
                            </div>
                            <div>
                                <h4 class="title-01">FOUR PLATFORMS</h4>
                                <p>Tickets are available for booking through website, mobile app, USSD and call
                                    center</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column align-items-center text-center">

                        <div class="feature-wrap">
                            <div class="mb-3 feature-box">
                                <img src="{{asset('img/indexicons/comments.png')}}" alt="">
                            </div>
                            <div>
                                <h4 class="title-01">SUPERIOR CUSTOMER SERVICE</h4>
                                <p>Superior and professional customer service from booking to boarding the bus</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>MORE FEATURES ON OUR PLATFORM</h2>

                </div>

                <div class="row content d-flex flex-row align-items-center ">
                    <div class="col-lg-4 d-flex flex-column align-items-center text-center">

                        <div class="feature-wrap">
                            <div class="mb-3 feature-box">
                                <img src="{{asset('img/indexicons/map.png')}}" alt="Location">
                            </div>
                            <div>
                                <h4 class="title-01">BUS LOCATION TRACKING</h4>
                                <p>Track your bus for convenient pickup and drop-off locations</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column align-items-center text-center ">

                        <div class="feature-wrap">
                            <div class="mb-3 feature-box">
                                <img src="{{asset('img/indexicons/rating.png')}}" alt="">
                            </div>
                            <div>
                                <h4 class="title-01">SERVICE REVIEW</h4>
                                <p>View previous travelers service experiences and ratings</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex flex-column align-items-center text-center">

                        <div class="feature-wrap">
                            <div class="mb-3 feature-box">
                                <img src="{{asset('img/indexicons/secure-payment.png')}}" alt="">
                            </div>
                            <div>
                                <h4 class="title-01">FLEXIBLE PAYMENT OPTIONS</h4>
                                <p>Choose your preferred payment system from multiple payment options</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
@endsection
