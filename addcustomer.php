<?php
	$con = mysql_connect("localhost","root",'');
	mysql_select_db("gymbadminton", $con);
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css"></link>
<link rel="stylesheet" type="text/css" href="index1.css"></link>
<style>
.oddrow{
	/* background-color:#d1fab4;*/
}
.evenrow{
	/* background-color:#d1fa84;*/
}
</style>
</head>
<script languge="javascript">
function check()
{
validatenumber();
if(document.f1.txtPass.value.length<3)
{
alert('Password Length minimum 3 characters');
document.f1.txtPass.focus();
return;
}
else
{
document.f1.submit();
}
}
function validatenumber()
{
if(IsNumeric(document.f1.txtMobile.value)==false)
{
alert('Please Check Phone No.');
document.f1.txtmobile.focus();
return;
}

}

function IsNumeric(sText)

{
   var ValidChars = "0123456789.";
   var IsNumber=true;
   var Char;

 
   for (i = 0; i < sText.length && IsNumber == true; i++) 
      { 
      Char = sText.charAt(i); 
      if (ValidChars.indexOf(Char) == -1) 
         {
         IsNumber = false;
         }
      }
   return IsNumber;
   
   }


</script>
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

</head>
<body style="background-color:red;">
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
				<li><a href="CustomerLogin.php">Customer Login</a></li>
 	 		</ul>
 	 	</div>
		
		
 	 </div>
 </header>

<?php
include('pagetop.php');
?>
<br><br><br><br><br>
<table width="100%">
<tr><td align="center" valign="top">
	<h1 style="color:#fff" align="center"><font face="TAHOMA" >CUSTOMER REGISTRATION</font></h1>
	
			<form name="f1" action="savecustomer.php" method="post">
		<table align="center" width="500"  HEIGHT="400">
					<tr class='oddrow'>
					<td align="right">Customer Id


					<td><?php
						
							$sql="select count(*) as Records from customer" ;
							$res=mysql_query($sql,$con) or die(mysql_error());
								$row = mysql_fetch_array($res);
							
								$RecNo=($row['Records']+1);
							
					?>

<input name="custId" value='<?php echo $RecNo ?>' readonly>

				</tr>
					<tr class='evenrow'>
					<td align="right">Name of Customer
					<td><input name="customername">
				</tr>
		
				
			<tr class='evenrow'>
					<td align="right">Address
					<td><textarea name="txtAddress" value=''></textarea>
				</tr>
					
					
					<td align="right">Mobile
					<td><input name="txtMobile">
				</tr>	<tr class='oddrow'>
					<td align="right">E-Mail Id
					<td><input name="txtMail">
				</tr>
			<tr class='evenrow'>
					<td align="right">Password
					<td><input type="password" name="txtPass">
				</tr>

				<br><br>
				<center><h3><b>Don't Forget your CustomerID</b></h3></center>
				<br><br>

					<tr class='oddrow'>
					<td align="center" colspan=2><input type="button" value="Save" onclick="check()">
					<input type="reset" value="Clear"></td>
				</tr>
			</table>
		</form>
		</td></tr></table>
	</body>
</html>
				