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
            <!-- <div style="text-align:center;padding:1em 0;"> <h4><a style="text-decoration:none;" href="https://www.zeitverschiebung.net/en/city/5377985"><span style="color:gray;">Current local time in</span><br />Northridge, United States</a></h4> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=small&timezone=America%2FLos_Angeles" width="100%" height="115" frameborder="0" seamless></iframe> </div> -->
            <!-- <div style="text-align:center;padding:1em 0;"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&size=medium&timezone=America%2FLos_Angeles" width="100%" height="115" frameborder="0" seamless></iframe> </div> -->
        </div>
    </div>

    <div class="weather_card">
        <!-- <a class="weatherwidget-io" href="https://forecast7.com/en/34d28n118d44/san-fernando/?unit=us" data-label_1="NORTHRIDGE, CA" data-label_2="WEATHER" data-days="5" >NORTHRIDGE, CA WEATHER</a>
        <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
        </script> -->

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
        <!-- <iframe src="https://open.spotify.com/embed/track/3w2GGz0HjIu9OcWXINRFJR" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> -->
    </div>

            

    <!-- <div class="row justify-content-center"> -->
        <!-- <div class="col-md-8"> -->
            <!-- <div class="today">{{ __('Todays Schedule') }}</div> -->
            

            <!-- <div class="break"></div> -->

            <!-- <div class="row"> -->
                

                
            <!-- </div> -->

            

            <!-- <div class="break"></div> -->

            <!-- <div class="cards">
                <div class="cards_desc">
                    <h3> Tuesday 5/18 </h3>
                    <ul class="items_list">
                    <li class="list-group-item">An item
                        <a href="www.zoom.com/" class="card-link">zoom Link</a>
                    </li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                </div>
            </div>

            <div class="break"></div>

            <div class="cards">
                <div class="cards_desc">
                    <h3> Wednesday 5/19 </h3>
                    <ul class="items_list">
                    <li class="list-group-item">An item
                        <a href="www.zoom.com/" class="card-link">zoom Link</a>
                    </li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                </div>
            </div>

            <div class="break"></div>

            <div class="cards">
                <div class="cards_desc">
                    <h3> Thursday 5/20 </h3>
                    <ul class="items_list">
                    <li class="list-group-item">An item
                        <a href="www.zoom.com/" class="card-link">zoom Link</a>
                    </li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                </div>
            </div>

            <div class="break"></div>

            <div class="cards">
                <div class="cards_desc">
                    <h3> Friday 5/21 </h3>
                    <ul class="items_list">
                    <li class="list-group-item">An item
                        <a href="www.zoom.com/" class="card-link">zoom Link</a>
                    </li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                </div>
            </div> -->
                

                <!-- card created for each zoom link / event -->
                <!-- for each event from sql tied to user create a card -->
                <!-- foreach $post in $posts, then use { {variablename for html|  $post->link} }-->
            <!-- <div class="card">
                <div class="card-body">
                    
                    <h5 class="card-title">Monday 5/17</h5>  -->
                    <!-- <p class="card-text">Lets see what we have today.</p> -->
                
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item
                            <a href="www.zoom.com/" class="card-link">zoom Link</a>
                        </li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div> -->
        <!-- </div>
    </div> -->
</div>

<!-- the footer -->
    <footer class="footer">
        <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125" style="max-width:1vw;"/>
        <br>
        &copy;2021 KhroNotes<br>  
    </footer>
@endsection
