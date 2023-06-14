<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Trip;
use Illuminate\Http\Request;

class RouteController extends Controller
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
        $routes=Route::orderBy('created_at','desc')->get();
        $trips=Trip::orderBy('created_at','desc')->get();
        return view('admin.routes',compact('routes','trips'));
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
        $count=count($request->route_place);
        for($i=0;$i<$count;$i++){
            $route=Route::create([
                'trip_id' => $request->trip_id,
                'boarding_dropping' => $request->boarding_dropping,
                'time' => $request->route_time[$i],
                'place' => $request->route_place[$i],
            ]);
        }
        return redirect('/routes')->with('success','route info updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy($routes_destroy_id)
    {
        Route::find($routes_destroy_id)->delete();
        return redirect('/routes')->with('success','route Destroy');
    }
}
