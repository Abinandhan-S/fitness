<?php
	$con = mysql_connect("localhost","root",'');
	mysql_select_db("gymbadminton", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	//$sql="select * from Stock";
	//$sql="select A.ItemCode,A.ItemName,Sum(Quantity) as Quantity,Photo Items A,Items B,Stock C Where A.CategoryId=B.CategoryId and B.ItemCode=C.ItemCode Group By C.ItemCode";

	//$rs= mysql_query($sql,$con);
	//echo "<html>
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Fitness website</title>
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="containers.css">
<style>
.oddrow{
	 background-color:#d1fab4;
}
.evenrow{
	 background-color:#d1fa84;
}
</style>
</head>
<?php
include('containersadmin.php');
?>

<body style="background-color:#fff" >
<?php
include('pagetop.php');
?>
<?php
echo "<center>";
echo "<form name=f1 method=post action=viewordersadmin.php>";


echo "	<table align='center' cellspacing='0' cellpadding='0' width='100%' border='0'>";
echo "			<tr><td>";
echo "</td>";
			

echo "<td valign='top' align='center'>";
	echo "<h2 align=center><font face='TAHOMA' color=White>ORDERDATE</font></h2>";
	
	echo "<table border=0 width='200' cellpadding='1' cellspacing='0'>";
?>



<tr><td>Order Date From</td><td><input type=text name='txtFromDate' value='<?php echo date('Y-m-d'); ?>'></td></tr>
<tr><td>Order Date To</td><td><input type=text name='txtToDate' value='<?php echo date('Y-m-d'); ?>'></td></tr>
<tr><td colspan=2 align=center><input type=submit value=Show></td></tr>
<?php

	echo "</table></td></tr></table></center></form></body></html>";
	mysql_close($con);
?>