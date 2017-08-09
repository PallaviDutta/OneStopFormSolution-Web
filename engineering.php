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
<body >
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
					<p><h2 style="color:#020833;">Enginnering Forms</h2></p>
					<img src="images/7.jpg" alt="">
					<h2 style="color:#020833;">Why should I study Engineering?</h2>
					<p>A career in engineering is interesting and fun. It involves a lifetime of continuous learning to adapt to changes in society and the natural world. It often involves working in multi-disciplinary, multi-cultural, multi-site teams. It is a very worthwhile profession, and the results, when you succeed, can be incredibly satisfying.We believe that it's lack of awareness and absence of promtness that PCB student are unable to get admission into colleges that nurture their interest areas. </p>
					<p><h3 style="color:#020833;">If you are genuinely interested in engineering then here is the list: </h3></p>
					<h3><a href="http://jeemain.nic.in/webinfo/Public/Home.aspx">JEE-Joint Entrance Exam(MAIN)</a></h3>
					<h3><a href="http://www.jeeadv.ac.in/">JEE-Joint Entrance Exam(Advance)</a></h3>
					<h3><a href="http://wbjeeb.nic.in/webinfoexam/public/home.aspx">West Bengal Joint Entrance Exam(WB JEE)</a></h3>
					<h3><a href="http://bitsadmission.com/bitsatmain.aspx">Birla Institute of Technology and Science Aptitude Test(BITSAT)</a></h3>
					<h3><a href="http://www.vit.ac.in/admissions/viteee">Vellore Institute of Technology Engineering Entrance Exam (VITEEE)</a></h3>
					<h3><a href="http://upsee.nic.in/publicinfo/public/home.aspx/">Uttar Pradesh State Entrance Examination (UPSEE)</a></h3>
					<h3><a href="https://mhtcet2017.dtemaharashtra.gov.in/">Maharashtra Health and Technical Common Entrance Test(MHT-CET)</a></h3>
					<h3><a href="http://kea.kar.nic.in/">Karnataka Combined Entrance Test(KCET)</a></h3>
					<h3><a href="http://sche.ap.gov.in/EAMCET/Eamcet/EAMCET_HomePage.aspx">Engineering Agricultural and Medical Common Entrance Test(AP EAMCET)</a></h3>
					<h3><a href="https://www.amrita.edu/admissions/btech-2017">Amrita Engineering Entrance Exam(AEEE)</a></h3>
					<h3><a href="https://manipal.edu/content/mu/lp/manipal-admissions-generic.html?utm_source=google&utm_medium=search&utm_campaign=2017-MU-OET-Search-India&utm_keyword=Mu%20oet&utm_network=Search&utm_content=160352546867&utm_sitetarget=&gclid=Cj0KEQjwzd3GBRDks7SYuNHi3JEBEiQAIm6EI-641xfjpLWg6GBN4sZ_vc_4vuRv-HgqJKcTdBm1adkaAloc8P8HAQ">Manipal University (MU) Online Entrance Test (OET)-MU OET</a></h3>
					<h3><a href="http://nest.lpu.in/engineering/">Lovely Professional University National Entrance & Scholarship Test(LPU NEST)</a></h3>
					<h3><a href="http://www.srmuniv.ac.in/?gclid=Cj0KEQjwzd3GBRDks7SYuNHi3JEBEiQAIm6EI-CuPQuH0HSa4VzqT_lOk672QCdi2-2vgPT3mFllNxMaAkr08P8HAQ">Sri Ramaswami Memorial University Joint Engineering Entrance Examination (SRMJEEE)</a></h3>
					
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