<!-- Footer Starts -->
<div class="footer text-center spacer">
  <a href="#home" title="Online singing audition 2016">Home</a> | <a href="#rules" title="Online singing audition rules">Rules</a> | <a href="#register" title="Register for {{{$season_name}}}">Register</a>
  <br/><br/>
  @if ($admin['mobile'])
    Call: {{ $admin['mobile'] }}
  @endif

  @if ($admin['watsapp'])
    / Watsapp: {{ $admin['watsapp'] }}
  @endif
  <br/><br/>
  Email: {{ $admin['email_one'] }}<br/><br/><br/>
  Copyright 2015 {{ $admin['site_name'] }} All rights reserved.
</div>