@php
    $dark_mode = Auth::user() ? Auth::user()->dark_mode : false
@endphp
@extends('layouts.app', ['dark_mode' => $dark_mode])

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="container">
    <div class="greeting">
        <h1>Hello, {{Auth::user()->name}}</h1>
        <h2>This Week's Schedule:</h2>
    </div>

    <div class="break"></div>

</div>

<!-- button to edit -->
<!-- <a href="/home/{{$event->id}}/edit" class="btn btn-secondary btn-lg" style="padding-right: 15px;padding-left: 15px;margin-right: 35%;margin-left: 35%; float:right;">Edit</a> -->

<div class = "container">
    <div class="scrollable_cards">
            <div class="cards">
                    <div class="cards_desc">
                        <h4> {{$event->eventTime}}</h4>
                        <h6>{{$event->title}}</h6>
                        <ul class="items_list">
                            <li class="list-group-item">
                                <a href="{{$event->eventLink}}" class="card-link">Zoom link</a>
                            </li>
                            <li class="list-group-item">{{$event->eventId}}</li>
                            <li class="list-group-item">{{$event->eventPassword}}</li>

                        </ul>
                    </div>
                </div>
        
        
        </a>

    

</div>

    <div class="break"></div>

 
    <a href="/home/{{$event->id}}/edit" class="btn btn-secondary btn-lg" style="margin-right: auto; margin-left: auto; margin-top:15px; margin-bottom:15px;">
        Edit Event
    </a>
 

    <div class="break"></div>

    
</div>

<!-- the footer -->
    <footer class="footer" style="bottom: 0;position: fixed;width: 100%;">
        <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125" style="max-width:1vw;"/>
        <br>
        &copy;2021 KhroNotes<br>  
    </footer>
@endsection
