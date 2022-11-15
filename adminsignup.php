<?php 
include "database.php";
  $username = $_POST["username"];
 
  $password = $_POST["password"];
  
$sql = "INSERT INTO admin(username,password) VALUES ('$username','$password')";
$result=mysqli_query($conn,$sql);
    if($result){
        include "adminregister.php";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>