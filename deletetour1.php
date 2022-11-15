<?php
require('database.php');
if($ID=$_REQUEST['ID'])
{
$ID=$_REQUEST['ID'];
$query = "DELETE FROM  tournament WHERE ID=$ID"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: tournamentdetails.php"); 
}
?>