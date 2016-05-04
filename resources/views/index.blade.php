
<!doctype html>
<html lang="en-US">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="{{{ asset('images/favicon.ico') }}}">
    <link rel="icon" href="{{{ asset('images/favicon.ico') }}}">

    <title>Testing</title>
	<meta name="keywords" content="Online Audition, Singing Contest, Sing online, Audition">
    <meta name="description" content="First online based singing contest WebUnplugged">

    <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/widget-calendar-full.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/commerce.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/jquery.mb.YTPlayer.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/owl.carousel.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/owl.theme.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/nivo-lightbox.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/nivo-default.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/mediaelementplayer.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='assets/css/layout.css' type='text/css' media='all'/>

    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
  </head>
  <body class="page-menu-transparent">
    <!--preloader-->
        <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object"></div>
          <div class="object"></div>
          <div class="object"></div>
          <div class="object"></div>
          <div class="object"></div>
          <div class="object"></div>
          <div class="object"></div>
          <div class="object"></div>
          <div class="object"></div>
          <div class="object"></div>
        </div>
      </div> 
    </div>
        <!--end preloader-->
    <div class="site">
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
                    <li class="menu-item-has-children">
                      <a href="blog.html">{{{$user_name}}}</a>
                      <ul class="sub-menu">
                        <li><a href="activity">Activity</a></li>
                        <li><a href="logout">Logout</a></li>
                      </ul>
                    </li>
                  @endif
                </ul>
              </nav>  
            </div>  
          </div>  
        </div>
      </header>
      <div class="container-wrap">
        <div class="main-content container-fullwidth">
          <div class="row row-fluid">
            <div class="nocontainer">
              <div class="col-sm-12">
                <div class="noo-countdown">
                  <ul class="full-background">
                    <li style="background-image: url('images/blog/blog2.jpg')"></li>
                    <li style="background-image: url('images/blog/blog7.jpg')"></li>
                    <li style="background-image: url('images/blog/blog5.jpg')"></li>
                    <li style="background-image: url('images/blog/blog6.jpg')"></li>
                  </ul>
                  <div class="overlay_parallax"></div>
                  <div class="noo-countdown-content">
                    <div class="container">
                      <h2>INDIA'S FIRST ONLINE SINGING CONTEST IS READY NOW!</h2>
                      <p>We are ready to start and waiting for your performance.</p>
                      <p>Audition will start from</p>
                      <!-- <div id="defaultCountdown"></div> -->
                      <div id="defaultCountdown" class="is-countdown">
                        <span class="countdown-row countdown-show4">
                          <span class="countdown-section">
                            <span class="countdown-amount">15th</span>
                            <span class="countdown-period">--</span>
                          </span>
                          <span class="countdown-section">
                            <span class="countdown-amount">May</span>
                            <span class="countdown-period">--</span>
                          </span>
                          <span class="countdown-section">
                            <span class="countdown-amount">2016</span>
                            <span class="countdown-period">--</span>
                          </span>
                        </span>
                      </div>
                      <div class="noo-countdown-footer register-now">
                        <a href="#" data-text="discover now"><span>Discover</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          @if (!isset($user_name))
            <div class="row parallax row-fluid home-upcoming-event">
              <div class="overlay_parallax"></div>
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="noo-shortcode-events">

                      <a name="register-now"></a>
                      <div class="noo-main col-md-12">
                        <div class="commerce">
                          <div class="col2-set" id="customer_login">
                            <h2>Register</h2>
                            <!-- <form action="" class="register" method="POST" onSubmit="return doRegister()"> -->
                              <div class="form-row">
                                <label for="reg_email">
                                  Name <span class="required">*</span>
                                </label>
                                <span class="error name-error"></span>
                                <input type="text" class="input-text" name="name" id="name" value=""/>                              
                              </div>

                              <div class="form-row">
                                <label for="reg_email">
                                  Email address <span class="required">*</span>
                                </label>
                                <span class="error email-error"></span>
                                <input type="text" class="input-text" name="email" id="email" value=""/>                              
                              </div>

                              <div class="form-row">
                                <label for="reg_email">
                                  Age <span class="required">*</span>
                                </label>
                                <span class="error age-error"></span>
                                <input type="text" class="input-text" name="age" id="age" value=""/>                              
                              </div>

                              <div class="form-row">
                                <label for="reg_email">
                                  Mobile Number <span class="required">*</span>
                                </label>
                                <span class="error mobile-error"></span>
                                <input type="text" class="input-text" name="mobile" id="mobile" value=""/>                              
                              </div>

                              <div class="form-row">
                                <label for="reg_password">
                                  Password <span class="required">*</span>
                                </label>
                                <span class="error password-error"></span>
                                <input type="password" class="input-text" name="password" id="password"/>                              
                              </div>

                              <div class="form-row">
                                <label for="reg_password">
                                  Confirm Password <span class="required">*</span>
                                </label>
                                <span class="error confirm-password-error"></span>
                                <input type="password" class="input-text" name="password_confirmation" id="confirmPassword"/>                              
                              </div>

                              <input type="hidden" name='_token' value="<?php echo csrf_token(); ?>" id='_token'>

                              <div class="form-row">
                                <span class="error register-error"></span>
                                <br/>
                                <button class="button btn-red" onClick="doRegister();">Register</button>
                                <!-- <input type="submit" class="button btn-red" name="register" value="Register"/> -->
                              </div>
                            <!-- </form> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endif

          <div class="row parallax row-fluid home-upcoming-event">
            <div class="overlay_parallax"></div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="noo-shortcode-events">
                    <a name="upcoming"></a>
                    <h2 class="sh-event-title">
                      About <span>Contest</span>
                    </h2>
                    <p class="sh-ds">
                      We're organizing {{{$season_name}}} to encourage and offer a opportunity for young talented singers. This is fully online based contest. Participants can upload their audio clip after registration. Online registration will open from 15th April, 2016. Participants need to pay Rs.100 only as registration fee.
                    </p>                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="colophon site-info come-to-footer">
        <div class="colophon wigetized">
          <div class="background-footer"></div>
          <div class="container">
            <div class="row noo-footer-main">
              <div class="col-md-4 col-sm-6">
                <div class="widget widget_text">
                  <h4 class="widget-title">Other <span>Details</span></h4>
                  <div class="textwidget">
                    <p>
                      Please feel free to reach us for any type of queries. Like our facebook page for more updates.
                    </p>
                    <p>
                      
                    </p>
                  </div>
                </div>
              </div>  
              <div class="col-md-4 col-sm-6">
                <div class="widget tribe-events-adv-list-widget">
                  <h4 class="widget-title">Important <span>Dates</span></h4>
                  <div class="tribe-mini-calendar-event">
                    <div class="list-date">
                      <span class="list-dayname">--</span>
                      <span class="list-daynumber">-</span>
                    </div>
                    <div class="list-info">
                      <h2 class="entry-title summary">
                        Audition Start Date
                      </h2>
                      <div class="duration">
                        <span class="date-start dtstart">@if(isset($season_start_date)) {{{$season_start_date}}} @endif</span>
                       <!--  -
                        <span class="date-end dtend">October 31-10:00 pm</span> -->
                      </div>
                    </div>  
                  </div>
                  <div class="tribe-mini-calendar-event">
                    <div class="list-date">
                      <span class="list-dayname">--</span>
                      <span class="list-daynumber">-</span>
                    </div>
                    <div class="list-info">
                      <h2 class="entry-title summary">
                        Audition End Date
                      </h2>
                      <div class="duration">
                        <span class="date-start dtstart">@if(isset($season_end_date)) {{{$season_end_date}}} @endif</span>
                        <!-- -
                        <span class="date-end dtend">October 31-10:30 pm</span> -->
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="widget mailchimp-widget">
                  <h4 class="widget-title">Number <span>Please</span></h4>
                  <form class="mc-subscribe-form" onSubmit="return saveContact()">
                    <label>Please mention your mobile number here. Our team will contact you. We'll not spam your inbox.</label>
                    <div class="input-mail">
                      <input type="text" name="mc_email" id="mobileNo" class="mc-email" value="" placeholder="Enter your number here..."/>
                      <span class="mobileError"></span>
                      <i class="fa fa-envelope-o icon-mc-email"></i>
                    </div>
                    <input type="submit" name="sendMob" value="Send now"/>
                  </form>
                </div>
              </div>
            </div>  
            <div class="noo-footer-bottom">
              <div class="widget widget_noo_infomation">
                <ul class="noo-infomation">
                  <li>
                    <a href="http://fb.com">
                      <span class="fa fa-facebook infomation-left"></span>
                      <address>Follow us on facebook</address>
                    </a>
                  </li>
                  <li class="info-phone">
                    <span class="fa fa-whatsapp infomation-left"></span> OR
                    <span class="fa fa-phone infomation-left"></span>
                    <span>+91 123 456 789</span>
                  </li>
                  <li class="info-mail">
                    <span class="fa fa-envelope-o infomation-left"></span>
                    <span><a href="mailto:admin@onlineaudition.xyz">admin@onlineaudition.xyz</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>  
        </div>  
      </footer>  
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Login</h4>
            </div>
            <div class="modal-body contactform">
              <form>
                <div class="loader">
                  <img src="images/loader.gif">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="control-label">Email:</label>
                  <br/><span class="error login-email-error"></span>
                  <input type="text" class="form-control text-box-popup" id="login-email" name="login_email">
                </div>
                <div class="form-group">
                  <label for="message-text" class="control-label">Password:</label>
                  <br/><span class="error login-password-error"></span>
                  <input type="password" class="form-control text-box-popup" id="login-password" name="login_password">
                </div>
                <input type="hidden" name='_token' value="<?php echo csrf_token(); ?>" id='login_token'>
              </form>
            </div>
            <div class="modal-footer">
                <div class="row">
                  <div class="col-sm-6">
                    <button type="button" class="btn btn-primary btn-size" onClick="doLogin()">Login</button>
                  </div>
                  <div class="col-sm-6">
                    <button type="button" class="btn btn-default btn-size" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
    <script type='text/javascript' src='assets/js/common.js'></script>
    <script type='text/javascript' src='assets/js/constants.js'></script>
    <script type='text/javascript' src='assets/js/track.js'></script>
    <script type='text/javascript' src='assets/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='assets/js/modernizr-2.7.1.min.js'></script>
    <script type='text/javascript' src='assets/js/imagesloaded.pkgd.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.carouFredSel-6.2.1.js'></script>
    <script type='text/javascript' src='assets/js/jquery.touchSwipe.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/hoverIntent-r7.min.js'></script>
    <script type='text/javascript' src='assets/js/superfish-1.7.4.min.js'></script>
    <script type='text/javascript' src='assets/js/main.js'></script>
    <script type='text/javascript' src='assets/js/mediaelement-and-player.js'></script>
    <script type='text/javascript' src='assets/js/player.js'></script>
    <script type='text/javascript' src='assets/js/jquery.plugin.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.countdown.min.js'></script> 
    <script type='text/javascript' src='assets/js/jquery.parallax.js'></script>
    <script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>

    <script type="text/javascript">
          var $height_w   = jQuery(window).height();
          function saveContact() {
            if(!$('#mobileNo').val()) {
              $('.mobileError').html('Please enter your mobile number');
              return false;
            }
            if($('#mobileNo').val().length != 10){
              $('.mobileError').html('Please enter a valid number');
              return false;
            }
            $.ajax({
              url: 'save-contact.php',
              type: 'POST',
              data: {
                mobile_no: $('#mobileNo').val()
              },
              success: function(res) {
                $('.mobileError').html('Thanks we will contact you soon');
              }
            });
            
            return false;
          }
          

          jQuery('.noo-countdown').css('height',$height_w+'px');
          jQuery(window).resize(function(){
                var $height_w = jQuery(window).height();
                jQuery('.noo-countdown').css('height',$height_w+'px');
          });
          
          jQuery(function () {
            track();
            $('body').on('click', '.register-now', function() {
            $("html, body").animate({
                scrollTop: $('.come-to-footer').outerHeight()
            }, 800);
            return false;
          });

                jQuery('.full-background li:first-child').show();
                var myVar = '';
                clearInterval(myVar);
                myVar = setInterval(function(){
                    jQuery('.full-background li:first-child').fadeOut(1200).next('li').fadeIn(1200).end().appendTo('.full-background');
                },3500);
              
                                  
              austDay = new Date(2016, 5 - 1,  31);
              // jQuery('#defaultCountdown').countdown({until: austDay});
              jQuery('#year').text(austDay.getFullYear());
            });

        </script>
  </body>
</html>