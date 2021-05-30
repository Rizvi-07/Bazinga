<?php 
	include 'config.php';
?>
<html>
<head>
<title> Sign Up </title>
<link rel="stylesheet" href="signup1.css">
</head>


<body>



		 <div id="pop">
		   <form action="signupProcess.php"  method="post">
           <div class="imgcontainer">
               <a href="home.php">
                  <img src="bazinga.jpeg" alt="Avatar" class="avatar">
               </a>
            </div>

            <div class="container">
               

               
			    <label><b> Name:</b></label>
				<input type="text"  id= "name2" name="FirstName" placeholder="Last name">
				 <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="UserId" required>
				<label><b>Email</b></label>
               <input type="email" placeholder="abc@example.com" name="Email" required>
				<label><b>Password</b></label>
               <input type="password" placeholder="Enter Password" name="Password" required>
        
                <button type="submit">Create Your Bazinga Account</button>
	           
            </div>

            </form>
		</div>
	
	
</body>
</html>
<?php 
	include 'close.php';
?>