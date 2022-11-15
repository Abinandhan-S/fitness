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
	
	$sql="SELECT Count(*) As Records FROM admin Where UserName='" . $User . "' and Password='"  . $Pass ."'" ;

	$tot=mysql_query($sql,$con); 

		$row = mysql_fetch_array($tot);
		
		
	if( $row['Records']==1)
{
$_SESSION["usertype"]="admin";





		header('location:adminregister.php');
}
	else
		echo "Invalid UserName/Password.<br><input type=button value=back onclick='history.back()'><br>";
	
?>