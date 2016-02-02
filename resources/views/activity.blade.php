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
            <!-- <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
                 <li><a href="home#home">Home</a></li>
                 <li ><a href="home#rules">Rules</a></li>
                 <li ><a href="#">Other Auditions</a></li>
                 <li >
                 <a href="index.html#contact">Contact</a></li>
                 <li class="dropdown">
                  <a class="dropdown-toggle active" data-toggle="dropdown">{{{$name}}}<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="activity">Activity</a></li>
                    <li class="active"><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Logout</a></li>
                  </ul>
                 </li>
              </ul>
            </div> -->
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
      Audition Date: 12/22/2222<br/>
      Audition End Date: 89/22/2222
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
    <!-- <div class="track-list-block">
      <label for="track-list" class="control-label">Your Uploaded Tracks: </label>      
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Season Name</th>
            <th>Track <span class="sm-notice"> &nbsp;&nbsp; *Best View in PC</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="track-list">1. Test Audio</td>
            <td>
              <audio controls class="player">
                <source src="http://amarela.kaakai.in/audios/Tushar%20Sinha/Maya%20re%20e%20kirou.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
              </audio>

            </td>
          </tr>
        </tbody>
      </table>
    </div> -->

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
        <div class="row wowload fadeIn">
          <div class="form-group">
            <label for="name" class="control-label">Name: </label><br/>
            <input type="text" class="profile-text disabled-name uline-text-box" onclick="enableField('name')" id="disabled-name" value="Sahil Som">
            <span class="glyphicon glyphicon-pencil send-profile edit-name" title="Edit" onclick="enableField('name')"></span>
            <input type="text" class="profile-text enable-name" id="enable-name" >            
            <span class="glyphicon glyphicon-ok send-profile update-name" title="Save" onclick="saveField('name')"></span>
          </div>

          <div class="form-group">
            <label for="email" class="control-label">Email: </label><br/>
            <input type="text" class="profile-text disabled-email uline-text-box" title="Edit" onclick="enableField('email')" id="disabled-email" value="amit@gmail.com">
            <span class="glyphicon glyphicon-pencil send-profile edit-email" onclick="enableField('email')"></span>
            <input type="text" class="profile-text enable-email" id="enable-email" >            
            <span class="glyphicon glyphicon-ok send-profile update-email" title="Save" onclick="saveField('email')"></span>
          </div>

          <div class="form-group">
            <label for="mobile" class="control-label">Mobile: </label><br/>
            <input type="text" class="profile-text disabled-mobile uline-text-box" title="Edit" onclick="enableField('mobile')" id="disabled-mobile" value="">
            <span class="glyphicon glyphicon-pencil send-profile edit-mobile" onclick="enableField('mobile')"></span>
            <input type="text" class="profile-text enable-mobile" id="enable-mobile" >            
            <span class="glyphicon glyphicon-ok send-profile update-mobile" title="Save" onclick="saveField('mobile')"></span>
          </div>

          <div class="form-group">
            <label for="street" class="control-label">Lane/Street: </label><br/>
            <input type="text" class="profile-text disabled-street uline-text-box" title="Edit" onclick="enableField('street')" id="disabled-street" value="">
            <span class="glyphicon glyphicon-pencil send-profile edit-street" onclick="enableField('street')"></span>
            <input type="text" class="profile-text enable-street" id="enable-street" >            
            <span class="glyphicon glyphicon-ok send-profile update-street" title="Save" onclick="saveField('street')"></span>
          </div>

          <div class="form-group">
            <label for="state" class="control-label">State: </label><br/>
            <input type="text" class="profile-text disabled-state uline-text-box" title="Edit" onclick="enableField('state')" id="disabled-state" value="">
            <span class="glyphicon glyphicon-pencil send-profile edit-state" onclick="enableField('state')"></span>
            <input type="text" class="profile-text enable-state" id="enable-state" >            
            <span class="glyphicon glyphicon-ok send-profile update-state" title="Save" onclick="saveField('state')"></span>
          </div>

          <div class="form-group">
            <label for="pincode" class="control-label">Pincode: </label><br/>
            <input type="text" class="profile-text disabled-pincode uline-text-box" title="Edit" onclick="enableField('pincode')" id="disabled-pincode" value="">
            <span class="glyphicon glyphicon-pencil send-profile edit-pincode" onclick="enableField('pincode')"></span>
            <input type="text" class="profile-text enable-pincode" id="enable-pincode" >            
            <span class="glyphicon glyphicon-ok send-profile update-pincode" title="Save" onclick="saveField('pincode')"></span>
          </div>

          <div class="form-group">
            <label for="country" class="control-label">Country: </label><br/>
            <input type="text" class="profile-text disabled-country uline-text-box" title="Edit" onclick="enableField('country')" id="disabled-country" value="">
            <span class="glyphicon glyphicon-pencil send-profile edit-country" onclick="enableField('country')"></span>
            <input type="text" class="profile-text enable-country" id="enable-country" >            
            <span class="glyphicon glyphicon-ok send-profile update-country" title="Save" onclick="saveField('country')"></span>
          </div>
      </div>
    </div>


</div>
</div>


  </div>


<!-- Footer Starts -->
<div class="footer text-center spacer">
  <a href="#home" title="Online singing audition 2016">Home</a> | <a href="#rules" title="Online singing audition rules">Rules</a> | <a href="#register" title="Register for SEASION_NAME">Register</a> | <a href="" title="Singing audition dates">Other Audition Date</a>
  <br/><br/>
  Call / Watsapp: +91-8822455669<br/><br/>
  Email: query@onlineaudition.xyz<br/><br/><br/>
  Copyright 2015 onlineaudition.xyz All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="glyphicon glyphicon-chevron-up"></i></a>

<!-- including js files -->
@include('templates.footer')

<script type="text/javascript">

  $(document).ready(function(){

    var fields = ['name', 'email', 'mobile', 'street', 'state', 'pincode', 'country'];
    for(var a = 0; a < fields.length; a++) {
      $(".enable-"+fields[a]).hide();
      $(".update-"+fields[a]).hide();


        $(".enable-"+fields[a]).bind("enterKey",function(e){
          var fieldId = e.target.id;
          var field = fieldId.split('-');
          saveField(field[1]);     
          var nextFieldIndex = fields.indexOf(field[1]) + 1;
          if (nextFieldIndex <= fields.length) {
            enableField(fields[nextFieldIndex]);
          }
        });
        $(".enable-"+fields[a]).keyup(function(e){
          if(e.keyCode == 13) {
            $(this).trigger("enterKey");
          }
        });

    }    
  });

  function updateProfileField(fieldName, value) {
    //console.log(fieldName, value);
    $.ajax({
      url: 'update-profile-field',
      type: 'GET',
      data: {
        fieldName: fieldName,
        fieldValue: value
      },
      success: function(res) {
        console.log(res);
      }
    });
  }

  function enableField(field) {
    $(".disabled-"+field+"").hide();
    $(".edit-"+field).hide();
    $(".enable-"+field).show();
    $(".update-"+field).show();
    $("#enable-"+field).val($("#disabled-"+field).val());
    $("#enable-"+field).focus();
  }

  function saveField(field) {
    $(".disabled-"+field).show();
    $(".edit-"+field).show();
    $(".enable-"+field).hide();
    $(".update-"+field).hide();
    $("#disabled-"+field).val($("#enable-"+field).val());
    updateProfileField(field, $("#enable-"+field).val());
  }

</script>
</body>
</html>