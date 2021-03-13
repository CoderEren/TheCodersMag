<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Arduino Mag - Admin Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
	
	<?php

	session_start();
	if(!isset($_SESSION['username'])) {
		header('location:login.php');
	}

	?>
	
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<a href="admin.php"><img style="width:276px;" src="images/Arduino-Mag-logo.png" alt="Arduino Mag Logo"></a>
							</div>
							
					</header>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container" style="background-image:url('https://images.pexels.com/photos/163100/circuit-circuit-board-resistor-computer-163100.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
						<div class="row">
							<div class="col-12 col-12-medium">
								<h2 style="color:#fff;text-align:center;">Admin Dashboard - Welcome <?php echo $_SESSION['username'] ?></h2>
							</div>
						</div>
					</div>
				</div>

				<div class="container" style="margin-top: 100px;">
					<form action="newarticlesubmit.php" method="POST">
						<label>Article Title: </label>
						<input type="text" name="title" placeholder="title...">
						
						<label>Article Description: </label>
						<input type="text" name="description" placeholder="description...">
						
						<label>Article Content: </label>
						<textarea type="text" name="content" placeholder="content..." rows="10" cols="100"></textarea>
						
						<label>Article URL: </label>
						<input type="text" name="url" placeholder="URL...">
						
						<label>Article Image URL: </label>
						<input type="text" name="imageurl" placeholder="image URL...">
						
						<label>Article Category: </label>
						<input type="text" name="category" placeholder="category...">
						
						<input type="submit" name="submit">
					</form>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Arduino Mag. All rights reserved</li><li>Design: <a target="_blank" href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>