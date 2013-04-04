<?php
	  
	$id = $_GET['id'];
	
	$con = mysql_connect("localhost", "root", "");        
	mysql_select_db("test");        
    
	$sql = "delete from `users` where `id` = $id";	
    $result = mysql_query($sql);	
	mysql_close($con);
	
	
	//echo "user $id deleted";
	header ("location: ../database.php");

?>	