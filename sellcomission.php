<?php
	$date=date("d/m/Y");
	$price=100000;
	$id;
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

echo "$price<br/>$comission";












?>