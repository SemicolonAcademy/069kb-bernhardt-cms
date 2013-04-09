<?php 

session_start();
if (!$_SESSION['login']) header ("location: index.php");


include "../includes/common.php";  		

if (isset($_POST['submit'])) {

	$error = false;
	
	$name = trim($_POST['name']);
	$slug = implode("-",explode(" ", strtolower(trim($name))));
	
	
	if($name != "") {	
		
		
		$sql = "INSERT INTO `navigation_group` (`id`, `name`, `slug`) VALUES (NULL, '$name','$slug');";
		mysql_query($sql);	
		
		header ("location: ../navigations.php");
	
	}
	
	
}



?>