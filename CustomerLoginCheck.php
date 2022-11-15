<?php
session_start();
	$User=$_POST["txtUser"];
	$Pass=$_POST["txtPass"];
	
	$con = mysql_connect("localhost","root",'');
	mysql_select_db("gymbadminton", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	
	$sql="SELECT Count(*) As Records FROM Customer Where CustomerId='" . $User . "' and Password='"  . $Pass ."'" ;

	$tot=mysql_query($sql,$con); 

	$row = mysql_fetch_array($tot);
		
		
	if( $row['Records']==1)
{
$_SESSION["customerid"]=$User;
$_SESSION["userid"]=$User;
$_SESSION["usertype"]="customer";
$_SESSION["username"]=$User;

$sql="SELECT EMailId FROM Customer Where CustomerId='" . $User . "' and Password='"  . $Pass ."'" ;

	$tot=mysql_query($sql,$con); 

		$row = mysql_fetch_array($tot);
		$_SESSION["emailid"]=$row['EMailId'];
		if(isset(  $_SESSION['cart']))
		{
		  unset($_SESSION['cart']);
		}
		header('location:fittness-club.php');
}
	else
		echo "Invalid Customer Id/Password.<br><input type=button value=back onclick='history.back()'><br>";
	
?>