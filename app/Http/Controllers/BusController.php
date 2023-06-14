<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Aminity;
use App\Models\Operator;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses=Bus::orderBy('created_at','desc')->get();
        $operators=Operator::all();
        return view('admin.buses',compact('buses','operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            return redirect('/buses')->with('success','Bus info uploaded successfully');
        return redirect('/buses')->with('alert','Bus info upload Failed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus=Bus::findOrFail($id);
        $bus->delete();
        return redirect('/buses')->with('success','Bus info Deleted');
    }


    public function addAminity(Request $request)
    {
        foreach($request->aminities as $ami){
             $aminity=Aminity::create([
                'aminity' => $ami,
                'bus_id' => $request->bus_id
            ]);
        }
        return redirect('/buses')->with('success','Aminity Added');
    }
}
