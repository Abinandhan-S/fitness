<?php
	$con = mysql_connect("localhost","root",'');
	mysql_select_db("gymbadminton", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
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


<table width="100%">
<tr>
<td align="center">
	<h2 align="center"><font face="TAHOMA" color="RED ">SUPPLEMENT PRODUCT ENTRY</font></h2>
	
			<form action="savehealthitem.php" method="post" enctype="multipart/form-data">
			<table align="center" width="500"  HEIGHT="400">
				<tr>
					<td align="right">Product Id
			<?php
						
							$sql="select count(*) as Records from items";
							$res=mysql_query($sql,$con) or die(mysql_error());
								$row = mysql_fetch_array($res);
															$RecNo=$row['Records']+1;
							
					?>
					<td><input name="txtItemCode" value='<?php echo $RecNo ?>' readonly>
</tr>
									
				<tr>
					<td align="right">Product Name
					<td><input name="txtItemName">
				</tr>
				
				
				<tr>
					<td align="right">Category
					<td><select name="cbCategory">
					<option>EnergyDrink</option>
					<option>BodyMass</option>
					<option>VitaminTablets</option>
					<option>Syrup</option>
</select>
</td>
				</tr>
				<tr>
					<td align="right">Description
					<td><input name="txtDesc">

				</tr>

				<tr>
					<td align="right">Sales Rate
					<td><input name="txtSaleRate">

				</tr>

					<tr>
						<td align="right">Upload File
					<td><input type="file" name="txtFile">

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
				