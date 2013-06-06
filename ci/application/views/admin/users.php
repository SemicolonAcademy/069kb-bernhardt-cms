<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bernhardt</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <?php  /*
	<link href="http://localhost/bernhardt/class/ci/assets/css/bootstrap.css" rel="stylesheet">
	
	*/
	?>
	
	<link href="<?php echo base_url();	?>assets/css/bootstrap.css" rel="stylesheet">
	
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="http://localhost/bernhardt/class/ci/assets/css/bootstrap-responsive.css" rel="stylesheet">

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
	
	if(confirm("Are you sure want to delete ?")){
		return true;
	}else {
		return false;
	}
	
	}
  </script>
  
  
  </head>

  <body>

    <?php $this->load->view("admin/nav") ?>
	
    <div class="container">

    <h1>Manage Users !</h1>

<br/>
<h2>All Users</h2>

<table class="table table-hover">
              <thead>
                <tr>
                
                  <th>Username</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                
				<?php foreach($users as $u){  ?>
				
				<tr>                  
                  <td><?php echo $u['username'];?></td>
                  <td><?php echo $u['email'];?></td>                  
                  <td>					  
					  <a href="<?php echo site_url('users/edit/'.$u['id']);?>">Edit</a> | 
					  <a onclick="return sure();" href="<?php echo site_url('users/delete/'.$u['id']);?>">Delete</a>
				  </td>
				  
                </tr>
                
				<?php } ?>
				
              </tbody>
            </table>
	  
<h2>Add New User</h2>

<form class="form-horizontal" action="<?php echo site_url('users/create');?>" method="POST"> 
  
    
  <p style="color:red;">
	  </p>
  
  
  <div class="control-group ">
    <label class="control-label" for="username">Username</label>
    <div class="controls">
      <input type="text" id="username" name="username" value="">
	  
	  	  
    </div>
  </div>
  
  <div class="control-group ">
    <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" id="password" name="password" value="">
	       </div>
  </div>
  
  
  <div class="control-group ">
    <label class="control-label" for="email">Email</label>
    <div class="controls"> 
	  
      <input type="text" id="email" name="email" value="">
	      </div>
  </div>
  
  <div class="control-group">
    <div class="controls">      
      <input type="submit" name="submit" value="Add User" class="btn">
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
