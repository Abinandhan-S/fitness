<?php

	session_start();
?>
<html lang="en">
 <head>
  <title>Order details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
<link rel="stylesheet" href="containers.css">


  <style>
header .ham-burger{
  display: inline-block;
  position:absolute;
  right:150px;
  
  z-index: 100;
}
</style>

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
 <div class="update">
    <?php
     $conn = mysqli_connect("localhost", "root", "", "gymbadminton");
		// Check connection
     if($conn === false){
     die("ERROR: Could not connect. ". mysqli_connect_error());}

     $status = "";
	 include('pagetop.php');
	 ?>    
    <!--header-->
   
       <!--//header//-->  

<!--middle-->
<br><br><br><br><br>
<div class="container-fluid">
 <div class="col-sm-offset-1 col-sm-10"> 
 <form>

 <h1 style="font-family:arvo;font-weight:bolder;font-size:50px;text-align:center;">PRODUCTS</h1>
  
 <br> <br>
 <?php
$count=1;
$sel_query="Select itemcode,itemname,description,category,salerate,filepath,producttype from  items  ORDER BY itemcode desc;";
if(isset($_SESSION['fromsearch']))
{
	if(isset($_SESSION["searchword"]))
	{
		$iname=$_SESSION["searchword"];
		$sel_query="Select itemcode,itemname,description,category,salerate,filepath,producttype from  items Where itemname Like '" . $iname . "%' ORDER BY itemcode desc;";
	
	
	}
	
	else if(isset($_POST['txtItem']))
	{
	$iname= $_POST['txtItem'];
	$_SESSION["searchword"] = $iname;
	$sel_query="Select itemcode,itemname,description,category,salerate,filepath,producttype from  items Where itemname Like '" . $iname . "%' ORDER BY itemcode desc;";
	
	
	}
}

$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-sm-4 form-group">  
                  
<img src="itemimages/<?php echo ($row["filepath"]); ?>" class="img-responsive" alt="" style="height:300px;width:350px;background-size:cover;position:relative;">
<h3 style="font-weight:bolder;color:rgb(76, 76, 80);padding-right:50px;">Rate: <?php echo $row["salerate"];?> <?php echo $row["description"];?></h3>
<h3 style="font-weight:bolder;color:rgb(76, 76, 80);padding-rightt:50px;">Name: <?php echo $row["itemname"]; ?></h3> 
<div class="btn">
                    <div class="w3-container">
  <div class="w3-show-inline-block">
  <div class="w3-bar">
    
   <a class="btn btn-success" href="update-cart.php?action=add&itemcode=<?php echo $row ["itemcode"]?>" style="width:100%;">Buy Now</a>
 
  </div>
  </div>
</div>
</div>
<br><br>
</div>  
<?php $count++; } ?> </form>
</div> </div></div><br><br>
<!--//middle//-->

      

 </body >
</html>