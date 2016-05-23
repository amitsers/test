<!-- Footer Starts -->
<div class="footer text-center spacer">
  <a href="#home" title="Online singing audition 2016">Home</a> | <a href="#rules" title="Contact">Contact Us</a> | <a href="#register" title="Register for {{{$season_name}}}">Register</a>
  <br/><br/>
  @if ($admin['mobile'])
    Call / Watsapp: {{ $admin['mobile'] }}
  @endif

  <br/><br/>
  Email: {{ $admin['email_one'] }}<br/><br/><br/>
  Copyright 2016 {{ $admin['site_name'] }} All rights reserved.
</div>