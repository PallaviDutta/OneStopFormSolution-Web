<?php
    session_start();
?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>proj1 - One-Stop Form Suggestion</title>
	<link rel="stylesheet" href="css/style2.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.php" class="logo"><img src="images/logo11.png" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li class="menu">
						<a href="projects.php">Exams</a>
						<ul class="primary selected">
							<!-- <li>
								<a href="proj1.html">Engineering</a>
							</li>
							<li>
								<a href="proj1.html">Medical</a>
							</li>
							<li>
								<a href="proj1.html">Management</a>
							</li> -->
						</ul>
					</li>
					<li>
						<a href="contactus.php">Contact</a>
					</li>
					<li class="menu">
						<?php if(isset($_SESSION['user'])):?>
                    	<li>

						<a href="logout.php">Logout</a>
					</li>
					<?php else: ?>
					<a href="login11.php">Login</a>
					<?php endif; ?>
						
					</li>
					
				</ul>
			</div>
		</div>
		<div id="body" style="background-color:#317AC5;">
			<div class="header">
				<div>
					<p><h2 style="color:#020833;">Management Forms</h2></p>
					<img src="images/maneg.jpg" alt="">
					<h2 style="color:#020833;">Why should i study management courses?</h2>
					<p>The skills which a management student learns are various and they help the individual in his day to day life as well. You learn to motivate and lead others. You get very good interpersonal communication skills; learn how to negotiate on various topics. A very important quality learnt is how to listen well and this helps you in your decision making.</p>
					<p><h3 style="color:#020833;">If you are genuinely interested in management then here is the list: </h3></p>
					<h3><a href="https://iimcat.ac.in/per/g01/pub/756/ASM/WebPortal/1/index.html?756@@1@@1">Common Admission Test (CAT)</a></h3>
					<h3><a href="http://www.npat.in//">NPAT BBA (National test for Programs After Twelfth)</a></h3>
					<h3><a href="http://xatonline.net.in/">XAT (Xavier Aptitude Test)</a></h3>
					<h3><a href="http://www.bschool.careers360.com/articles/du-jat">DU JAT (Delhi University Joint Admission Test)</a></h3>
					<h3><a href="http://www.shiksha.com/bba/exams/ipmat">IPMAT (IIM Indore Integrated Program in Management Aptitude Test)</a></h3>
					<h3><a href="http://www.aicte-cmat.in/College/Index_New.aspx">CMAT (Common Management Admission Test)</a></h3>
					<h3><a href="https://apps.aima.in/matmay17/?gclid=CjwKEAjw8OLGBRCklJalqKHzjQ0SJACP4BHrqx9IIwskwoRwDRd1slTbkH3CTorecoXoGyRz8gNREBoCHrPw_wcB">MAT (Management Aptitude Test)</a></h3>
					<h3><a href="https://www.irma.ac.in/">IRMA (Institute Of Rural Management Anand)</a></h3>
					<h3><a href="http://admissions.bennett.edu.in/gen/?utm_source=Google&utm_medium=RLSA&utm_campaign=BBA&gclid=CjwKEAjw8OLGBRCklJalqKHzjQ0SJACP4BHrbCPtdl6UZj9W5p2_z1zNd7GWPFZjdLNRwDS1VROhvxoCqlTw_wcB">Bennett University</a></h3>
					<h3><a href="https://christuniversity.in/">Christ University BBA</a></h3>
					
					
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW OUR  MISSIONS ON</h1>
					<div>
						<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
						<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
						<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
						<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
					</div>
				</div>
			</div>
			<div class="footnote">
				<div>
					<p>&copy; 2023 BY  One-Stop Form Suggestion | ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>