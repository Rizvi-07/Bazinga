
<?php
    session_start();
    session_destroy();
    include 'config.php';
?>
<html>
   <head id="homepg">
   
        <title> Home </title>
        <link rel="stylesheet" href="home.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
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
	  <div class="container">
	  <section id="trailersec">
	  <div id="trailer">
	  <iframe width="300" height="400" src="https://www.youtube.com/embed/VSB4wGIdDwo" frameborder="0" allowfullscreen></iframe>
	  <iframe width="300" height="400" src="https://www.youtube.com/embed/lF1csVFv9go" frameborder="0" allowfullscreen></iframe>
	  <iframe width="300" height="400" src="https://www.youtube.com/embed/J6bnbmQvgUk" frameborder="0" allowfullscreen></iframe>
	  </div>
	  </section>
	  <aside>
	 <div id="side_right">
           <h2 align="center">Upcoming Movies</h2>
		   <table>
		   <tr id="tr1">
		
		<th></th>
		<th></th>
		
		</tr>
		   <?php
		   $cnt=0;
		
	    $d=date("Y-m-d");
		//$sql="SELECT Thumbnil,MovieName,movie_id FROM movies where ReleaseDate>='".$d."'";
		$sql="SELECT Thumbnil,MovieName,movie_id FROM movies where ReleaseDate<='".$d."'";
		

		$result=mysqli_query($conn,$sql) or die(mysql_error());
		
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				  if($cnt==6)
				break;
		 $cnt++;
		?>
		  
          
		    <tr>
		    <td><img class="img1" src="<?php echo $row['Thumbnil'] ?>" style="width:50px;height:50px;"/></td>
		    <td><a href="movieReview1.php?value=<?php echo $row['movie_id'] ?>"><?php echo $row['MovieName'] ?></a></td>
		    
		    </tr>
			
				<?php }
		}
		     ?>
		</table>
           <hr />
       </div>
       </aside>
	  </div>
	  <hr/>
	  <div>
	   <h2> TOP BOX OFFICE </h2>
	    <table cellpadding="10">
		   <tr id="tr1">
		
		<th></th>
		<th></th>
		<th></th>
		</tr>
		   <?php
		   $cnt=0;
		
	
		$sql="SELECT Thumbnil,MovieName,movie_id,income FROM movies order by income desc limit 5";

		$result=mysqli_query($conn,$sql) or die(mysql_error());
		
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				  if($cnt==6)
				break;
		 $cnt++;
		?>
		  
          
		    <tr>
		    <td><img class="img1" src="<?php echo $row['Thumbnil'] ?>" style="width:50px;height:50px;"/></td>
		    <td><a href="movieReview1.php?value=<?php echo $row['movie_id'] ?>"><?php echo $row['MovieName'] ?></a></td>
		    <td>$<?php echo $row['income'] ?></a></td>
		    </tr>
			
				<?php }
		}
		     ?>
		</table>
           <hr />
	 
       </div>
   </body>
   
 
</html>
