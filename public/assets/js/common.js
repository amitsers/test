function doLogin() {
  $('.loader').show();
  var errorClasses = ['login-email-error', 'login-password-error'];
  for (var c=0; c<errorClasses.length; c++) {
    $('.'+errorClasses[c]).hide();
  }
  console.log(333);
  $.ajax({
      url: 'login',
      type: 'POST',
      data: {
        email: $('#login-email').val(),
        password: $('#login-password').val(),
        _token: $('#login_token').val(),
      },
      success: function(res) {
        if (res.hasOwnProperty('email') && res.email[0]) {
          $('.loader').hide();
          $('.login-email-error').show();
          $('.login-email-error').html(res.email[0]);
        }

        if (res.hasOwnProperty('password') && res.password[0]) {
          $('.loader').hide();
          $('.login-password-error').show();
          $('.login-password-error').html(res.password[0]);
        }

        if (res.hasOwnProperty('isError') && res.hasOwnProperty('code') && res['code'] === 'LDGFLD') {
          $('.loader').hide();
          $('.login-email-error').show();
          $('.login-email-error').html(error.loginFailed);
        }

        if (res.hasOwnProperty('code') && res['code'] === 'LGDIN') {
          window.location="activity";
        }
      }
    });

  return true;
}

function doRegister() {
  $('.register-thumb').hide();
  $('.register-loader').show();
	var errorClasses = ['name-error', 'email-error', 'age-error', 'password-error', 'confirm-password-error', 'register-error', 'mobile-error'];
	for (var c=0; c<errorClasses.length; c++) {
		$('.'+errorClasses[c]).hide();
	}

  validateName();
  validateEmail('email', 'email-error');
  validateAge();
  validatePassword();
  validateMobile();
	if (validateName() && validateEmail('email', 'email-error') && validateAge() && validatePassword() && validateMobile()) {
    $.ajax({
      url: 'register',
      type: 'POST',
      data: {
        email: $('#email').val(),
        name: $('#name').val(),
        age: $('#age').val(),
        password: $('#password').val(),
        password_confirmation: $('#confirmPassword').val(),
        _token: $('#_token').val()
      },
      success: function(res) {        
        if (res.hasOwnProperty('name') && res.name[0]) {
          $('.register-loader').hide();
          $('.register-thumb').show();
          $('.name-error').show();
          $('.name-error').html(res.name[0]);
          $('.register-error').show();
          $('.register-error').html(res.name[0]);
        }

        if (res.hasOwnProperty('email') && res.email[0]) {
          $('.register-loader').hide();
          $('.register-thumb').show();
          $('.email-error').show();
          $('.email-error').html(res.email[0]);
          $('.register-error').show();
          $('.register-error').html(res.email[0]);
        }

        if (res.hasOwnProperty('age') && res.age[0]) {
          $('.register-loader').hide();
          $('.register-thumb').show();
          $('.age-error').show();
          $('.age-error').html(res.age[0]);
          $('.register-error').show();
          $('.register-error').html(res.age[0]);
        }

        if (res.hasOwnProperty('password') && res.password[0]) {
          $('.register-loader').hide();
          $('.register-thumb').show();
          $('.password-error').show();
          $('.password-error').html(res.password[0]);
          $('.register-error').show();
          $('.register-error').html(res.password[0]);
        }

        if(res.hasOwnProperty('code') && res.code === 'RGSTRD') {
          console.log('registered scuus');
          window.location="activity";
        }

        if(res.hasOwnProperty('isError') && res.isError && res.code === 'EXST') {
          $('.register-loader').hide();
          $('.register-thumb').show();
          $('.email-error').show();
          $('.email-error').html(error.alreadyRegistered);
          $('.register-error').show();
          $('.register-error').html(error.alreadyRegistered);
        }
      }
    });
  } else {
    $('.register-loader').hide();
    $('.register-thumb').show();
  }
	return false;
}

function isNumber(obj) {
  return !isNaN(parseFloat(obj)) ;
}

function validateAge() {
  var age = $('#age').val();
  if (!age) {
    $('.age-error').show();
    $('.age-error').html(error.nullAge);
    $('.register-error').show();
    $('.register-error').html(error.ageLimit);
    return false;
  }
  if (!!isNaN(parseFloat(age))) {
    $('.age-error').show();
    $('.age-error').html(error.ageNotNumber);
    $('.register-error').show();
    $('.register-error').html(error.ageLimit);
    return false;
  }
  if (age < 15 || age > 35) {
    $('.age-error').show();
    $('.age-error').html(error.ageLimit);
    $('.register-error').show();
    $('.register-error').html(error.ageLimit);
    return false;
  }
  return true;
}

