<?php
$date=date("d/m/Y");
if($date<3)
{
	echo "<center><font face='times new roman' size='3' color=white>Your current commission rating is 15%. Carry on and Earn a lot</font></center>";	
}

else if($date<6)
{
	echo "<center><font face='times new roman' size='3' color=white>Your current rating goes down to 12%. Hurry up!</font></center>";	
}

else if($date<9)
{
	echo "<center><font face='times new roman' size='3' color=white>Your current rating is now 10%. Carry on and Earn a lot</font></center>";	
}
else if($date<12)
{
	echo "<center><font face='times new roman' size='3' color=white>Your current rating is 8%. Rating is important for you</font></center>";	
}
else if($date<15)
{
	echo "<center><font face='times new roman' size='3' color=white>Your current rating is top lowest 6%. 3 days left for rating dismiss</font></center>";	
}

else
{
	echo "<center><font face='times new roman' size='3' color=white>Sorry! You have no rating now you get 5% comission for every product</font></center>";
}
?>