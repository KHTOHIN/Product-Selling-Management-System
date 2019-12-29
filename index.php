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
	<section id="main_section">
		<article>
			<img src="image/image1.jpg" height="85px"/>
			<p>Toyota is the world's market leader in sales of hybrid electric vehicles, and one of the largest companies to encourage the mass-market adoption of hybrid vehicles across the globe. Cumulative global sales of Toyota and Lexus hybrid passenger car models achieved the 10 million milestone in January 2017. Its Prius family is the world's top selling hybrid nameplate with over 6 million units sold worldwide as of January 2017.</p>
		</article>
		
		<article>
			<img src="image/image2.jpg" height="85px"/>
			<p>The petroleum industry includes the global processes of exploration, extraction, refining, transporting (often by oil tankers and pipelines), and marketing of petroleum products. The largest volume products of the industry are fuel oil and gasoline (petrol). Petroleum (oil) is also the raw material for many chemical products, including pharmaceuticals, solvents, fertilizers, pesticides, synthetic fragrances, and plastics. </p>
		</article>
	</section>
	
	
	
	<aside id="side_news">
		<h3>Important Links</h3>
		<a href="#"><img src="image/bank.jpg" width="230" height="25"/><br/><p>Bangladesh Bank</p></a></br>
		<a href="#"><img src="image/extock.jpg" width="230" height="25"/><br/><p>Dhaka Extock Exchange</p></a></br>
		<a href="#"><img src="image/business.jpg" width="230" height="25"/><br/><p>World Business Forum</p></a><br/>
		<a href="#"><img src="image/bangladesh.png" width="230" height="25"/><br/><p>Peooples Republic of Bangladesh</p></a>
	</aside>
	</div>
	
	<div id="bottom_3">
		<article> 
		<h3>Business Links</h3>
		<hr/>
		<ul>
		<li>Apple. RepTrack Points</li>
		<li>Sony. RepTrack points</li>
		<li>Canon. RepTrack points</li>
		</ul>
		</article>
		<article>
		<h3>Our Services</h3>
		<hr/>
		<ul>
		<li>Business-Plan Consulting</li>
		<li>Packing and Unpacking Service</li>
		<li>Business-Travel Management</li>
		</ul>
		</article>
		<article>
		<h3>Future Plans</h3>
		<hr/>
		<ul>
		<li>Box subscription services</li>
		<li>Health clubs for millennials</li>
		<li>Mobile consulting</li>
		</ul>
		</article>
		
	</div>
	
	<div id="the_footer">
		<p>Designed By_<a href="https://www.facebook.com/lipa.bhuiyan">Taslima Farhan Lipa</a></p> 
	</div>
</div>	
</body>
</html>