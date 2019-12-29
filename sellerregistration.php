<!Doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Product Selling System</title>
	<link rel="stylesheet" href="indexpagedesign.css"/> 
	<style>
		#admin_registration_form{
			background: #070090;
			width: 600px;
			margin: 30px auto;
			margin-top: 20px;			
			-webkit-border-radius: 20px;
			border: 5px solid cyan;
		}
		#admin_registration_form h3{
			font-family: times new roman;
			text-align: center;
			padding: 3px;
			color: #03FD15;	
		}
		#admin_registration_form p{
			font-family: times new roman;
			text-align: left;
			padding: 10px;
			color: #03FD15;
			font-weight: bold;
			margin-left: 80px;
		}
		#admin_registration_form input{
			-webkit-border-radius: 3px;
		}
		#registration{
			font-family: times new roman;
			color: yellow;
			font-weight: bold;
			background: green;
			margin-left: 140px;	
			-webkit-border-radius: 7px;
		}
		nav{
			color: red;
			font-family: times new roman;
			font-weight: bold;
			margin-left: 230px;
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
					<li><a href="#">Admin Section</a></li>
					<li><a href="#">Seller Section</a></li>
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
	
	<section id="registration_section">
	
		<form id="admin_registration_form" action="sellerregistration.php" method="post">
			<h3>Fill Up the Following Fields Carefully</h3>
			<hr/>
			<div>
			<p>National Id: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="nid" size="40" placeholder="Ex: 1995254B25C254"/></p>
			<p>Full Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" size="40" placeholder="Name on National Id"/></p>
			<p>Login Username: &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username" size="40" placeholder="Ex: lipa20"/></p>
			<p>Login Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password" size="40"/></p>
			<p>Phone: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="phone" size="40"/></p>
			<p>Email: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="email" size="40" placeholder="taslima@gmail.com"/></p>
			<p>Permanent Address: <input type="text" name="address" size="40" placeholder="Local Home address"/></p>
			<p>Selling Zone: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="zone">
				<option value=""></option>
				<option value="Dhaka">Dhaka</option>
				<option value="khulna">khulna</option>
			</select></p>			
			<p>Login Code: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="code" size="10"/></p>
			<nav>Contact with your admin for login code</nav>			
			<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="agree"/> I agree with company terms & conditions</p>
			
			<p><input type="submit" id="registration" name="registration" value="Registration"/></p>
			
			</div>
			
<!--file validation code -->			
<?php

if(isset($_POST['registration']))
{
	$nid=$_POST['nid'];
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$zone=$_POST['zone'];
	$code=$_POST['code'];	
	$agree=isset($_POST['agree']);	
	$status = "ok";
	$msg = "";	
		
	if(empty($nid)) 
	{
		$msg .="Please enter your national id number.<br/>";
		$status = "notok";
	}	
	
	if(empty($name))
	{
		$msg .="Please enter your national id name.<br/>";
		$status = "notok";
	}
	
	if(empty($username))
	{
		$msg .="Please enter your login username.<br/>";
		$status = "notok";
	}
	
	if(empty($password))
	{
		$msg .="Please choose your password.<br/>";
		$status = "notok";
	}
	
	if(empty($phone))
	{
		$msg .="Please choose your phone number.<br/>";
		$status = "notok";
	}
	
	if(empty($email))
	{
		$msg .="Please enter your email.<br/>";
		$status = "notok";
	}
	
	if(empty($address))
	{
		$msg .="Please enter your parmanent address.<br/>";
		$status = "notok";
	}
	
	if(empty($zone))
	{
		$msg .="Please enter your zone.<br/>";
		$status = "notok";
	}
	
	if(empty($code))
	{
		$msg .="Please enter a valid secret code.<br/>";
		$status = "notok";
	}
	
	if(empty($agree))
	{
		$msg .="Please select checkbox for agree with terms and conditions.<br/>";
		$status = "notok";
	}	
	
	
	$con = mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: '.mysql_error());
	}
	
	mysql_select_db("product",$con);
	
	
	
	$sql="select s_code from secretcode where s_code='$code'";

$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($status=="ok")
{
	$row = mysql_fetch_array($result);
if($count==1)
{		
	if(mysql_query("insert into sellerinformation(n_id,s_name,s_username,s_password,s_phone,s_email,s_address,s_zone) values('$nid','$name','$username','$password','$phone','$email','$address','$zone')"))
	{	
		mysql_query("delete from secretcode where s_code='$code'");
		echo "<center><font face='times new roman' size='3' color=green><h3>Congratulation $name. Your registration is completed successfully</h3></font></center>";
	}	

}
else{
	echo "<center><font face='times new roman' size='3' color=red>Your secret code is not correct</font></center>";	
}
}
else
	{
		echo "<center><font face='times new roman' size='3' color=red>$msg</font></center>";
	}
}
?>
			
			
			
			
		</form>		
	</section>
	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>