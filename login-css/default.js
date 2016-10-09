// JavaScript Document
// Function that validates email address through a regular expression.
function validateEmail(sEmail) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (filter.test(sEmail)) {
		return true;
	}else {
		return false;
	}
}

var emailValidate = 0;

$(document).ready(function() {
	$("#LoginBtn").click(function() {
		var email = $("#emailId").val();
		var password = $("#password").val();

		if(emailValidate == 0)
		{
			 if (!(validateEmail(email)) || email == '') {
				$("#emailId").addClass('animated shake');
				$("#emailId").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			    $(this).removeClass('animated shake');
				});
			} else {
				$("#emailId").addClass('animated fadeOutRightBig');
				$("#password").removeClass('hide');
				$("#emailId").hide();
				$("#LoginBtn").html('Login');
				$("#password").addClass('disp animated lightSpeedIn');
				$("#password").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		    	$(this).removeClass('animated lightSpeedIn');
			}	);
				emailValidate = 1;
				return ;
			}
		}else if (password == '' && emailValidate==1) {
			$("#password").addClass('animated shake');
			$("#password").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		    $(this).removeClass('animated shake');
			});

		} else  {

			/* write below POST method to send data to php file. 

			$.post("filename.php", {
				email1: email,
				password1: password
			}, function(data) {

				if (data == 'success') {
					$("form")[0].reset();
				}
				alert(data);
			});
			*/

			$(".login").addClass('animated fadeOutRightBig');
			$(".login").hide();
			//$(".welcomeMsg").html('Welcome !!').addClass('animated lightSpeedIn');
		}
	});
});