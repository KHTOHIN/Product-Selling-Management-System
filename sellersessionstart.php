<?php
session_start();
?>

<?php
if(isset($_POST['signup']))
	{
		header("location:sellerregistration.php");
	}
else{
	$host = "localhost";
$username = "root";
$password = "";
$db_name = "product";
$table_name = "sellerinformation";

mysql_connect("$host","$username","") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select database");

$sellerusername=$_POST['username'];
$sellerpassword=$_POST['password'];

$sql="select * from $table_name where s_username='$sellerusername' and s_password='$sellerpassword'";

$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1)
{
	$row = mysql_fetch_array($result);
	$_SESSION['taslima'] = $row['s_username'];
	header("location:sellerindexpage.php");
}
else{
	echo "Wrong username or Password";
	header("location:seller.php");
}
}

?>

