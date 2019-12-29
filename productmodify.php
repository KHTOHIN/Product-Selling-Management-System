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
		#productstatussection article{
			float: left;
			margin-top: 60px;
			margin-left: 100px;
			margin-right: 0px;
			width: 700px;
			background: #C402E1;
			-webkit-border-radius: 10px;
			border: 1px dotted #03FF2C;
			color: #03F3DF;
		}
		#productstatussection article h3{
			text-align: center;
			font-family: times new roman;
			margin-top: -12px;
			margin-left: -10px;
			color: yellow;
		}
		#productstatussection article p{
			text-align: center;
			font-family: times new roman;
			padding: 5px;
		}
		#productstatussection article .art2{
			width: 200px;
		}
		
		#button{
			font-family: times new roman;
	color: yellow;
	font-weight: bold;
	background: green;
	-webkit-border-radius: 7px;
	margin-left: 300px;
	
		}
	#hints{
		background: #5BD3C9;
			width: 850px;
			height: 80px;
			margin: 10px auto;
			-webkit-border-radius: 10px;
			border: 1px solid blue;
			font-weight: bold;
			margin-top: -15px;
			text-align: center;
			color: red;
			font-family: times new roman;
	}	
	#hints h3{
		color: #9D079F;
	}	
	#search{
		font-family:times new roman;
		color: red;
		margin-left: 370px;	
		background: orange;
		margin-top: 220px;
		margin-right: 365px;
	}
	#sell{
		margin-left: 390px;
		margin-top: 10px;
	}
	table{
		background: white;
		weight: bold;
		width: 500px;
		margin-left: 250px;
		text-align: center;
		font-family: times new roman;
	}
	table th{
		color: green;
	}
	
	
		
	</style>
</head>

<body>

<div id="big_wrapper">
	<header id="top_header">
		<h1>Product Selling Management System</h1>
	</header>
	<marquee><?php include"notification.php"?></marquee>
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
	<form action="productmodify.php" method="post">
	
		<article>
			<h3>Product Status</h3>
			<hr/>
			<p>Product id&nbsp&nbsp  : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="id" size="30"/></p>
			<p>Product Name: &nbsp&nbsp&nbsp&nbsp<input type="text" name="name" size="30"/></p>
			<p>Product Price: &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="price" size="30"/></p>	
		<input  id="button" type="submit" name="view" value="View Product"/>
		<input  id="button" type="submit" name="sell" value="Sell Product"/>			
		</article>
		<?php
	if(isset($_POST['view']))
	{
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: '.mysql_error());
	}
	
	mysql_select_db("product",$con);
	
	$result=mysql_query("select * from productinformation");
	
	echo "<table border=1>
			<tr>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Price</th>
			</tr>";
	while($row=mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['p_id']."</td>";		
		echo "<td>".$row['p_name']."</td>";
		echo "<td>".$row['p_price']."</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	
	mysql_close($con);
	}
?>

<?php
	if(isset($_POST['sell']))
	{
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die('Could not connect: '.mysql_error());
	}
	mysql_select_db("product",$con);
	$id=$_POST['id'];
	$name=$_POST['name'];
	$price=$_POST['price'];	
	
	$date=date("d/m/Y");
	$comission="";
	if($date<3)
{
	$comission = $price*.15;	
}

else if($date<6)
{
	$comission = $price*.12;	
}

else if($date<9)
{
	$comission = $price*.10;	
}
else if($date<12)
{
	$comission = $price*.08;	
}
else if($date<15)
{
	$comission = $price*.06;	
}

else
{
	$comission = $price*.05;
}
		
	if(mysql_query("insert into comission(pr_id, pr_name,pr_price, pr_comission) values('$id','$name','$price','$comission')"));
	{	
		
	}
	
	$result=mysql_query("select * from comission");
	
	echo "<table border=1>
			<tr>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Comission</th>
			</tr>";
	while($row=mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['pr_id']."</td>";		
		echo "<td>".$row['pr_name']."</td>";
		echo "<td>".$row['pr_price']."</td>";
		echo "<td>".$row['pr_comission']."</td>";
		echo "</tr>";
	}
	
	echo "</table>";
	
	mysql_query("delete from productinformation where p_id='$id'");
	
	mysql_close($con);
	}
?>
		
		
		</form>
		
		
	
	</p>
		
	</section>

	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>

