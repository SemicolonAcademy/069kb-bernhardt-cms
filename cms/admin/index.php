<?php	
	session_start();
	if ($_SESSION['login']) header ("location: admin.php");

	
	$username = addslashes($_POST['username']);	
	$password = addslashes($_POST['password']);		
	
	if ($_POST['submit']) {		
		
		if ($username !="" && $password !=""){
		
			$password = md5($_POST['password']);		
			$con = mysql_connect("localhost", "root", "");        
			mysql_select_db("bcms");        		
			
			$sql = "select * from `users` where `username` = '$username' and `password` = '$password' LIMIT 1";
			
			
			$result = mysql_query($sql);				
			
			$count_result = mysql_num_rows($result);
			
			if ($count_result == 1 ) {
				
				//$success = "Login Success!";			
				//echo "Login Success!";			
				
				//set session	
				$_SESSION['login'] = 1;
				$_SESSION['username'] = $username;
				
				$user_detail = mysql_fetch_assoc($result);
				$_SESSION['user_id'] = $user_detail['id'];
				
				//redirect to database
				header ("location: admin.php");
				
				
			}else {
			
				$error =  "Login failed!";
				//echo "Login failed!";
			}
		} else {
			$error = "Please provide username & password!";
			//echo "Please provide username & password!";
		}
	}	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="" method="POST" >
        <h2 class="form-signin-heading">Login</h2>
        
		<p style="color:red;">
		<?php			
			if ($error) echo $error;		
		?>
		</p>
		
		
		<p style="color:green;">
		<?php			
			if ($success) echo $success;		
		?>
		</p>
		
		
		Username: <input name="username" value="" type="text" class="input-block-level" >
        Password: <input name="password" value="" type="password" class="input-block-level" >
        
        <button name="submit" value="Sign In" class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
