<?php 
session_start();
if (!$_SESSION['login']) header ("location: login.php");


//include "actions/user_add.php";

			
if (isset($_POST['submit'])) {

	$site_name = trim($_POST['site_name']);
	$site_slogan = trim($_POST['site_slogan']);		
	
	
	if ($site_name != "" && $site_slogan !="") {
	
	
	
		$con = mysql_connect("localhost", "root", "");        
		mysql_select_db("bcms");            
	
		$sql = "UPDATE `settings` set `site_name` = '$site_name', `site_slogan` = '$site_slogan' LIMIT 1";

	
		$result = mysql_query($sql);	
		mysql_close($con);	
	
		header ("location: settings.php");
	
	}
	
	
}
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bernhardt CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
		
		if (confirm("Are you sure you want to delete?")) {
			return true;
		}else {
		
			return false;
		}
	
	}
	
  </script>
  
  </head>

  <body>

    <?php include "views/nav.php"; ?>
	
	
    <div class="container">

      <h1>Settings</h1>	  
      
	  <br/>
	  <?php
	  	  
	
	//Step - 1 (Connection)
	$con = mysql_connect("localhost", "root", "");    
    
	//Step - 2 (Database)
	mysql_select_db("bcms");        
    
	//Step - 3 (SQL / Get result)
	$sql = "SELECT * from `settings`";
	
    $result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);

	//echo "<pre>";print_r($result);echo "</pre>";
	//echo "no of rows returned: ". mysql_num_rows($result);
	  
	?>
	  
	
	  <table class="table table-hover">
              <thead>
                <tr>                  
                  <th>Site Name</th>
                  <th>Site Slogan</th>                  
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
			  
			  
                <tr>
                  <td><?php echo $row['site_name']; ?></td>
                  <td><?php echo $row['site_slogan']; ?></td>                             
                  <td>
					  <a href="">View</a> | 
					  <a href="actions/user_edit.php?id=<?php echo $row['id'];?>">Edit</a> | 
					  <a onclick="return sure();" href="actions/user_delete.php?id=<?php echo $row['id'];?>">Delete</a>
				  </td>
				  
                </tr>
				
			
          
              </tbody>
            </table>
			
	<?php 
	
	//Step - 5 (Close connection)
	mysql_close($con);

	
	?>	
	  
	<h3>Update Settings</h3>

<form class="form-horizontal" action="" method="POST"> 
  
  <?php /* onsubmit="return validate(this);" */ ?>
  
  <p style="color:red;">
	<?php  //if ($error_msg) echo $error_msg;  ?>
  </p>
  
  
  <div class="control-group">
    <label class="control-label" for="site_name">Site Name</label>
    <div class="controls">
      <input type="text" id="site_name" name="site_name" value="<?php echo $row['site_name']; ?>"/>  
	  
	  
    </div>
  </div>
  

  
  <div class="control-group">
    <label class="control-label" for="site_slogan">Site Slogan</label>
    <div class="controls"> 
	  
      <input type="text" id="site_slogan" name="site_slogan" value="<?php echo $row['site_slogan']; ?>">
	  
    </div>
  </div>
  
  <div class="control-group">
    <div class="controls">      
      <input type="submit" name="submit" value="Update Settings" class="btn" />
    </div>
  </div>
</form>	
	  
	  
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
