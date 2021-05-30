<!DOCTYPE html>
<?php
	 session_start();
    include 'config.php';
?>
<html>
   <head id="homepg">
   
        <title> profile </title>
        <link rel="stylesheet" href="prof.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
   </head>
   <body id="oishee">
      
	 
	  <ul id="menubar1">
	    <li class="menubar"> <a href="home2.php"> Home </a> </li>
		<li class="menubar"> <a href="lol.php"> Movie List </a> </li>
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
	  $y=$_SESSION['a'];
		$sql1="Select FirstName,Email From user Where UserId='".$y."'";
		$student_query_result1 = mysqli_query($conn,$sql1) or die(mysql_error());
		$roww=mysqli_fetch_array($student_query_result1);
		$qr="Select count(*) From user Inner join watchlist Where user.UserId='".$y."' and user.UserId=watchlist.UserId" ;
		$student_query = mysqli_query($conn,$qr) or die(mysql_error());
		$row1=mysqli_fetch_array($student_query);
		$qr1="Select count(*) From user Inner join wishlist Where user.UserId='".$y."' and user.UserId=wishlist.UserId" ;
		$student_query1 = mysqli_query($conn,$qr1) or die(mysql_error());
		$row2=mysqli_fetch_array($student_query1);
		?>
	 <div id="pro">
							<h1 style="color:yellow; text-align:center;"> User Information</h1>
	 						<img class="movieimg" src= "dp.jpg" />
							<p class="user_info">
			              <strong>Name:</strong> <?php echo $roww['FirstName']; ?> <br><br><br>
						  <strong>Email:</strong> <?php echo $roww['Email']; ?> <br><br><br>
						   <strong>Watchlist:</strong> <?php echo $row1[0]; ?> <br><br><br>
						   <strong>Wishlist:</strong> <?php echo $row2[0]; ?> <br><br><br>
			
		                     
						   </p> 
	 </div>
   </body>
   
 
</html>
<?php
    include 'close.php';
?>