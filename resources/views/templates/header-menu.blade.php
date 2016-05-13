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
                  <img class="noo-logo-img noo-logo-normal" src="images/logo.png" alt="">
                  <img class="noo-logo-img noo-logo-floating" src="images/logo.png" alt="">
                </a>
              </div>  
              <nav class="collapse navbar-collapse noo-navbar-collapse">
                <ul class="navbar-nav sf-menu">
                  <li class="current-menu-item">
                    <a href="./">Home</a>
                  </li>                  
                  <li><a href="#">Contact</a></li>
                  @if (!isset($user_name))
                    <li><a href="#register-now">Register</a></li>
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