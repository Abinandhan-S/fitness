<?php
require('database.php');
if($ID=$_REQUEST['ID'])
{
$ID=$_REQUEST['ID'];
$query = "DELETE FROM  tournament2 WHERE ID=$ID"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: tournament2details.php"); 
}
?>