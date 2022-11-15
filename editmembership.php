<?php
require("database.php");
?>
<html>
<head>
<title>Update Record</title>
</head>
<body>
<h1>Update Record</h1>
<?php
$s=$_REQUEST['s'];
switch($s){
case 1:
$ID=$_REQUEST['ID'];
$query = "SELECT * from  membership where ID='".$ID."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ID=$_REQUEST['ID'];
$name = $_POST["name"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$number= $_POST["number"];
$dateofbirth = $_POST["dateofbirth"];
$email = $_POST["email"];
$agelimit = $_POST["agelimit"];
$update="update  membership set name='".$name."', gender='".$gender."', address='".$address."',number='".$number."',dateofbirth='".$dateofbirth."',email='".$email."' ,agelimit='".$agelimit."'where ID='".$ID."'";
mysqli_query($conn, $update) or die(mysqli_error());
$status = "Record Updated Successfully." ;
header("Location:membershipdetails.php");
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />

<form id="register" method="post" action="/">
<label>Name:</label>
<br>
<input type="text" name="name" id="name" placeholder="Enter your name" required value="<?php echo $row['name'];?>">
<br><br>
<label>Gender:</label>
<br><br>
<input type="radio" name="gender" id="male" value="M"required value="<?php echo $row['gender'];?>">
<span id="male">Male</span>
<input type="radio" name="gender" id="female" value="F" required value="<?php echo $row['gender'];?>">
<span id="female">Female</span>
<br><br>
<label>Address:</label>
<br>
<input type="text" name="address" id="name" placeholder="Enter your address" required value="<?php echo $row['address'];?>">
<br><br>
<label>Phone Number:</label>
<br>
<input type="number" name="number" id="name" placeholder="Enter your number" pattern=".{,11}" required value="<?php echo $row['number'];?>">
<br><br>
<label>Date of Birth:</label>
<br>
<input type="date" name="dateofbirth" id="name" placeholder="Enter your Date of Birth" required value="<?php echo $row['dateofbirth'];?>">
<br><br>
<label>Email:</label>
<br>
<input type="email" name="email" id="name" placeholder="Enter your email" required value="<?php echo $row['email'];?>">
<br><br>
<label>Age:</label>
<input type="number" name="agelimit" id="name" placeholder="Enter your age" required value="<?php echo $row['agelimit'];?>">
<br><br>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
</body>
<?php 
} 
break;
}
?>