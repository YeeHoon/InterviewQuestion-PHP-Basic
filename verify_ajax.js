$(document).ready(function(){
	//Function to pass data to php when the login button is been clicked
	$('#login').click(function(){				
		login();
	});
});

//Login function
function login(){
	//Get data from the input with id username and assign to a variable
	var username=$("#username").val();
	
	//Check whether the input is empty or not
	if(username==""){
		document.getElementById("remark").innerHTML = "<div style='color:blue;'>Key in username and click submit !</div>";
	}
	else{
		//AJAX function to pass data to php file 
		$.ajax({
			//PHP file for login
			url:"info.php",
			//Get data from variable
			data:{
				username:username
			},
			//POST method to pass data to PHP
			method:"POST",
			//Success function
			success:function(data){
				//Displaying the success message return by PHP, then hide the remark
				document.getElementById("message").innerHTML = data;
				document.getElementById("remark").style.display="none";
			}
		});
	}
}
