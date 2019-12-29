<?php
	session_start();
	if(isset($_SESSION['taslima']))
	{
		
	}
	else
	{
		header("location:seller.php");
	}
?>

<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Product Selling System</title>
	<link rel="stylesheet" href="indexpagedesign.css"/> 
	<style>
		
		#productstatussection{
			background: url("image/productstatus2.jpg");
			width: 950px;
			height: 355px;
			margin: 10px auto;
			-webkit-border-radius: 20px;
			border: 5px solid yellow;
			font-weight: bold;
		}
		
		
		#productstatussection h3{
			
			text-align: center;
			color: white;
			margin-top: 100px;
			font-family: times new roman;
			font-size: 25px;
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
			<li><a href="http://localhost/product/productmodify.php">PRODUCT STATUS</a></li>
			
			<!-- Profile Button -->
			<li><a href="#">ACCOUNT SETTINGS</a></li>
			
			<!--Logout button-->
			<li class="right"><a href="http://localhost/product/seller.php">LOGOUT</a></li>
							
			
			
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
	<section id="productstatussection">
		
		
		
			<h3>Seller Section<br/>This is the home page</h3>
		
		
	</section>
	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>