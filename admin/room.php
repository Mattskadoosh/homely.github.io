<!DOCTYPE html>
<?php
	require_once 'validate.php';
	require 'name.php';
?>
<html lang = "en">
	<head>
	<link rel = "stylesheet" href = "../css/homepage.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
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
	<style>
		.btn{
			color: white;
    		background-color: #00b4d8;
		}
		.btn:hover{
			border-color: #0077b6;
    		color: white;
    		background: #03badfb6;
		}
		.btn-warning{
			background-color: orange;
		}
		.btn-warning:hover{
			background-color: rgba(255, 166, 0, 0.822);
		}
		.btn-danger{
			background-color: red;
		}
		.btn-danger:hover{
			background-color: rgba(255, 0, 0, 0.678);;
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
				<div class = "alert alert-info">Transaction / Room</div>
				<a class = "btn" href = "add_room.php"><i class = "glyphicon glyphicon-plus"></i> Add Room</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
							<th>Room Type</th>
							<th>Price</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$query = $conn->query("SELECT * FROM `room`") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
					?>	
						<tr>
							<td><?php echo $fetch['room_type']?></td>
							<td><?php echo $fetch['price']?></td>
							<td><center><img src = "../photo/<?php echo $fetch['photo']?>" height = "50" width = "50"/></center></td>
							<td><center>
							<a class = "btn btn-warning" href = "edit_room.php?room_id=<?php echo $fetch['room_id']?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> 
							<a class = "btn btn-danger" onclick = "confirmationDelete(this); return false;" href = "delete_room.php?room_id=<?php echo $fetch['room_id']?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
</html>