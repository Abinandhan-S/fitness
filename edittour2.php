<?php
require('database.php');
?>
<html>
<head>
<title> </title>
</head>
<body>
<h1>Update Record</h1>
<?php
$s=$_REQUEST['s'];
switch($s){
case 5:
$ID=$_REQUEST['ID'];
$query = "SELECT * from  tournament2 where id='".$ID."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$fnamep1 = $_POST["fnamep1"];
$lnamep1 = $_POST["lnamep1"];
$genderp1 = $_POST["genderp1"];
$addressp1 = $_POST["addressp1"];
$numberp1= $_POST["numberp1"];
$emailp1 = $_POST["emailp1"];
$dobp1 = $_POST["dobp1"];
$agep1 = $_POST["agep1"];
$myfilep1 = $_POST["myfilep1"];

$update="update tournament2 set fnamep1='".$fnamep1."' ,lnamep1='".$lnamep1."', genderp1='".$genderp1."', addressp1='".$addressp1."',numberp1='".$numberp1."',emailp1='".$emailp1."',dobp1='".$dobp1."' ,agep1='".$agep1."' ,myfilep1='".$myfilep1."' where ID='".$ID."'";
mysqli_query($conn, $update) or die(mysqli_error());
header("Location:tournament2details.php");
}else {
?>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<h2>Register here</h2>
<form id="register" method="post" action="">
<label>Firstname</label>
<br><br>
<input type="text" name="fname" id="name"pattern="[a-zA-Z]+$" required value="<?php echo $row['fnamep1'];?>">
<br>
<br>
<label>Lastname</label>
<br><br>
<input type="text" name="lname" id="name"  pattern="[a-zA-Z]+$" required value="<?php echo $row['lnamep1'];?>"> 
<br><br>
<label>Gender</label>
<br><br>
<input type="radio" name="gender" id="male" value="male" required value="<?php echo $row['genderp1'];?>">
<span id="male">Male</span>
<input type="radio" name="gender" id="female" value="female" required value="<?php echo $row['genderp1'];?>">
<span id="female">Female</span>
<br><br>
<label>Address</label>
<br>
<input type="address" name="address" id="name" placeholder="Enter your address" required value="<?php echo $row['addressp1'];?>">
<br><br>
<label>Phone Number</label>
<br>
<input type="number" name="number" id="name" placeholder="Enter your number" required value="<?php echo $row['numberp1'];?>">
<br><br>
<label>Email</label>
<br>
<input type="email" name="email" id="name" placeholder="Enter your Valid email" required value="<?php echo $row['emailp1'];?>">
<br><br>
<label>Date of Birth</label>
<br>
<input type="date" name="dob" id="DOB" placeholder="Enter your Date of Birth" required value="<?php echo $row['dobp1'];?>">
<br><br>
<label>Age</label>
<br>
<input type="number" name="age"  id="name" placeholder="Enter your age" required value="<?php echo $row['agep1'];?>">
<label>Player picture</label>
<br><br>
<input type="file" id="myfile" name="myfile" multiple required>

<br><br>
<p><input name="submit" type="submit" value="Update" /></p>
</form>

<?php
$s=$_REQUEST['s'];
switch($s){
case 6:
$ID=$_REQUEST['ID'];
$query = "SELECT * from  tournament2 where id='".$ID."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$number= $_POST["number"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$age = $_POST["age"];
$myfile = $_POST["myfile"];

$update="update tournament2 set fname='".$fname."' ,lname='".$lname."', gender='".$gender."', address='".$address."',number='".$number."',email='".$email."',dob='".$dob."' ,age='".$age."' ,myfile='".$myfile."' where ID='".$ID."'";
mysqli_query($conn, $update) or die(mysqli_error());
header("Location:tournament2details.php");
}else {
?>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<h2>Register here</h2>
<form id="register" method="post" action="">
<label>Firstname</label>
<br><br>
<input type="text" name="fname" id="name"pattern="[a-zA-Z]+$" required value="<?php echo $row['fname'];?>">
<br>
<br>
<label>Lastname</label>
<br><br>
<input type="text" name="lname" id="name"  pattern="[a-zA-Z]+$" required value="<?php echo $row['lname'];?>"> 
<br><br>
<label>Gender</label>
<br><br>
<input type="radio" name="gender" id="male" value="male" required value="<?php echo $row['gender'];?>">
<span id="male">Male</span>
<input type="radio" name="gender" id="female" value="female" required value="<?php echo $row['gender'];?>">
<span id="female">Female</span>
<br><br>
<label>Address</label>
<br>
<input type="address" name="address" id="name" placeholder="Enter your address" required value="<?php echo $row['address'];?>">
<br><br>
<label>Phone Number</label>
<br>
<input type="number" name="number" id="name" placeholder="Enter your number" required value="<?php echo $row['number'];?>">
<br><br>
<label>Email</label>
<br>
<input type="email" name="email" id="name" placeholder="Enter your Valid email" required value="<?php echo $row['email'];?>">
<br><br>
<label>Date of Birth</label>
<br>
<input type="date" name="dob" id="DOB" placeholder="Enter your Date of Birth" required value="<?php echo $row['dob'];?>">
<br><br>
<label>Age</label>
<br>
<input type="number" name="age"  id="name" placeholder="Enter your age" required value="<?php echo $row['age'];?>">
<label>Player picture</label>
<br><br>
<input type="file" id="myfile" name="myfile" multiple required>

<br><br>
<p><input name="submit" type="submit" value="Update" /></p>

</form>
</body>
</html>
<?php 
{
break;
}
?>