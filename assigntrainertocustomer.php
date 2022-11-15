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



<table width="100%" cellspacing="0" cellpadding="0">
<tr>
<td align="center">
	<h2 align="center"><font face="TAHOMA" color="RED ">ASSIGN TRAINER TO CUSTOMER</font></h2>
	
			<form action="saveassigntrainertocustomer.php" method="post" enctype="multipart/form-data">
			<table align="center" width="500" HEIGHT="400">
				<tr>
					<td align="right">Reference Id
			<?php
						
							$sql="select count(*) as Records from assign";
							$res=mysql_query($sql,$con) or die(mysql_error());
								$row = mysql_fetch_array($res);
															$RecNo=$row['Records']+1;
							
					?>
					<td><input name="txtRefNo" value='<?php echo $RecNo ?>' readonly>
</tr>
									
				<tr>
					<td align="right">Trainer
					<td>
					<select name="cboTrainerId">
					<?php
							$sql="SELECT TrainerId,TrainerName FROM trainer ";
		
							$tot=mysql_query($sql,$con); 
							
							while($row = mysql_fetch_array($tot) )
							{
								
									echo "<option  value='" . $row['TrainerId'] . "'>" . $row['TrainerId'] . ":" . $row['TrainerName'] . "</option>";
									
							}
						?>
						</select>
				</tr>
				<tr>
					<td align="right">Customer
					<td>
					<select name="cboCustomerId">
					<?php
							$sql="SELECT CustomerId,CustomerName FROM customer";
		
							$tot=mysql_query($sql,$con); 
							
							while($row = mysql_fetch_array($tot) )
							{
								
									echo "<option  value='" . $row['CustomerId'] . "'>" . $row['CustomerId'] . ":" . $row['CustomerName'] . "</option>";
									
							}
						?>
						</select>
					</td>
				</td>
				</tr>
				
				
				<tr>
					<td align="right">Category
					<td><select name="cbCategory">
					<option>Gym</option>
					<option>Badminton</option>
					
</select>
</td>
				</tr>
				<tr>
					<td align="right">Entry Date
					<td><input name="txtdate" value='<?php echo date('Y-m-d') ?>'>

				</tr>

				<tr>
					<td align="right">Details
					<td><input name="txtDetails">

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
				