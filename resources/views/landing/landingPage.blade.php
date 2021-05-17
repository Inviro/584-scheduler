@extends('layouts.app')

@section('content')



    <div class="container">
      
      <div class="image_box">
        <img class="body_logo" src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FUpdatedCalendar.jpg?v=1620968857371"/>
        <p>Keep Your Meetings Organized</p> 
      </div>
      
      
      <div class="desc_box">        
        <p>
          KhroNotes is a helpful tool to keep track of all of your scheduled online meetings. 
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
          et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>      
      </div>
      
      <div class="break"></div>
      
      <div class="howitworks_box">
        <div class="step_cards">
          <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2Fstep1.png?v=1621036891322" style="width:50%; order: 1;"/>
            <div class="step_desc">
              <h1>Meeting ID's</h1>
              <p>Collect all of your meeting ID numbers and passcodes if applicable. </p>
            </div>
        </div>

        <div class="step_cards">
          <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FIcon_01-81-512.png?v=1621039504964" style="width:50%; order:2;"/>
            <div class="step_desc">
              <h1>Input Data</h1>
              <p> Input your meeting ID numbers, passcodes and any other relevant information. </p>
            </div>
        </div>

        <div class="step_cards">
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

      <div class="why_khro">
        <h1>Why KhroNotes?</h1>
          <p>Being organized comes with its benefits: </p>
          <ul class="benefits">
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
    
    
    <!-- the footer -->
    <footer class="footer">
        <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125" style="max-width:1vw;"/>
        <br>
        &copy;2021 KhroNotes<br>
        
    </footer>



@endsection