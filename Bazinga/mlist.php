<?php
    session_start();
	include 'config.php';
?>

<!DOCTYPE html>

<html>
   <head id="homepg">
   
        <title> Movie List </title>
        <link rel="stylesheet" href="mlist.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
         <meta charset="utf-8"/>
<script src="jQuery.js"></script>
<script src="myscript.js"></script>
		
    </head>
	<?php
    $select='';
	$f=0;
	function getop($select)
	{
		
		$sort =array('All'=> '*','Horror'=> 'Horror', 'Drama' => 'Drama', 'Animation' => 'Animation', 'Romantic' => 'Romantic');
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
	                   
                          if(isset($_POST['sort']) && $_POST['sort']!=" " )
						  {
							    $f=1;
	                            $select=$_POST['sort'];
								if($_POST['sort']=='*')
									$f=0;
								
								
								
						  }
						  else
						  {
							  
							  $f=0;
						  }
						 
							  
?>
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
	  <br>
	  <br>
	  <div  id="sech">
	  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	  <input type="text" list="myCompanies" name="company" id="suggest" placeholder="Search For Movies" />
	<datalist id="myCompanies">
 
	</datalist>
     </form>
	 </div>
	 <div id="cat">
	 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
					      <label><b>Choose A Category</b></label>
                           <select id="l" name="sort" onchange="this.form.submit();">
						   <optgroup label="Category">
                      <?php echo getop($select) ?>;
                     </select>
                    </form>
	  </div>
	 
	  <?php 
                          if(isset($_POST['company']) && $_POST['company'] != "")
						  {
	                            $selectOption=$_POST['company'];
								
								$sql="Select * from movies where MovieName="."'".$selectOption."'";
						  }
				    else if($f==1)
					{
						$sql="Select * from movies INNER JOIN category on movies.MovieName=category.MovieName where category.Category='".$select."'";
						
					}
					else
					$sql="Select * from movies";
					
					$row1="";
					$student_query_result = mysqli_query($conn,$sql) or die(mysql_error());
				    if(mysqli_num_rows($student_query_result) > 0)
				    {
				    while($row = mysqli_fetch_array($student_query_result)){
						$row1=$row['movie_id'];
			        ?>
					     <br>
						 
					     
                          <div class="cities">
						  <hr/>
                          <h1 style="color:black; text-align:center;"> <?php echo $row['MovieName']; ?></h1>
						  
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
						   <br>
						    <?php 
						   }
					}						   

					         ?>
					
       
   </body>
   
 
</html>
<?php
    include 'close.php';
?>
