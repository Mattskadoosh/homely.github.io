<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
	<title>Homepage</title>
        <link rel = "stylesheet" href = "../css/homepage.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
		<!--fonts-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@700&display=swap" rel="stylesheet"> 
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
<body>
	<!--header-->
    <section id="nav">
		<br>
				<div class="container" >
				<nav class="navbar navbar-expand-lg navbar-light bg-white">
				  <div class="container-fluid">
				    <a class="navbar-brand" href="#">
				    	<img src="../photo/Homepage/Logo.png" style="height: 58px">
				    </a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarSupportedContent">

				      <ul class="navbar-nav nav nav-pills w-100" style="justify-content: flex-end">
				        <li class="nav-item"> 
				          <button type="button" class="btn btn-outline-success"><a href = "home.php">Home</a></button>
				        </li>
				       <li class="nav-item"> 
				          <button type="button" class="btn btn-outline-success"><a href = "reserve.php">Reservations</a></button>
				        </li>

				         <li class="nav-item"> 
				          <button type="button" class="btn btn-outline-success"><a href = "room.php">Room</a></button>
				        </li>
						<li class="nav-item"> 
				          <button type="button" class="btn btn-outline-success"><a href = "account.php">Accounts</a></button>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>
			</div>
			</section>
    <!--header-->
    <!--body-->    
	<div class="hero-image">
        <div class="container">
                    <div class="col-lg-6 col-sm-8">
                           <br><br><br><br><br><br><br><br><br><br><br>
						   <h1 class="title"><b>HOMELY</b></h1>
                        <br><br>
                     <h2 class="lead" style="font-size: 30px;"><b>We are happy to inform you that finding a 
						hotel has never been easy with Homely. Homely is a hotel reservation website that lets
						you explore different hotels in the Clarksville, South Tanglewood area. 
					 </b></h2>
                        <br>
					<br>
					<a class="btnn" href="reservation.php">RESERVE NOW</a>
                    </div>
    </div>
</div>

    <!--body--> 
	<!--footer-->
	<div class="p-3 mb-2 text-dark" style="background-color: #caf0f8;">
		<footer  class="text-center text-lg-start text-dark">
		  <section class="d-flex justify-content-between p-4">
		  </section>
		  <section class="">
			<hr>
		   <div class="container text-center text-md-start mt-5">
		  <!-- Grid row -->
			  <div class="row mt-3">
			<!-- Grid column -->
			<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
			  <!-- Content -->
			  <h6 class="text-uppercase fw-bold">HOMELY</h6>
			  <hr
				  class="mb-4 mt-0 d-inline-block mx-auto"
				  style="width: 60px; background-color: #7c4dff; height: 2px"
				  />
			  <p>
				Home is always with us
			  </p>
			</div>
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
			  <h6 class="text-uppercase fw-bold">About HOMELY</h6>
			  <p>
				<a href="" class="text-dark">Rest, relax, and enjoy</a>
			  </p>
			  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: white; height: 2px"/>
			  <div data-aos="fade-up">
				<p>
					<a href="" class="text-dark">We're we do the hotel hunting for you</a>
				  </p>
			  </div>
			</div>
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
			  <h6 class="text-uppercase fw-bold">Experience HOMELY</h6>
			  <hr
				  class="mb-4 mt-0 d-inline-block mx-auto"
				  />
				  <div>
					<a href="" class="text-dark">Rooms</a>
				  </div>
			</div>
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
			  <h6 class="text-uppercase fw-bold">Contact</h6>
			  <hr class="mb-4 mt-0 d-inline-block mx-auto">
				  <p>
				  
				  HOMELY HOTEL
				  <br>
				  490 South Tanglewood, Clarksville, TN 37040
				  <br>
				  United States of America
				  <br>
				  Email: HomelyHotel@gmail.com
				  <br>
				  Trunkline: (02) 8281 8888
			  </p>
			</div>
		  </div>
		</div>
	  </section>
	  <div class="text-center p-4">
		<br>
		<img class="footerlogo" src="../photo/Homepage/Logo.png" height="50">
	</a>
	  </div>
	</footer>
  </div>
	<!--footer--> 
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>