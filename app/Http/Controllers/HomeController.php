<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    public function updateProfile(Request $request) 
    {
        $passwordCheck = $request->input('oldpassword');
        $userUpdate = [
            'name'          => $request->name,
            'email'         => $request->email
        ];
        if(Hash::check($passwordCheck, Auth::user()->password)) {
            DB::table('users')->where('id', '=', Auth::user()->id)->update($userUpdate);
        }
        else {
            
        }
        return redirect('settings');
    }

    public function toggleDarkMode(Request $request) 
    {
        DB::table('users')->where('id', '=', Auth::user()->id)->update(['dark_mode' => (strcmp($request->darkmode, "on") === 0)]);
        return redirect('settings');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function settings()
    {
        return view('settings');
    }
}
