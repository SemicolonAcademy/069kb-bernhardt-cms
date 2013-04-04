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
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <h1>PHP Arrays</h1>
      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

	  <?php 
	  
	  
	  $myarray = array ("apple", "orange","banana", "Mango");
	  
	  echo $myarray;
	  
	  echo "<pre>";
	  print_r($myarray);
	  echo "</pre>";
	  
	  
	  echo count ($myarray); // count function gives count of array elements
	  echo "<br/>";
	  
	  echo "my favorite fruits are: "; 
	  for ($i = 0 ; $i < count($myarray); $i++){
	  	  echo $myarray[$i].", ";
	  }
	  
	  echo "<br/>using foreach<br/>";
	  
	  foreach ($myarray as $m){
		echo $m ." ";
	  }
	  
	  
	  
	  
	  
	  $assoc_array = array (					
					"a"	=> "apple", 
					"o" =>	"orange",
					"b"	=> "banana", 
					"m" =>	"Mango"					
					);
	  
	  
	  echo "<pre>";
	  print_r($assoc_array);
	  echo "</pre>";
	  
	  echo $assoc_array ['a'];
	  
	  
	  $users = array (	
					
						array (
							"username"	=> "prabin", 
							"password" =>	"iuyytjg5678764iutyuf",
							"email"	=> "prabin@gmail.com", 
							"status" =>	1,
							"address" => "kalanki"				
							),
									array (
							"username"	=> "nalin", 
							"password" =>	"iuyytjg5678764iutyuf",
							"email"	=> "nalin@gmail.com", 
							"status" =>	0,
							"address" => "kalanki"				
							),
							
									array (
							"username"	=> "rabin", 
							"password" =>	"iuyytjg5678764iutyuf",
							"email"	=> "rabin@gmail.com", 
							"status" =>	0,
							"address" => "kalanki"				
							)
						
						
					);
	  
	  
	  echo "<pre>";
	  print_r($users);
	  echo "</pre>";
	  
	  echo "<br/>";
	  
	  foreach ($users as $user){
		echo "<br/>Username: ". $user['username'];
		echo "<br/>Password: ". $user['password'];
		echo "<br/>Email: ". $user['email'];
		echo "<br/>Address: ". $user['address'];
		
				
		if ($user['status']==1){
			echo "<br/> User is Active";
		}else {
			echo "<br/> User is In-active";
		}
		
		echo "<hr>";
		
	  }
	  
	  //echo $users ['username'];
	  
	  
	  
	  
	  echo "<br/>";	echo "<br/>";	
	  echo "<br/>";	echo "<br/>";	echo "<br/>";	echo "<br/>";		  
	    
	  ?>
	  
	  <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
			  
			  <?php $i=1; foreach ($users as $user){ ?>
			  
                <tr>
                  <td><?php echo $i;?> </td>
                  <td><?php echo $user['username']; ?></td>
                  <td><?php echo $user['email']; ?></td>
                  <td><?php echo $user['address']; ?></td>
                  <td>
					<?php 
						if ($user['status']==1){
							echo "Active";
						}else {
							echo "In-active";
						}
					?>
				  </td>
                  <td><a href="">View</a> | <a href="">Edit</a>  | <a href="">Delete</a></td>
				  
                </tr>
				
			<?php $i++; } ?>
          
              </tbody>
            </table>
			
			<?php
			
			/*-------------------
			Array Functions
			--------------------------*/
				
			// explode - converts string to array
			// implode - converts array to string
			
			$fruits = "apple orange banana";
			$fruits_array = explode (" ", $fruits);
			
			echo "<pre>";
				print_r($fruits_array);
			echo "</pre>";
			
			echo $string = implode( ",", $fruits_array);
			
			//check file extensions
			
			$file1 = "profile_picture.jpg";
			echo $file2 = "profile_picture.exe";
			
			$ext = substr($file2, -3);			
			$allowed_ext = array ("jpg", "jpeg", "bmp", "gif", "png");
			
			
			if ( in_array ($ext, $allowed_ext) ) {
				echo "<br/>File allowed to upload.";
			}else {
				echo "<br/>Not supported file format." ;
			}
			
			
			//array push / pop
			
			$sports_array = array ("football","cricket");
			
			echo "<pre>"; print_r($sports_array); echo "</pre>";
			
			
			array_push($sports_array, "basketball");
			array_push($sports_array, "badminton");
			
			echo "<pre>"; print_r($sports_array); echo "</pre>";
			
			$s = array_pop ($sports_array);
			echo $s;
			
			echo "<pre>"; print_r($sports_array); echo "</pre>";
			
			//sorting array
			asort($sports_array);
			echo "<pre>"; print_r($sports_array); echo "</pre>";
			
			ksort($sports_array);
			echo "<pre>"; print_r($sports_array); echo "</pre>";
			
			arsort($sports_array);
			echo "<pre>"; print_r($sports_array); echo "</pre>";
			

			$flipped = array_flip($sports_array);
			echo "<pre>"; print_r($flipped); echo "</pre>";
					
			
			$merged = array_merge($allowed_ext, $sports_array);
			echo "<pre>"; print_r($merged); echo "</pre>";
			
			echo "<br/>";	echo "<br/>";	
			echo "<br/>";	echo "<br/>";	echo "<br/>";	echo "<br/>";		  
	    
			
			
		
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
