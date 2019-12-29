<?php
	
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
	
?>