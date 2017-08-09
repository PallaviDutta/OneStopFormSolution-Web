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
					<p><h2 style="color:#020833;">Medical Forms</h2></p>
					<img src="images/medical.jpg" alt="">
					<h2 style="color:#020833;">Why should I study Medical?</h2>
					<p>Most doctors would say that there is no greater joy than the one you feel when you manage to help a very sick patient or when you are part of a group of scientists who discover a new medicine for a certain disease. The ability to directly help the healing process is also a continuous challenge and sometimes it is not easy to cope with it. For this reason, your medical education will prepare you to handle the difficult moments and land on your feet in 99% of the cases.</p>
					<p><h3 style="color:#020833;">If you are genuinely interested in medical then here is the list: </h3></p>
					<h3><a href="http://cbseneet.nic.in/cbseneet/welcome.aspx">National Eligibility and Entrance Test - NEET</a></h3>
					<h3><a href="http://aipvt.vci.nic.in/Home?aspxerrorpath=/aipvt/Welcome.aspx"> All India Pre-Veterinary Test -AIPVT</a></h3>
					<h3><a href="http://www.afmc.nic.in/">Armed Forces Medical College -AFMC</a></h3>
					<h3><a href="https://www.aiimsexams.org/">All India Institute Of Medical Sciences-AIIMS</a></h3>
					<!-- <h3><a href="www.bhu.ac.in/ims/">BHU PMT</a></h3> -->
					<h3><a href="https://mhtcet2017.dtemaharashtra.gov.in/">Maharashtra Health and Technical Common Entrance Test(MHT-CET)</a></h3>
					<h3><a href="https://www.comedk.org/">Consortium of Medical, Engineering and Dental Colleges of Karnataka-COMEDK</a></h3>
					<h3><a href="https://www.jbigdeal.in/dumet/">Delhi University Medical-Dental Entrance Test (DUMET)</a></h3>
					<h3><a href="http://admissions.cmcvellore.ac.in/">Christian Medical College and Hospital, Vellore (CMC)</a></h3>
					<h3><a href="http://cmcludhiana.in/cmc_2014/">Christian Medical College and Hospital-CMC Ludhiana</a></h3>
					<h3><a href="http://kea.kar.nic.in/">Karnataka Common Entrance Test-KCET</a></h3>
					<h3><a href="https://www.cpmtup2016.org/">Uttar Pradesh Combined Pre-Medical Test-UPCPMT</a></h3>
					
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
					<p>&copy; 2023 BY SPACE PROSPECTION | ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>