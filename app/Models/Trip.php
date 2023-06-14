<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable=['trip_no',
                        'travel_date',
                        'arrival_date',
                        'depart_from',
                        'arrive_at',
                        'departure_time',
                        'arrival_time',
                        'price',
                        'status',
                        'bus_id',
                        'available_seats_from',
                        'available_seats_upto',
                        'allowable_luggage',
                        'extra_luggage_fee'
                    ];

    public function Bus(){
        return $this->belongsTo(Bus::class);
    }

    public function Tickets(){
        return $this->hasMany(Ticket::class);
    }

    public function Bookings(){
        return $this->hasMany(Booking::class);
    }

    public function Routes(){
        return $this->hasMany(Route::class);
    }

}
