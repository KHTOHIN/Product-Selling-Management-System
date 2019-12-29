<?php
session_start();
?>

<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "product";
$table_name = "admin";

mysql_connect("$host","$username","") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select database");

$myusername=$_POST['username'];
$mypassword=$_POST['password'];

$sql="select * from $table_name where a_username='$myusername' and a_password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1)
{
	$row = mysql_fetch_array($result);
	$_SESSION['lipa'] = $row['a_username'];
	header("location:adminindexpage.php");
}
else{
	echo "Wrong username or Password";
	header("location:admin.php");
}
?>