<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatMap extends Model
{
    use HasFactory;

    public static function SeatValue($seat_no){
        $seat=SeatMap::findOrFail($seat_no);
        if($seat)
            return $seat->seat_value;
        else
            return null;
    }
}
