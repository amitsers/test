@include('templates.header')

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
                 <li><a href="home">Home</a></li>
                 <li >
                 <a href="contact">Contact</a></li>
                 <li class="dropdown">
                  <a class="dropdown-toggle active" data-toggle="dropdown">{{{$name}}}<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a class="active" href="activity">Activity</a></li>
                    <li class="divider"></li>
                    <li><a href="logout">Logout</a></li>
                  </ul>
                 </li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->


<div id="activity" class="spacer">
  <div class="container">
    <h4 class="wowload fadeInUp">Recent Updates: </h4>

    <p>
 <!--      Audition Date: 12/22/2222<br/>
      Audition End Date: 89/22/2222 -->
    </p>
    <br/>    
    <div class="upload-block">
      <h4 class="wowload fadeInUp">Your Recent Activity: </h4> {{Session::get('payment_message')}}
      <form action="{{URL::to('upload-song')}}" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="track" class="control-label">Upload Audio Track:</label>
          <span class="error upload-error">
            <?php
              if (isset($errors)) {
                echo '<br/><br/>' . $errors->first() . '<br/><br/>';
              }
            ?>
          </span>
          <input type="file" class="form-control" id="track" name="track">
          <input type="hidden" name='_token' value="<?php echo csrf_token(); ?>">
          <input type="submit" class="btn btn-primary" value="Pay & Upload" name="upload">
        </div>
      </form>
    </div>
    
    <br/>

    <div class="track-list-block">
      <label for="track-list" class="control-label">Your Uploaded Tracks: </label>      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Season Name</th>
            <th>Track <span class="sm-notice"> &nbsp;&nbsp; *Best View in PC</span></th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($upload_details as $song)          
            <tr>
              <td class="track-list">{{ $song->season_name }}</td>
              <td>
                
                <audio controls class="player">
                  <source src="{{ $song->file_destination }}/{{ $song->file_name }}" type="audio/mpeg">
                  Your browser does not support the audio element.
                </audio>

              </td>
              <td class="track-list">
                @if ($song->payment_status === 1)
                  Paid
                @else
                  <a href="{{ $song->transaction->longurl }}">Pay Now</a>
                @endif

              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>
</div>


<div id="profile" class="spacer">

<div class="container center">
<h3 class="text-center wowload fadeInUp"></h3>  
  
    <div class="col-sm-10 col-sm-offset-2 col-xs-10">


      <div class="clearfix grid wowload pulse"> 
          <figure class="effect-oscar wowload fadeIn"  data-toggle="modal" data-target="#uploadModal">
            <!-- <img src="images/profiles/first-can.png" class="profile-pic"/> -->
            <figcaption>
                <br/><br/><br/>
                <p><span class="icon-size glyphicon glyphicon-upload"></span></p>
                <p>Click to Upload</p>
            </figcaption>
        </figure>
       </div>

      <br/>
        
    </div>


</div>
</div>


  </div>


<!-- Footer Starts -->
  @include('templates.footer-details')
<!-- # Footer Ends -->

<!-- including js files -->
@include('templates.footer')

<script src="assets/js/track.js" type="text/javascript"></script>
<script type="text/javascript">

  $(document).ready(function(){
    track();
  });

</script>
</body>
</html>