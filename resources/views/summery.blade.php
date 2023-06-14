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
		<section id="about" class="about">

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
										<table class="table table-striped table-bordered table-hover table-condensed text-center">
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
                                                        <td>{{$ticket->Trip->travel_date}} <br> {{$ticket->Trip->departure_time}} <br> {{$ticket->Trip->depart_from}} <br> </td>
                                                        <td>
                                                            <?php
                                                                $start=Carbon\Carbon::createFromIsoFormat('hh:mm a',$ticket->Trip->departure_time,'UTC');
                                                                $end=Carbon\Carbon::createFromIsoFormat('hh:mm a',$ticket->Trip->arrival_time,'UTC');
                                                                echo $end->diffInHours($start). ' Hours';
                                                            ?>
                                                        </td>
                                                        <td>{{$ticket->Trip->arrival_date}} <br> {{$ticket->Trip->arrival_time}} <br> {{$ticket->Trip->arrive_at}} <br> </td>
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





									<div class="modal-content col-md-6 mb-3">
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
                                                                $total=0;
                                                                $allowable_lug=0;
                                                                $lug_fee=0;
                                                            ?>
                                                            @foreach ($tickets as $tic)
                                                                <?php
                                                                    $baggage+=$tic->luggage;
                                                                    $total+=$tic->price;
                                                                ?>
                                                            @endforeach

                                                            @foreach ($tickets as $tic)
                                                                <?php
                                                                    $allowable_lug=$tic->Trip->allowable_luggage;
                                                                    $lug_fee=$tic->Trip->extra_luggage_fee;
                                                                ?>
                                                            @endforeach

                                                            @if ($baggage>(count($tickets)*$allowable_lug))
                                                                <td>Exra Baggage {{$baggage-(count($tickets)*$allowable_lug)}} * {{$lug_fee}}</td>
															    <td>Tk. {{($baggage-(count($tickets)*$allowable_lug))*$lug_fee}}</td>
                                                            @endif
														</tr>
														<tr>
															<th scope="col">Total </th>
															<th scope="col">Tk. {{$total}}</td>
														</tr>
													</thead>
												</table>
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
