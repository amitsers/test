function doLogin() {
  var errorClasses = ['login-email-error', 'login-password-error'];
  for (var c=0; c<errorClasses.length; c++) {
    $('.'+errorClasses[c]).hide();
  }

  if (!password: $('#login-password').val()) {
    $('.login-password-error').show();
    $('.login-password-error').html(res.password);
  }

  validateEmail('login-email', 'login-email-error');

  if (validateEmail('login-email', 'login-email-error') && $('#login-password').val()) {
    $.ajax({
      url: 'login',
      type: 'POST',
      data: {
        login_email: $('#login-email').val(),
        login_password: $('#login-password').val(),
        _token: $('#login_token').val(),
      },
      success: function(res) {
        console.log(res);
      }
    });
  }
}

function register() {
	var errorClasses = ['name-error', 'email-error', 'age-error', 'password-error', 'confirm-password-error'];
	for (var c=0; c<errorClasses.length; c++) {
		$('.'+errorClasses[c]).hide();
	}

  validateName();
  validateEmail('email', 'email-error');
  validateAge();
  validatePassword();
	if (validateName() && validateEmail('email', 'email-error') && validateAge() && validatePassword()) {
    $.ajax({
      url: 'register',
      type: 'POST',
      data: {
        email: $('#email').val(),
        name: $('#name').val(),
        age: $('#age').val(),
        password: $('#password').val(),
        confirm_password: $('#confirmPassword').val(),
        _token: $('#_token').val()
      },
      success: function(res) {
        if (res.hasOwnProperty('name') && res.name[0]) {
          $('.name-error').show();
          $('.name-error').html(res.name[0]);
        }

        if (res.hasOwnProperty('email') && res.email[0]) {
          $('.email-error').show();
          $('.email-error').html(res.email[0]);
        }

        if (res.hasOwnProperty('age') && res.age[0]) {
          $('.age-error').show();
          $('.age-error').html(res.age[0]);
        }

        if (res.hasOwnProperty('password') && res.password[0]) {
          $('.password-error').show();
          $('.password-error').html(res.password[0]);
        }

        if (res.hasOwnProperty('confirm_password') && res.confirm_password[0]) {
          $('.confirm-password-error').show();
          $('.confirm-password-error').html(res.confirm_password[0]);
        }

        if(res.hasOwnProperty('code') && res.code === 'RGSTRD') {
          console.log('registered scuus');
        }

        if(res.hasOwnProperty('isError') && res.isError && res.code === 'EXST') {
          $('.email-error').show();
          $('.email-error').html(error.alreadyRegistered);
        }
      }
    });
  }	
	
}

function isNumber(obj) {
  return !isNaN(parseFloat(obj)) ;
}

function validateAge() {
  var age = $('#age').val();
  if (!age) {
    $('.age-error').show();
    $('.age-error').html(error.nullAge);
    return false;
  }
  if (!!isNaN(parseFloat(age))) {
    $('.age-error').show();
    $('.age-error').html(error.ageNotNumber);
    return false;
  }
  if (age < 15 || age > 35) {
    $('.age-error').show();
    $('.age-error').html(error.ageLimit);
    return false;
  }
  return true;
}

function sendContactMsg() {
  var errorClasses = ['contact-us-name-error', 'contact-us-email-error', 'contact-us-message-error'];
  for (var c=0; c<errorClasses.length; c++) {
    $('.'+errorClasses[c]).hide();
  }

  if(!$('#contactUsName').val().trim()) {
    $('.contact-us-name-error').show();
    $('.contact-us-name-error').html(error.nullName);
  }

  if(!$('#contactUsEmail').val().trim()) {
    $('.contact-us-email-error').show();
    $('.contact-us-email-error').html(error.nullEmail);
  }

  if(!$('#contactUsMessage').val().trim()) {
    $('.contact-us-message-error').show();
    $('.contact-us-message-error').html(error.nullMessage);
  }

  validateEmail('contactUsEmail', 'contact-us-email-error');
}

function validateName() {
	var name = $('#name').val();
	if (!name) {
		$('.name-error').show();
		$('.name-error').html(error.nullName);
    return false;
	}
  return true;
}

function validateEmail(fieldId, errorClass) {
  var email = $('#'+fieldId).val().trim();
  var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
  if (!email) {
  	$('.'+errorClass).show();
    $('.'+errorClass).html(error.nullEmail);
    return false;
  } else if (!re.test(email)) {
  	$('.'+errorClass).show();
  	$('.'+errorClass).html(error.invalidEmail);
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
    return false;
  } else if (password.length <= 5 ) {
  	$('.password-error').show();
  	$('.password-error').html(error.passwordLength);
    return false;
  } else if (password !== confirmPassword) {
  	$('.confirm-password-error').show();
  	$('.confirm-password-error').html(error.passwordMissMatch);
    return false;
  }
  return true;
}