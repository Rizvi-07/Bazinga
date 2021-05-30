<?php
    session_start();
	include 'config.php';
?>

<!DOCTYPE html>

<html>
   <head id="homepg">
   
        <title> Movie List </title>
        <link rel="stylesheet" href="movieL.css" >
		
		
    </head>
	
   <body id="oishee">
      
	 
	  <ul id="menubar1">
	    <li class="menubar"> <a href="home2.php"> Home </a> </li>
		<li class="menubar"> <a href="movieList.php"> Movie List </a> </li>
		<li class="menubar"> <a href="http://www.imdb.com/search/name?birth_monthday=07-19&refine=birth_monthday&ref_=nv_cel_brn_1"> Celebs,Events and Photos </a> </li>
		<li class="dropdown"> 
		    
             <a href="#" class="dropbtn">Your Movie List</a>
             <div class="dropdown-content">
             <a href="wishlist.php">View Wishlist</a>
             <a href="watchlist.php">View Watchlist</a>
             
            
            </div>
		
		
		</li>
		<?php
		$x=$_SESSION['a'];
		$sql="Select FirstName,LastName From user Where UserId='".$x."'";
		$student_query_result = mysqli_query($conn,$sql) or die(mysql_error());
		if(mysqli_num_rows($student_query_result)>0)
				{
					while ($row = mysqli_fetch_array($student_query_result))
					{
		?>
		       <li class="dropdown"> <a href="profile.php" class="dropbtn"><?php echo $row['FirstName']?> </a> 
			   
			   <div class="dropdown-content">
             <a href="home.php">Logout</a>
            
            
            </div>
			   </li>
					<?php }
				}
				else{
					?>
					<li class="dropdown"> <a href="profile.php" class="dropbtn"><?php echo "Loign"?>
					<?php
					echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login First')
        window.location.href='home.php';
        </SCRIPT>");
				}
				?>
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