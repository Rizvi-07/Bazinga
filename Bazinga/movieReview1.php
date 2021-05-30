<?php
    session_start();
	include 'config.php';
?>

<!DOCTYPE html>

<html>
   <head id="homepg">
   
        <title> Movie List </title>
        <link rel="stylesheet" href="lol1.css" >
		
		
    </head>
	
   <body id="oishee">
      
	 
	  <ul id="menubar1">
	    <li class="menubar"> <a href="home.php"> Home </a> </li>
		<li class="menubar"> <a href="mlist.php"> Movies </a> </li>
		<li class="menubar"> <a href="http://www.imdb.com/search/name?birth_monthday=07-19&refine=birth_monthday&ref_=nv_cel_brn_1"> Celebs,Events and Photos </a> </li>
	
		<li class="login"> <a href="loginPopup.php">Login Or Register </a> </li>
	  </ul>
	  <div class="image">
	    <img src="bazinga.jpeg" />
	  </div>
	  
	  
	
	 
	  <?php 
					
				
                    $value = ! empty($_GET['value']) ? $_GET['value'] : '';
                    $sql="Select * from movies where movie_id=".$value;
					//echo $sql;
					
					$student_query_result = mysqli_query($conn,$sql) or die(mysql_error());
					$row=mysqli_fetch_array($student_query_result);
				    if(mysqli_num_rows($student_query_result) > 0)
				    {

			        ?>
					
						 
					     
                          <div class="cities">
						  <hr/>
						  <div id="c">
                          <h1 style="color:black; text-align:center;"> <?php echo $row['MovieName']; ?></h1>
						  </div>
						  <img class="movie_img" src= "<?php echo $row['Thumbnil']; ?>" />
						  <p class="description">
			              <strong>Writers:</strong> <?php echo $row['Writers']; ?> <br><br><br>
						  <strong>Release Date:</strong> <?php echo $row['ReleaseDate']; ?> <br><br><br>
						  <strong>Category:</strong> <?php echo $row['Category']; ?> <br><br><br>
						  <strong>Rating:</strong> <?php echo $row['Rating']; ?>/10 <br><br><br>
			              <strong>Stars: </strong><?php echo $row['Stars']; ?><br><br><br>
			              <strong>Plot: </strong><?php echo $row['Plot']; ?><br><br><br>
			
		                     
						   </p> 
						   
						   </div>
						  
						   <hr/>
						    <?php 
						   
					}						   
					         
					         ?>
					
       
   </body>
   
 
</html>
<?php
    include 'close.php';
?>