<?php
	  
	$id = $_GET['id'];
	
	$con = mysql_connect("localhost", "root", "");        
	mysql_select_db("bcms");        
   
   
	$sql = "delete from `users` where `id` = $id";	
    
	if (mysql_query($sql)){
		echo "SUCCESS";
	} else {
		echo "ERROR";
	}
	
	mysql_close($con);	
	exit;
?>	