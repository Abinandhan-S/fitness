<html>
<head>
<title>Sivasakthi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="containers.css">
<style>


body,
html {
	display: grid;
	height: 100%;
	width: 100%;
	background-color: rgb(242, 242, 242);
	font-family: 'Roboto', sans-serif;
	color: red;
	font-weight: 700;
	padding: 0;
	margin: 0;
}



.card {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	margin: auto;
	-webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 16, 0.19), 0 0.3rem 0.3rem rgba(0, 0, 16, 0.23);
	box-shadow: 0 0.5rem 1rem rgba(0, 0, 16, 0.19), 0 0.3rem 0.3rem rgba(0, 0, 16, 0.23);
	background-color: rgb(255, 255, 255);
	padding: 2.5rem;
	width: 33rem;
}

.rating-container {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
	padding: 0.9rem 0.8rem;
	width: 100%;
}

.rating-text p {
	color: rgba(0, 0, 16, 0.8);
	font-size: 1.3rem;
	padding: 0.3rem;
}

.rating {
	background-color: rgba(0, 0, 16, 0.8);
	padding: 0.4rem 2rem 0.1rem 0.4rem;
	border-radius: 2.2rem;
}

svg {
	fill: rgb(242, 242, 242);
	height: 3.6rem;
	width: 3.6rem;
	margin: 0.2rem;
}

.rating-form-2 svg {
	height: 3rem;
	width: 3rem;
	margin: 0.5rem;
}

#radios label {
	position: relative;
}

input[type="radio"] {
	position: absolute;
	opacity: 0;
}

input[type="radio"] + svg {
	-webkit-transition: all 0.2s;
	transition: all 0.2s;
}

input + svg {
	cursor: pointer;
}

input[class="super-happy"]:hover + svg,
input[class="super-happy"]:checked + svg,
input[class="super-happy"]:focus + svg {
	fill: rgb(0, 109, 217);
}

input[class="happy"]:hover + svg,
input[class="happy"]:checked + svg,
input[class="happy"]:focus + svg {
	fill: rgb(0, 204, 79);
}

input[class="neutral"]:hover + svg,
input[class="neutral"]:checked + svg,
input[class="neutral"]:focus + svg {
	fill: rgb(232, 214, 0);
}

input[class="sad"]:hover + svg,
input[class="sad"]:checked + svg,
input[class="sad"]:focus + svg {
	fill: rgb(229, 132, 0);
}

input[class="super-sad"]:hover + svg,
input[class="super-sad"]:checked + svg,
input[class="super-sad"]:focus + svg {
	fill: rgb(239, 42, 16);
}

footer {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: end;
	-ms-flex-pack: end;
	justify-content: flex-end;
	text-align: right;
	width: 34.6rem;
	margin: auto;
}

footer p {
	font-size: 1.3em;
}

@media screen and (max-width: 650px) and (max-height: 700px) {
	body,
	html {
		font-size: 0.7rem;
	}
	header h1 {
		font-size: 4em;
	}
	footer p {
		font-size: 2em;
	}
}

@media screen and (max-height: 700px) {
	body,
	html {
		font-size: 0.7rem;
	}
	header h1 {
		font-size: 4em;
	}
	footer p {
		font-size: 2em;
	}
}

@media screen and (max-width: 650px) {
	body,
	html {
		font-size: 0.7rem;
	}
	header h1 {
		font-size: 4em;
	}
	footer p {
		font-size: 2em;
	}
}

@media screen and (max-width: 450px) and (max-height: 550px) {
	body,
	html {
		font-size: 0.6rem;
	}
	header h1 {
		font-size: 4.6em;
	}
	footer p {
		font-size: 3em;
	}
}

@media screen and (max-height: 550px) {
	body,
	html {
		font-size: 0.6rem;
	}
	header h1 {
		font-size: 4.6em;
	}
	footer p {
		font-size: 3em;
	}
}

@media screen and (max-width: 450px) {
	body,
	html {
		font-size: 0.6rem;
	}
	header h1 {
		font-size: 4.6em;
	}
	footer p {
		font-size: 3em;
	}
}

