<?php
	session_start();
	session_unset();
	session_destroy();
?>

<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Product Selling System</title>
	<link rel="stylesheet" href="indexpagedesign.css"/> 
</head>

<body>

<div id="big_wrapper">
	<header id="top_header">
		<h1>Product Selling Management System</h1>
	</header>
	<marquee>Good!</marquee>
	<!-- Tag coding start -->
	<div id="footer">
		<ul id="footer_menu">
			<li class="HomeButton"><a href="http://localhost/product/"></a></li>
			
			<!-- Account Button -->
			<li><a href="#">ABOUT</a>
				<ul class="dropup">
					<li><a href="#">Company Information</a></li>
					<li><a href="#">Chairman Message</a></li>
					<li><a href="#">Dillar Section</a></li>
					<li><a href="#">Future Plan</a></li>
				</ul>
			</li>
			
			<!-- Profile Button -->
			<li><a href="#">CURRENT PRODUCT</a>
				
			</li>
			
			<!--Program button-->
			<li><a href="#">CONTACT</a>
				
			</li>
			
			<!--Logout button-->
			<li class="right"><a href="#">LOGIN SECTION</a>
				<ul class="dropup">
					<li><a href="http://localhost/product/admin.php">Admin Section</a></li>
					<li><a href="http://localhost/product/seller.php">Seller Section</a></li>
				</ul>			
			</li>
			
		</ul>
		
		<ul id="notifications">
			<li><a href="#" class="notificationIcons"><img src="image/twiter.jpg" height="32px" /></a></li>
			<li><a href="#" class="notificationIcons"><img src="image/chat.png" height="32px" /></a></li>
			<li><a href="#" class="notificationIcons"><img src="image/facebook.ico" height="32px" />
				
			</a></li>
		</ul>
	</div>
	
	<!-- tag coding end-->
	<div id="new_div">
	
	<section id="login_section">
	
		<form id="admin_login_form" action="adminloginsessionstart.php" method="post">
			<h3>Admin Login Form</h3>
			<hr/>
			<div>
			<p>Username: <input type="text" name="username" /></p>
			<p>Password&nbsp: <input type="password" name="password" /></p>
			<p><input type="submit" id="adminsubmit" name="Login" value="Login"/></p>
				<section>
					<img src="image/key.png"/>
				</section>
			</div>
		</form>		
	</section>
	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>