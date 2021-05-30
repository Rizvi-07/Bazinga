<?php
	include 'config.php';
	//echo $_GET['firstname'];
	//echo "<br>";
	//echo $_GET['lastname'];

	$firstname = $_POST['FirstName'];
	$userid   = $_POST['UserId'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	
	$sql = "INSERT INTO user (FirstName,UserId,Email,Password) VALUES ('$firstname','$userid','$email','$password')";

	if ($conn->query($sql) === TRUE) {
		//$last_id = $conn->insert_id;
		echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Registered')
        window.location.href='loginPopup.php';
        </SCRIPT>");
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('User Id Already Taken')
                            window.location.href='signup.php';
                            </SCRIPT>");
	}


include 'close.php';
?>