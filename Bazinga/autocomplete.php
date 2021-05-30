<?php
   include 'config.php';
	//$db         = mysqli_connect('localhost', 'root', '', 'search');
 
	$company    = $_GET['company'];
 
	$sql        = "SELECT MovieName FROM movies WHERE MovieName like '$company%' ORDER BY MovieName";
 
	$res        = mysqli_query($conn,$sql) or die(mysql_error());
 
	if(!$res)
		echo mysqli_error($conn);
	else
		while( $row = $res->fetch_object() )
			echo "<option value='".$row->MovieName."'>";
 
?>
</option>