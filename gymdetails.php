<html>
<head>	
<title>registration Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="containers.css">
</head>
<?php
include('containersadmin.php');
?>
<br><br><br><br><br><br><br>
<body>
<h1 align="center">STUDENT DETAILS</h1>
<table style=" width:2000px; height: 1000px; padding:10px; border:1;">
<thead>
<tr>
        <th>S.No</th>
				<th style="text-align:center">name</th>
				<th style="text-align:center">parents_name</th>
				<th style="text-align:center">gender</th>
				<th style="text-align:center">landmark</th>
				<th style="text-align:center">number</th>
				<th style="text-align:center">dateofbirth</th>
				<th style="text-align:center">age</th>
				<th style="text-align:center">identification mark</th>
				<th style="text-align:center">heightandweight</th>
				<th style="text-align:center">bloodgroup</th>
				<th style="text-align:center">taking_tablets</th>
				<th style="text-align:center">slot</th>
                <th>EDIT</th>
                <th>DELETE</th>
</tr>
</thead>
<tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymbadminton";
$conn=mysqli_connect("$servername","$username", "$password", "$dbname") or die("cannot connect");

$count=1;
$select_query="Select * from  gym ";
$result = mysqli_query($conn,$select_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["parents_name"]; ?></td>
<td align="center"><?php echo $row["gender"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["number"]; ?></td>
<td align="center"><?php echo $row["dateofbirth"]; ?></td>
<td align="center"><?php echo $row["age"]; ?></td>
<td align="center"><?php echo $row["identificationmark"]; ?></td>
<td align="center"><?php echo $row["heightandweight"]; ?></td>
<td align="center"><?php echo $row["bloodgroup"]; ?></td>
<td align="center"><?php echo $row["taking_tablets"]; ?></td>
<td align="center"><?php echo $row["slot"]; ?></td>
<td align="center">
<a href="editgym.php?ID=<?php echo $row["ID"];?>&amp;s=3">Edit</a>
</td>
<td align="center">
<a href="deletegym.php?ID=<?php echo $row["ID"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
<div class="wrapper">
<form style="margin-top:14%;margin-bottom:22%;margin-left:80%;"
 method="post" action="gymreport.php">
<input type="submit" name="export" value="Export"/>
</div>
</form>
</body>
</html>