<?php 
include "database.php";
  $CustomerName = $_POST["CustomerName"];
  $Date = $_POST["Date"];
  $Status =$_POST["Status"];
  
$sql = "INSERT INTO attendance(CustomerName,Date,Status) VALUES ('$CustomerName','$Date','$Status')";
$result=mysqli_query($conn,$sql);
    if($result){
        include "attendance.php";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>