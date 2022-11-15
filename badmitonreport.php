<?php  
//badmitonreport.php  
$connect = mysqli_connect("localhost", "root", "", "gymbadminton");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM badmiton";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <table class="table" bordered="1">
  <tr>
      <th>Name</th>
	  <th>Parentsname</th>
      <th>Gender</th>
      <th>Address</th>
      <th>Mobile</th>
      <th>E-mail</th>
      <th>DOB</th>
      <th>Age</th>
	  <th>Mark</th>
	  <th>Studies</th>
	  <th>Tournament</th>
	  <th>Slot</th>
  </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["name"].'</td>  
						 <td>'.$row["parents_name"].'</td>  
                         <td>'.$row["gender"].'</td>  
                         <td>'.$row["address"].'</td>  
                         <td>'.$row["number"].'</td>  
                         <td>'.$row["email"].'</td>
                         <td>'.$row["dateofbirth"].'</td>
                         <td>'.$row["age"].'</td>
						 <td>'.$row["identificationmark"].'</td>  
					     <td>'.$row["schoolcollege"].'</td>  
					     <td>'.$row["tournament"].'</td>  
						 <td>'.$row["slot"].'</td>  
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=badmitondetails.xls');
  echo $output;
 }
}
?>\