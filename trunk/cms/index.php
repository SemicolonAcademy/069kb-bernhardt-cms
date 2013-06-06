<?php	  	  	

include "includes/common.php";

$sql = "SELECT * from `settings`";	
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);

?>
	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $row['site_name'];?></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="header">

<div class="header-left">
	
	<h1><?php echo $row['site_name'];?><h1>	
	<small><?php echo $row['site_slogan'];?></small>
</div>	

<div id="search">
  <form action="" method="get"><table width="131" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="96"><input name="input" type="text" class="textbox" value="Search"></td>
    <td width="35">
      <input name="button" type="submit" class="search" id="button" value="">
    </td>
  </tr>
</table>
  </form>
  </div>
  <div id="navigation">
	
	<ul>
	
		<?php 
	  
		$nav_sql = "SELECT * from `navigation` 
					JOIN `navigation_group` g	
					ON navigation.group_id = g.id
					WHERE g.`slug` = 'header' 
					order by navigation.order" ;	
					
		$nav_result = mysql_query($nav_sql);		
		
		while ($nav =mysql_fetch_assoc($nav_result)){
		
		
		?>
		
			<li><a href="<?php echo $nav['url'];?>"><?php echo $nav['url_text'];?></a></li>
		
		<?php  } ?>		
		
	</ul>
	
</div>
</div>
<div id="main_image"></div>
<div id="content">
<table width="790" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    
	<div id="content-left">
	
		<?php 
	  
		$featured_post_sql = "SELECT * from `posts` where `category` = 4; -- AND `status` = 1";	
		$featured_post_result = mysql_query($featured_post_sql);		
		$featured_post =mysql_fetch_assoc($featured_post_result);
	  
		?>
	  
	
		<h1><?php echo $featured_post['title'];?></h1>
		
		<div id="image">
			<img src="<?php echo UPLOAD_PATH.$featured_post['image'];?>" width="123" height="123">
		</div> 

		<p>
			<?php echo $featured_post['content'];?>
		</p>
		<br>
		
		<div id="read_more"><a href="#"><img src="images/image_21.jpg" alt="Read More" width="82" height="40"></a></div>
		
    </div>
	
    </td>
    <td valign="top"><div id="content-right">
      <div id="latest_news">Latest News</div>
      
	  <?php 
	  
		$post_sql = "SELECT * from `posts`";	
		$post_result = mysql_query($post_sql);
		
		while ($post =mysql_fetch_assoc($post_result) ) {
	  
	  ?>
	  
	  <h2><?php echo date("M d, Y",$post['created_at']); ?></h2>
      <div id="">
		<img width="230" src="<?php echo UPLOAD_PATH.$post['image']; ?>" alt="image1">
		</div>
      <div id="news-con">
      <p>
			<?php echo substr ( strip_tags($post['content']),0,150); ?>
			
	  </p>
      </div>
	  
	  <?php } ?>    
	  
	  
	  
    </div></td>
  </tr>
</table>
</div>
<div id="bottom">
<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <h3>Testimonials</h3>
	
    <div id="bottom_con">
	
    “Welcome to the world of exciting free web design templates. Get your dream agriculture web page html layout at no cost, no extra manpower for your professional website.”
    </div>
    <div class="more"><a href="#">John Doe..</a></div></td>
    <td>
        
	
    <div id="bottom_con">
    “You can enter your text here. Get your dream web page html layout at no cost, no extra manpower for your professional website.”
    </div>
    <div class="more"><a href="#">more..</a></div>
    </td>
    <td>
	
        
    <div id="bottom_con" style="border:none;">
    “You are provided with an ample collection of cultivation web design templates, choose the one that perfectly suits for your agriculture website.”
    </div>
    <div class="more"><a href="#">more..</a></div>
    </td>
  </tr>
</table>
</div>
<div id="footer_bottom">
  
  <div id="footer_bottom-content-left">Copyright Information Goes Here. All Rights Reserved.</div>
  
  <div id="footer_bottom-content">

<a href="#">Home</a>
<a href="#">About us</a>
<a href="#">Fruits and Vegetables</a>
<a href="#">Products</a>
<a href="#">Services</a>
<a href="#">Features</a>
<a href="#">Contact us</a>
  
  </div>
  
  
  
  
  



</div>
</body>
</html>
