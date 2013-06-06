<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<script src="jquery.js"></script>
	
	<script type="text/javascript">
	
		/*$(document).ready(function(){
			
			//write jQuery code inside ready function
			
			$(".delete").click(function(){
				
				//confirm("Delete this ?");
				
				//$("#box").hide("fast");	
				//$("#box").hide("slow");
				//$("#box").show("slow");
				
				//$("#box").fadeIn("slow");
				
				$("#box").fadeOut("slow");
				
				
			});
			
		
		}); */
		
		
		
		//$(".someclass")	jQuery class selector
		//$("#content")     jQuery id selector
		
		
		
		$(document).ready(function(){
		
			$(".delete").click(function(){
				
				
				var href = $(this).attr("href");
				
				//$('#box').html(href);
				
				console.log(href);
				
				$("#box").fadeOut("slow");				
				
				//.animate(things to change, speed, callback);

				//$('#box').animate(	{'margin-top': '300px'},1000 );
				
				
				
				return false;

				
			});
			
		
		});
		
		
	
	</script>

	
	<style type="text/css">
	
	#box{
	
	width:150px;
	height:80px;
	background:#69f;
	color:#fff;
	padding:20px;
	
	}

	
	</style>
	
  </head>

  <body>
  
  
  <div id="box">
		this is some text 
		<a href="http://google.com" class="delete">x</a>
  </div>


  </body>
  
</html>
