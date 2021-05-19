@extends('layouts.app')

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
            <form action="/home" method="POST">
            @csrf
                <div class="form-group">
                    <label>Description</label>
                    <input name="title" class="form-control" placeholder="Type description here" type="text">
                </div>
                <div class="form-group">
                    <label>Zoom link</label>
                    <input name="eventLink" class="form-control" placeholder="zoom" type="text">
                </div>
                <div class="form-group">
                    <label>Meeting ID</label>
                    <input name="eventId" class="form-control" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label>Meeting Password</label>
                    <input name="eventPassword" class="form-control" placeholder="" type="text">
                </div>
                <div class="form-group">
                    <label>Zoom date and time</label>
                    <input name="eventTime" class="form-control" placeholder="" type="date">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                </div>                                                         
            </form>
        </article>
    </div> <!-- card.// -->



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
        <!-- <iframe src="https://open.spotify.com/embed/track/3w2GGz0HjIu9OcWXINRFJR" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> -->
    </div>
</div>

<!-- the footer -->
    <footer class="footer">
        <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125" style="max-width:1vw;"/>
        <br>
        &copy;2021 KhroNotes<br>  
    </footer>
@endsection
