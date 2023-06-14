<?php

use App\Mail\BookedMail;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\SeatMap;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/p','PaymentController@pay');

Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);


Route::post('/result', function (Request $request) {
    $trips = App\Models\Trip::where('depart_from', 'LIKE', '%' . $request->depart_from . '%')
        ->where('arrive_at', 'LIKE', '%' . $request->arrive_at . '%')
        ->where('travel_date', 'LIKE', '%' . $request->travel_date . '%')->get();

    return view('result', compact('trips'));
});


Route::middleware(['auth', 'isUser'])->group(function () {
    Route::get('/book/{id}', function ($id) {
        $trips = \App\Models\Trip::find($id);
        $booked = $trips->Bookings;
        $confirmed = $trips->Tickets;
        $seats = \App\Models\SeatMap::all();
        $seat_values = [];
        for ($i = 1; $i <= 25; $i++) {
            if ($i < $trips->available_seats_from || $i > $trips->available_seats_upto) {
                if (SeatMap::SeatValue($i) != Null)
                    array_push($seat_values, SeatMap::SeatValue($i));
                else continue;
            }

        }
        foreach ($booked as $book) {
            if (SeatMap::SeatValue($book->seat_no) != Null)
                array_push($seat_values, SeatMap::SeatValue($book->seat_no));
            else continue;
        }

        foreach ($confirmed as $confirm) {
            if (SeatMap::SeatValue($confirm->seat_no) != Null)
                array_push($seat_values, SeatMap::SeatValue($confirm->seat_no));
            else continue;
        }
        //return json_encode($seat_values);
        return view('checkout', compact('trips', 'seat_values'));
    })->name('book');
//////////
    Route::get('paymentConfirmation', function () {
        $email = session()->get('email');
        $bank = session()->get('bank');
        return view('paymentConfirmation', compact('email', 'bank'));
    });
////////////
    Route::post('/pay', function (Request $request) {
        $orders = \App\Models\Booking::where('order_number', '=', $request->order_number)->get();
        $ticketNo = rand();
        foreach ($orders as $order) {
            $ticket = \App\Models\Ticket::create([
                'passenger_name' => $order->passenger_name,
                'age' => $order->age,
                'gender' => $order->gender,
                'seat_no' => $order->seat_no,
                'phone' => $order->phone,
                'email' => $order->email,
                'is_confirmed' => $order->is_confirmed,
                'ticket_number' => $ticketNo,
                'luggage' => $order->luggage,
                'price' => $order->price,
                'bank' => $request->bank,
                'trip_id' => $order->trip_id,
            ]);
        }
        foreach ($orders as $order)
            $order->delete();
        $bank = $request->bank;
        $ticket = \App\Models\Ticket::where('ticket_number', '=', $ticketNo)->first();
        $email = $ticket->email;

        //$tickets=\App\Models\Ticket::where('ticket_number','=',$ticketNo)->get();
        //return view('paymentConfirmation',compact('bank','email'));
        return redirect('/paymentConfirmation')->with(['email' => $email, 'bank' => $bank]);
    });
//    //////////
    Route::post('/checkout', function (Request $request) {
        if ($request->addticket == 'book') {
            $count = count($request->name);
            $trip = \App\Models\Trip::findOrFail($request->trip_id);
            $r = rand();
            for ($i = 0; $i < $count; $i++) {
                $price = $trip->price;
                if ($request->luggage[$i] > $trip->allowable_luggage) {
                    $x = ($request->luggage[$i] - $trip->allowable_luggage) * $trip->extra_luggage_fee;
                    $price += $x;
                }

                $ticket = \App\Models\Booking::create([
                    'user_id' => \Illuminate\Support\Facades\Auth::id(),
                    'passenger_name' => $request->name[$i],
                    'age' => $request->age[$i],
                    'gender' => $request->gender[$i],
                    'seat_no' => $request->seat_no[$i],
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'is_confirmed' => FALSE,
                    'order_number' => $r,
                    'luggage' => $request->luggage[$i],
                    'trip_id' => $request->trip_id,
                    'price' => $price,
                ]);

            }

            $tick = \App\Models\Booking::where('order_number', '=', $r)->get();
            $tickets = \App\Http\Resources\BookingResource::collection($tick);
            $t = \App\Models\Trip::find($request->trip_id);
            $single_price = $t->price;
            // Mail::to($tick->first()->email)->send(new BookedMail($tickets,$r));
            return view('summery', compact('tickets', 'single_price'))->with('success', 'Your order has been submitted Successfully, And an email has been sent.');
        } else if ($request->addticket == 'pay') {
            $count = count($request->name);
            $trip = \App\Models\Trip::findOrFail($request->trip_id);
            $r = rand();
            for ($i = 0; $i < $count; $i++) {
                $price = $trip->price;
                if ($request->luggage[$i] > $trip->allowable_luggage) {
                    $x = ($request->luggage[$i] - $trip->allowable_luggage) * $trip->extra_luggage_fee;
                    $price += $x;
                }
                $ticket = \App\Models\Booking::create([
                    'passenger_name' => $request->name[$i],
                    'age' => $request->age[$i],
                    'gender' => $request->gender[$i],
                    'seat_no' => $request->seat_no[$i],
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'is_confirmed' => FALSE,
                    'order_number' => $r,
                    'luggage' => $request->luggage[$i],
                    'trip_id' => $request->trip_id,
                    'price' => $price,
                ]);

            }

            $tick = \App\Models\Booking::where('order_number', '=', $r)->get();
            $tickets = \App\Http\Resources\BookingResource::collection($tick);
            $t = \App\Models\Trip::find($request->trip_id);
            $single_price = $t->price;
            return view('paySummery', compact('tickets', 'single_price'));
        } else {

        }
    })->name('checkout');
});

