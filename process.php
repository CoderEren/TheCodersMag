<?php
	session_start();

	$con = mysqli_connect('localhost','root','2005eren07');

	mysqli_select_db($con, 'thecodersmag');

	$loginusername = $_POST['loginusername'];
	$loginpassword = $_POST['loginpassword'];

	$s = "SELECT * FROM users WHERE user_username = '$loginusername' && user_password = '$loginpassword'";
	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);

	if($num == 1) {
		$_SESSION['username'] = $loginusername;
		header('location:admin.php');
	} else {
		header('location:login.php');
	}
?>