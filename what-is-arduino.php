<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>What Is Arduino - Arduino Mag</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script data-ad-client="ca-pub-5747013921515016" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	</head>
	<body class="is-preload right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<a href="index.php"><img style="width:276px;" src="images/Arduino-Mag-logo.png" alt="Arduino Mag Logo"></a>
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

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-medium">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>What is Arduino?</h2>

											<p><b>Arduino is an electronic board that allows you to easily program microcontrollers. 
											Then, the microcontroller can read inputs from sensors such as light, sound and ultrasonic sensors and 
											give an output such as playing the speaker, starting a motor or lighting an LED. 
											You can program the Arduino board using its free IDE and programming language based on C and C++.</b></p>
											
											<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<ins class="adsbygoogle"
												 style="display:block; text-align:center;"
												 data-ad-layout="in-article"
												 data-ad-format="fluid"
												 data-ad-client="ca-pub-5747013921515016"
												 data-ad-slot="9730540542"></ins>
											<script>
												 (adsbygoogle = window.adsbygoogle || []).push({});
											</script>

											<h3>Why don't I just program the microcontroller myself?</h3>
											<p>Yes, you can just program the microcontroller yourself. But you would need to type out a lot of binary numbers, 
											and memorize many hard to remember instructions and registers. Afterwards, you would need special programming hardware with custom 
											cables to upload your code onto your microcontroller. Arduino got rid of all these necessities and made it easier 
											to program a microcontroller. You only need an Arduino board and a computer to make your own projects!</p>

											<h3>Features of Arduino</h3>
											<p><b>Many boards to choose from:</b> There are many Arduino boards that can fit for different projects such as 
											Arduino Uno, Nano, Leonardo, Micro and more.<br>
											<b>Cheap:</b> Arduino boards cost less than $50.<br>
											<b>Simple Programming Environment: </b>Arduino's Integrated Development Environment has example codes and contains 
											an easy version of C++ programming language, which makes it easy for beginners to use Arduino.<br>
											<b>Cross-Platform IDE: </b>Arduino IDE can be installed on Linux, Windows and Mac OS.<br>
											
											<h3>How Do I Start Using Arduino?</h3>
											<ol>
												<li>Buy an Arduino or an Arduino Kit from Arduino's official website or Amazon.</li>
												<li>Install Arduino IDE to your computer from Arduino's website or from Windows App Store.</li>
												<li>Connect the cable to your Arduino and plug it into your computer's USB.</li>
												<li>Explore example codes on the IDE and upload the codes to your Arduino. You can also watch videos for different 
												projects and make your own project.</li>
											</ol>
											
											</p>

										</article>
										
										<!-- Related Posts Section -->
											<h3>Related Posts</h3>
											<div class="row">
												<?php
													$b = 0;
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
												
												<?php
													$b++; 
													  if( $b == 3 )break;
												?>
												
												<?php } ?>
											</div>

								</div>
							</div>
							<div class="col-4 col-12-medium">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<!-- Arduino Mag Article Sidebar Ads -->
											<ins class="adsbygoogle"
												 style="display:block"
												 data-ad-client="ca-pub-5747013921515016"
												 data-ad-slot="4103449977"
												 data-ad-format="auto"
												 data-full-width-responsive="true"></ins>
											<script>
												 (adsbygoogle = window.adsbygoogle || []).push({});
											</script>
										</section>

										<section>
											<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
											<!-- Arduino Mag Article Sidebar Ads -->
											<ins class="adsbygoogle"
												 style="display:block"
												 data-ad-client="ca-pub-5747013921515016"
												 data-ad-slot="4103449977"
												 data-ad-format="auto"
												 data-full-width-responsive="true"></ins>
											<script>
												 (adsbygoogle = window.adsbygoogle || []).push({});
											</script>
										</section>

								</div>
							</div>
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
										<p class="style2">Join our newsletter for the latest articles!</p>
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
											<li><a href="#">Coding</a></li>
											<li><a href="#">App Development</a></li>
											<li><a href="#">Web Development</a></li>
											<li><a href="#">Python</a></li>
											<li><a href="#">JavaScript</a></li>
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
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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