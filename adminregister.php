<html>
<head> 
<title>Admin register </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="containers.css">
</head>
<?php
include('containersadmin.php');
?>
<br>
<body style="background-color:#fff; margin-left:500;margin-right:400;width:50%; height:105%;">
<form method="post" action="adminsignup.php">
<br><br><br><br><br><br><br><br>
<center><h1>Admin</h1></center>
<center><input type="text" name="username" placeholder="username" required></center>
<br>
<br>
<center><input type="password" name="password" placeholder="Password" id="password" pattern="(?=.[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one uppercase and lowercase letter, and at least 6 or more characters"/required></center>
  
  <br>
  <br>
  <center><button name="submit" type="Submit" id="submit" >Update</button><br></center>
</form>
</body>
</div>
</html>
