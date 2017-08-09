<?php
    session_start();
?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>proj1 - Space Science Website Template</title>
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
					<a href="login.html">Login</a>
					<?php endif; ?>
						
					</li>
					
				</ul>
			</div>
		</div>
		<div id="body" style="background-color:#317AC5;">
			<div class="header">
				<div>
					<p><h2 style="color:#020833;">University Forms</h2></p>
					<img src="images/science.png" alt="">
					<h2 style="color:#020833;">Why should i study degree courses?</h2>
					<p>The important thing is to choose a subject you’ll enjoy that will help you reach your goals.Think about what you enjoy doing day-to-day – maybe this could be part of a future job role.Most students study for an undergraduate degree.There is dynamic academic environments with lectures and seminars, usually made up of different modules adding up to the full degree. Each course varies in learning styles, assessment methods and topics studied – and you'll usually get to choose some of the modules you take.</p>
					<p><h3 style="color:#020833;">If you are genuinely interested in engineering then here is the list: </h3></p>
					<h3><a href="https://www.sarvgyan.com/articles/delhi-university-du-admission-2017">Delhi University</a></h3>
					<h3><a href="https://www.nestexam.in/">National Entrance Screening Test (NEST)</a></h3>
					<h3><a href="https://www.sarvgyan.com/articles/allahabad-university-admission-2017">Allahabad University</a></h3>
					<h3><a href="https://www.sarvgyan.com/articles/ipu-cet-2017">Indraprastha University Common Entrance Test-IPUCET</a></h3>
					<h3><a href="https://www.sarvgyan.com/articles/lucknow-university-2017">Lucknow University</a></h3>
					<h3><a href="https://www.sarvgyan.com/articles/nift-2017">National Institute of Fashion Technology-NIFT</a></h3>
					<h3><a href="https://www.sarvgyan.com/articles/amu-2017">Aligarh Muslim University-AMU</a></h3>
					<h3><a href="https://www.sarvgyan.com/articles/ptu-exam-2017">Punjab Technical University (PTU)</a></h3>
					<h3><a href="https://www.sarvgyan.com/articles/jnu-admission-2017">Jawaharlal Nehru University</a></h3>
					<h3><a href="https://www.sarvgyan.com/articles/isi-2017">ISI (Indian Statistical Institute Admission)</a></h3>
					
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