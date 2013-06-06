<?php
 

	  
	  
 function insert($table, $data)
	  {
			$query   =  "INSERT INTO `$table` SET ";
			foreach($data as $key=>$val)
			{
			  $arr[$key]  =  "`$key`='$val'";
			}

			if(count($arr)>0)
			{
			  $query  .= implode(" , ",$arr );
			}
			else
			{ echo "Wrong Query";exit;
			}

			//echo $query;
			//return exec($query);
			return $query;
	  }
	  
		$_POST = array ( 
				'username' => 'bhupal', 
				'password' => 'bhupal', 
				'email' => 'bhupal@semicolondev.com', 
				);
		

	  echo insert('posts', $_POST);
	  	  
	  
	  ?>