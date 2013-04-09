<?php
			
if (isset($_POST['submit'])) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);	
	
	
	if ($username == "" ) {			
		$username_error = "Please provide username!";		
	}
	
	if ($password == "" ) {			
		$password_error = "Please provide password!";		
	}
	
	/*
	if ($email == "" ) {	
		$error = true;
		$email_error = "Please provide email!";
		$error_msg .= "Please provide email! <br/>";
	}
	*/
		
	if($email == '')  {		
		$email_error = "Please provide email!";
				
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $email)) {
		
		$email_error = "Invalid email address!";
		
	} 
	
	
	if (!$username_error && !$password_error & !$email_error) {
	
	$password = md5($password);
	
	$con = mysql_connect("localhost", "root", "");        
	mysql_select_db("test");        
    
	
	$sql = "INSERT INTO `test`.`users` (`id`, `username`, `password`, `email`) 
	VALUES (NULL, '$username', '$password', '$email');";

	
    $result = mysql_query($sql);	
	mysql_close($con);	
	
	header ("location: database.php");
	
	}
}
	

?>	