Route::get('/terms', function () {
    return view('termsAndCondition');
});

Route::get('/privacy', function () {
    return view('privacyPolicy');
});

Route::get('/about', function () {
    return view('aboutUs');
});

Route::get('/howItWorks', function () {
    return view('howItWorks');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/cancelTrip', function () {
    return view('cancelTrip');
});

Route::post('/cancelTrip', function (Request $request) {
    $orders = Booking::where('order_number', '=', $request->order_number)->where('phone', '=', $request->phone)->get();
    return redirect('/cancelTrip')->with('bookings', $orders);
    //return view('cancelTrip');
});

Route::delete('booking/{id}', function ($id) {
    $order = Booking::findOrFail($id);
    $order->delete();
    return redirect()->back()->with('success', 'Order Deleted Successfully');
})->name('booking.delete');

// admin routes


Route::get('/admin', function () {
    if (Auth::check() && (Auth::user()->roles === 'admin'))
        return redirect('dashboard');
    return view('admin.login');
});

Route::get('login', function () {
    return view('admin.login');
})->name('login');

Route::post('login', 'AuthController@authenticate');


Route::get('logout', 'AuthController@logout');

Route::get('dashboard', 'AuthController@checkLogin')->middleware('isAdmin');

Route::get('operators', 'OperatorController@index')->middleware('isAdmin');

Route::post('operators', 'OperatorController@store')->middleware('isAdmin');

Route::delete('operators/{id}', 'OperatorController@destroy')->name('operator.delete');

Route::get('buses', 'BusController@index')->middleware('isAdmin');

Route::post('buses', 'BusController@store');

Route::delete('buses/{id}', 'BusController@destroy')->name('bus.delete');

Route::post('aminities', 'BusController@addAminity');

Route::get('tickets', 'TicketController@index')->middleware('isAdmin');

Route::get('tickets/{id}', 'TicketController@edit')->name('ticket.approve');

Route::get('trips', 'TripController@index')->middleware('isAdmin');

Route::get('trips/{id}', 'TripController@show')->middleware('isAdmin');

Route::get('bookings', 'BookingController@index')->middleware('isAdmin');

Route::put('booking/{id}', "BookingController@edit")->name('booking.approve');

Route::get('newTrip', 'TripController@create')->middleware('isAdmin');

Route::get('editTrip/{id}', 'TripController@edit')->middleware('isAdmin');

Route::put('editTrip', 'TripController@update');

Route::post('addTrip', 'TripController@store');

Route::get('routes', 'RouteController@index')->middleware('isAdmin');
Route::get('routes/destroy/{id}', 'RouteController@destroy')->name('route.destroy');

Route::post('addRoute', 'RouteController@store');


// operator routes


Route::prefix('operator')->group(function () {

    Route::get('/', function () {
        if (Auth::guard('operator')->check())
            return redirect('/operator/dashboard');
        return view('operator.login');
    });


    Route::get('login', function () {
        return view('operator.login');
    })->name('operator.login');

    Route::post('login', 'OperatorAuthController@authenticate');

    Route::get('logout', 'OperatorAuthController@logout');

    Route::get('dashboard', 'OperatorAuthController@checkLogin');

    Route::get('buses', 'OperatorAdminController@Bus');

    Route::post('buses', 'OperatorAdminController@AddBus');

    Route::post('aminities', 'OperatorAdminController@addAminity');

    Route::delete('/buses/{id}', 'OperatorAdminController@destroyBus')->name('operator.bus.delete');

    Route::get('trips', 'OperatorAdminController@AllTrips');

    Route::get('trips/{id}', 'OperatorAdminController@showTrip');

    Route::get('editTrip/{id}', 'OperatorAdminController@editTrip');

    Route::put('editTrip', 'OperatorAdminController@updateTrip');

    Route::get('tickets', 'OperatorAdminController@AllTickets');

    Route::get('bookings', 'OperatorAdminController@AllBookings');

    Route::get('routes', 'OperatorAdminController@AllRoutes');

    Route::post('addRoute', 'OperatorAdminController@AddRoutes');
});
