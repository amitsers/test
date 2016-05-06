
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

    <!-- included css and js files -->
    @include('templates.header-includes')
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
      @include('templates.header-menu')
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

      @include('templates.footer-details-black')
      @include('templates.login-modal')
    </div>

    @include('templates.footer-includes')

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