<!DOCTYPE html>
<html lang="en">
<head>

  <title>Online Singing Audition - 2016 | Profile</title>

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
            <!-- <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
                 <li><a href="home#home">Home</a></li>
                 <li ><a href="home#rules">Rules</a></li>
                 <li ><a href="#">Other Auditions</a></li>
                 <li >
                 <a href="index.html#contact">Contact</a></li>
                 <li class="dropdown">
                  <a class="dropdown-toggle active" data-toggle="dropdown">Amit<span class="caret"></span></a>
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



<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="uploadModalLabel">Choose Profile Picture</h4>
      </div>
      <div class="modal-body contactform">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Best size combination: 150 x 198 pixels</label>
            <input type="text" class="form-control" id="profile_pic">
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <div class="row">
    <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-upload"> Upload</span></button>
  </div>

      </div>
    </div>
  </div>
</div>




    <h2 class="text-center wowload fadeInUp">Upcoming Audition Details</h2>  
    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="https://upload.wikimedia.org/wikipedia/en/8/84/Indian_Idol_2012_logo.png" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p> 
      <p>this is about India Idol</p>     
      <a href="http://www.google.com" title="India Idol Audition">Plese click this link</a>
      <span>Angel Smith - <b>eshop Canada</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
      <span>John Partic - <b>Crazy Pixel</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/3.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
      <span>Harris David - <b>Jet London</b></span>
      </div>
      </div>
  </div>

   <!-- Indicators -->
    <ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
    </ol>
    <!-- Indicators -->
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




<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

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