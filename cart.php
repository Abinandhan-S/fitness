<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}



?>
<?php
     $conn = mysqli_connect("localhost", "root", "", "gymbadminton");
		// Check connection
     if($conn === false){
     die("ERROR: Could not connect. ". mysqli_connect_error());}

     $status = "";?> 

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Items Shopping Cart</title>
    <link rel="stylesheet" href="foundation.css" />
    <link rel="stylesheet" href="containers.css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <?php
include('containershome.php');
?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
   $(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")
s
      })      
     
       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){
              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})
</script>

  <body>
<br><br><br>
    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <center><p><h3>Your Shopping Cart</h3></p></center>
        <?php   
          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Item Code</th>';
            echo '<th>Item Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Rate</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {
                $query = "SELECT * from items where itemcode='".$product_id."'"; 

                $result = mysqli_query($conn, $query);

            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->salerate * $quantity; 
                $total = $total + $cost; 

                echo '<tr>';
                echo '<td>'.$obj->itemcode.'</td>';
                echo '<td>'.$obj->itemname.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&itemcode='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&itemcode='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="addorder.php" class="button [secondary success alert]">Add More Items</a> <a href="pay.php" class="button">Buy Now</a>';

          

         

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
          echo '</div>';
          ?>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
