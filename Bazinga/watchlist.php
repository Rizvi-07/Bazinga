<?php
    session_start();
   include 'config.php'
?>

<html>
<head>
<title> Watchlist </title>
<link rel="stylesheet" href="watchlist2.css">

</head>
<?php
    $select='';
	function getop($select)
	{
		
		$sort =array('Sort By'=> 'Thumbnil','Rating'=> 'Rating', 'Category' => 'Category', 'Movie Name' => 'MovieName');
		$option='';
		while(list($k,$v)=each($sort))
		{
			if($select==$v)
			{
				$option.='<option value="'.$v.'" selected>'.$k.'</option>';
			}
			else
			{
				$option.='<option value="'.$v.'">'.$k.'</option>';
			}
			
		}
		return $option;
		
	}
	                   $selectOption="MovieName";
                          if(isset($_POST['sort']))
						  {
	                            $selectOption=$_POST['sort'];
								$select=$_POST['sort'];
						  }
?>
<body>
        <ul id="menubar1">
	    <li class="menubar"> <a href="home2.php"> Home </a> </li>
		<li class="menubar"> <a href="movies.php"> Movies List </a> </li>
		<li class="menubar"> <a href="http://www.imdb.com/search/name?birth_monthday=07-19&refine=birth_monthday&ref_=nv_cel_brn_1"> Celebs,Events and Photos </a> </li>
		<li class="dropdown"> 
		    
             <a href="#" class="dropbtn">Watchlist</a>
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
		<img src="img/bazinga.jpeg"/>
		</div>
		
		<div class="list">
		<div class="drp">
		   <section>
		        <p id="hd1" style="text-align:center;"> My Watchlist </p>
		   </section>
		            <aside>
		            
                     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					      
                           <select id="l" name="sort" onchange="this.form.submit();">
						   
                      <?php echo getop($select) ?>;
                     </select>
                    </form>
                     
		            </aside>
		   
		</div>
		<hr />
		
		<div class="tab">
		<table cellpadding="30">
		<tr id="tr1">
		<th>Movie</th>
		<th>Title</th>
		<th>My Rating</th>
		<th>Category</th>
		<th>Remove</th>
		<?php
		$x=$_SESSION['a'];
	
		$sql="SELECT Thumbnil,MovieName,Rating,Category,movies.movie_id FROM movies Inner Join watchlist ON movies.movie_id=watchlist.movie_id WHERE watchlist.UserId='".$x."' ORDER BY ".$selectOption." desc";

		$result=mysqli_query($conn,$sql) or die(mysql_error());
		
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
		?>
		

		
		<tr>
		<td><img id="img1" src="<?php echo $row['Thumbnil'] ?>"/></td>
		<td><a href="movieReview.php?value=<?php echo $row['movie_id'] ?>"><?php echo $row['MovieName'] ?></a></td>
		<td><?php echo $row['Rating'] ?></td>
		<td><?php echo $row['Category'] ?></td>
		<td>
		
		                <form method="post">
						   
						   
						   <button class="button1" type="submit" value="<?php echo $row['movie_id']; ?>" name='wish'/>Remove</button>
						   </form>
		
		</td>
		</tr>
		
			<?php }
		}
		?>
		<?php
		    
		    
				 
                                
							      if(isset($_POST['wish']) && $_POST['wish'] != "")
                             {
                              
							      $y=$_POST['wish'];
								  
								         
							      $x=$_SESSION['a'];
								  
						
                               $sql = "DELETE FROM watchlist where UserId='".$x."' and movie_id=".$y;
								 if ($conn->query($sql) === TRUE) {
									 
									 header("Refresh:0");
                                    
                                    } else {
                                     echo "Error:  " . $sql . "<br>" . $conn->error;
                                     }
                                 
                             } 
								// echo $sql;
								 
								 
                                 
                            
			
		?>
		</table>
</body>
</html>