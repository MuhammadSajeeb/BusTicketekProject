<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserDahsboardController extends Controller
{
    public function index()
    {
        $orders = Booking::where('user_id', Auth::id())->get();
        $data = [
            'orders' => $orders,
        ];
        return view('user.dashboard')->with($data);
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::id());
        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);
        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }

    public function store(Request $request)
    {
        if(isset($request->current_password) || isset($request->new_password) || isset($request->new_confirm_password)){

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect()->back()->with('success', 'Password Updated Successfully');
        }
        return 0;
    }

}
