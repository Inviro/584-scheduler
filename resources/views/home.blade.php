@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="Today  ">{{ __('Todays schedule') }}</div>
                

                <!-- card created for each zoom link / event -->
                <!-- for each event from sql tied to user create a card -->
                <!-- foreach $post in $posts, then use { {variablename for html|  $post->link} }-->
            <div class="card" style="width: 55rem;">
                <div class="card-body">
                    <h5 class="card-title">Monday 5/17</h5> 
                    <p class="card-text">Lets see what we have today.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item
                        <a href="www.zoom.com/" class="card-link">zoom Link</a>
                    </li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                
            </div>
        </div>
    </div>
</div>
@endsection
