<?php
require('database.php');
if($ID=$_REQUEST['ID'])
{
$ID=$_REQUEST['ID'];
$query = "DELETE FROM  membership WHERE ID=$ID"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: membershipdetails.php"); 
}
?>