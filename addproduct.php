
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
			margin-top: 20px;
			margin-left: 190px;
			width: 500px;
			background: #C402E1;
			-webkit-border-radius: 10px;
			border: 1px dotted #03FF2C;
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
			padding: 7px;
			margin-left: 80px;
		}
				
		#button{
			font-family: times new roman;
	color: yellow;
	font-weight: bold;
	background: green;
	-webkit-border-radius: 7px;
		margin-top: 22px;
		margin-left: 20px;
		}
		#sellprice{
			font-family: times new roman;
	color: yellow;
	font-weight: bold;
	background: green;
	-webkit-border-radius: 7px;
	margin-top: -100px;
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
	<form action="addproduct.php" method="post">
		<article>
			<h3>Product Monitoring Section</h3>
			<hr/>
			<p>Product Name:&nbsp&nbsp<input type="text" name="name" size="30"/></p>
			
			<p>Selling Price: &nbsp&nbsp&nbsp&nbsp<input type="text" name="price" value="" size="15"/></p>
			<p>Seller Name: &nbsp&nbsp&nbsp&nbsp<select name="seller">
			<option value=""></option>
			<option value="Israt">Israt</option>
			<option value="Mowsumi">Mowsumi</option>
			</select></p>			
			<?php
	if(isset($_POST['add']))
	{
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: '.mysql_error());
	}
	mysql_select_db("product",$con);
	$name=$_POST['name'];
	$price=$_POST['price'];
	$seller=$_POST['seller'];
	
		
	if(mysql_query("insert into productinformation(p_name,p_price,seller) values('$name','$price','$seller')"));
	{
		
		echo "Data insert successfully";
	}
	
	mysql_close($con);
	}
	
?>
			
		</article>
		<input id="button" type="submit" name="add" value="Add Product"/>	
		<input id="button" type="submit" name="view" value="View Product"/>
		<input id="button" type="submit" name="modify" value="Modify Product"/>	
		<input id="button" type="submit" name="update" value="Update Product"/>	
		<input id="button" type="submit" name="delete" value="Delete Product"/>	
			
	
	
		</form>
		
	</section>
	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>