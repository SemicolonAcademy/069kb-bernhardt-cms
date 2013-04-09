<?php 
session_start();
if (!$_SESSION['login']) header ("location: index.php");

include "../includes/common.php";
	
if (isset($_POST['submit'])) {
	
	$url_text = $_POST['url_text'];
	$url = $_POST['url'];	
	$group_id = $_POST['group_id'];	
	$order = $_POST['order'];	
	
	
	if($url_text !="" && $url != "" && $group_id !="" && $order !="") {	
		
	
		$sql = "INSERT INTO `navigation` (`id`, `url`, `url_text`, `group_id`, `order`) VALUES (NULL, '$url','$url_text',$group_id, $order);";
		mysql_query($sql);	
		
	
	}
	
	
}

header ("location: ../navigations.php");



?>