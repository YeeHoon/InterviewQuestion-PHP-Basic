<?php
	//Get data passed by AJAX
	$username=$_POST['username'];
	
	//Check whether the input is abc, then print the result with different color
	if($username=="abc"){
		echo $message="<div style='color:green;'>Verified !</div>";
	}
	else{
		echo $message="<div style='color:red;'>Error !</div>";
	}
?>
