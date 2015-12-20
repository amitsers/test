function register() {
	var errorClasses = ['name-error', 'email-error', 'password-error', 'confirm-password-error'];
	for (var c=0; c<errorClasses.length; c++) {
		$('.'+errorClasses[c]).hide();
	}
	validateName();
	validateEmail();
	validatePassword();
}

function validateName() {
	var name = $('#name').val();
	if (!name) {
		$('.name-error').show();
		$('.name-error').html(error.nullName);
	}
}

function validateEmail() {
  var email = $('#email').val().trim();
  var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
  if (!email) {
  	$('.email-error').show();
    $('.email-error').html(error.nullEmail);
  } else if (!re.test(email)) {
  	$('.email-error').show();
  	$('.email-error').html(error.invalidEmail);
  }
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