<?php
     session_start();
    include 'config.php';
?>

<html>
<head>
<style>

</style>
 <link rel="stylesheet" href="p.css">
</head>

<body>
        <ul>
		
			<li><a href="practice1.html">Home</a></li>
			<div id="user">
			      <li>Maisha Binte Rashid</li>
			</div>
			
		</ul>

		    <div class="image">
		        <img src="img/bazinga.jpeg"/>
		    </div>
			      <?php 
					$sql="Select * from movies";
					$row="";
					$student_query_result = mysqli_query($conn,$sql) or die(mysql_error());
				    if(mysqli_num_rows($student_query_result) > 0)
				    {
				    while($row = mysqli_fetch_array($student_query_result)){
			        ?>

                   <div class="cities">
                          <h2 style="color:black; text-align:center;"> <?php echo $row['MovieName']; ?></h2>
		                  <img class="movie_img" src= "<?php echo $row['Thumbnil']; ?>" />
				   
				   
		             
					      <p class="description">
			              <strong>Writers:</strong> <?php echo $row['Writers']; ?> <br><br><br>
						  <strong>Release Date:</strong> <?php echo $row['ReleaseDate']; ?> <br><br><br>
						  <strong>Category:</strong> <?php echo $row['Category']; ?> <br><br><br>
						  <strong>Rating:</strong> <?php echo $row['Rating']; ?>/10 <br><br><br>
			              <strong>Stars: </strong><?php echo $row['Stars']; ?><br><br><br>
			              <strong>Plot: </strong><?php echo $row['Plot']; ?><br><br><br>
			
		                     
						   </p> 
                           <form method="post">
						   <input type="submit" value="+Add to Watchlist" name='watch'/>
					       <input  type="submit" value="+Add to Wishlist" name='a' />
						   </form>
						   <?php
                            if(isset($_POST['watch']) && $_POST['watch'] != "")
                             {
                              
							      $x=$_SESSION['a'];
								  $y=$row['movie_id'];
								  echo $x;
                                 $sql = "INSERT INTO watchlist (movie_id,UserId) VALUES ('$y','$x')";
								 if ($conn->query($sql) === TRUE) {
                                      echo "New record created successfully";
                                    } else {
                                     echo "Error:  " . $sql . "<br>" . $conn->error;
                                     }
                             } 						   
					        ?>
						   
				          
						  
						  
				   </div>
				   <hr/>
				    
					<?php
                             
                        
					}
					}
					?>
					
					   


</body>
</html>
<?php 
	
	include 'close.php';
	
?>