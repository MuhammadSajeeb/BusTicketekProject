<?php

namespace App\Models;

use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
class Operator extends Model implements AuthorizableContract,AuthenticatableContract
{
    use HasFactory;
    use Authenticatable, Authorizable;

    protected $fillable=['name','contact_person','phone','email','address','tin_no','status','password'];

    protected $hidden=['password'];

    public function Buses(){
        return $this->hasMany(Bus::class);
    }
}
