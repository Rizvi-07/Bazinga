<?php
    include 'config.php';
?>
<html>
    <head>
       <title> Movie Review </title>
       <link rel="stylesheet" href="movieList1.css">

    </head>


   <body>

        <ul>
		
			<li><a href="practice1.html">Home</a></li>
			<div id="user">
			      <li>Maisha Binte Rashid</li>
			</div>
			<form>
            <input type="text" name="search" placeholder="Search..">
            </form>
			
		</ul>

		    <div class="image">
		        <img src="img/bazinga.jpeg"/>
		    </div>
			<?php 
					$sql="Select * from movies";
					$student_query_result = mysqli_query($conn,$sql) or die(mysql_error());
				    if(mysqli_num_rows($student_query_result) > 0)
				    {
				    $row = mysqli_fetch_array($student_query_result);
					
			?>
	        <div class="movieDescription">
	               
				   
		           <img class="movie_img" src= "<?php echo $row['Thumbnil']; ?>" />
				   
				   
		                 
					<p class="description">
			              <strong>Writers:</strong> <?php echo $row['Writers']; ?> <br><br><br>
						  <strong>Release Date:</strong> <?php echo $row['ReleaseDate']; ?> <br><br><br>
						  <strong>Category:</strong> <?php echo $row['Category']; ?> <br><br><br>
						  <strong>Rating:</strong> <?php echo $row['Rating']; ?>/10 <br><br><br>
			              <strong>Stars: </strong><?php echo $row['Stars']; ?><br><br><br>
			              <strong>Plot: </strong><?php echo $row['Plot']; ?><br><br><br>
			
		 
                           <button  type="submit"> +Add to Watchlist </button>
					       <button  type="submit"> +Add to Wishlist </button>
				   </p>
				   
	         
	        </div>
			 <div class="movieDescription">
	               
				   
		           <img class="movie_img" src= "<?php echo $row['Thumbnil']; ?>" />
				   
				   
		                 
					<p class="description">
			              <strong>Writers:</strong> <?php echo $row['Writers']; ?> <br><br><br>
						  <strong>Release Date:</strong> <?php echo $row['ReleaseDate']; ?> <br><br><br>
						  <strong>Category:</strong> <?php echo $row['Category']; ?> <br><br><br>
						  <strong>Rating:</strong> <?php echo $row['Rating']; ?>/10 <br><br><br>
			              <strong>Stars: </strong><?php echo $row['Stars']; ?><br><br><br>
			              <strong>Plot: </strong><?php echo $row['Plot']; ?><br><br><br>
			
		 
                           <button  type="submit"> +Add to Watchlist </button>
					       <button  type="submit"> +Add to Wishlist </button>
				   </p>
				   
	         
	        </div>
			
			 
					<?php 
					}
                    ?>
  
					

   </body>
</html>

<?php 
	
	include 'close.php';
	
?>