$('document').ready(function(){
 var userName_state = false;
 var email_state = false;
 $('#userName').on('blur', function(){
  var username = $('#userName').val();
  if (userName == '') {
  	userName_state = false;
  	return;
  }
  $.ajax({
    url: 'register.php',
    type: 'post',
    data: {
    	'userName_check' : 1,
    	'userName' : userName,
    },
    success: function(response){
      if (response == 'taken' ) {
      	username_state = false;
      	$('#userName').parent().removeClass();
      	$('#userName').parent().addClass("form_error");
      	$('#userName').siblings("span").text('Sorry... Username already taken');
      }else if (response == 'not_taken') {
      	username_state = true;
      	$('#userName').parent().removeClass();
      	$('#userName').parent().addClass("form_success");
      	$('#userName').siblings("span").text('Username available');
      }
    }
  });
 });
  $('#email').on('blur', function(){
 	var email = $('#email').val();
 	if (email == '') {
 		email_state = false;
 		return;
 	}
 	$.ajax({
      url: 'register.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	if (response == 'taken' ) {
          email_state = false;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_error");
          $('#email').siblings("span").text('Sorry... Email already taken');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#email').parent().removeClass();
      	  $('#email').parent().addClass("form_success");
      	  $('#email').siblings("span").text('Email available');
      	}
      }
 	});
 });

 $('#send').on('click', function(){
 	var userName = $('#userName').val();
 	var email = $('#email').val();
 	var password = $('#password').val();
 	if (userName_state == false || email_state == false) {
	  $('#error_msg').text('Fix the errors in the form first');
	}else{
      // proceed with form submission
      $.ajax({
      	url: 'AddUser.php',
      	type: 'post',
      	data: {
      		'save' : 1,
      		'email' : email,
      		'userName' : userName,
      		'password' : password,
      	},
      	success: function(response){
      		alert('user saved');
      		$('#userName').val('');
      		$('#email').val('');
      		$('#password').val('');
      	}
      });
 	}
 });
});
