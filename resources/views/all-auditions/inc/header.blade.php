<header class="noo-header" id="noo-header">
  <div class="navbar-wrapper">
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <h1 class="sr-only">Home</h1>
          <a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-navbar-collapse">
            <span class="sr-only">Navigation</span>
            <i class="fa fa-bars"></i>
          </a>
          <a href="./" class="navbar-brand">
            <img class="noo-logo-img noo-logo-normal other-audition-logo" src="public/images/online-audition-logo.png" alt="The Viral Voice Logo"/>
            <img class="noo-logo-img noo-logo-floating other-audition-logo" src="public/images/online-audition-logo.png" alt="The Viral Voice Logo"/>
          </a>
        </div>  
        <nav class="collapse navbar-collapse noo-navbar-collapse">
          <ul class="navbar-nav sf-menu sf-js-enabled sf-arrows">
            <li class="">
              <a href="/home">Home</a>
            </li>
            <li class="menu-item-has-children current-menu-item">
              <a href="#">Singing Auditions</a>
              <ul class="sub-menu">
                <li><a href="the-viral-voice-online-audition-details" title="The Viral Voice Audition">The Viral Voice</a></li>
                <li><a href="sing-dil-se-audition" title="Sing Dil Se Audition">Sing Dil Se</a></li>
                <li><a href="indian-idol-audition" title="Indian Idol Audition">Indian Idol</a></li>
                <li><a href="indian-idol-junior-audition" title="Indian Idol Junior Audition">Indian Idol Junior</a></li>
                <li><a href="sa-re-ga-ma-pa-audition" title="Sa Re Ga Ma Audition">Sa Re Ga Ma</a></li>
                <li><a href="The-Voice-India-Online-Audition-Details" title="The Voice India Audition">The Voice India</a></li>
				        <li><a href="magical-voice-of-india-audition" title="Magical Voice of India Audition">Magical Voice Of India</a></li>
              </ul>
            </li>
            <li><a href="#contact-us">Contact</a></li>
            @if (!isset($user_name))
              <li><a href="home#register-now">Register</a></li>
              <li><a href="#" data-toggle="modal" data-target="#exampleModal">Login</a></li>
            @endif
            @if (isset($user_name))
              <li><a href="activity">Activity</a></li>
              <li><a href="logout">Logout</a></li>
              
              <!-- <li class="menu-item-has-children">
                <a href="blog.html">{{{$user_name}}}</a>
                <ul class="sub-menu">
                  <li><a href="activity">Activity</a></li>
                  <li><a href="logout">Logout</a></li>
                </ul>
              </li> -->
            @endif
          </ul>
        </nav>
      </div>  
    </div>  
  </div>
</header>