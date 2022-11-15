<?php
require('database.php');
?>
<html>
<head>
<title> Gym Register</title>
</head>
<body>
<h1>Update Record</h1>
<?php
$s=$_REQUEST['s'];
switch($s){
case 3:
$ID=$_REQUEST['ID'];
$query = "SELECT * from  gym where ID='".$ID."'"; 
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
$dateofbirth = $_POST["dateofbirth"];
$age = $_POST["age"];
$identificationmark = $_POST["identificationmark"];
$heightandweight=$_POST["heightandweight"];
$bloodgroup=$_POST["bloodgroup"];
$taking_tablets=$_POST["taking_tablets"];
$counselling=$_POST["counselling"];
$slot=$_POST["slot"];
$update="update gym set name='".$name."' ,parents_name='".$parents_name."', gender='".$gender."', address='".$address."',number='".$number."',dateofbirth='".$dateofbirth."' ,age='".$age."' ,identificationmark='".$identificationmark."',,heightandweight='".$heightandweight."',,bloodgroup='".$bloodgroup."',taking_tablets='".$taking_tablets."',counselling='".$counselling."',slot='".$slot."' where ID='".$ID."'";
mysqli_query($conn, $update) or die(mysqli_error());
header("Location:gymdetails.php");
}else {
?>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />

<h2>Register here</h2>
<form id="register" method="post" action="/">
<label>Name:</label>
<br>
<input type="text" name="name" id="name" placeholder="Enter your name" pattern="[a-zA-Z]+$" required value="<?php echo $row['name'];?>">
<br><br>
<label>Parents name:</label>
<br>
<input type="text" name="parents_name" id="name" placeholder="Enter your Parents name" pattern="[a-zA-Z]+$" required value="<?php echo $row['parents_name'];?>">
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
<input type="number" name="number" id="name" placeholder="Enter your number" pattern=".{,11}" required value="<?php echo $row['number'];?>">
<br><br>
<label>Date of Birth:</label>
<br>
<input type="date" name="dateofbirth" id="name" placeholder="Enter your Date of Birth"required value="<?php echo $row['dateofbirth'];?>">
<br><br>
<label>Age:</label>
<br>
<input type="number" name="age"  id="name" placeholder="Enter your age" required value="<?php echo $row['age'];?>">
<br><br>
<label>Identification Mark:</label>
<br>
<input type="text" name="identificationmark" id="name" placeholder="Enter your Identification Mark" required value="<?php echo $row['identificationmark'];?>">
<br><br>
<label>Height and Weight:</label>
<br>
<input type="text" name="heightandweight" id="name" placeholder="Enter your Height and Weight" required value="<?php echo $row['heightandweight'];?>">
<br><br>
<label>Blood Group:</label>
<br>
<input type="text" name="bloodgroup" id="name" placeholder="Enter your Blood Group" required value="<?php echo $row['bloodgroup'];?>">
<br><br>
<label>Taking Any Tablets</label>
<br><br>
<input type="radio" name="taking_tablets" id="Yes"  value="yes" required value="<?php echo $row['taking_tablets'];?>">
<span id="male">Yes</span>
<input type="radio" name="taking_tablets" id="No" value="no" required value="<?php echo $row['taking_tablets'];?>">
<span id="no">No</span>
<br><br>

<label>Slot</label>
<br><br>
<input type="radio" name="slot" id="morning" value="6.00AM to 9.00AM" required value="<?php echo $row['slot'];?>">
<span id="morning">Morning<br>6.00AM to 9.00AM</span>
<br>
<input type="radio" name="slot" id="evening" value="6.15PM to 9.00PM" required value="<?php echo $row['slot'];?>">
<span id="evening">Evening<br>6.15PM to 9.00PM</span>
<br>
<input type="radio" name="slot" id="both" value="Both" required value="<?php echo $row['slot'];?>">
<span id="yes">Evening<br></span>
<p><input name="submit" type="submit" value="Update" /></p>
                      

</form>
</body>
</html>
<?php 
} 
break;
}
?>