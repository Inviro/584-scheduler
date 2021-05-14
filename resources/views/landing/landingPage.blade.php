@extends('layouts.app')

@section('content')



    <div class="container">
      
      <div class="image_box">
        <img class="body_logo" src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125"/>
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
        <p>
          By utilizing Google's login and calendar API
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
          et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
          ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>
      
      <div class="google_box">
        <img class="google_logo" src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2Fgoogle-calendar-logo.png?v=1620246249410"/>
      </div>
      
      <div class="break"></div>
      
      <div class="get_started">
        <p>
          To get started, sign in with your Google account
        </p>
        
        <button>
          Google Button Placeholder
        </button>
      </div>
      
    </div><!--container-->
    
    
    <!-- the footer holds our remix button — you can use it for structure or cut it out ✂ -->
    <footer class="footer">
        <img src="https://cdn.glitch.com/8ad63a84-17dc-432f-8c26-21efc67491b6%2FTransparentLogo.png?v=1620239174125" style="max-width:1vw;"/>
        <br>
        &copy;2021 KhroNotes<br>
        Created By
    </footer>



@endsection