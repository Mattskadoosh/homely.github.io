<?php

$host="localhost";
$user="root";
$password="";
$db="db_hor";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false){
    die("Conncetion error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username='".$username."' AND password='".$password."'";
    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user"){
        header("location:homepage.php");
    }
    elseif($row["usertype"]=="admin"){
        header("location:admin/home.php");
    }
    else{
        echo"Username or password is incorrect";
    }
}

?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
	<style>
		body{
			background-image: url(Background.jpg);
    		background-repeat: no-repeat;
    		background-attachment: fixed;
    		background-size: cover;
		}
		</style>
<body>
	<!--header-->
    <section id="nav">
		<br>
				<div class="container" >
				<nav class="navbar navbar-expand-lg navbar-light bg-white">
				  <div class="container-fluid">
				    <a class="navbar-brand" href="#">
				    	<img src="photo/Homepage/Logo.png" style="height: 58px">
				    </a>
			</div>
			</section>
    <!--header-->
	<div class = "container">
		<br />
		<br />
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					<h4>Login</h4>
				</div>
				<div class = "panel-body">
					<form method = "POST">
						<div class = "form-group">
							<label>Username</label>
							<input type = "text" name = "username" class = "form-control" required = "required" />
						</div>
						<div class = "form-group">
							<label>Password</label>
							<input type = "password" name = "password" class = "form-control" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "login" class = "form-control btn btn-primary"><i class = "glyphicon glyphicon-log-in"> Login</i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
	<br />
	<br />
</body>
</html>