<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="admin.php">Bernhardt CMS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="admin.php">Home</a></li>
              <li><a href="settings.php">Settings</a></li>
              <li><a href="navigations.php">Navigation</a></li>
              <li><a href="#contact">Posts</a></li>
              <li><a href="#contact">Banner</a></li>
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
