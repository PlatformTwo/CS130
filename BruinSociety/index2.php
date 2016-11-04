<?php
session_start()
?>

<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<title>
Yomer-Stylish Landing Page Template
</title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->

</head>

<body>

<div class="nav">
		    <div>

            <h1 style="float:left; margin-right:40px; padding:20px; color:	#F0F8FF;"> Bruin Society </h1>

            </div>
		<ul class="menu">
		<li class="btMenu">
		<a href="javascript:void(0)">MENU</a></li>
		
		<div style= 'text-align:right'>
		<font color="white">
		<h4> Welcome, <?php echo $_SESSION['user_email']; /*$_SESSION['user_name'];*/ ?> </h4>
		<h4><a href="profile.php"> Profile </a> </h4> </font> </div> 
 		<li class="menuItem"><a href="index2.php">Home</a></li>
		<li class="menuItem"><a href="#whychose">Functions</a></li>
		<li class="menuItem"><a href="#mission">Mission</a></li>
		<li class="menuItem"><a href="#about">Features</a></li>
<!--		<li class="menuItem"><a href="login.php">Register</a></li>-->
<!--		<li class="menuItem"><a href="login.php">Login</a></li>-->
		<li class="menuItem"><a href="http://my.ucla.edu/">Contact us</a></li>
		<button name="login">Sign-out</button> 
		</ul>
<!--    <link rel="stylesheet" href="styles/css_login.css" media="all"/>-->
<!--
    <form method="post" action="" id="form1">
                    <strong><font color="white"><b>Email: </b></font></strong>
         
                <input type ="email" name="u_email" placeholder="Email" required="required"/>
                    
        <strong><font color="white"><b>Password: </b></font></strong>
                    <input type="password" name="u_pass" placeholder="********" required="required"/>
                <button name="login">Login</button>  
                 
                </form>
-->
		</div>
  
  <!-- WRAPPER STARTS HERE-->
<div class='wrapper'>


<!-- ABOUT US STARTS HERE-->
<!--
<section class='register'>
<div>
    <td>
    <?php
//main page that connects different components 
//Author Sepideh Hashemzadeh
//session_start();
//include ("functions/functions.php");
//
//include ("template/content.php");
//
//include("CheckLogin.php");
//session_start();
//include ("functions/functions.php");
?></td>
    </div>

</section>
-->
<section class='aboutus' id='about'>
<div class='container'>
<div class="row">
                <div class="col-md-12 yomer-text-center">
                    <h2 style="margin:50px;">Dashboard</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-share" href="application.html" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Share</a>
                    <h3>Create Society</h3>
                    <small>Tools</small>
                    <p>
					<a href="subclass/application.html"></a>
                        Create a new Society here for your major or your Club -- UCLA Student Commputy website
                    </p>
                    <p>
                        <a class="link-more" href="#">Learn More</a>
                    </p>
                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-follow" href="subclass/join.html" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Follow</a>
                    <h3>Join Society</h3>
                    <small>Tools</small>
                    <p>
                     Join the exist Society -- UCLA Student Commputy website
                    </p>
                    <p>
                        <a class="link-more" href="subclass/message">Learn More</a>
                    </p>
                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-market" href="#" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Market</a>
                    <h3>Message</h3>
                    <small>Tools</small>
                    <p>
                       Check and reply your message here -- UCLA Student Commputy website
                    </p>
                    <p>
                        <a class="link-more" href="#">Learn More</a>
                    </p>
                </div>
                <div class="col-md-3 yomer-text-center">
                    <a class="icon-widget icon-recommend" href="subclass/discussion.html" data-scroll-reveal="wait 0.25s, then enter top and move 70px over 1s">Recommend</a>
                    <h3>Discussion</h3>
                    <small>Content Tools</small>
                    <p>
                        You can discussion with everyone here and the discussion will stay forever -- UCLA Student Commputy website
                    </p>
                    <p>
                        <a class="link-more" href="#">Learn More</a>
                    </p>
                </div>                
            </div>

</div>

</section>

	
	
	
	<!-- FOOTER STARTS HERE-->


            </div>
        </div>
        <!-- content area ends-->








        
       
