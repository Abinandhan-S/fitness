<?php
session_start();
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
<link rel="stylesheet" href="containers.css">

</head>
<body>

	<header style="HEIGHT:109px;">
  <center><h1>SIVASAKTHI FITNESS</h1></center>

<nav style="HEIGHT:100px;">
  <ul class="nav">
    <li><a href="viewassigntrainer.php">Home</a></li>
    <li><a href="viewassigntrainer.php">Assigned Customer</a></li>
    <li><a href="workout.php">Workout History</a></li>
    <li><a href="attendance.php">Attendance Entry</a></li>
    <li><a href="viewattendancecustomer.php">View Attendance</a></li>
    <li><a href="viewworkout.php">View Workout</a></li>
    <li><a href="index.php">Log Out</a></li>
  </ul>
</nav>
</header>

</body>

<body>

<?php
include('pagetop.php');
?>



<table width="100%" cellspacing="0" cellpadding="0">
<tr><td>
</td>
<td align="center">
	<h2 align="center"><font face="TAHOMA" color="RED ">ATTENDANCE ENTRY</font></h2>
	
			<form action="saveattendance.php" method="post" enctype="multipart/form-data">
			<table align="center" width="500" HEIGHT="400">
				<tr>
					<td align="right">S.No.			<?php
						
							$sql="select count(*) as Records from attendance";
							$res=mysql_query($sql,$con) or die(mysql_error());
								$row = mysql_fetch_array($res);
															$RecNo=$row['Records']+1;
							
					?>
					<td><input name="txtRefNo" value='<?php echo $RecNo ?>'readonly>
</tr>
									
				<tr>
					<td align="right">Customer Id
					<td>
					<select name="cboCustomerId">
					<?php
							$sql="SELECT A.CustomerId,CustomerName FROM Customer A,Assign B Where A.CustomerId=B.CustomerId and B.TrainerId='" . $_SESSION['trainerid'] . "'";
		
							$tot=mysql_query($sql,$con); 
							
							while($row = mysql_fetch_array($tot) )
							{
								
									echo "<option  value='" . $row['CustomerId'] . "'>" . $row['CustomerId'] . ":" . $row['CustomerName'] . "</option>";
									
							}
						?>
						</select>
				</tr>
				
				<tr>
					<td align="right">Entry Date
					<td><input name="txtdate" value='<?php echo date('Y-m-d') ?>'>

				</tr>
<tr>
					<td align="right">Status
					<td>
					<select name="cboStatus">
					<option>Present</option>
					<option>Absent</option>
					</select>

				</tr>
				<tr>
					<td align="right">Details
					<td><input name="txtDetails">

				</tr>

				<tr>
					<td align="center" colspan=2><input type="submit" value="SAVE">
					<input type="reset" value="CLEAR"></td>
				</tr>
			</table>
		</form>
		</td></tr></table>
		

	</body>
</html>
				