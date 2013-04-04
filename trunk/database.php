<?php 
session_start();
if (!$_SESSION['login']) header ("location: login.php");


//include "actions/user_add.php";

			
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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
	
	function validate(form) {				
	
		//alert("error");
		return true;
		
				
	var error = "";
	
	var username = form.username;
	var password = form.password;
	var email = form.email;
	
	
    if (username.value == "") {        
        error += "Username Required ! \n";
    } 
	
	//validate password
	if (password.value == "") {        
        error += "Password Required ! \n";
    } 
	
	//validate email   
    
    
    if (email.value == "") {        
        error += "You didn't enter an email address.\n";
    }     	
	
	if (error != "") {
		alert("Some fields need correction:\n" + error);
		return false;
	}

	return true;
  
	
	
			
	}	
	
  </script>
  
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Bernhardt College</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">Users</a></li>
              <li><a href="#contact">Feedback</a></li>
			  
			  <?php if ($_SESSION['login']) { ?>
			  
              <li><a href="#contact"><?php echo $_SESSION['username']; ?></a></li>
              <li><a href="logout.php">Logout</a></li>
			  
			  <?php } ?>
			  
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>PHP Database</h1>
      <p>Using PHP to access data from MySQL</p>

	  <?php
	  	  
	
	//Step - 1 (Connection)
	$con = mysql_connect("localhost", "root", "");    
    
	//Step - 2 (Database)
	mysql_select_db("test");        
    
	//Step - 3 (SQL / Get result)
	$sql = "SELECT * from `users`";
	
    $result = mysql_query($sql);	

	//echo "<pre>";print_r($result);echo "</pre>";
	//echo "no of rows returned: ". mysql_num_rows($result);
	  
	?>
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>                  
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
			  
			<?php 
			//Step - 4 (Grab / Process result of query)	
			$i=1;
			while ($row = mysql_fetch_assoc($result)) {		
			  ?>
			  
                <tr>
                  <td><?php echo $i;?> </td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['email']; ?></td>                  
                  <td>
					  <a href="">View</a> | 
					  <a href="actions/user_edit.php?id=<?php echo $row['id'];?>">Edit</a> | 
					  <a onclick="return sure();" href="actions/user_delete.php?id=<?php echo $row['id'];?>">Delete</a>
				  </td>
				  
                </tr>
				
			<?php  $i++; } ?>
          
              </tbody>
            </table>
			
	<?php 
	
	//Step - 5 (Close connection)
	mysql_close($con);

	
	?>	
	  
	<h3>Add New User </h3>

<form onsubmit="return validate(this);" class="form-horizontal" action="" method="POST"> 
  
  
  <p style="color:red;">
	<?php  //if ($error_msg) echo $error_msg;  ?>
  </p>
  
  
  <div class="control-group <?php if ($username_error) echo "error"; ?>">
    <label class="control-label" for="username">Username</label>
    <div class="controls">
      <input type="text" id="username" name="username" value="<?php if ($username) echo $username; ?>"/>
	  
	  <?php if ($username_error) { ?>
	  <span class="help-inline"><?php echo $username_error; ?></span>
	  <?php }?>
	  
    </div>
  </div>
  
  <div class="control-group <?php if ($password_error) echo "error"; ?>">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password" value="" />
	   <?php if ($password_error) { ?>
	  <span class="help-inline"><?php echo $password_error; ?></span>
	  <?php }?>
    </div>
  </div>
  
  
  <div class="control-group <?php if ($email_error) echo "error"; ?>">
    <label class="control-label" for="email">Email</label>
    <div class="controls"> 
	  
      <input type="text" id="email" name="email" value="<?php if ($email) echo $email; ?>">
	  <?php if ($email_error) { ?>
	  <span class="help-inline"><?php echo $email_error; ?></span>
	  <?php }?>
    </div>
  </div>
  
  <div class="control-group">
    <div class="controls">      
      <input type="submit" name="submit" value="Add User" class="btn" />
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
