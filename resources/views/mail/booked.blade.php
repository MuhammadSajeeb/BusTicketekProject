@component('mail::message')
    Dear customer you have successfully booked your seats.
    your order number is #{{$orderNumber}}.
    <div class="justify-content-center" style="text-align: center; overflow-x: auto;">
        <strong>Booking Details</strong>
        <table style="text-align: center; border: 1px solid black;" >
            <thead style="border-color: #04AA6D;">
                <tr>
                    <th scope="col" style="background-color: #785abe; color: white;">Bus</th>
                    <th scope="col" style="background-color: #785abe; color: white;">Passenger(s)</th>
                    <th scope="col" style="background-color: #785abe; color: white;">Departure </th>
                    <th scope="col" style="background-color: #785abe; color: white;">Arrival</th>
                    <th scope="col" style="background-color: #785abe; color: white;">Seat</th>
                    <th scope="col" style="background-color: #785abe; color: white;">Luggage</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->Trip->Bus->Operator->name}}</td>
                        <td>{{$ticket->passenger_name}}</td>
                        <td>{{$ticket->Trip->travel_date}} <br> {{$ticket->Trip->departure_time}} <br> {{$ticket->Trip->depart_from}} <br> </td>
                        <td>{{$ticket->Trip->arrival_date}} <br>{{$ticket->Trip->arrival_time}} <br> {{$ticket->Trip->arrive_at}} <br> </td>
                        <td>
                            @foreach ($tickets as $tic)
                                {{$tic->seat_no}} ,
                            @endforeach
                        </td>
                        <td>{{$ticket->luggage}} PC</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <strong>Your seat reserved only for 3 hours, after 3 hours your booking will expire!</strong>
@endcomponent
