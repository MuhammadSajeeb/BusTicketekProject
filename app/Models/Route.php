<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable=['boarding_dropping','time','place','trip_id'];

    public function Trip(){
        return $this->belongsTo(Trip::class);
    }
}
