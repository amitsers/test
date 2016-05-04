<!DOCTYPE html>
<html lang="en">

<head>

	<title>Online Singing Audition - 2016</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="{{ URL::asset('http://fonts.googleapis.com/css?family=Roboto:400,300,700') }}" type="text/css">

    <link rel="stylesheet" href="{{ URL::asset('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/animate/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/animate/set.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/gallery/blueimp-gallery.min.css') }}" type="text/css">
    
    <link rel="shortcut icon" href="{{{ asset('images/favicon.ico') }}}">
    <link rel="icon" href="{{{ asset('images/favicon.ico') }}}">

    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}" type="text/css">

</head>
<body>

	<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <!-- <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo"></a> -->
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="scroll"><a href="#home">Home</a></li>
                <li class="scroll"><a href="#rules">Rules</a></li>
                <li class="scroll"><a href="#contact">Contact</a></li>
                @if (!isset($user_name))
                  <li class="scroll"><a href="#register">Register</a></li>
                  <li ><a href="#" data-toggle="modal" data-target="#exampleModal">Login</a></li>
                @endif

                @if (isset($user_name))
                  <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown">{{{$user_name}}}<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="activity">Activity</a></li>
                    <li class="divider"></li>
                    <li><a href="logout">Logout</a></li>
                  </ul>
                 </li>
                @endif
                 
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->







<!-- works -->
<div id="home"  class=" clearfix grid"> 
    <figure class="effect-oscar  wowload fadeIn">
        <img src="images/portfolio/1.jpg" alt="img01"/>
        <figcaption>
            <h2>Event</h2>            
            <p>@if (isset($season_name)) {{{$season_name}}} @endif  is India's first online based singing contest<br/>
              Just send us your audio and Get Noticed</p>    
            <!-- <a href="images/portfolio/1.jpg" title="1" data-gallery>View more</a></p>             -->
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/2.jpg" alt="img01"/>
        <figcaption>
            <h2>Rules</h2>
            <p>There will be two online round. All the Rules and regulations are mentioned below.<br/>
            <a href="#rules">View More</a></p>        
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/3.jpg" alt="img01"/>
        <figcaption>
            <h2>Dates</h2>
            <p>Audition Start Date: @if(isset($season_start_date)) {{{$season_start_date}}} @endif<br/>
              Audition End Date: @if(isset($season_end_date)) {{{$season_end_date}}} @endif<br/>  
              <a href="#imp_dates">View More</a></p>       
        </figcaption>
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/4.jpg" alt="img01"/>
        <figcaption>
            <h2>Contact Us</h2>
            <p>Please feel free to contact us for any queries<br>
            Watsapp: CONTACT_NO<br/>
            <a href="contact" title="1">View more</a></p>
        </figcaption> 
    </figure>
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/5.jpg" alt="img01"/>
        <figcaption>
            <h2>Other Auditions</h2>
            <p>Here you will get audition dates of other well known contests too<br>
            <a href="#" title="1">View more</a></p>            
        </figcaption>
    </figure>
     
     <figure class="effect-oscar  wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01"/>
        <figcaption>
            <h2>Register</h2>
            <p>Register and send us your recorded audio<br>
              Please read the rules and regulations carefully<br/>
            <a href="#register" title="1">View more</a></p>            
        </figcaption>
    </figure>     
</div>
<!-- works -->


<!-- Cirlce Starts -->
<div id="rules"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Rules and Regulations</h2>  
  <div class="row">
  <div class="col-sm-12 wowload fadeInLeft">
    <h4>Objective</h4>
      We're organizing {{{$season_name}}} to encourage and offer a opportunity for young talented singers
    <h4>Steps to Enrol</h4>
    <p>
      <ul>
        <li>This is fully online based contest</li>
        <li>Just fill up the registration form and get enrolled</li>
        <li>Upload a copy of your recording</li>
        <li>We'll be mailing you the details after registration</li>
        <li>Please provide valid email and phone number</li>
      </ul>
    </p>

    <a id="rules-prelim"></a>
    <h4>Preliminary Round:</h4>
    <p>
      <ul>
        <li>Age limit 30 years (In case of any issues, the participant may be asked to show his/her age proof)</li>
      <li>Any body from any corner of the world can participate</li>
      <li>The registrations / contest are to be done online (only)</li>
      <li>Participants can sing a song in any of the Indian languages</li>
      <li>Song can be a movie/album song or self composition</li>
      <li>Any one can submit any number of songs, this will be considered as separate entries. And for each submission he/she have to pay the enrolment fee of SEASON_FEE separately (Non-refundable)</li>
      <li>The maximum duration of the rendition should not exceed 6 minutes.</li>
      <li>Acceptable file format: mp3, wma, wav, amr only</li>
      <li>Short listed candidates will be communicated by phone or by email for the finale</li>
      <li>Selection of candidate will be done based on:
        <ol type="i">
          <li>Quality of voice  10</li>
          <li>Range of voice  10</li>
          <li>Singing in pitch  10</li>
          <li>Singing in tune 10</li>
          <li>Maintaining Rhythm  10</li>
          <li>Pronunciation of lyrics 10</li>
          <li>Mood and Expression 10</li>
          <li>Breath control  10</li>
          <li>Creativity - Improvisation  10</li>
          <li>Overall impact – winning component  10</li>
          <li>Selection of suitable song for voice 10</li>
        </ol>
      </li>
      </ul>
    </p>

    <h4>Final Round</h4>
    <p>
      <ul>
        <li>We will select top 10 contestants from Audition Round</li>
        <li>Top 10 candidates have to again submit one more recorded audio track for final round (No need to pay the fee again)</li>
        <li>If participant wants, he/she use the previous track(Just let us know)</li>
        <li>We are going to upload your tracks in our website and as well as in our facebook page</li>
        <li>Finalist and Runner up will get selected based on above 11 criteria + voting</li>
        <li>Below mentioned parameters will be considered as voting system:</li>
          <ol type="i">
            <li>Number of likes out of 100 facebook likes</li>
            <li>100% out of 10 facebook shares</li>
            <li>100% out of 20 facebook positive comments. (e.g.: comments like 'keep it up', 'good', 'thumbs up symbol', 'great' etc... Negative comments are not going to influence our judges)</li>
            <li>40% from our website song listeners</li>
          </ol>
        <li>Top 2 participant will get cash prize</li>
      </ul>
    </p>

    <h4>Important Note:</h4>
    <p>
      <ul>        
        <li>Judges decision will be final.</li>
        <li>The organizing committee reserves the right to change rules and to change or extend Audition/Finale dates, if desired.</li>
        <li>We will keep audio tracks of top 10 contestants in our website. This will help the contestant to GET NOTICED in world.</li>
        <li>Prize amount of {{{$season_name}}} is not decided yet. We'll publish here soon.</li>
        <li>If the contest gets cancelled due to any reason then our organisation will refund the full amount paid by the participant.</li>
        <li>For any doubts / queries you can <a href="#contact">reach to</a> us any time.</li>
      </ul>
    </p>

    <a id="imp_dates"></a>
    <h4>Important Dates:</h4>
    <p>
      <ul>
        <li>Audition Start Date: 3rd January, 2016</li>
        <li>Audition End Date: 3rd February, 2016</li>
        <li>Audition Results: 15th February, 2016</li>
      </ul>    
    </p>
  </div>
  </div>
