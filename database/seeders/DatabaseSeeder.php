<?php

namespace Database\Seeders;

use App\Models\Bus;
use App\Models\Operator;
use App\Models\Route;
use App\Models\SeatMap;
use App\Models\Trip;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => 'admin@gmail.com',
            'phone' => '01857446931',
            'roles' => 'admin',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => "User",
            'email' => 'user@gmail.com',
            'phone' => '01888888888',
            'roles' => 'user',
            'password' => Hash::make('12345678'),
        ]);
        SeatMap::create(
            [
                'seat_no' => 1,
                'seat_value' => '1_1'
            ]);
        SeatMap::create([
            'seat_no' => 2,
            'seat_value' => '1_2'
        ]);
        SeatMap::create([
            'seat_no' => 3,
            'seat_value' => '2_2'
        ]);
        SeatMap::create([
            'seat_no' => 4,
            'seat_value' => '2_4'
        ]);
        SeatMap::create([
            'seat_no' => 5,
            'seat_value' => '2_5'
        ]);
        SeatMap::create([
            'seat_no' => 6,
            'seat_value' => '3_1'
        ]);
        SeatMap::create([
            'seat_no' => 7,
            'seat_value' => '3_2'
        ]);
        SeatMap::create([
            'seat_no' => 8,
            'seat_value' => '1_1'
        ]);
        SeatMap::create([
            'seat_no' => 9,
            'seat_value' => '3_4'
        ]);
        SeatMap::create([
            'seat_no' => 10,
            'seat_value' => '3_5'
        ]);
        SeatMap::create([
            'seat_no' => 11,
            'seat_value' => '4_1'
        ]);
        SeatMap::create([
            'seat_no' => 12,
            'seat_value' => '4_2'
        ]);
        SeatMap::create([
            'seat_no' => 13,
            'seat_value' => '4_4'
        ]);
        SeatMap::create([
            'seat_no' => 14,
            'seat_value' => '4_5'
        ]);
        SeatMap::create([
            'seat_no' => 15,
            'seat_value' => '5_1'
        ]);
        SeatMap::create([
            'seat_no' => 16,
            'seat_value' => '5_2'
        ]);
        SeatMap::create([
            'seat_no' => 17,
            'seat_value' => '5_4'
        ]);
        SeatMap::create([
            'seat_no' => 18,
            'seat_value' => '5_5'
        ]);
        SeatMap::create([
            'seat_no' => 19,
            'seat_value' => '6_1'
        ]);
        SeatMap::create([
            'seat_no' => 20,
            'seat_value' => '6_2'
        ]);
        SeatMap::create([
            'seat_no' => 21,
            'seat_value' => '6_4'
        ]);
        SeatMap::create([
            'seat_no' => 22,
            'seat_value' => '6_5'
        ]);
        SeatMap::create([
            'seat_no' => 23,
            'seat_value' => '7_1'
        ]);
        SeatMap::create([
            'seat_no' => 24,
            'seat_value' => '7_2'
        ]);
        SeatMap::create([
            'seat_no' => 25,
            'seat_value' => '7_4'
        ]);

        Operator::create([
            'name' => "Hanif",
            'contact_person' => 'Kamal',
            'phone' => '01777777777',
            'email' => 'support@hanif.com',
            'address' => 'Dhaka',
            'tin_no' => '55555',
        ]);

        Operator::create([
            'name' => "Star Line",
            'contact_person' => 'Ikram',
            'phone' => '01888888888',
            'email' => 'support@starline.com',
            'address' => 'Dhaka',
            'tin_no' => '66666',
        ]);
        Operator::create([
            'name' => "Northern Bus",
            'contact_person' => 'Rakib',
            'phone' => '01999999999',
            'email' => 'support@northern.com',
            'address' => 'Dhaka',
            'tin_no' => '77777',
        ]);

        Bus::create([
            'bus_type' => "AC",
            'plate_no' => 'BD-1234',
            'no_of_seats' => '45',
            'image_url' => 'busImages/56343434car_1667540988.png',
            'status' => 'Active',
            'operator_id' => 1,
        ]);
        Bus::create([
            'bus_type' => "NON-AC",
            'plate_no' => 'BD-1235',
            'no_of_seats' => '45',
            'image_url' => 'busImages/56343434car_1667540988.png',
            'status' => 'Active',
            'operator_id' => 1,
        ]);
        Bus::create([
            'bus_type' => "AC",
            'plate_no' => 'BD-2235',
            'no_of_seats' => '45',
            'image_url' => 'busImages/56343434car_1667540988.png',
            'status' => 'Active',
            'operator_id' => 2,
        ]);
        Bus::create([
            'bus_type' => "NON-AC",
            'plate_no' => 'BD-2234',
            'no_of_seats' => '45',
            'image_url' => 'busImages/56343434car_1667540988.png',
            'status' => 'Active',
            'operator_id' => 2,
        ]);
        Bus::create([
            'bus_type' => "AC",
            'plate_no' => 'BD-3234',
            'no_of_seats' => '45',
            'image_url' => 'busImages/56343434car_1667540988.png',
            'status' => 'Active',
            'operator_id' => 3,
        ]);
        Bus::create([
            'bus_type' => "NON-AC",
            'plate_no' => 'BD-3235',
            'no_of_seats' => '45',
            'image_url' => 'busImages/56343434car_1667540988.png',
            'status' => 'Active',
            'operator_id' => 3,
        ]);


        for ($i = 0; $i < 15; $i++) {
            Trip::create([
                'trip_no' => 3333333 + $i,
                'travel_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'arrival_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'depart_from' => 'Dhaka',
                'arrive_at' => 'khulna',
                'departure_time' => '10:00 AM',
                'arrival_time' => '6:00 PM',
                'price' => '1200',
                'status' => 1,
                'available_seats_from' => 1,
                'available_seats_upto' => 45,
                'allowable_luggage' => 2,
                'extra_luggage_fee' => 20,
                'total_trip_days_for' => 1,
                'bus_id' => 1,
            ]);
        }

        for ($i = 0; $i < 15; $i++) {
            Trip::create([
                'trip_no' => 4444444 + $i,
                'travel_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'arrival_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'depart_from' => 'Dhaka',
                'arrive_at' => 'khulna',
                'departure_time' => '11:00 AM',
                'arrival_time' => '7:00 PM',
                'price' => '800',
                'status' => 1,
                'available_seats_from' => 1,
                'available_seats_upto' => 45,
                'allowable_luggage' => 2,
                'extra_luggage_fee' => 20,
                'total_trip_days_for' => 1,
                'bus_id' => 2,
            ]);
        }

        for ($i = 0; $i < 15; $i++) {
            Trip::create([
                'trip_no' => 5555555 + $i,
                'travel_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'arrival_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'depart_from' => 'Dhaka',
                'arrive_at' => 'Chittagong',
                'departure_time' => '10:00 AM',
                'arrival_time' => '4:00 PM',
                'price' => '1250',
                'status' => 1,
                'available_seats_from' => 1,
                'available_seats_upto' => 45,
                'allowable_luggage' => 2,
                'extra_luggage_fee' => 20,
                'total_trip_days_for' => 1,
                'bus_id' => 3,
            ]);
        }
        for ($i = 0; $i < 15; $i++) {
            Trip::create([
                'trip_no' => 6666666 + $i,
                'travel_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'arrival_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'depart_from' => 'Dhaka',
                'arrive_at' => 'Chittagong',
                'departure_time' => '11:00 AM',
                'arrival_time' => '5:00 PM',
                'price' => '800',
                'status' => 1,
                'available_seats_from' => 1,
                'available_seats_upto' => 45,
                'allowable_luggage' => 2,
                'extra_luggage_fee' => 20,
                'total_trip_days_for' => 1,
                'bus_id' => 4,
            ]);
        }
        for ($i = 0; $i < 15; $i++) {
            Trip::create([
                'trip_no' => 7777777 + $i,
                'travel_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'arrival_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'depart_from' => 'Dhaka',
                'arrive_at' => 'Rajshahi',
                'departure_time' => '12:00 PM',
                'arrival_time' => '9:00 PM',
                'price' => '1250',
                'status' => 1,
                'available_seats_from' => 1,
                'available_seats_upto' => 45,
                'allowable_luggage' => 2,
                'extra_luggage_fee' => 20,
                'total_trip_days_for' => 1,
                'bus_id' => 5,
            ]);
        }

        for ($i = 0; $i < 15; $i++) {
            Trip::create([
                'trip_no' => 8888888 + $i,
                'travel_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'arrival_date' => Carbon::parse(now())->addDays($i)->format('d-M-Y'),
                'depart_from' => 'Dhaka',
                'arrive_at' => 'Rajshahi',
                'departure_time' => '1:00 PM',
                'arrival_time' => '10:00 PM',
                'price' => '800',
                'status' => 1,
                'available_seats_from' => 1,
                'available_seats_upto' => 45,
                'allowable_luggage' => 2,
                'extra_luggage_fee' => 20,
                'total_trip_days_for' => 1,
                'bus_id' => 6,
            ]);
        }

