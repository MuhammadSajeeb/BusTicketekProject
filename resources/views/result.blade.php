@extends('layout')
@section('hero')
    <section id="" class="d-flex align-items-center ">

        <div class="container">
            <div class="row">


            </div>
        </div>


  </section><!-- End Hero -->
@endsection
@section('main')
    <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about results">
  <div class="container" data-aos="fade-up">
    <div class="selecteddest">
      <strong>
          @if (count($trips)>0)
              {{$trips[0]->depart_from}} <i class="ti-arrow-right"></i> {{$trips[0]->arrive_at}} &nbsp; &nbsp; <a ><i class="ti-angle-left"></i></a> {{$trips[0]->travel_date}} <a><i class="ti-angle-right"></i></a>
          @endif
        <a href="#" onclick="myFunction()" class="changelink">Change <i class="fa fa-angle-down"></i></a></strong>
      <hr>
    </div>
    <div id="changedetail" style="display: none;">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modify Search </h5>
           
          </div>
          <div class="modal-body">
            <form action="/result" method="post">
                @csrf
              <div class="form-row">
                <div class="form-group col-md-3">
                  <label class="sr-only" for="inlineFormInputGroupUsername">Depart From</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="ti-location-pin"></i></div>
                    </div>

                    <input type="" id="deptdate" name="depart_from" class="form-control js-example-basic-single"
                      placeholder="Depart from" required="">
                  </div>
                </div>

                <div class="form-group col-md-3">
                  <label class="sr-only" for="inlineFormInputGroupUsername">Arrive From</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="ti-location-pin"></i></div>
                    </div>
                    <input type="text" class="form-control" id="arriveat" name="arrive_at" placeholder="Arrive at"
                      required="">
                  </div>
                </div>

                <div class="form-group col-md-3">
                  <label class="sr-only" for="inlineFormInputGroupUsername">Departure Date</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="ti-calendar"></i></div>
                    </div>
                    <input type="text" name="travel_date" class="form-control" id="datepicker1" placeholder="Departure Date"
                      required="" autocomplete="off">
                  </div>
                </div>

