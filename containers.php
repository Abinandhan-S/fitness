<?php
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

nav {    
    display: block;
    text-align: center;
  }
  nav ul {
    margin: 0;
    padding:0;
    list-style: none;
  }
  .nav a {
    display:block; 
    background: #111; 
    color:#fff; 
    text-decoration: none;
    padding: .8em 1.8em;
    text-transform: uppercase;
    font-size: 80%;letter-spacing: 2px;
    text-shadow: 0 -1px 0 #000;
    position: relative;
  }
  .nav{  
    vertical-align: top; 
    display: inline-block;
    box-shadow: 1px -1px -1px 1px #000, -1px 1px -1px 1px #fff, 0 0 6px 3px #fff;
    border-radius:6px;
  }
  .nav li{position: relative;}
  .nav > li { 
    float:left; 
    border-bottom: 4px #aaa solid; 
    margin-right: 1px; 
  } 
  .nav > li > a { 
    margin-bottom:1px;
    box-shadow:inset 0 2em .33em -.5em #555; 
  }
  .nav > li:hover , .nav > li:hover >a{  border-bottom-color:orange;}
  .nav li:hover > a { color:orange; }
  .nav > li:first-child  { border-radius: 4px 0 0 4px;} 
  .nav > li:first-child>a{border-radius: 4px 0 0 0;}
  .nav > li:last-child  { 
    border-radius: 0 0 4px 0; 
    margin-right: 0;
  } 
  .nav > li:last-child >a{border-radius: 0 4px 0 0; }
  .nav li li a { margin-top:1px}
  
  
  
    .nav li a:first-child:nth-last-child(2):before { 
     content:""; 
     position: absolute; 
     height:0; 
     width: 0; 
     border: 5px solid transparent; 
     top: 50% ;
     right:5px;  
   }
   
   
   
   
   
   /* submenu positioning*/
.nav ul {
  position: absolute;
  white-space: nowrap;
  border-bottom: 5px solid  orange;
  z-index: 1;
  left: -99999em;
}
.nav > li:hover > ul {
  left: auto;
  padding-top: 5px  ;
  min-width: 100%;
}
.nav > li li ul {  border-left:1px solid #fff;}


.nav > li li:hover > ul { 
 /* margin-left: 1px */
  left: 100%;
  top: -1px;
}
/* arrow hover styling */
.nav > li > a:first-child:nth-last-child(2):before { 
  border-top-color: #aaa; 
}
.nav > li:hover > a:first-child:nth-last-child(2):before {
  border: 5px solid transparent; 
  border-bottom-color: orange; 
  margin-top:-5px
}
.nav li li > a:first-child:nth-last-child(2):before {  
  border-left-color: #aaa; 
  margin-top: -5px
}
.nav li li:hover > a:first-child:nth-last-child(2):before {
  border: 5px solid transparent; 
  border-right-color: orange;
  right: 10px; 
}
</style>
</head>
<body>

<nav>
  <ul class="nav">
    <li><a href="adminregister.php">Admin</a></li>
    <li><a href="notify.html">Updates</a></li>
    <li><a href="#">Add </a>
      <ul>
        
        <li><a href="#">Add products</a>
          <ul>
            <li><a href="additem.php">Add Gym Products</a></li>
            <li><a href="addbadmintonitem.php">Add badminton Products</a></li>
            <li><a href="addhealthitem.php">Add Supplement Products</a></li>
            
          </ul>
        </li>
        <li><a href="#">Add Package</a>
          <ul>
            <li><a href="addgympackage.php">Add Gym Package</a></li>
            <li><a href="addbadmintonpackage.php">Add Badminton Package</a></li>
          </ul>
        </li>
        
      </ul>
    </li>
    <li><a href="#">View</a>
      <ul>
        <li><a href="#">View Package</a>
          <ul>
            <li><a href="viewbadmintonpackage.php">View Badminton Package</a></li>
            <li><a href="viewgympackage.php">View Gym Package</a></li>     
          </ul>
        </li>
        <li><a href="#">View Products</a>
          <ul>
            <li><a href="viewbadmintonitem.php">View Badminton Products</a></li>
            <li><a href="viewitem.php">View Gym Products</a></li>
            <li><a href="viewhealthitem.php">View Supplement Products</a></li>
          </ul>
        </li>
        <li><a href="getdatefororderadmin.php">View Order</a></li>
        <li><a href="viewcustomersadmin.php">View Customer</a></li>
        <li><a href="viewtrainersadmin.php">View Trainer</a></li>
        <li><a href="viewassignadmin.php">View Trainer Assigned</a></li>
      </ul>
    </li>
    <li><a href="#">Details</a>
      <ul>
        <li><a href="gymdetails.php">Gym Rgistration Details</a></li>
        <li><a href="badmitondetails.php">Badminton Registration Details</a></li>
        <li><a href="membershipdetails.php">Membership Registration Details</a></li>
        <li><a href="tournamentdetails.php">Solo player Registration</a></li>
        <li><a href="tournament2details.php">Dual player Registration</a></li>
      </ul>
    </li>
    <li><a href="orderapprovaladmin.php">Approve Order</a></li>
    <li><a href="trainer.php">Add Trainer</a></li>
    <li><a href="assigntrainertocustomer.php">Assign Trainer to Customer</a></li>
    <li><a href="index.php">Log Out</a></li>
  </ul>
</nav>

</body>
</html>
?>
