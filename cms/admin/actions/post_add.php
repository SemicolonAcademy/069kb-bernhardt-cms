<?php

/* echo "<pre>";
echo "post array";
print_r($_POST);
echo "files array";
print_r($_FILES);
echo "</pre>";
*/	

$error = "";
	
if (isset($_POST['submit'])) {

	$title = trim($_POST['title']);
	$content = trim($_POST['content']);	
	
	$category = trim($_POST['category']);
	$status = trim($_POST['status']);	
	
	
	if ($title !="" && $content != "") {
	
			if (!isset($status)) $status = 0; //if status is not set make the post draft by default
			$now = time(); // get current time
			$user_id = $_SESSION['user_id']; // get user id from Session.
			
			
			/***************************** upload post image **********************************/
			$upload_dir = '../uploads';
			
			//tmp_name holds temporary file for uploaded file
			$source_file = $_FILES['image']['tmp_name'];
			
			//the 'name' key of the array holds original filename
			//we can use original file name here as our destination filename. it will be saved inside our upload directory
				
			$destination_file = time()."_".$_FILES['image']['name'];
			
			if (move_uploaded_file($source_file, $upload_dir."/".$destination_file)){
						
				$sql = "INSERT INTO `posts` VALUES (NULL, '$title', '$content', '$destination_file', '$user_id', '$status', '$category', '$now' );";
				$result = mysql_query($sql);	
				mysql_close($con);		
				header ("location: posts.php");
			
			
			}else {
						
				$error .= "Couldn't upload file. Retry later<br/>";
			}
				
				
			/***************************** upload post image **********************************/
			
	
	
	}else {
				$error .= "Post title and content is required <br/>";
	}
}
	

?>	
