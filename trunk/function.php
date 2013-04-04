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
          <a class="brand" href="#">PHP Fuctions</a>
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

      <h1>PHP Functions</h1>
      <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>

	  <?php 
	  
	  
	  //date & time function
	  echo time();
	  echo "<br/>";
	  echo date ("Y-m-d", time());
	  echo "<br/>";
	  echo date ("F jS Y H:i A", time());
	  
	  //math function
	  echo "<br/>";
	  $value = 5.8;	  
	  echo ceil($value);
	  echo "<br/>";
	  echo floor($value);
	  echo "<br/>";
	  
	  echo round (1.2); //output 1
	  echo "<br/>";
	  echo round (1.5); // output 2
	  echo "<br/>";
	  
	  echo rand(); // random number
	  echo "<br/>";
	  echo rand (1,50); //random number
	  echo "<br/>";
	  
	  if( rand (0,1)) {
		echo "Nepal";
	  
	  }else {
		echo "Outside Nepal";	
	  }
	  
	  
	  echo "<br/>";
	  echo sin(30);
	  echo "<br/>";
	  echo cos(30);
	  echo "<br/>";
	  echo abs(-2);
	  echo "<br/>";
	  echo abs(2);
	  echo "<br/>";
	  echo sqrt(25);
	  echo "<br/>";	  
	  echo pow(5,2);
	  echo "<br/>";
	  
	  echo "string function<br/>";	  
	  echo strlen("Hello World");
	  
	  echo "<br/>";	  	  
	  echo str_word_count("Hello World");
	  
	  echo "<br/>";	  
	  echo strtoupper("Hello World");
	  echo "<br/>";	  
	  echo strtolower("Hello World");
	  
	  echo "<br/>";	  	  
	  echo ucfirst("Nalin adhikari");
	  
	  echo "<br/>";	  	  
	  echo ucwords("hello world nalin adhikari");
	  
	  echo "<br/>sha1-";	  	
	  echo sha1("password");
	  
	  echo "<br/>md5-";	  	
	  echo md5("password");
	  
	  
	  echo "<br/>";	  	
	  echo addslashes("password h'ello"); //$_POST['username']
	  
	  echo "<br/>";	  	
	  echo stripslashes("password h\'ello"); 
	  
	  
	  echo "<br/>";  
	  echo 7/2;
	  echo "<br/>"; 
	  echo number_format(7/2, 3);
	  
	  echo "<br/>";
	  $filename = "filename.jpg";
	  echo substr($filename, 0, 3);
	  echo "<br/>";
	  $filename = "filename.jpeg";
	  
	  echo substr($filename, strpos($filename, ".") + 1);
	  
	  
	  
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
