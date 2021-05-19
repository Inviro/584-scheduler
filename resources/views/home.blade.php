@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="container">

    <div class="greeting">
        <h1>Hello, Name</h1>
        <h2>This Week's Schedule:</h2>
    </div>

    <div class="break"></div>
<div class="scrollable_cards">
    <div class="cards">
                    <div class="cards_desc">
                        <h4> Monday 5/17 </h4>
                            <ul class="items_list">
                                <li class="list-group-item">
                                    <a href="www.zoom.com/" class="card-link">Zoom Link</a>
                                </li>
                                <li class="list-group-item">Second Item</li>
                                <li class="list-group-item">Third Item</li>
                            </ul>
                    </div>
    </div>

    <div class="cards">
                    <div class="cards_desc">
                        <h4> Tuesday 5/18 </h4>
                            <ul class="items_list">
                                <li class="list-group-item">
                                    <a href="www.zoom.com/" class="card-link">Zoom Link</a>
                                </li>
                                <li class="list-group-item">Second Item</li>
                                <li class="list-group-item">Third Item</li>
                            </ul>
                    </div>
    </div>

    <div class="cards">
                    <div class="cards_desc">
                        <h4> Wednesday 5/19 </h4>
                            <ul class="items_list">
                                <li class="list-group-item">
                                    <a href="www.zoom.com/" class="card-link">Zoom Link</a>
                                </li>
                                <li class="list-group-item">Second Item</li>
                                <li class="list-group-item">Third Item</li>
                            </ul>
                    </div>
    </div>

    <div class="cards">
                    <div class="cards_desc">
                        <h4> Thursday 5/20 </h4>
                            <ul class="items_list">
                                <li class="list-group-item">
                                    <a href="www.zoom.com/" class="card-link">Zoom Link</a>
                                </li>
                                <li class="list-group-item">Second Item</li>
                                <li class="list-group-item">Third Item</li>
                            </ul>
                    </div>
    </div>

    <div class="cards">
                    <div class="cards_desc">
                        <h4> Friday 5/21 </h4>
                            <ul class="items_list">
                                <li class="list-group-item">
                                    <a href="www.zoom.com/" class="card-link">Zoom Link</a>
                                </li>
                                <li class="list-group-item">Second Item</li>
                                <li class="list-group-item">Third Item</li>
                            </ul>
                    </div>
    </div>


</div>

    <div class="break"></div>

    <div class="clock_card">
        <div id="clock_widget">
            <div style="text-align:center;padding:1em 0;margin-top:auto;margin-bottom:auto;"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=large&timezone=America%2FLos_Angeles" width="100%" height="125" frameborder="0" seamless></iframe> </div>
        </div>
    </div>

    <div class="weather_card">


        <a class="weatherwidget-io" href="https://forecast7.com/en/34d28n118d44/san-fernando/?unit=us" data-label_1="NORTHRIDGE, CA" data-label_2="WEATHER" data-days="5" data-theme="weather_one" >NORTHRIDGE, CA WEATHER</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
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
