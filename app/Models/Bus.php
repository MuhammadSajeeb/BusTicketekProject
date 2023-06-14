<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable=['bus_type',
                            'plate_no',
                            'no_of_seats',
                            'image_url',
                            'status',
                            'operator_id'];

    public function Operator(){
        return $this->belongsTo(Operator::class);
    }

    public function Trips(){
        return $this->hasMany(Trip::class);
    }

    public function Aminities(){
        return $this->hasMany(Aminity::class);
    }
}
