<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all values in sql for home dashboard according to email 
        $loggedInUser = Auth::user()->email;
        // $events =  Post::all(); //shows all events
    
        $events = Post::where('email',$loggedInUser)->paginate(5);

        // $dayofweek = Carbon::parse($events->eventTime)->format(format:"Y-m-d h:m:s");'
        foreach ($events as $event){
            $dayofweek = Carbon::parse($event->eventTime)->format("D, M d Y");
            $event->eventTime = $dayofweek;
        }
        return view('home')
                    ->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store request to database then return to dashboard
        $loggedInUser = Auth::user()->email;
        $request['email']= $loggedInUser;
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'email' => 'required',
            'eventTime'=> 'required',
            'eventLink' => 'required',
            'eventId' =>'required',
            'eventPassword' =>'required'
        ]);

        if ($validator->fails()) {
            return redirect('home/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        Post::create($request->all());
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Post::find($id);
        $dayofweek = Carbon::parse($event->eventTime)->format(format:"D, M d Y");
        $event->eventTime = $dayofweek;
        return view('posts.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Post::find($id);
        $DB_date = date('m-d-Y H:i:s', strtotime($event->eventTime));
        $event->eventTime = $DB_date;
        return view('posts.update')->with('event',$event);
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
        // return $request->input();
        $loggedInUser = Auth::user()->email;
        $event = Post::find($id);
        $request['email']= $loggedInUser;
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'email' => 'required',
            'eventTime'=> 'required',
            'eventLink' => 'required',
            'eventId' =>'required',
            'eventPassword' =>'required'
        ]);

        if ($validator->fails()) {
            return redirect('home/{{$id}}/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        $event->title = $request->title;
        $event->email = $request->email;
        $event->eventTime = $request->eventTime;
        $event->eventLink = $request->eventLink;
        $event->eventId = $request->eventId;
        $event->eventPassword = $request->eventPassword;
        $event->save();
        // Post::update($request->all());
        return redirect()->route(route:'home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Post::find($id);
        $event->delete();
        return redirect()->route(route:'home.index');
    }
}
