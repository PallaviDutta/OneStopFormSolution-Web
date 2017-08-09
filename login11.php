<?php
      session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body style="background-color:#317AC5;">
  <div id="header" >
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
             <!--  <li>
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
            <a href="login11.php">Login</a>
            <ul class="secondary">
             <!--  <li>
                <a href="singlepost.html">Single post</a>
              </li> -->
            </ul>
          </li>
          
        </ul>
      </div>
    </div>
  <div class="form" style="background-color:#123;">
      
      <ul class="tab-group" >
        <li class="tab active" ><a href="#signup" >Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
         <!--  <h1>Sign Up for Free</h1>
           -->
        

          <form action="register.php" method="POST">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="first" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="last"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          
          <input type="submit" name="signup" value="Register" class="button button-block"/>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="login.php" method="POST">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          
          
          <input type="submit" name="login" class="button button-block" vlaue="Login"/>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

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
          <p>&copy; 2023 BY  One-Stop Form Suggestion| ALL RIGHTS RESERVED</p>
        </div>
      </div>
    </div>    
</body>
</html>
