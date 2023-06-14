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

class AuthController extends Controller
{




    public function login(Request $request)
    {
        $attr = $this->validateLogin($request);

        if (!Auth::attempt($attr)) {
            //return $this->error('Credentials mismatch', 401);
            return Redirect::to('admin')->with('alert','Password Incorrect!');
        }
        $tickets=Ticket::orderBy('created_at','desc')->get();
        //return $this->token($this->getPersonalAccessToken());
        return redirect()->intended('dashboard');
    }

    // public function signup(Request $request)
    // {
    //     $attr = $this->validateSignup($request);

    //     User::create([
    //         'name' => $attr['name'],
    //         'email' => $attr['email'],
    //         'password' => Hash::make($attr['password'])
    //     ]);

    //     Auth::attempt(['email' => $attr['email'], 'password' => $attr['password']]);

    //     return $this->token($this->getPersonalAccessToken(), 'User Created', 201);
    // }

    // public function user()
    // {
    //     return $this->success(Auth::user());
    // }

    // public function logout()
    // {
    //     Auth::user()->token()->revoke();
    //     return $this->success('User Logged Out', 200);
    // }

    // public function getPersonalAccessToken()
    // {
    //     if (request()->remember_me === 'true')
    //         Passport::personalAccessTokensExpireIn(now()->addDays(15));

    //     return Auth::user()->createToken('Personal Access Token');
    // }

    public function validateLogin($request)
    {
        return $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
    }

    // public function validateSignup($request)
    // {
    //     return $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }


    public function authenticate(Request $request){

        $req = $this->validateLogin($request);

        if(Auth::attempt($req)){
            $tickets=Ticket::orderBy('created_at','desc')->get();
            if(auth()->user()->roles == 'admin'){
                return redirect()->intended('dashboard');
            }else{
                return redirect()->intended('user/dashboard');
            }
        }
        else{
            return Redirect::to('login')->with('alert','Password Incorrect!');
        }
    }




    public function checkLogin()
    {
        if(Auth::check()){
            $tickets=Ticket::orderBy('created_at','desc')->get();
            return view('admin.dashboard',compact('tickets'));
    	}else{

    		return redirect("/admin");
        }


    }

    public function logout(){

        Auth::logout();
        return Redirect::to('/');
    }
}
