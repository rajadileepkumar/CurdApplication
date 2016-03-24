/*register Form*/
/*form id*/
$('#regForm').validate({
	/*name attribute of form fields*/
	rules:{
		formFirstName:{
			required:true,
			minlength:8,
			maxlength:15
		},
		formLastName:{
			minlength:4,
			maxlength:20,
		},
		formMobile:{
			required:true,
			minlength:6,
			maxlength:10
		},
		formEmail:{
			required:true,
			email:true
		},
		formPassword:{
			required:true,
			minlength:4,
			maxlength:8
		},
		formConformPassword:{
			required:true,
			equalTo:'#formPassword'
		}

	},
	messages:{
		formFirstName:{
			required:'Please Enter Your First Name',
			minlength:'First Name Should be at least 8 characters'
		},
		formLastName:{
			minlength:'Last Name Should be at least 4 characters'
		},
		formMobile:{
			required:'Enter Your Mobile Number',
			minlength:'Mobile Number Should be 6 members'
		},
		formEmail:'Enter Valid Email',
		formPassword:{
			required:'Password Should not Empty',
			minlength:'Password length Should be at least 4 characters'
		},
		formConformPassword:{
			required:'Retype Password',
			equalTo:'Password Doesnot match'						
		}
	}
});

/*Login Form*/
$('#loginForm').validate({
	rules:{
		lFormEmail:{
			required:true,
			email:true,						
		},
		lFormPassword:{
			required:true,
			minlength:3,
			maxlength:8,
		}
	},
	messages:{
		lFormEmail:'Please Enter Valid Email',
		lFormPassword:{
			required:'Password Should not Empty',
			minlength:'Password length Should be at least 4 characters'

		}
	}
});

/*admin login*/
$('#aloginForm').validate({
	rules:{
		aFormEmail:{
			required:true,
			email:true
		},
		aFormPassword:{
			required:true,
			minlength:3,
			maxlength:8,
		}
	},
	messages:{
		aFormEmail:'Please Enter a valid email',
		aFormPassword:{
			required:'Password Should not Empty',
			minlength:'Password length Should be at least 3 characters'
		}
	}
});	