{{--                <div class="form-group col-md-2">--}}
{{--                  <label class="sr-only" for="inlineFormInputGroupUsername">Return Date</label>--}}
{{--                  <div class="input-group">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                      <div class="input-group-text"><i class="ti-calendar"></i></div>--}}
{{--                    </div>--}}
{{--                    <input type="text" name="return_date" class="form-control" id="datepicker2" placeholder="Return Date" autocomplete="false">--}}
{{--                  </div>--}}
{{--                </div>--}}

                <div class="form-group col-md-1">
                  <div class="text-center"><input class="btnsubmit" type="submit" value="Search Buses"
                      name="submit" /> </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row content">
      <div class="col-lg-1">

        <p></p>

      </div>

      <div class="col-lg-12 col-sm-12">
            @if (count($trips)>0)
                <table class="maintitletable">
                    <th>
                        <td class="busfnd"> <p><strong>{{count($trips)}} Bus(es)</strong> found</p></td>
                        <td class="busdata">Departure</td>
                        <td class="busdata">Duration</td>
                        <td class="busdata">Arrival</td>
                        <td class="busdata">Ratings</td>
                        <td class="busdata">Fare</td>
                        <td class="busdata seats">Seats Available</td>
                    </th>
                </table>
                <hr>

                @foreach ($trips as $trip)
                    <table border="0" class="busdetails">
                        <tr class="allbus">

                            <td class="opers">
                                <p class="opername"><strong>{{$trip->Bus->Operator->name}}</strong></p>
                                <p class="busty">{{$trip->Bus->bus_type}} A/C Sleeper (2+1)</p>
                            </td>
                            <td class="busdata dept">{{$trip->departure_time}}<br><small class="busty">{{$trip->depart_from}}</small></td>
                            <td class="busdata dur">
                                <?php
                                    $start=Carbon\Carbon::createFromIsoFormat('hh:mm a',$trip->departure_time,'UTC');
                                    $end=Carbon\Carbon::createFromIsoFormat('hh:mm a',$trip->arrival_time,'UTC');
                                    echo $end->diffInHours($start). ' Hours';
                                ?>
                            </td>
                            <td class="busdata dept">{{$trip->arrival_time}}<br><small class="busty">{{$trip->arrive_at}}</small></td>
                            <td class="busdata rating rate"><i class="ti-star"></i> 4.5</td>
                            <td class="busdata fare">BDT {{$trip->price}}</td>
                            <td class="busdata seats1">{{(($trip->available_seats_upto-$trip->available_seats_from)+1)-(count($trip->Tickets)+count($trip->Bookings))}} available<br> </td>
                            <td><button class="btndetail book"><a href="{{route('book',$trip->id)}}">Book</a></button></td>
                        </tr>
{{--                        <tr class="bottomlinks">--}}
{{--                            <td> <a href="#" onclick="myFunction3()">Boarding & Dropping</a></td>--}}
{{--                            <td> <a href="#" onclick="myFunction1()">Amenities</a></td>--}}
{{--                            <td> <a href="#" onclick="myFunction2()">Bus Photo</a></td>--}}
{{--                            <td> <a href="#">Review</a></td>--}}
{{--                            <td> <a href="#"></a></td>--}}
{{--                            <td> <a href="#"></a></td>--}}
{{--                            <td> <a href="#"></a></td>--}}
{{--                            <td> <a href="#"></a></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td colspan="8">--}}
{{--                                <div id="myDIV" style="display: none">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 mr-5">--}}
{{--                                            <strong>Boarding</strong><hr>--}}
{{--                                            <ul>--}}
{{--                                                @foreach ($trip->Routes as $route)--}}
{{--                                                    @if ($route->boarding_dropping=='Boarding')--}}
{{--                                                        <li>{{$route->place}} - {{$route->time}}</li>--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-5">--}}
{{--                                            <strong>Dropping</strong><hr>--}}
{{--                                            <ul>--}}
{{--                                                @foreach ($trip->Routes as $route)--}}
{{--                                                    @if ($route->boarding_dropping=='Dropping')--}}
{{--                                                        <li>{{$route->place}} - {{$route->time}}</li>--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td colspan="8">--}}
{{--                                <div id="myDIV1" style="display: none">--}}
{{--                                    <ul>--}}
{{--                                        @foreach ($trip->Bus->Aminities as $aminity)--}}
{{--                                            <li>{{$aminity->aminity}}</li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td colspan="8">--}}
{{--                                <div id="myDIV2" style="display: none">--}}
{{--                                    <img src="{{$trip->Bus->image_url}}" width="400" height="300" />--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
                @endforeach
            @else
                <div class="section-title">
                    <img src="img/no_bus.png" class="nobusfound">
                    <h4>Oops! No buses found.</h4>
                    <p>Services on this route are yet to be resumed.</p>
                </div>
            @endif

        <script type="text/javascript">
          function myFunction1() {
            var r = document.getElementById("myDIV1");
            var r2 = document.getElementById("myDIV");
            var r3 = document.getElementById("myDIV2");
            if (r.style.display === "none") {
              r.style.display = "block";
              r2.style.display = "none";
              r3.style.display = "none";
            } else {
              r.style.display = "none";
            }
          }

          function myFunction2() {
            var r = document.getElementById("myDIV2");
            var r2 = document.getElementById("myDIV");
            var r3 = document.getElementById("myDIV1");
            if (r.style.display === "none") {
              r.style.display = "block";
              r2.style.display = "none";
              r3.style.display = "none";
            } else {
              r.style.display = "none";
            }
          }
          function myFunction3() {
            var r = document.getElementById("myDIV");
            var r2 = document.getElementById("myDIV1");
            var r3 = document.getElementById("myDIV2");
            if (r.style.display === "none") {
              r.style.display = "block";
              r2.style.display = "none";
              r3.style.display = "none";
            } else {
              r.style.display = "none";
            }
          }
        </script>

        </table>

      </div>

    </div>

  </div>

  </div>
</section><!-- End About Us Section -->

 <!-- Modal -->


  </main><!-- End #main -->

@endsection


@section('script')
  <script type="text/javascript">

    function myFunction() {
      var x = document.getElementById("changedetail");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
@endsection