function sendContactMsg() {
  var errorClasses = ['contact-us-name-error', 'contact-us-email-error', 'contact-us-message-error'];
  for (var c=0; c<errorClasses.length; c++) {
    $('.'+errorClasses[c]).hide();
  }
  var isError = false;

  if(!$('#contactUsName').val().trim()) {
    $('.contact-us-name-error').show();
    $('.contact-us-name-error').html(error.nullName);
    isError = true;
  }

  if(!$('#contactUsEmail').val().trim()) {
    $('.contact-us-email-error').show();
    $('.contact-us-email-error').html(error.nullEmail);
    isError = true;
  }

  if(!$('#contactUsMessage').val().trim()) {
    $('.contact-us-message-error').show();
    $('.contact-us-message-error').html(error.nullMessage);
    isError = true;
  }

  if (!validateEmail('contactUsEmail', 'contact-us-email-error')) {
    isError = true;
  }

  isError = false;
  
  if (isError) {
    $.ajax({
      url: 'send-contact-msg',
      type: 'POST',
      data: {
        name: $('#contactUsName').val(),
        email: $('#contactUsEmail').val(),
        message: $('#contactUsMessage').val(),
        _token: $('#login_token').val(),
      },
      success: function(res) {
        console.log(res);
        if (res.hasOwnProperty('name') && res.name[0]) {
          $('.contact-us-name-error').show();
          $('.contact-us-name-error').html(res.name[0]);
        }

        if (res.hasOwnProperty('email') && res.email[0]) {
          $('.contact-us-email-error').show();
          $('.contact-us-email-error').html(res.email[0]);
        }

        if (res.hasOwnProperty('message') && res.message[0]) {
          $('.contact-us-message-error').show();
          $('.contact-us-message-error').html(res.message[0]);
        }
      }
    });
  }
}

function validateName() {
	var name = $('#name').val();
	if (!name) {
		$('.name-error').show();
		$('.name-error').html(error.nullName);
    $('.register-error').show();
    $('.register-error').html(error.nullName);
    return false;
	}
  return true;
}

function validateEmail(fieldId, errorClass) {
  var email='';
  if ($('#'+fieldId).val()) {
    email = $('#'+fieldId).val().trim();
  }
  
  var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
  if (!email) {
  	$('.'+errorClass).show();
    $('.'+errorClass).html(error.nullEmail);
    $('.register-error').show();
    $('.register-error').html(error.nullEmail);
    return false;
  } else if (!re.test(email)) {
  	$('.'+errorClass).show();
  	$('.'+errorClass).html(error.invalidEmail);
    $('.register-error').show();
    $('.register-error').html(error.invalidEmail);
    return false;
  }
  return true;
}

function validatePassword() {
  var password = $('#password').val().trim();
  var confirmPassword = $('#confirmPassword').val().trim();
  if (!password) {
  	$('.password-error').show();
  	$('.password-error').html(error.password);
    $('.register-error').show();
    $('.register-error').html(error.password);
    return false;
  } else if (password.length <= 5 ) {
  	$('.password-error').show();
  	$('.password-error').html(error.passwordLength);
    $('.register-error').show();
    $('.register-error').html(error.passwordLength);
    return false;
  } else if (password !== confirmPassword) {
  	$('.confirm-password-error').show();
  	$('.confirm-password-error').html(error.passwordMissMatch);
    $('.register-error').show();
    $('.register-error').html(error.passwordMissMatch);
    return false;
  }
  return true;
}

function validateMobile() {
  var mobile = $('#mobile').val().trim();
  if (!mobile) {
    $('.mobile-error').show();
    $('.mobile-error').html(error.mobile);
    $('.register-error').show();
    $('.register-error').html(error.mobile);
    return false;
  } else if (mobile.length != 10 ) {
    $('.mobile-error').show();
    $('.mobile-error').html(error.mobileLength);
    $('.register-error').show();
    $('.register-error').html(error.mobileLength);
    return false;
  } else if(isNaN(mobile)){
    $('.mobile-error').show();
    $('.mobile-error').html(error.mobileInvalid);
    $('.register-error').show();
    $('.register-error').html(error.mobileInvalid);
    return false;
  }
  return true;
}