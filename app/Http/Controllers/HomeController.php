<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $allData = \App\Models\Trip::select('depart_from', 'arrive_at')->get();
        $unique = $allData->unique(function ($item) {
            return $item['depart_from'] . $item['arrive_at'];
        });

        $orders = Booking::where('user_id', Auth::id() ?? null)->get();
        if ($orders->count() > 2) {
            $collections = [];
            foreach ($orders as $order) {

                $collections[] = [
                    'depart_from' => $order->trip->depart_from,
                    'arrive_at' => $order->trip->arrive_at,
                ];

            }


            $array = array_map(function ($element) {
                return $element['depart_from'] . '_' . $element['arrive_at'];
            }, $collections);

            $array2s = (array_count_values($array));

            function secondMax($arr)
            {
                $max = $second = 0;
                $maxKey = $secondKey = null;

                foreach ($arr as $key => $value) {
                    if ($value > $max) {
                        $second = $max;
                        $secondKey = $maxKey;
                        $max = $value;
                        $maxKey = $key;
                    } elseif ($value > $second) {
                        $second = $value;
                        $secondKey = $key;
                    }
                }

                return [$maxKey, $secondKey];
            }

            $recommendeds = secondMax($array2s);

            $finalData = [];
            foreach ($recommendeds as $recommended) {
                $recommended = explode("_", $recommended);
                $finalData[] = [
                    'depart_from' => $recommended[0] ??null,
                    'arrive_at' => $recommended[1] ??null,
                ];
            }

        } elseif ($orders->count() > 2) {
            $finalData = [];
            foreach ($orders as $order) {

                $finalData[] = [
                    'depart_from' => $order->trip->depart_from,
                    'arrive_at' => $order->trip->arrive_at,
                ];

            }
        } else {
            $finalData = [];
        }


        $data = [
            'trips_routes' => $unique,
            'orders' => $orders ?? [],
            'recommendeds' => $finalData ?? [],
        ];
        return view('index')->with($data);
    }

}
