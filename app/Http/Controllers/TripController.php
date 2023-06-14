<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Operator;
use App\Models\Trip;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Exception;

class TripController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips=Trip::orderBy('created_at','desc')->get();
        return view('admin.trips',compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operators=Operator::orderBy('created_at','desc')->get();
        $buses=Bus::orderBy('created_at','desc')->get();
        return view('admin.newTrip',compact('operators','buses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i = 0;$i < ($request->trip_days_for ?? 1); $i++){
            $trip=Trip::create([
                'trip_no' => $request->trip_no+$i,
                'travel_date' => Carbon::parse($request->departure_date)->addDays($i)->format('d-M-Y'),
                'arrival_date' => Carbon::parse($request->arrival_date)->addDays($i)->format('d-M-Y'),
                'depart_from' => $request->depart_from,
                'arrive_at' => $request->arrive_at,
                'departure_time' => $request->departure_time,
                'arrival_time' => $request->arrival_time,
                'price'=> $request->price,
                'status' => $request->status,
                'available_seats_from' => $request->seats_from,
                'available_seats_upto' => $request->seats_upto,
                'allowable_luggage' => $request->allowable_luggage,
                'extra_luggage_fee' => $request->extra_luggage_fee,
                'total_trip_days_for' => $request->trip_days_for,
                'bus_id' => $request->bus_id,
            ]);
        }

//        $trip=Trip::create($datas);
        if($trip)
            return redirect('/trips')->with('success','Trip info uploaded Successfully');
        else
            return redirect('/trips')->with('alert','Trip  info upload failed');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trip=Trip::findOrFail($id);
        return view('admin.tripDetail',compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $trip=Trip::findOrFail($id);
        $bus=Bus::findOrFail($trip->bus_id);
        $operator=Operator::findOrFail($bus->operator_id);
        //dd($operator);


        return view('admin.editTrip',compact('operator','bus','trip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
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

            return redirect('/trips')->with('success','Trip info updated Successfully');

        }catch(Exception $ex){
            return redirect('/trips')->with('alert','Trip  info update failed');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
