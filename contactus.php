<?php
    session_start();
?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contact - One-Stop Form Suggestion</title>
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
					<li class="selected">
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
		<div id="body" style="background-color:#317AC5;">
			<div class="header">
				<div class="contact" >
					<h1 style="color:#020833;">Contact</h1>
					<h2 style="color:#020833;">DO NOT HESITATE TO CONTACT US</h2>
					<form action="contact.php" method="POST">
						<input type="text" name="Name" value="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Email" value="Email" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Subject" value="Subject" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';">
						<textarea name="message" cols="50" rows="7">Message</textarea>
						<input style="background-color:#020833;" type="submit" name="submit" value="Send" id="submit">
					</form>
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