</div>
<!-- #Cirlce Ends -->



<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
  <div class="col-sm-12 col-xs-12">
    <h4>Be the winner of India's first online singing contest</h4>
  </div>
</div>
</div>
</div>
</div>
<!-- About Ends -->


<div id="register"  class="container spacer">
<div class="container contactform center">
  @if (!isset($user_name))
    <h2 class="text-center  wowload fadeInUp">Register for {{{$season_name}}}</h2>
    <div class="row wowload fadeInLeftBig">      
        <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
          <span class="error name-error"></span>
          <input type="text" placeholder="Name" id="name" name="name">   
          <span class="error email-error"></span>
          <input type="text" placeholder="Email" id="email" name="email">
          <span class="error age-error"></span>
          <input type="text" placeholder="Age" id="age" name="age">
          <span class="error password-error"></span>
          <input type="password" placeholder="Password" id="password" name="password">
          <span class="error confirm-password-error"></span>
          <input type="password" placeholder="Confirmation Password" id="confirmPassword" name="password_confirmation">
          <input type="hidden" name='_token' value="<?php echo csrf_token(); ?>" id='_token'>
          <button class="btn btn-primary" onClick="register();"><i class="glyphicon glyphicon-thumbs-up register-thumb"></i> <img class="register-loader" src="images/loader.gif"> Register</button>
        </div>
    </div>
  @endif
  <div class="process">
    <h3 class="text-center wowload fadeInUp">What you need to do ?</h3>
    <ul class="row text-center list-inline  wowload bounceInUp">
      <li id="process-line">
            <span><b>Register</b></span>
        </li>
        <li id="process-line">
            <span><b>Upload a Song</b></span>
        </li>      
        <li id="process-line">
            <span><b>& Become a Winner</b></span>
        </li>
    </ul>
  </div>


</div>
</div>


<!--Contact Starts-->
<div id="contact" class="spacer">

<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Get in touch for any queries</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        <span class="error contact-us-name-error"></span>
        <input type="text" placeholder="Name" id="contactUsName" name="contact_us_name">
        <span class="error contact-us-email-error"></span>
        <input type="text" placeholder="Email" id="contactUsEmail" name="contact_us_email">
        <span class="error contact-us-message-error"></span>
        <textarea rows="5" placeholder="Message" id="contactUsMessage" name="contact_us_message"></textarea>
        <button class="btn btn-primary" name="contact_us_btn" onClick="sendContactMsg()"><i class="glyphicon glyphicon-send"></i> Send</button>
      </div>
  </div>



</div>
</div>
<!--Contact Ends-->



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
            <input type="text" class="form-control" id="login-email" name="login_email">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Password:</label>
            <br/><span class="error login-password-error"></span>
            <input type="password" class="form-control" id="login-password" name="login_password">
          </div>
          <input type="hidden" name='_token' value="<?php echo csrf_token(); ?>" id='login_token'>
        </form>
      </div>
      <div class="modal-footer">
          <div class="row">
            <div class="col-sm-6">
              <button type="button" class="btn btn-primary" onClick="doLogin()">Login</button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>



<!-- Footer Starts -->
  @include('templates.footer-details')
<!-- # Footer Ends -->

<a href="#home" class="gototop "><i class="glyphicon glyphicon-chevron-up"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>
<script src="assets/constants.js"></script>
<script src="assets/common.js"></script>
<script src="assets/track.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function(){
    track();
  });
</script>

</body>
</html>