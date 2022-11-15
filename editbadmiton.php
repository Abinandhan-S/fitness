<?php
require('database.php');
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
case 2:
$ID=$_REQUEST['ID'];
$query = "SELECT * from  badmiton where ID='".$ID."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ID=$_REQUEST['ID'];
$name = $_POST["name"];
$parents_name = $_POST["parents_name"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$number= $_POST["number"];
$email = $_POST["email"];
$dateofbirth = $_POST["dateofbirth"];
$age = $_POST["age"];
$identificationmark = $_POST["identificationmark"];
$schoolcollege = $_POST["schoolcollege"];
$tournament= $_POST["tournament"];
$slot=$_POST["slot"];
$update="update  badmiton set name='".$name."' ,parents_name='".$parents_name."', gender='".$gender."', address='".$address."',number='".$number."',email='".$email."',dateofbirth='".$dateofbirth."' ,age='".$age."' ,identificationmark='".$identificationmark."',schoolcollege='".$schoolcollege."',tournament='".$tournament."',slot='".$slot."'  where ID='".$ID."'";
mysqli_query($conn, $update) or die(mysqli_error());
header("Location:badmitondetails.php");
}else {
?>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />

<h2></h2>
<form id="register" method="post" action="/">
<label>Name:</label>
<br>
<input type="text" name="name" id="name" placeholder="Enter your name" pattern="[a-zA-Z]+$" required value="<?php echo $row['name'];?>">
<br><br>
<label>Parents name:</label>
<br>
<input type="text" name="parents_name" id="name" placeholder="Enter your Parents name" pattern="[a-zA-Z]+$"  required value="<?php echo $row['parents_name'];?>">
<br><br>
<label>Gender:</label>
<br><br>
<input type="radio" name="gender" id="male" value="male" required value="<?php echo $row['gender'];?>">
<span id="male">Male</span>
<input type="radio" name="gender" id="female" value="female" required value="<?php echo $row['gender'];?>">
<span id="female">Female</span>
<br><br>
<label>Address:</label>
<br>
<input type="text" name="address" id="name" placeholder="Enter your address" required value="<?php echo $row['address'];?>">
<br><br>
<label>Phone Number:</label>
<br>
<input type="number" name="number" id="name" placeholder="Enter your number" required value="<?php echo $row['number'];?>">
<br><br>
<label>Email:</label>
<br>
<input type="email" name="email" id="name " placeholder="Enter your Valid email" required value="<?php echo $row['email'];?>"> 
<br><br>
<label>Date of Birth:</label>
<br>
<input type="date" name="dateofbirth" id="DOB" placeholder="Enter your Date of Birth" required value="<?php echo $row['dateofbirth'];?>">
<br><br>
<label>Age:</label>
<br>
<input type="number" name="age"  id="name" placeholder="Enter your age" required value="<?php echo $row['age'];?>">
<br><br>
<label>Identification Mark:</label>
<br>
<input type="text" name="identificationmark" id="name" placeholder="Enter your Identification Mark" required value="<?php echo $row['identificationmark'];?>">
<br><br>
<label>School/CollegeName:</label>
<br>
<input type="text" name="schoolcollege" id=" name" placeholder="Enter your school/college name" required value="<?php echo $row['schoolcollege'];?>">
<br><br>
<label>Tournment Matches</label>
<br><br>
<input type="radio" name="tournament" id="Willing" value="yes"required value="<?php echo $row['tournament'];?>">
<span id="male">Yes</span>
<input type="radio" name="tournament" id="Unwilling" value="no" required value="<?php echo $row['tournament'];?>">
<span id="no">No</span>
<br><br>
<label>Slot</label>
<br>
<input type="radio" name="slot" id="morning" value="6.00AM to 9.00AM" required value="<?php echo $row['slot'];?>">
<span id="morning">Morning<br>6.00AM to 9.00AM</span>
<br>
<input type="radio" name="slot" id="evening" value="6.15PM to 9.00PM" required value="<?php echo $row['slot'];?>">
<span id="evening">Evening<br>6.15PM to 9.00PM</span>
<br>
<input type="radio" name="slot" id="both" value="Both" required value="<?php echo $row['slot'];?>">
<span id="yes">Both<br></span>

<p><input name="submit" type="submit" value="Update" /></p>
                      

       </form>
<?php 
} 
break;
}
?>