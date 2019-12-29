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
		
		#pricecalculatorsection{
			background: #263C56;
			width: 920px;
			height: 355px;
			margin: 20px auto;
			-webkit-border-radius: 20px;
			border: 5px solid yellow;
			font-weight: bold;
		}
		#pricecalculatorsection article{
			float: left;
			margin-top: 60px;
			margin-left: 115px;
			margin-right: 0px;
			width: 240px;
			background: #147101;
			-webkit-border-radius: 10px;
			border: 1px dotted cyan;
			color: #03F3DF;
		}
		#pricecalculatorsection article h3{
			text-align: center;
			font-family: times new roman;
			margin-top: -12px;
			margin-left: -10px;
			color: yellow;
		}
		#pricecalculatorsection article p{
			text-align: left;
			font-family: times new roman;
			padding: 5px;
		}
		
		#button{
			font-family: times new roman;
			color: yellow;
			font-weight: bold;
			background: green;
			-webkit-border-radius: 7px;	
			margin: 3px;
		}
			#sellerview{
			font-family: times new roman;
			color: blue;
			font-weight: bold;
			-webkit-border-radius: 5px;	
			margin: 3px;
			margin-left: -390px;
			margin-top: 170px;
			background: orange;			
		}
		
	#cp{
			background: #E21524;
	}
	label{
			color: cyan;
			font-family: times new roman;
			font-size: 12px;
			font-weight: bold;
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
			<li class="HomeButton"><a href="http://localhost/product/adminindexpage.php"></a></li>
			
			<!-- Account Button -->
			<li><a href="#">PRICE CALCULATOR</a></li>
			
			<!-- Profile Button -->
			<li><a href="#">ADD PRODUCT</a></li>
				
			
			
			<!--Program button-->
			<li><a href="#">PRODUCT STATUS</a></li>
			<li><a href="#">ACCOUNT SETTINGS</a></li>	
			<li><a href="#">SELLER MONITOR</a></li>
			
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
	<section id="pricecalculatorsection">
	<form action="sellermonitor.php" method="post">
		<article>
			<h3>Delete Seller</h3>
			<hr/>
			<p>Seller Id: &nbsp<input type="text" name="shipment" size="15"/></p>
			
			<input id="button" type="submit" name="submit" value="Delete Record"/>
		</article>
		
		<article>
			<h3>Seller Secret Code</h3>
			<hr/>
			<p>Secret Code: &nbsp<input type="text" name="scode" size="18"/></p>
			
			<input id="button" type="submit" name="submit" value="Confarm"/>
<!--seller code part begin!-->	
<label>
<?php
if(isset($_POST['scode']))
{
	$code=$_POST['scode'];
	$con = mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: '.mysql_error());
	}
	mysql_select_db("product",$con);
	if(mysql_query("insert into secretcode(s_code) values('$code')"))
	{
		echo "Code added successfully";
	}
}
?>
</label>			
<!--seller code part end!-->	

</article>
		
			<input id="sellerview" type="submit" name="codesubmit" value="View Seller List"/>
			
		
			
		</form>
		
	</section>
	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>