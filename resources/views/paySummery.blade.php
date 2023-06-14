@extends('layout')

@section('hero')
    <section id="" class="d-flex align-items-center">

        <div class="container">
            <div class="row">


            </div>
        </div>


  </section><!-- End Hero -->
@endsection

@section('main')


    <main id="main">

		<!-- ======= Passanger Section ======= -->
		<section id="about" class="about results">

            <div class="row mb-5">
                @if (!empty($success))
                    <div class="alert alert-success alert-dismiss" style="width: 50%;position: absolute;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $success }}</strong>
                    </div>
                @endif
                @if (!empty($alert))
                    <div class="alert alert-danger alert-dismiss" style="width: 50%;position: absolute;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $alert }}</strong>
                    </div>
                @endif
            </div>
			<div class="row content">


				<div class="col-lg-12">

					<!-- data table start -->
					<div class="col-12 mt-5">
						<div class="card ">
							<div class="card-body">


								<!-- Passanger Information Starts -->

								<div class="">
									<div class="modal-header">
										<h4 class="modal-title">Order Summery </h4><br>


									</div>
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover table-condensed">
											<tr>
												<th>Date</th>
												<th>Order #</th>
												<th>Status</th>
											</tr>
											<tr>
												<td>
                                                    <?php $timestamp =  $tickets[0]->created_at;
                                                    echo date("F jS, Y", strtotime($timestamp)); ?>
                                                </td>
												<td>{{$tickets[0]->order_number}}</td>
												<td>Booked</td>
											</tr>

										</table>

									</div>
									<div class="modal-header">
										<h4 class="modal-title">Booking Details </h4><br>
									</div>

									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover table-condensed">
											<thead class="thead-light">
												<tr>
												<th scope="col">Bus found</th>
												<th scope="col">Departure </th>
												<th scope="col">Duration</th>
												<th scope="col">Arrival</th>
												<th scope="col">Seat</th>
												<th scope="col">Luggage</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($tickets as $ticket)
                                                    <tr>
                                                        <th scope="row">{{$ticket->Trip->Bus->Operator->name}}</th>
                                                        <td>{{$ticket->Trip->departure_time}} <br> {{$ticket->Trip->depart_from}} <br> </td>
                                                        <td>6:45</td>
                                                        <td>{{$ticket->Trip->arrival_time}} <br> {{$ticket->Trip->arrive_at}} <br> </td>
                                                        <td>
                                                            @foreach ($tickets as $tic)
                                                                {{$tic->seat_no}} ,
                                                            @endforeach
                                                        </td>
                                                        <td>{{$ticket->luggage}} PC</td>
                                                    </tr>
                                                @endforeach

                                                <tr>
                                                    <th scope="row">Passanger(s)</th>
                                                    <td colspan="5">
                                                        @foreach ($tickets as $tic)
                                                            {{$tic->passenger_name}} ({{$tic->gender}}) {{$tic->age}} ,
                                                        @endforeach
                                                    </td>
                                                </tr>


											</tbody>
										</table>
									</div>





									<div class="row">
                                        <div class="modal-content col-md-5 mb-3 mr-5">
                                            <div class="modal-header">
                                                <p class="modal-title">Payment Detail</p>

                                            </div>
                                            <div class="modal-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover table-condensed">
                                                        <thead class="thead-light">


                                                            <tr>
                                                                <th scope="col">Fare   {{count($tickets)}} * {{$single_price}}</th>
                                                                <th scope="col">Tk. {{count($tickets)*$single_price}}</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Tax</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <?php
                                                                    $baggage=0;
                                                                    $total=0
                                                                ?>
                                                                @foreach ($tickets as $tic)
                                                                    <?php
                                                                        $baggage+=$tic->luggage;
                                                                        $total+=$tic->price;
                                                                    ?>
                                                                @endforeach

                                                                @if ($baggage>(count($tickets)*2))
                                                                    <td>Exra Baggage {{$baggage-(count($tickets)*2)}} * 70</td>
                                                                    <td>{{($baggage-(count($tickets)*2))*70}}</td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                <th scope="col">Total </th>
                                                                <th scope="col">{{$total}}</td>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-content col-md-6 mb-3">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Payment Mode</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span></span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/pay" method="POST">
                                                    @csrf
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom02">Select Payment Method</label><br>
                                                        <div class="col-12">
                                                            <div  class="row justify-content-between">
                                                                <a href=""><img src="{{asset('banks/abyssinia.png')}}" alt="" height="80" width="100"></a>
                                                                <a href=""><img src="{{asset('banks/bbr1.png')}}" alt="" height="80" width="100"></a>
                                                                <a href="https://www.cbeib.com.et/ARCIB-4/servlet/BrowserServlet"><img src="{{asset('banks/cbe.jpg')}}" alt="" height="80" width="100"></a>
                                                                <a href=""><img src="{{asset('banks/dashen.png')}}" alt="" height="80" width="100"></a>
                                                            </div>
                                                            <div class="row">

                                                            </div>
                                                            <div class="row justify-content-between">
                                                                <a href=""><img src="{{asset('banks/coop.svg')}}" alt="" height="80" width="100"></a>
                                                                <a href=""><img src="{{asset('banks/zemen.png')}}" alt="" height="80" width="100"></a>
                                                                <a href="https://www.wegagen.com/features/login/"><img src="{{asset('banks/wegagen.png')}}" alt="" height="80" width="100"></a>
                                                                <a href=""><img src="{{asset('banks/TeleBirr-Logo.svg')}}" alt="" height="80" width="100"></a>
                                                            </div>
                                                        </div>
                                                        {{-- <small>Once you select your payment method and place your order, we will
                                                            email you our account details.</small>
                                                            <input type="hidden" name="order_number" value="{{$tickets[0]->order_number}}" required> --}}
                                                        <select id="operator" class="form-control" name="bank" required hidden>
                                                            <option value="CBE">CBE</option>
                                                            <option value="Dashen Bank">Dashen Bank</option>
                                                            <option value="Abyssinia Bank">Abyssinia Bank</option>
                                                            <option value="Wegagen Bank">Wegagen Bank</option>
                                                            <option value="United Bank">United Bank</option>
                                                            <option value="">Tele Birr</option>
                                                            <option value="CBE Birr">CBE Birr</option>

                                                        </select>
                                                    </div>
                                                    {{-- <div class="col-md-12 mb-3">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="customRadio"
                                                                class="custom-control-input" required>
                                                            <label class="custom-control-label" for="customRadio2">I have read,
                                                                understood and agree to the <a data-toggle="modal"
                                                                    data-target="#tercond" class="trmcon" href="#"> Terms and
                                                                    Condtions</a></label>

                                                        </div>
                                                    </div> --}}
                                                    {{-- <div class="modal-footer">
                                                        <button class="btn btn-success" type="submit">Pay</button>
                                                    </div> --}}
                                                </form>
                                            </div>



                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Passanger Information Ends -->
			</div>
		</section><!-- End Passenger Section -->
	</main><!-- End #main -->
@endsection
