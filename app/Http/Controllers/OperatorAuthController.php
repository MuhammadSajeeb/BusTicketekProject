<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Laravel\Passport\Passport;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class OperatorAuthController extends Controller
{


    public function login(Request $request)
    {
        $attr = $this->validateLogin($request);

        if (!Auth::guard('operator')->attempt($attr)) {
            //return $this->error('Credentials mismatch', 401);
            return Redirect::to('/operator/login')->with('alert','Password Incorrect!');
        }
        $tickets=Ticket::orderBy('created_at','desc')->get();
        //return $this->token($this->getPersonalAccessToken());
        return redirect()->intended('/operator/dashboard');
    }



    public function validateLogin($request)
    {
        return $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
    }


    public function authenticate(Request $request){

        $req = $this->validateLogin($request);

        if(Auth::guard('operator')->attempt($req)){
            //$tickets=Ticket::orderBy('created_at','desc')->get();
            return redirect()->intended('/operator/dashboard');
        }
        else{
            return Redirect::to('/operator/login')->with('alert','Password Incorrect!');
        }
    }




    public function checkLogin()
    {

        if(Auth::guard('operator')->check()){
            return view('operator.dashboard');
    	}else{
    		return redirect("/operator/login");
        }


    }

    public function logout(){

        Auth::guard('operator')->logout();
        return Redirect::to('/operator/login');
    }
}
