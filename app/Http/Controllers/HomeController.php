<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\home;
use App\Models\User;
use Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // @foreach($events as $event)
    // <p>{{$event->title}}</p>
    // @endforeach
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


    public function index()
    {
        // show all values in sql for home dashboard according to email 
        $loggedInUser = Auth::user()->email;
        // $events =  home::all(); //shows all events
    
        $events = home::where('email',$loggedInUser)->get();
        return view('home')
                    ->with('events', $events);
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }

    public function settings()
    {
        return view('settings');
    }
}
