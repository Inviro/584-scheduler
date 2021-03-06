@php
    $dark_mode = Auth::user() ? Auth::user()->dark_mode : false
@endphp
@extends('layouts.app', ['dark_mode' => $dark_mode])

@section('content')
    <div class="container">
      <div class="image_box">
        <img class="body_logo" src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FUpdatedCalendar.jpg?v=1620968857371"/>
        <p class={{ $dark_mode ? "text-light" : "" }}>Keep Your Meetings Organized</p> 
      </div>

      <div class="desc_box">        
        <p class={{ $dark_mode ? "text-light" : "" }}>
          The transition to online learning has made keeping track of different Zoom meeting 
          links difficult, sometimes resulting in delays attending classes on time. KhroNotes is a 
          sophisticated scheduling application which will provide users with the ability to create accounts and 
          store links to their scheduled Zoom meetings.
        </p>      
      </div>
      
      <div class="break"></div>
      
      <div class="howitworks_box">
        <div class="step_cards {{ $dark_mode ? "text-light bg-dark" : "" }}">
          <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2Fstep1.png?v=1621036891322" style="width:50%; order: 1;"/>
            <div class="step_desc">
              <h1>Meeting ID's</h1>
              <p>Collect all of your meeting ID numbers and passcodes if applicable. </p>
            </div>
        </div>

        <div class="step_cards {{ $dark_mode ? "text-light bg-dark" : "" }}">
          <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FIcon_01-81-512.png?v=1621039504964" style="width:50%; order:2;"/>
            <div class="step_desc">
              <h1>Input Data</h1>
              <p> Input your meeting ID numbers, passcodes and any other relevant information. </p>
            </div>
        </div>

        <div class="step_cards {{ $dark_mode ? "text-light bg-dark" : "" }}">
          <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2Fcalendar.png?v=1621039383712" style="width:50%; order:3;"/>
            <div class="step_desc">
              <h1>All Done</h1>
              <p> Congratulations! All of your meetings will be organized and ready for when you need them. </p>
            </div>
        </div>

      </div><!--howitworks_box div-->
      
      <!-- <div class="google_box">
        <img class="google_logo" src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2Fgoogle-calendar-logo.png?v=1620246249410"/>
      </div> -->

      <div class="break"></div>

      <div class="why_khro {{ $dark_mode ? "text-light bg-dark" : "" }}">
        <h1>Why KhroNotes?</h1>
          <p>Being organized comes with its benefits: </p>
          <ul class="benefits ml-4">
            <li>Save time by not spending time looking for your information.</li>
            <li>Reduce stress related to misplaced or lost information.</li>
            <li>Manage many activities and deadlines more efficiently.</li>
            <li>Increase your productivity.</li> 
          </ul>
      </div>
      
      <div class="get_started">
        <p>
          To get started, please register or sign in with your Google account.
        </p>

        <form action="auth/google">
          <button class="btn btn-light" type="submit" onclick="console.log('clicked!')">
            <img width="20px" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="{{ URL::to('/') }}/images/Google_'G'_Logo.svg" />
            Login with Google
          </button>
        </form>

      </div><!--get_started-->
    </div><!--container-->
@endsection