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
			margin-left: 20px;
			margin-right: 0px;
			width: 240px;
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
			padding: 5px;
		}
		#pricecalculatorsection article .art2{
			width: 200px;
		}
		#button{
			font-family: times new roman;
	color: yellow;
	font-weight: bold;
	background: green;
	-webkit-border-radius: 7px;	
		}
		#buttonsave{
			font-family: times new roman;
	color: yellow;
	font-weight: bold;
	background: green;
	-webkit-border-radius: 7px;
		margin: 20px;
		margin-left: 100px;
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
			<li class="right"><a href="#">LOGOUT</a></li>
							
			
			
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
	<form action="pricecalculator.php" method="post">
		<article>
			<h3>Count Profit Percentage</h3>
			<hr/>
			<p>Shipment No: &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="shipment" size="15"/></p>
			<p>Buying Price: &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="buyprice" size="15"/></p>
			<p>Predicted Profit: <input type="text" name="profit" size="15"/></p>
		</article>
		
		<article>
			<h3>Count Sellar Comission</h3>
			<hr/>
			<p>Dillar Comission: <select>
				<option value="">00</option>
				<option value="5">5%</option>
				<option value="7">7%</option>
				<option value="10">10%</option>
				<option value="12">12%</option>
				<option value="15">15%</option>
			</select></p>
			<p>Total Profit: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="buyprice" size="12"/></p>
			<input id="button" type="submit" name="submit" value="Profit with Percentage"/>
			
		</article>
		
		<article>
			<h3>Calculating Result</h3>
			<hr/>
			<p>Total Sell Price: &nbsp<input type="text" name="shipment" size="15"/></p>
			<p>Profit Percent: &nbsp&nbsp&nbsp<input type="text" name="buyprice" size="15"/></p>
			<input id="button" type="submit" name="submit" value="Profit Percentage (%)"/>
		</article>
		
		<input id="buttonsave" type="submit" name="submit" value="Save Profit Percentage"/>	
			
		</form>
		<div id="hints">
			<h3>Hints for doing this calculations</h3>
			<hr/>
			<p>To calculate profit %, all 3 fields of count profit parcentage have to fill up</p>
			<p>To calculate profit with percent, also save 3 fields have to fill up</p>
		</div>
	</section>
	
	<div id="the_footer">
		<p id="copyright">Copyright reserved to Product Selling Management System - 2017</p> 
	</div>
</div>	
</body>
</html>