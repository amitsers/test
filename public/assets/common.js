function register() {
	var errorClasses = ['name-error', 'email-error', 'password-error', 'confirm-password-error'];
	for (var c=0; c<errorClasses.length; c++) {
		$('.'+errorClasses[c]).hide();
	}
	validateName();
	validateEmail('email', 'email-error');
	validatePassword();
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
	}
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
  var confirmPassword = $('#confirm_password').val().trim();
  if (!password) {
  	$('.password-error').show();
  	$('.password-error').html(error.password);
  } else if (password.length <= 5 ) {
  	$('.password-error').show();
  	$('.password-error').html(error.passwordLength);
  } else if (password !== confirmPassword) {
  	$('.confirm-password-error').show();
  	$('.confirm-password-error').html(error.passwordMissMatch);
  }
}