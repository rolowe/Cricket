
$(document).ready(function() {




		$("form#register #club").change(function () {
            if ($(this).val() == "other") {
                $("p#otherMsg").slideDown();
            } else {
                $("p#otherMsg").slideUp();
            }
        });


		// Register New User
		$("#register").validate({
			rules: {
				first_name: "required",
				last_name: "required",
				email: {
				   required: true,
				   email: true
				},
				password: {
					required: true,
					minlength: 6
				},
				password_conf: {
					required: true,
					minlength: 6,
					equalTo: "#password"
				},
				club: "required"
			},
			messages: {
		        first_name: "Please enter your name",
		        last_name: "Please enter your last name",
		        email: "Please enter a valid email address",
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 6 characters long"
				},
				password_conf: {
					required: "Please confirm your password",
					minlength: "Your password must be at least 6 characters long",
					equalTo: "Your passwords do not match"
				},
				club: "Please select your club"
		    }
			/* submitHandler: function(form) {
			} */
		});


		// User Login
		$("#login").validate({
			rules: {
				email: "required",
				password: "required"
			},
			messages: {
		        email: "Please enter your email address",
		        password: "Please enter your password"
		    }
		});



});


