<?php
	$con = mysql_connect("localhost","root",'');
	mysql_select_db("gymbadminton", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
?><!DOCTYPE html>
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


<table width="100%">
<tr>
<td align="center">
	<h2 align="center"><font face="TAHOMA" color="RED ">BADMINTON PACKAGE ENTRY</font></h2>
	
			<form action="savebadmintonpackage.php" method="post" enctype="multipart/form-data">
				<table align="center" width="500"  HEIGHT="400">
				<tr>
					<td align="right">Package Id
			<?php
						
							$sql="select count(*) as Records from badmintonpackages";
							$res=mysql_query($sql,$con) or die(mysql_error());
								$row = mysql_fetch_array($res);
															$RecNo=$row['Records']+1;
							
					?>
					<td><input name="txtItemCode" value='<?php echo $RecNo ?>' readonly>
</tr>
									
				<tr>
					<td align="right">Package Name/Title
					<td><input name="txtItemName">
-				</tr>
				
				
				<tr>
					<td align="right">Gender
					<td><select name="cbCategory">
					<option>Male</option>
					<option>Female</option>
					<option>Male/Male</option>
					<option>Female/Female</option>
					<option>Combine</option>
					
</select>
</td>
				</tr>
				<tr>
					<td align="right">Description/Timings
					<td><input name="txtDesc">

				</tr>

				<tr>
					<td align="right">Rate/Month
					<td><input name="txtSaleRate">

				</tr>

				
				<tr>
				</tr>
				<tr>
				</tr>
				<tr>
				</tr>
<tr>
			</tr>
				<tr>
				</tr>
				<tr>
		</tr>
		
		
		<tr>
				</tr>
				<tr>
				</tr>
				<tr>
				</tr>
				<tr>
					<td align="center" colspan=2><input type="submit" value="SAVE">
					<td align="center" colspan=2><input type="reset" value="CLEAR"></td>
				</tr>
			</table>
		</form>
		</td></tr></table>
	</body>
</html>
				---------