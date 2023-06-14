<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
use Illuminate\Support\Facades\Auth;
use App\Models\Bus;
use App\Models\Aminity;
use App\Models\Trip;
use App\Models\Ticket;
use App\Models\Booking;
use App\Models\Route;

class OperatorAdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth:operator');
    }

    public function Bus(){
        $operator= Auth::guard('operator')->user();
        $buses=$operator->Buses;
        return view('operator.buses',compact('buses','operator'));
    }

    public function AddBus(Request $request){
        $destination="busImages/";
        $image=$request->file('photo');
        $busImage =  $request->plate_no.str_replace(' ','_','car')."_".time().".".$image->getClientOriginalExtension();
        $image->move($destination,$busImage);
        $bus=Bus::create([
            'bus_type' => $request->bus_type,
            'plate_no' => $request->plate_no,
            'no_of_seats' => $request->no_of_seats,
            'status' => $request->status,
            'operator_id' => $request->operator_id,
            'image_url' => $destination.$busImage,

        ]);

        if($bus)
            return redirect('/operator/buses')->with('success','Bus info uploaded successfully');
        return redirect('/operator/buses')->with('alert','Bus info upload Failed');
    }

    public function addAminity(Request $request)
    {
        foreach($request->aminities as $ami){
             $aminity=Aminity::create([
                'aminity' => $ami,
                'bus_id' => $request->bus_id
            ]);
        }
        return redirect('/operator/buses')->with('success','Aminity Added');
    }

    public function destroyBus($id)
    {
        $bus=Bus::findOrFail($id);
        $bus->delete();
        return redirect('/operator/buses')->with('success','Bus info Deleted');
    }

    public function AllTrips()
    {
        $trip=Trip::orderBy('created_at','desc')->get();
        $trips=[];
        $op_id=auth()->guard('operator')->user()->id;

        foreach($trip as $t){
            if($t->Bus->Operator->id==$op_id){
                array_push($trips,$t);
            }
        }

        return view('operator.trips',compact('trips'));
    }

    public function showTrip($id)
    {
        $trip=Trip::findOrFail($id);
        return view('operator.tripDetail',compact('trip'));
    }

    public function editTrip($id)
    {
        //dd($id);
        $trip=Trip::findOrFail($id);
        $bus=Bus::findOrFail($trip->bus_id);
        $operator=Operator::findOrFail($bus->operator_id);
        //dd($operator);


        return view('operator.editTrip',compact('operator','bus','trip'));
    }

    public function updateTrip(Request $request, Trip $trip)
    {
        try{
            $trip=Trip::findOrFail($request->trip_id);
            $trip->travel_date = $request->departure_date;
            $trip->arrival_date = $request->arrival_date;
            $trip->depart_from = $request->depart_from;
            $trip->arrive_at = $request->arrive_at;
            $trip->departure_time = $request->departure_time;
            $trip->arrival_time = $request->arrival_time;
            $trip->price = $request->price;
            $trip->status = $request->status;
            $trip->available_seats_from = $request->seats_from;
            $trip->available_seats_upto = $request->seats_upto;
            $trip->allowable_luggage = $request->allowable_luggage;
            $trip->extra_luggage_fee = $request->extra_luggage_fee;
            $trip->save();

            return redirect('/operator/trips')->with('success','Trip info updated Successfully');

        }catch(Exception $ex){
            return redirect('/operator/trips')->with('alert','Trip  info update failed');
        }

    }

    public function AllTickets()
    {
        $ticket=Ticket::orderByDesc('created_at','desc')->get();
        $tickets=[];
        $op_id=auth()->guard('operator')->user()->id;
        foreach($ticket as $t){
            if($t->Trip->Bus->Operator->id==$op_id){
                array_push($tickets,$t);
            }
        }
        return view('operator.tickets',compact('tickets'));
    }

    public function AllBookings()
    {
        $booking=Booking::orderByDesc('created_at','desc')->get();
        $bookings=[];
        $op_id=auth()->guard('operator')->user()->id;
        foreach($booking as $b){
            if($b->Trip->Bus->Operator->id==$op_id){
                array_push($bookings,$b);
            }
        }
        return view('operator.bookings',compact('bookings'));
    }

    public function AllRoutes(){
        $trip=Trip::orderBy('created_at','desc')->get();
        $route=Route::orderBy('created_at','desc')->get();
        $trips=[];
        $routes=[];
        $op_id=auth()->guard('operator')->user()->id;

        foreach($trip as $t){
            if($t->Bus->Operator->id==$op_id){
                array_push($trips,$t);
            }
        }

        foreach($route as $r){
            if($r->Trip->Bus->Operator->id==$op_id){
                array_push($routes,$r);
            }
        }

        return view('operator.routes',compact('routes','trips'));
    }

    public function AddRoutes(Request $request)
    {
        $count=count($request->route_place);
        for($i=0;$i<$count;$i++){
            $route=Route::create([
                'trip_id' => $request->trip_id,
                'boarding_dropping' => $request->boarding_dropping,
                'time' => $request->route_time[$i],
                'place' => $request->route_place[$i],
            ]);
        }
        return redirect('/operator/routes')->with('success','route info updated');
    }
}
