<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable=[
        'passenger_name',
        'age',
        'gender',
        'seat_no',
        'phone',
        'email',
        'trip_id',
        'is_confirmed',
        'ticket_number',
        'luggage',
        'price',
        'bank',
        'tt_number'
    ];

    public function Trip(){
        return $this->belongsTo(Trip::class);
    }
}
