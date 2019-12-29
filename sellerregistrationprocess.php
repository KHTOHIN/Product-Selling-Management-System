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
		echo "<center><font face='times new roman' size='3' color=green>Congratulation $name. Your registration is completed successfully</font></center>";
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