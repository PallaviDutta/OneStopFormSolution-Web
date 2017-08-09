<?php
    session_start();
?>

<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>One-Stop Form Suggestion</title>
	<link rel="stylesheet" href="css/style3.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
	<style type="text/css">
     .userid{

     	font-size: 20pt;
     	margin-top:30px;
     }
	</style>
</head>
<body>
	<div id="page" style="background-color:#020833;">
		<div id="header">
			<div>
				<a href="index.php" class="logo"><img src="images/logo11.png" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					
					<li class="menu">
						<a href="projects.php">Exams</a>
						<ul class="primary">
							<!-- <li>
								<a href="proj1.html">Engineering</a>
							</li>
							<li>
								<a href="proj1.html">Medical</a>
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
					<?php endif;?>
						
					</li>
					
					
				</ul>
			</div>
		</div>
		<div id="body" class="home">
			<div class="header" >
				<div>
					
					<?php if(isset($_SESSION['user'])):?>
                    	<div class="userid" style="font-size: 30pt;
     					margin-top:20px;">
						<p style="color:#020833; font-size:50%;"><?php echo $_SESSION['user'];?></p>
						</div>
					<?php else: ?>
				<?php endif;?>

					<img src="images/edu.png" alt="" class="satellite">
					<h1 style="color:#020833;">We are Here</h1>
					<h2 style="color:#020833;">To_Help_You</h2>
					<!-- <a href="singlepost.html" class="more">Read More</a> -->
					<h3>Education Fields</h3>
					<ul>
						<li>
							<a href="projects.php"><img src="images/1.jpg" alt=""></a>
						</li>
						<li>
							<a href="projects.php"><img src="images/m3.jpg" alt=""></a>
						</li>
						<li>
							<a href="projects.php"><img src="images/sc4.jpg" alt=""></a>
						</li>
						<li>
							<a href="projects.php"><img src="images/mn5.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="body" style="background-color:#020833;">
				<div>
					<h1>OUR MISSION</h1>
					<p>Our Mission is to make you aware of all the Educational fields so that you know that there's not a single option that you should strive for.</p>
				</div>
			</div>
		<div id="footer" >
			<div class="connect" >
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
					<p>&copy; 2017 BY One-Stop Form Suggestion | ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>