@media screen and (max-width: 400px) and (max-height: 500px) {
	body,
	html {
		height: 500px;
		width: 400px;
	}
}

@media screen and (max-height: 500px) {
	body,
	html {
		height: 500px;
	}
}

@media screen and (max-width: 400px) {
	body,
	html {
		width: 400px;
	}
}
</style>

</head>
<body>
<!-- Start Header  -->
 <?php
include('containershome.php');
?>

<div class="card">
 <form action="https://formspree.io/f/mbjwyzbq " method="POST" id="my-form">
  <div class="rating-container">
    <div class="rating-text">
	 <div class="form-group">
        <label for="firstName" align="center">Name</label>
        <input type="text" id="firstName" name="firstName">
      </div><br>

     

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </div><br>
    
    
    <div class="rating">
      <form class="rating-form">

        <label for="super-happy">
			<input type="radio" name="rating" class="super-happy" id="super-happy" value="super-happy" />
			<svg viewBox="0 0 24 24"><path d="M12,17.5C14.33,17.5 16.3,16.04 17.11,14H6.89C7.69,16.04 9.67,17.5 12,17.5M8.5,11A1.5,1.5 0 0,0 10,9.5A1.5,1.5 0 0,0 8.5,8A1.5,1.5 0 0,0 7,9.5A1.5,1.5 0 0,0 8.5,11M15.5,11A1.5,1.5 0 0,0 17,9.5A1.5,1.5 0 0,0 15.5,8A1.5,1.5 0 0,0 14,9.5A1.5,1.5 0 0,0 15.5,11M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" /></svg>
			</label>

        <label for="happy">
			<input type="radio" name="rating" class="happy" id="happy" value="happy"/>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 24 24"><path d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z" /></svg>
			</label>

        <label for="neutral">
			<input type="radio" name="rating" class="neutral" id="neutral" value="neutral" />
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 24 24"><path d="M8.5,11A1.5,1.5 0 0,1 7,9.5A1.5,1.5 0 0,1 8.5,8A1.5,1.5 0 0,1 10,9.5A1.5,1.5 0 0,1 8.5,11M15.5,11A1.5,1.5 0 0,1 14,9.5A1.5,1.5 0 0,1 15.5,8A1.5,1.5 0 0,1 17,9.5A1.5,1.5 0 0,1 15.5,11M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M9,14H15A1,1 0 0,1 16,15A1,1 0 0,1 15,16H9A1,1 0 0,1 8,15A1,1 0 0,1 9,14Z" /></svg>
			</label>

        <label for="sad">
			<input type="radio" name="rating" class="sad" id="sad" value="sad" />
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="100%" height="100%" viewBox="0 0 24 24"><path d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M15.5,8C16.3,8 17,8.7 17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M12,14C13.75,14 15.29,14.72 16.19,15.81L14.77,17.23C14.32,16.5 13.25,16 12,16C10.75,16 9.68,16.5 9.23,17.23L7.81,15.81C8.71,14.72 10.25,14 12,14Z" /></svg>
			</label>

        <label for="super-sad">
			<input type="radio" name="rating" class="super-sad" id="super-sad" value="super-sad" />
			<svg viewBox="0 0 24 24"><path d="M12,2C6.47,2 2,6.47 2,12C2,17.53 6.47,22 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2M12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20M16.18,7.76L15.12,8.82L14.06,7.76L13,8.82L14.06,9.88L13,10.94L14.06,12L15.12,10.94L16.18,12L17.24,10.94L16.18,9.88L17.24,8.82L16.18,7.76M7.82,12L8.88,10.94L9.94,12L11,10.94L9.94,9.88L11,8.82L9.94,7.76L8.88,8.82L7.82,7.76L6.76,8.82L7.82,9.88L6.76,10.94L7.82,12M12,14C9.67,14 7.69,15.46 6.89,17.5H17.11C16.31,15.46 14.33,14 12,14Z" /></svg>
			</label>
		<br>
        <br>		
     
    </div>
	<br>
	
	<center><button type="submit">Submit</button></center>
  </div><br>
   

      </form>
</div>
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

</body>
</html>