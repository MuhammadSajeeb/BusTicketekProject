<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aminity extends Model
{
    use HasFactory;

    protected $fillable=['aminity','bus_id'];

    public function Bus(){
        return $this->belongsTo(Bus::class);
    }
}
