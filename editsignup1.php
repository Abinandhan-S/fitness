<?php
require("database.php");
?>
<html>
<head>
<title>Update Record</title>
<link rel="Stylesheet" type="text/css" href="style.css"/>
<link href="table.css" rel="stylesheet" media="all" />
</head>
<body>
<h1>Update Record</h1>
<?php
$s=$_REQUEST['s'];
switch($s){
case 4:
$ID=$_REQUEST['ID'];
$query = "SELECT * from  signup1 where ID='".$ID."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ID=$_REQUEST['ID'];
$username = $_POST["username"];
$email = $_POST["email"];
$number = $_POST["number"];
$update="update  signup1 set username='".$username."', email='".$email."',number='".$number."' where ID='".$ID."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully." ;
header("Location:signupdetails.php");
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div class="update">
<table><tr>
<th>USERNAME</th>
<th>EMAIL</th>
<th>NUMBER</th>
</tr>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />
<tr>
<td><p><input type="text" name="username" placeholder="username" required value="<?php echo $row['username'];?>" /></p></td>
<td><p><input type="email" name="email" placeholder="Email" required value="<?php echo $row['email'];?>" /></p></td>
<td><p><input type="number" name="number" placeholder="number" required value="<?php echo $row['number'];?>" /></p></td>
</tr>
</table>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
</div>
<?php 
} 
break;
}
?>