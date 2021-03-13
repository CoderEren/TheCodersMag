<?php
	
	$con = mysqli_connect('localhost','root','2005eren07');

	mysqli_select_db($con, 'thecodersmag');

	$title = $_POST['title'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$url = $_POST['url'];
	$imageurl = $_POST['imageurl'];
	$category = $_POST['category'];

	$reg = "INSERT INTO newarticles (title, description, content, url, image_url, category)
		VALUES ('$title','$description','$content','$url','$imageurl','$category')";
	mysqli_query($con, $reg);
	echo "Article submitted successfully!";
	header('location:admin.php');
	
?>