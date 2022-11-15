<?php   
$connect = mysqli_connect("localhost", "root", "", "gymbadminton");
$output = '';
if(isset($_POST["export"]))
{
	
	$FromDate=$_REQUEST["txtFromDate"];
$ToDate=$_REQUEST["txtToDate"];
 $query = "SELECT * FROM attendance where Date from Between '" . $FromDate . "' and '" . $ToDate . "'" ;
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <table class="table" bordered="1">
  <tr>
     
      <th>Customer Name</th>
      <th>date</th>
      <th>Status</th>
     
	  </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         
                         <td>'.$row["CustomerName"].'</td>  
                         <td>'.$row["Date"].'</td>
                         <td>'.$row["Status"].'</td>
						 
    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Attendancelist.xls');
  echo $output;
 }
}
?>\