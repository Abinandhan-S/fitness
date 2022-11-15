<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymbadminton";
$conn=mysqli_connect("$servername","$username", "$password", "$dbname") or die("cannot connect");
  $name = $_POST["name"];
  $parents_name = $_POST["parents_name"];
  $gender = $_POST["gender"];
  $address = $_POST["address"];
  $number= $_POST["number"];
  $email=$_POST["email"];
  $dateofbirth= $_POST["dateofbirth"];
  $age = $_POST["age"];
  $identificationmark = $_POST["identificationmark"];
  $schoolcollege =$_POST["schoolcollege"];
  $tournament =$_POST["tournament"];
  $slot =$_POST["slot"];
$sql = "INSERT INTO badmiton(name,parents_name,gender,address,number,email,dateofbirth,age,identificationmark,schoolcollege,tournament,slot) VALUES ('$name','$parents_name','$gender','$address','$number','$email','$dateofbirth','$age','$identificationmark','$schoolcollege','$tournament','$slot')";
$result=mysqli_query($conn,$sql);
    if($result){
        echo"<script>alert('Register successfully');
            window.location='fittness-club.php';</script>";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>