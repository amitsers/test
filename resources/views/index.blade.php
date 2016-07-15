<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html lang="en-US" class=" js no-touch"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="images/logo.png"/>
    <title>Online Singing Audition | The Viral Voice | 2016</title>

    <meta property="og:url" content="http://onlineaudition.xyz/"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Online Singing Audition | The Viral Voice | 2016"/>
    <meta property="og:description" content="The Viral Voice is fully online based singing contest. Participants needs to upload their audio clip after registration."/>
    <meta property="og:image" content="http://onlineaudition.xyz/images/back.png"/>

    <meta name="keywords" content="Online Singing Contest, The Viral Voice, Online Audition, Singing Contest, Sing online, Audition"/>
    <meta name="description" content="Register for Singing Audition The Viral Voice Season-I. We will announce the date soon"/>
    <meta id="_description3" itemprop="description" content="The true satisfaction of a singer is it's ability to perform and entertain people. When talents and opportunities meet, the journey towards success and achievements begins. Here The Viral Voice Season-I, brings you a great opportunity to showcase your talent and show the world that you are the BEST. So why waste time. Pick your phones ,record a cool audio clip and upload.. Thats it..Get ready for the online registration. Registration fee Rs 100 only..Good luck and wish you all the best.">
    <meta id="_url4" itemprop="url" content="http://www.onlineaudition.xyz/">
    <meta itemprop="name" content="Online Singing Audition | The Viral Voice | 2016">

    <!-- included css and js files -->
    @include('templates.header-includes')
  </head>
  <body class="page-menu-transparent">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=121117958298617";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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
                            <span class="countdown-amount">
                              <meta itemprop="startDate" content="2016-06-30">2016</span>
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
                                <img class="register-loader" src="images/register-loader.gif">
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
                      The true satisfaction of a singer is it's ability to perform and entertain people. When talents and opportunities meet, the journey towards success and achievements begins. Here <span itemprop="name">The Viral Voice Season-I</span>, brings you a great opportunity to showcase your talent and show the world that you are the BEST. So why waste time.Pick your phones ,record a cool audio clip and upload.. Thats it..Get ready for the online registration. Registration fee Rs 200 only..Good luck and wish you all the best. Keep in touch we'll update registration dates here.
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
  </body>
  @if (!isset($user_name))
    <script type="text/javascript">
      if((getQueryParameter('err')!=='') && getQueryParameter('err') === 'LGN') {
        $(function () { $('#exampleModal').modal('show')});  
      }    
    </script>
  @endif
</html>