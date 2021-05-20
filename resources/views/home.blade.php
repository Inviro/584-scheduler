@php
    $dark_mode = Auth::user() ? Auth::user()->dark_mode : false
@endphp
@extends('layouts.app', ['dark_mode' => $dark_mode])

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="container">
    <div class="greeting">
        <h1>Hello, {{ Auth::user()->name }}</h1>
        <h2>This Week's Schedule:</h2>
    </div>

    <div class="break"></div>
    </div>

<!-- button to edit -->
<!-- <a href="/home/create/" class="btn btn-secondary btn-lg" style="padding-right: 15px;padding-left: 15px;margin-right: 35%;margin-left: 35%; float:right;">New</a> -->

<div class = "container">

<div class="scrollable_cards">
        @foreach($events as $event)
        <a href = "/home/{{$event->id}}"style="color: black">
            <div class="cards">
                <div class="cards_desc">
                    <h4>{{$event->eventTime}}</h4>
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
        @endforeach
        {{$events->links()}}
    
        
</div>

    <div class="break"></div>
    
    <a href="/home/create/" class="btn btn-secondary btn-lg" style="margin-right: auto; margin-left: auto; margin-top:15px; margin-bottom:15px;">
        New Event
    </a>

    <div class="break"></div>

    <div class="clock_card">
        <div id="clock_widget">
            <div style="text-align:center;padding:1em 0;margin-top:auto;margin-bottom:auto;"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=America%2FLos_Angeles" width="100%" height="125" frameborder="0" seamless></iframe> </div>
        </div>
    </div>

    <div class="weather_card">
        <a class="weatherwidget-io" href="https://forecast7.com/en/34d28n118d44/san-fernando/?unit=us" data-label_1="NORTHRIDGE, CA" data-label_2="WEATHER" data-days="5" data-theme="weather_one" >NORTHRIDGE, CA WEATHER</a>
    </div>

    <div class="break"></div>

    <div class="social_card">
        <div class="social_buttons">
            <a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a>
            <a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a>
            <a href="https://www.youtube.com" class="fa fa-youtube" target="_blank"></a>
            <a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a>
            <a href="https://www.reddit.com" class="fa fa-reddit" target="_blank"></a>
        </div>
    </div>
</div>

<!-- the footer -->
    <footer class="footer">
        <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125" style="max-width:1vw;"/>
        <br>
        &copy;2021 KhroNotes<br>  
    </footer>
@endsection
