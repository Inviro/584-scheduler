@php
    $dark_mode = Auth::user() ? Auth::user()->dark_mode : false
@endphp
@extends('layouts.app', ['dark_mode' => $dark_mode])

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="container">
    <div class="greeting">
        <h1>Hello, {{Auth::user()->name}}</h1>
        <h2>New Event:</h2>
    </div>
    <div class="break"></div>
</div>

<!-- button to edit -->
<div class="contain">
    <div class="card">
        <article class="card-body">

            <form action="{{route('home.update',$event->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label>Description</label>
                    <input name="title" class="form-control"  type="text" value="{{$event->title}}">
                </div>
                <div class="form-group">
                    <label>Zoom link</label>
                    <input name="eventLink" class="form-control" placeholder="zoom" type="text" value="{{$event->eventLink}}">
                </div>
                <div class="form-group">
                    <label>Meeting ID</label>
                    <input name="eventId" class="form-control" placeholder="" type="text" value="{{$event->eventLink}}">
                </div>
                <div class="form-group">
                    <label>Meeting Password</label>
                    <input name="eventPassword" class="form-control" placeholder="" type="text" value="{{$event->eventPassword}}">
                </div>  
                <div class="form-group">
                    <label for="eventTime">Zoom Date and time</label>
                    <div class="col-13">
                        <input class="form-control" type="datetime-local" value="{{$event->eventTime}}" id="eventTime"name="eventTime">
                        {{$event->eventTime}}
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">update</button>
                </div>
            </form>
            <form method="POST" action="{{route('home.destroy',$event->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')"class="btn small btn-danger btn-block"style="margin-right: auto; margin-left: auto; margin-top:15px; margin-bottom:15px;"><span class="fa fa-remove"></span>delete</button>
            </form>
        </article>
        
    </div> <!-- card.// -->
</div>

<div>
    <div class="break"></div>

    <div class="social_card">
        <div class="social_buttons">
            <a href="https://www.facebook.com" class="fa fa-facebook" target="_blank"></a>
            <a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a>
            <a href="https://www.youtube.com" class="fa fa-youtube" target="_blank"></a>
            <a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a>
            <a href="https://www.reddit.com" class="fa fa-reddit" target="_blank"></a>
        </div>
        <!-- <iframe src="https://open.spotify.com/embed/track/3w2GGz0HjIu9OcWXINRFJR" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> -->
    </div>
</div>
@endsection
