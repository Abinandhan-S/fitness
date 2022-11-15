<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Fitness website</title>
  <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="index1.css">
	<style>
header .ham-burger{
	display: inline-block;
	position:absolute;
	right:150px;
	
	z-index: 100;
}
</style>

</head>
<body style="background-color:darkgoldenrod;">


<br/>
 <header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">SIVASAKTHI <span>FITNESS</span></a>
 	 	</div>
		<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="index.php">Home</a></li>	
				<li><a href="trainerlogin.php">Trainer Login</a></li>
				<li><a href="CustomerLogin.php">Customer Login</a></li>
			    <li><a href="AdminLogin.php">Admin Login</a></li>

 	 			
 	 		</ul>
 	 	</div>
		
		
 	 </div>
 </header>
 
 <center>
 	<br><br><br><br>
<h1 style="color:white" align="center">ADMIN LOGIN</h1>


<form action="AdminLoginCheck.php" method="POST">
<center>
<br/>
<br>
<table width="100%"><tr>
<td align='center'>

			<table align="center" style="background-color:#000;width:600px;color:white" border="1">
			<tr>
			<td  rowspan='3' align='center'>
			
			<img src='images/adminlogin.jpg' width='300' height='200'/>
			</td>
			
				
				</tr>
				<tr class='oddrow'>
				
				
					<td>User Name<td align='center'><input name="txtUser">
				<tr class='evenrow' required>
					<td >Password<td align='center'><input type="password" name="txtPass" required>
				<tr class='oddrow'>
					<td colspan="3" align="center"><input type="submit" value="Admin Login"> 
			</table>
			</center>
		</form>

<!-- jquery -->
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

</script>
</body>
</html>