//        for ($i = 1; $i <= 15; $i++) {
//            Route::create([
//                'boarding_dropping' => 'Boarding',
//                'time' => '10.00 AM',
//                'place' => 'Shymoli, Dhaka',
//                'trip_id' => $i,
//            ]);
//        }
//
//        for ($i = 1; $i <= 15; $i++) {
//            Route::create([
//                'boarding_dropping' => 'Boarding',
//                'time' => '10.30 AM',
//                'place' => 'GabToli, Dhaka',
//                'trip_id' => $i,
//            ]);
//        }
//
//        for ($i = 15; $i <= 30; $i++) {
//            Route::create([
//                'boarding_dropping' => 'Boarding',
//                'time' => '11.00 AM',
//                'place' => 'Shymoli, Dhaka',
//                'trip_id' => $i,
//            ]);
//        }
//
//        for ($i = 15; $i <= 30; $i++) {
//            Route::create([
//                'boarding_dropping' => 'Boarding',
//                'time' => '11.30 AM',
//                'place' => 'GabToli, Dhaka',
//                'trip_id' => $i,
//            ]);
//        }
//
//
//        for ($i = 1; $i <= 15; $i++) {
//            Route::create([
//                'boarding_dropping' => 'Dropping',
//                'time' => '05.00 PM',
//                'place' => 'Inter District Bus Station, Khulna',
//                'trip_id' => $i,
//            ]);
//        }
//
//        for ($i = 1; $i <= 15; $i++) {
//            Route::create([
//                'boarding_dropping' => 'Dropping',
//                'time' => '5.30 PM',
//                'place' => 'Rupsha Temporary Bus Station, Khulna',
//                'trip_id' => $i,
//            ]);
//        }
//
//        for ($i = 15; $i <= 30; $i++) {
//            Route::create([
//                'boarding_dropping' => 'Dropping',
//                'time' => '5.30 PM',
//                'place' => 'Inter District Bus Station, Khulna',
//                'trip_id' => $i,
//            ]);
//        }
//
//
//        for ($i = 15; $i <= 30; $i++) {
//            Route::create([
//                'boarding_dropping' => 'Dropping',
//                'time' => '6.00 PM',
//                'place' => 'Rupsha Temporary Bus Station, Khulna',
//                'trip_id' => $i,
//            ]);
//        }


    }
}
