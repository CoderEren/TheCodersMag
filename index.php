<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Arduino Mag - Arduino Tutorials & Articles</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<a href="index.php"><img style="width:276px;" src="/images/Arduino-Mag-logo.png" alt="Arduino Mag Logo"></a>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="tutorials.php">Tutorials</a></li>
									<li><a href="arduino-projects.php">Projects</a></li>
									<li><a href="arduino-news.php">News</a></li>
								</ul>
							</nav>

					</header>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container" style="background-image:url('https://images.pexels.com/photos/163100/circuit-circuit-board-resistor-computer-163100.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2 style="color:#fff">Welcome to Arduino Mag.</h2>
								<p style="color:#fff">It's a blog full of useful Arduino tutorials and projects.</p>
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									<li><a href="#articles" class="button large icon solid fa-arrow-circle-right">Ok let's go</a></li>
									<!-- <li><a href="#" class="button alt large icon solid fa-question-circle">More info</a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container" id="articles">
						<div class="row">
						
						<?php
									$conn = new PDO("mysql:host=localhost;dbname=thecodersmag","root","2005eren07");
									$articlesor = $conn->prepare("SELECT * FROM articles");
									$articlesor->execute();
									
									while($articlecek=$articlesor->fetch(PDO::FETCH_ASSOC)) {
								?>
						
							<div class="col-4 col-12-medium">
								<!-- Box -->
									<section class="box feature">
										<a href="<?php echo $articlecek['url'] ?>" class="image featured"><img src="<?php echo $articlecek['image_url'] ?>" alt="<?php echo $articlecek['title'] ?>" /></a>
										<div class="inner">
											<header>
												<a href="<?php echo $articlecek['url'] ?>"><h2><?php echo $articlecek['title'] ?></h2></a>
											</header>
											<p><?php echo $articlecek['description'] ?></p>
										</div>
									</section>
							</div>
							
							<?php } ?>
							
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Newsletter</h3>
										<p class="style2">Join our newsletter for the latest Arduino projects!</p>
										<!-- Signup Form -->
										<form id="signup-form" method="post" action="#">
											<input style="width: 18em;width: 100%;" type="email" name="email" id="email" placeholder="Email Address" />
											<input style="width: 18em;width: 100%;margin: 1.25em 0 0 0;" type="submit" value="Sign Up" name="emailsubmit" />
										</form>
									</section>
							
							
							<?php
								$con = mysqli_connect('localhost','root','2005eren07');
								mysqli_select_db($con, 'thecodersmag');

								$email = $_POST['email'];

								if(isset($_POST['emailsubmit']) && $email != '') {
									$submit = "INSERT INTO emails (email_address) VALUES ('$email')";
									 mysqli_query($con, $submit);
									 echo "Thanks for joining our newsletter!";
								}
							?>
							</div>
							
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Popular Articles</h3>
										<ul class="style2">
										<?php
									$i = 0;
									$conn = new PDO("mysql:host=localhost;dbname=thecodersmag","root","2005eren07");
									$articlesor = $conn->prepare("SELECT * FROM articles");
									$articlesor->execute();
									
									while($articlecek=$articlesor->fetch(PDO::FETCH_ASSOC)) {
								?>
											<li><a href="<?php echo $articlecek['url'] ?>"><?php echo $articlecek['title'] ?></a></li>
											<?php $i++; 
												  if( $i == 4 )break; ?>
												  
											<?php } ?>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Categories</h3>
										<ul class="style2">
											<li><a href="tutorials.php">Tutorials</a></li>
											<li><a href="arduino-projects.php">Projects</a></li>
											<li><a href="arduino-news.php">News</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact last">
										<h3>Follow Us</h3>
										<ul>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="https://instagram.com/thecodersmag" target="_blank" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
									</section>

							</div>
						</div>
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