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
			margin-top: 80px;
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
		
	#cp{
		background: #E21524;
	}
	#pricecalculatorsection article label{
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
			<li><a href="#">SELLER MONITORING</a></li>
			
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
	<form action="adminaccountsettings.php" method="post">
		<article>
			<h3>Update Username</h3>
			<hr/>
			<p>New Username: &nbsp<input type="text" name="username1" size="15"/></p>
			<p id="cp">Current Password &nbsp&nbsp&nbsp<input type="password" name="password1" size="15"/></p>
			<input id="button" type="submit" name="updateusername" value="Confarm"/>
<label>
<!-- Username update code start-->
<?php

if(isset($_POST['updateusername']))
{
	$username=$_POST['username1'];
	$password=$_POST['password1'];
	$con = mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: '.mysql_error());
	}
	
	mysql_select_db("product",$con);
	
	if(mysql_query("update admin set a_username='$username' where a_password='$password'"))
	{
		if($res = mysql_query("select * from admin where a_username='$username'"))
		{
			if(mysql_fetch_array($res)!=null){echo "Username Update Successfully";}
			else{echo "Wrong Password";}
		}
	}
	
	mysql_close();
}
?>
<!-- Username update code end-->
</label>
</article>
		
		<article>
			<h3>Update Password</h3>
			<hr/>
			<p>New Password: &nbsp<input type="password" name="username2" size="15"/></p>
			<p id="cp">Current Password &nbsp&nbsp&nbsp<input type="password" name="password2" size="15"/></p>
			<input id="button" type="submit" name="updatepassword" value="Confarm"/>
<label>
<!-- Username update code start-->
<?php

if(isset($_POST['updatepassword']))
{
	$newpassword=$_POST['username2'];
	$oldpassword=$_POST['password2'];
	$con = mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: '.mysql_error());
	}
	
	mysql_select_db("product",$con);
	
	
	if(mysql_query("update admin set a_password='$newpassword' where a_password='$oldpassword'"))
	{
		if($res = mysql_query("select * from admin where a_password='$newpassword'"))
		{
			if(mysql_fetch_array($res)!=null){echo "Password Update Successfully";}
			else{echo "<font color=yellow>Wrong Password</font>";}
		}
		
	}
	
	mysql_close();
}
?>
<!-- Username update code end-->
</label>
		</article>
		</form>
		
	</section>
	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>
