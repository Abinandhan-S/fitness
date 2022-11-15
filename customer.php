<?php
	$con = mysql_connect("localhost","root",'');
	mysql_select_db("electronics", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
?>
<html>
<head><link rel="stylesheet" type="text/css" href="styles.css"></link>
<style>
.oddrow{
	 background-color:#d1fab4;
}
.evenrow{
	 background-color:#d1fa84;
}
</style>

</head>
<body>
<table border="0" width="100%">
<tr>
<td><?php include('pagetop.php')?>
<?php include('menugeneraltop.php')?>
</td>
</tr>
</table>

<table width="100%">
<tr><td>

</td><td align="center">
	<h1 align="center"><font face="TAHOMA" >Customer Registration</font></h1>
	
			<form action="savecustomer.php" method="post">
			<table align="center" border='1' width="500" style='border-radius:10px;padding:10px;background-color:#abf7e2' > 
				<tr class='evenrow'>
					<td align="right">Customer Id


					<td><?php
						
							$sql="select count(*) as Records from customer" ;
							$res=mysql_query($sql,$con) or die(mysql_error());
								$row = mysql_fetch_array($res);
							
								$RecNo=($row['Records']+1);
							
					?>

<input name="custId" value='<?php echo $RecNo ?>'>

				</tr>
				<tr  class='oddrow'>
					<td align="right">Customer Name
					<td><input name="customername">
				</tr>
				<tr class='evenrow'>
					<td 
align="right">Street
					<td><input name="street">
				</tr>
				
				<tr class='oddrow'>
					<td align="right">Address
					<td><textarea name="txtAddress" value=''></textarea>
				</tr>
				<tr class='evenrow'>
					<td align="right">City
					<td><input name="txtCity">
				</tr><tr class='oddrow'>
					<td align="right">PinCode
					<td><input name="txtPin">
				</tr>
			<tr	class='evenrow'>
					<td align="right">Phone
					<td><input name="txtPhone">
				</tr><tr class='oddrow'>
					<td align="right">Mobile
					<td><input name="txtMobile">
				</tr><tr class='evenrow'>
					<td align="right">E-Mail Id
					<td><input name="txtMail">
				</tr>
				<tr class='oddrow'>
					<td align="right">Password
					<td><input type="password" name="txtPass">
				</tr>
				<tr>
					<td align="center" colspan=2><input type="submit" value="Save">
					<input type="reset" value="Clear"></td>
				</tr>
			</table>
		</form>
		</td></tr></table>
	</body>
</html>
				