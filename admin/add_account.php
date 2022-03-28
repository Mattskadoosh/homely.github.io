<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
	<link rel = "stylesheet" href = "../css/homepage.css">
	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
	<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
	</head>
	<style>
		.form-control{
			align-items: center;
		}
		.panel-body{
			margin: auto;
  			width: 50%;
  			padding: 10px;
			font-size: 1.6rem;
			display: grid;
			place-items: center;
			min-height: 200px;
			padding: 1rem;
		}
		</style>
<body>
	<!--header-->
    <section id="nav">
		<br>
				<div class="container">
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
				  <ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a style = "color: black;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
				</nav>
			</div>
			</section>
    <!--header-->
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Account / Create Account</div>
				<br />
				<div class = "col-md-4 my-auto">	
					<form method = "POST">
						<div class = "form-group">
							<label>Name </label>
							<input type = "text" class = "form-control" name = "name" />
						</div>
						<div class = "form-group">
							<label>Username </label>
							<input type = "text" class = "form-control" name = "username" />
						</div>
						<div class = "form-group">
							<label>Password </label>
							<input type = "password" class = "form-control" name = "password" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "add_account" class = "btn btn-info form-control"><i class = "glyphicon glyphicon-save"></i> Saved</button>
						</div>
					</form>
					<?php require_once 'add_query_account.php'?>
				</div>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
</html>