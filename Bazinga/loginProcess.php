<?php
    session_start();
	include 'config.php';
	
	$userid= $_POST['UserId'];
	$password=$_POST['Password'];
    $_SESSION['a']=$userid;
	$sql = "SELECT UserId,Password From user WHERE UserId='$userid' AND Password='$password'";
	$student_query_result = mysqli_query($conn,$sql) or die(mysql_error());
	//echo $row['firstname'];
	//echo $row['lastname'];

	if (mysqli_num_rows($student_query_result)) {
		//$last_id = $conn->insert_id;
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        
        window.location.href='home2.php';
        </SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login UnSuccessful')
        window.location.href='loginPopup.php';
        </SCRIPT>");
	}

include 'close.php';
?>