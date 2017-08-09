<?php
    session_start();
?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>about - Space Science Website Template</title>
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
					<li class="selected">
						<a href="about.php">About</a>
					</li>
					<li class="menu">
						<a href="projects.php">Exams</a>
						<ul class="primary">
							<!-- <li>
								<a href="proj1.html">Engineering</a>
							</li>
							<li>
								<a href="proj1.html">Medical    </a>
							</li>
								<li>
								<a href="proj1.html">Science</a>
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
		<div id="body" class="about">
			<div class="header">
				<div>
					<!-- <h1>About</h1> -->
					<!-- <h2>We Have Free Templates for Everyone</h2> -->
					<!-- <p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the <a href="https://freewebsitetemplates.com/about/terms/">Terms of Use</a>. You can even remove all our links if you want to.</p> -->
				</div>
			</div>
			<div class="body" style="background-color:#317AC5;">
				<div>
					<img src="images/skg.jpg" alt="">
					<h2 style="color:#020833;">Sujeet Kumar Gupta</h2>
					<p>A keen observer of entrance examination trends.He has quite a reliable network of promising sources.Feel free to contact him  through sujeetkumargpt06@gmail.com for any enquiry related to forms that you must apply for. Contact- +91-890-600-5615</p>
				</div>
			</div>
			<div class="footer">
				<div>
					<img src="images/pallavi.jpg" alt="">
					<h2 >Pallavi Dutta</h2>
					<p>A statistical analyst with self-driven motive to help the needy students.She herselves applied in most of the entrance examintions and her perspective on the ongoing examination trends have helped bloom many students till date. Contact - +91-943-130-7094 </p>
				</div>
			</div>
			<!-- <div class="section">
				<div>
					<h2>Template Details</h2>
					<p>Design Version 1. Code version 3. Website Template details, discussion and updates for this <a href="https://freewebsitetemplates.com/discuss/spacescience/"> Space Science Website Template</a>. Website Template design by <a href="https://freewebsitetemplates.com/">Free Website Templates</a>. Please feel free to remove some or all the text and links of this page and replace it with your own About content.</p>
				</div>
			</div> -->
		</div>
		<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW OUR  MISSIONS ON</h1>
					<div>
						<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
						<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
						<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
						<a href="http://freewebsitetemplates.com/go/pinterest/" class="pinterest">pinterest</a>
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