<?php
	session_start();
	if(isset($_SESSION['lipa']))
	{
		
	}
	else
	{
		header("location:admin.php");
	}
?>

<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Product Selling System</title>
	<link rel="stylesheet" href="indexpagedesign.css"/> 
	<style>
		#new_div img{
			margin-top: 15px;
		}
		#login_section{
			background: #263C56;
		}
		#login_section div{
			margin-top: -310px;
			text-align: center;
			color: #040262;
			font-family: times new roman;
			font-size: 20px;
		}
	</style>
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
			<li class="HomeButton"><a href="localhost/product/adminindexpage.php"></a></li>
			
			<!-- Account Button -->
			<li><a href="#">PRICE CALCULATOR</a></li>
			
			<!-- Profile Button -->
			<li><a href="http://localhost/product/addproduct.php">ADD PRODUCT</a></li>
				
			
			
			<!--Program button-->
			<li><a href="#">PRODUCT STATUS</a></li>
			<li><a href="http://localhost/product/adminaccountsettings.php">ACCOUNT SETTINGS</a></li>	
			<li><a href="http://localhost/product/sellermonitor.php">SELLER MONITOR</a></li>
			
			<!--Logout button-->
			<li class="right"><a href="http://localhost/product/admin.php">LOGOUT</a></li>
							
			
			
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
		<img src="image/admin1.jpg" width="900" height="325"/>
		<div>
			<h3>Welcome Admin. This is your home page</h3>
		</div>
	</section>
	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>