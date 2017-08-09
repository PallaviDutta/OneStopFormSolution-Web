<?php
    session_start();
?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exams-One-Stop Form Suggestion</title>
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
					<li class="menu selected">
						<a href="projects.php">Exams</a>
						<ul class="primary">
							<!-- <li>
								<a href="login11.php">Engineering</a>
							</li>
							<li>
								<a href="login11.php">Medical</a>
							</li>
								<li>
								<a href="login11.php">Science</a>
							</li>
							<li>
								<a href="login11.php">Management</a>
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
		<div id="body">
			<div class="header" style="background-color:#317AC5;">
				<div>
					<h1 style="color:#020833;">Projects</h1>
					<ul>
						<li>
							<a href="login11.php"><img src="images/1.jpg" alt=""></a>
							<div>
								<h1 style="color:#020833;">ENGINEERING </h1>
								<p>Engineering is one of the most demanding courses among students. There are many entrance exams that are organized in India to shortlist students for admissions in engineering programmes. Here we are providing you a list of national and state level engineering entrance examinations which are considered for admissions in top colleges of the country.</p>
								
								<?php
								if( isset($_SESSION['user']) ):?>
		                             <a style="background-color:#020833;" href="engineering.php" class="more">Read More</a>
	                                
	                            <?php else: ?>
	                                  <a style="background-color:#020833;" href="login11.php" class="more">Read More</a>
	                              <?php endif; ?>
	                               
							</div>
						</li>
						<li>
							<a href="login11.php"><img src="images/m3.jpg" alt=""></a>
							<div>
								<h1 style="color:#020833;">MEDICAL </h1>
								<p>Medical Entrance Examinations in India are directed on an All India basis as well as at the State Level for MBBS admissions to many Medical Colleges in India. Some National level Medical Institutions also conduct their own Entrance Test. The Medical Council of India (MCI), Delhi is responsible for medical education in India. Few Private Medical Colleges conduct All India Entrance Exams.Here we are providing you the list.</p>
								<?php
								if( isset($_SESSION['user']) ):?>
		                             <a style="background-color:#020833;" href="medical.php" class="more">Read More</a>
	                                
	                            <?php else: ?>
	                                  <a style="background-color:#020833;" href="login11.php" class="more">Read More</a>
	                              <?php endif; ?>
							</div>
						</li>
						<li>
							<a href="login11.php"><img src="images/sc4.jpg" alt=""></a>
							<div>
								<h1 style="color:#020833;">SCIENCE</h1>
								<p>Besides national level and state level examinations, various reputed universities organizes their own entrance examination for providing admissions in various courses offered by them. In case of some universities, it is mandatory to qualify the entrance test to get admission. Here we are providing you the list.</p>
								<?php
								if( isset($_SESSION['user']) ):?>
		                             <a style="background-color:#020833;" href="science.php" class="more">Read More</a>
	                                
	                            <?php else: ?>
	                                  <a style="background-color:#020833;" href="login11.php" class="more">Read More</a>
	                              <?php endif; ?>
							</div>
						</li>
						<li>
							<a href="login11.php"><img src="images/mn5.jpg" alt=""></a>
							<div>
								<h1 style="color:#020833;">MANAGEMENT</h1>
								<p>The Top 50 B-Schools in India not only offer superlative education and learning, but also attract recruiters offering best packages in India. These B-Schools either affiliate themselves to a common national level entrance test or take their own aptitude test to select candidates.Common Admission Test (CAT), is conducted by the Indian Institutes of Management (IIMs) to enroll students for Post-graduate and Fellow Programs. Several other top management institutes all over India also use valid CAT score for admissions.</p>
								<?php
								if( isset($_SESSION['user']) ):?>
		                             <a style="background-color:#020833;" href="management.php" class="more">Read More</a>
	                                
	                            <?php else: ?>
	                                  <a style="background-color:#020833;" href="login11.php" class="more">Read More</a>
	                              <?php endif; ?>
							</div>
						</li>
					</ul>
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