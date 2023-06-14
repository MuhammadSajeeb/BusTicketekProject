<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
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
        'order_number',
        'luggage',
        'price',
        'user_id'
    ];

    public function trip(){
        return $this->belongsTo(Trip::class,'trip_id','id');
    }
}
