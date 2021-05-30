<!DOCTYPE html>
<?php
    include 'config.php';
?>
<html>
    <head>
	    <title> Login </title>
	      <link rel="stylesheet" href="login.css" >
	</head>
	
	<body>
	    <div id="pop">
		   <form action="loginProcess.php"  method="post">
           <div class="imgcontainer">
               <a href="home.php">
                  <img src="bazinga.jpeg" alt="Avatar" class="avatar">
               </a>
            </div>

            <div class="container">
                <label><b>Username</b></label>
                     <input type="text" placeholder="Enter Username" name="UserId" autocomplete="off" required>

                <label><b>Password</b></label>
               <input type="password" placeholder="Enter Password" name="Password" autocomplete="off" required>
        
                <button type="submit">Login</button>
	            <p id="lol" style="text-align:center;"> New to Bazinga? <a href="signup.php"> Create a new Bazinga Account </a></button> </p>
            </div>

            </form>
		</div>
	
	</body>
</html>