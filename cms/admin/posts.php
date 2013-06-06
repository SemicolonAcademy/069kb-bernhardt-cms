<?php 
session_start();
if (!$_SESSION['login']) header ("location: index.php");

include "includes/common.php";
include "actions/post_add.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<script src="../third_party/ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" href="../third_party/ckeditor/sample.css">
	
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  
  
  <script type="text/javascript">
  
  function sure(){
  
	if (confirm("Are you sure delete?")){
		return true;
	}else {
		return false;
	}
  }	
  </script>
  

 
  
  </head>
  
  

  <body>

	<!--  include navigation here	-->
	<?php include "views/nav.php"; ?>
		
    <div class="container">

      <h1>POSTS</h1>
	  
	  <br/>  
	  
	<?php 
     
    
	//Step - 3 (SQL / Get result)
	/*
	$sql = "SELECT navigation_groups.*,navigations.* from `navigations` 
			JOIN `navigation_group` 
			ON navigations.group_id = navigation_groups.id        
		
	"; */
	
	$sql = "SELECT posts.*, post_category.name  FROM `posts` 	
			LEFT JOIN `post_category` 
			ON posts.category = post_category.id ";			
	
	
	//$sql = "SELECT * FROM `navigation`";				
	
    $result = mysql_query($sql); 
	 
	if ($result && mysql_num_rows($result)) {
	 
	?>
	  
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>                                   
                  <th>Image</th>                  
                  <th>Category</th>                  
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
				<?php 
				
					//Step - 4 (Grab / Process result of query)
					$i=0;								
					while ($row = mysql_fetch_assoc($result)) {
					$i++;
					
					//echo "<pre>";print_r($row);echo "</pre>";
					
				?>
				
				<tr>
                  <td><?php echo $i; ?></td>              
				  
				  <td><?php echo $row['title'];?></td>
				  <td><img width="100" height="100" src="<?php echo UPLOAD_PATH.$row['image'];?>" /></td>
                  <td><?php echo $row['name'];?></td>                                    
                  <td><?php echo $row['status'];?></td>                                    
                  <td>					  
					  <a href="actions/user_edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
					  <a onclick="return sure()" href="actions/nav_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
				  </td>
				</tr>				
				
				
				<?php }?>
                
              </tbody>
            </table>
	  
	<?php 
	
	} else {
	
	 echo "No posts found";
	}
	
	//Step - 5 (Close connection)	   
	
	
	?>
  
	
<h3>Add New Post</h3>
	  
 <?php 
 if ($error) echo "<p style='color:red'>$error</p>";
 
 ?>
<form class="form-horizontal" enctype="multipart/form-data" action="" method="POST">
	  
  
  <div class="control-group">
    <label class="control-label" for="first_name">Title</label>
    <div class="controls">
    
	<input type="text" name="title" value="">	  
	   
    </div>
  </div>
  
 <div class="control-group">
    <label class="control-label" for="first_name">Image</label>
    <div class="controls">
    
	<input type="file" name="image" />	  
	   
    </div>
  </div>
  
  <div class="control-group">    
	<label class="control-label" for="first_name">Publish</label>
	
	<div class="controls">
		<input type="checkbox" name="status" value="1">   
    </div>
	
  </div>
  
  
  <div class="control-group">
    <label class="control-label" for="first_name">Category</label>
    <div class="controls">
    
	<select name="category">	
	
		<option value="">Select Category</option>
		
		<?php 
		$sql_cat = "SELECT * from `post_category`";
		$result_cat = mysql_query($sql_cat); 	 
		while ($row = mysql_fetch_assoc($result_cat)) {	
		?>	
		
		<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
			
		
		<?php } ?>
	
	</select>
	
	
	   
    </div>
  </div>
  
  
   
  <div class="control-group">    
	<label class="control-label" for="first_name">Content</label>
	
	<div class="controls">
		<textarea name="content" rows="10" cols="80" class="input-xxlarge ckeditor"></textarea>
    </div>
	
  </div>
  
 
  
  
  
  <div class="control-group">
    <div class="controls">      
      <input name="submit" value="Add Post" type="submit" class="btn" />
    </div>
  </div>
</form>

	  
	<?php 
	
	//Step - 5 (Close connection)
	mysql_close($con);
    
	
	
	?>
	
	
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
