<?php 
session_start();
ob_start();?>
<html>
<head>
<title>Order Details</title>
<head>
  <title>Order details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" href="containers.css">
  </head>
 
</head>
<?php
include('containershome.php');
?>

<body id="bdy"  style='background-color:#fff'>
<?php
include('pagetop.php');
?>
<div class="update">
    <?php
     $conn = mysqli_connect("localhost", "root", "", "gymbadminton");
		// Check connection
     if($conn === false){
     die("ERROR: Could not connect. ". mysqli_connect_error());}

     $status = "";?>
	
	  
	  </td>
	  <td>
<br><br>
<?php
		 $total=0;
				$mailbody="";
        $conn = mysqli_connect("localhost", "root", "", "gymbadminton");
        if($conn == false){
                    die("ERROR: Could not connect. ". mysqli_connect_error());
                }
				 echo "<br/><br/><br/><table border='0' width='900' height='200'>";
				 echo "<tr><th style='background-color:white;color:black;font-size:18px;'>Item Code</td>";
				 echo "<th style='background-color:white;color:black;font-size:18px;'>Item Name</td>";
				 echo "<th style='background-color:white;color:black;font-size:18px;'>Quantity</td>";
				 echo "<th style='background-color:white;color:black;;font-size:18px;'>Rate</td></tr>";
				
				$mailbody=$mailbody ."<br/><br/><br/><br/><br/><table border='0' width='500' height='200'  style='color:black'>";
				 $mailbody=$mailbody ."<tr><th style='background-color:white;color:black;font-size:18px;'>Item Code</td>";
				 $mailbody=$mailbody ."<th style='background-color:white;color:black;font-size:18px;'>Item Name</td>";
				 $mailbody=$mailbody ."<th style='background-color:white;color:black;font-size:18px;'>Quantity</td>";
				 $mailbody=$mailbody ."<th style='background-color:white;color:black;font-size:18px;'>Rate</td></tr>";
				
				
				$qry = "SELECT max(OrderNo) Cnt from orderdetails";
				 $result = mysqli_query($conn, $qry);
				 $row = $result->fetch_object();
				
				$cnt=$row->Cnt+1;
				foreach($_SESSION['cart'] as $product_id => $quantity)
				     {
                $query = "SELECT * from items where itemcode='".$product_id."'"; 
                $result = mysqli_query($conn, $query);
            if($result){

              if($obj = $result->fetch_object()) {
				  
				  
                $result = mysqli_query($conn, $query);
				  
                $cost = $obj->salerate * $quantity; 
                $query1 ="Insert into orderdetails values('" . $cnt . "','" . date('y-m-d') . "','".$_SESSION['customerid'] . "','" . $product_id . "','" . $quantity
				  . "','" . $obj->salerate . "','" . $cost . "','Pending')";
				  mysqli_query($conn,$query1);
				  
				  
				$total = $total + $cost; 

                echo '<tr>';
                echo '<td>'.$obj->itemcode.'</td>';
                echo '<td>'.$obj->itemname.'</td>';
                echo "<td >".$quantity.'</td>';
                echo "<td >".$cost."</td>";
                echo "</tr>";
				
				      }
			}
			
			}
			?>
			<?php
			  echo "<tr><td style='background-color:white;color:black;font-size:18px;'>Total Cost</td><td style='background-color:white;color:black;font-size:18px;' colspan='3' align='right'>" . $total . "</td></tr>";
			  echo "<tr><td colspan='2' align='left' style='background-color:white;color:black;font-size:18px;'><h2>Order Details Saved.</h2></td></tr></table>";
			  $mailbody=$mailbody ."<tr><td style='background-color:white;color:black;font-size:18px;'>Total Cost</td><td style='background-color:white;color:black;font-size:18px;' colspan='3' align='right'>" . $total . "</td></tr>";
			  $mailbody=$mailbody ."<tr><td colspan='2' align='left' style='background-color:white;color:black;font-size:18px;'><h2>Order Details is being processed.</h2></td></tr></table>";
			  ?>
			  	
      
      
     
	
	
	</td></tr></table>
				</form></body></html>
				
				
				
