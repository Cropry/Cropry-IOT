<?php 
@include 'config.php';
session_start();
if(isset($_SESSION['admin_name'])){
	 
} else {
	echo "<script> location.href='login_form.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title>CropryIot Dashboard </title>
	
	<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
	<link href="css/bootstrap-4.4.1.css">
	
	
	<link rel="stylesheet" href="css/adminstyle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
		  
</head>
	
<body>
	<section id="menu">
	<div clas="logo">
		<img src="images/lo.png" alt="" >
		<h2 style="color: aliceblue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CropryIot </h2>
		
		</div>
	<div class="items">
		<li><i class="far fa-chart-pie"></i><a href="#">Dashboard</a></li>
		<li><i class="far fa-farm"></i><a href="farmer_request.php">Farmer Request</a></li>
		<li><i class="far fa-hand-holding-seedling"></i><a href="expert_request.php">Expert Request</a></li>
		<li><i class="far fa-sign-out-alt"></i><a href="index.php">Logout</a></li>
		</div>
	</section>
	
	<section id="interface">
		<div class="navigation">
			<div class="n1">
				<div class="search">
					<i class="far fa-search"></i>
					<input type="text" placeholder="Search"
				</div>
			</div>
				<div class="profile">
					<i class="far fa-bell">
					</i>
					<img src="images/profile.png" alt="">
					</a>
				
					</div>
					
				
				</div>
				
				
		</div>
	<h3 class="i-name"> 
		Dashboard
			</h3>
			<div class="values">
				<div class="val-box">
					<i class="fas fa-users"></i>
					<div>
	<?php
						require 'config.php';
						$query = "SELECT id FROM user_form Order By id" ;
						$query_run = mysqli_query($conn, $query);
						
						$row = mysqli_num_rows($query_run);
						
						echo'<h1>'.$row .'</h1>'

       ?>
						<span>Total Users</span>
					</div>
				
				</div>
				<div class="val-box">
					<i class="fas fa-user-alt"></i>
					<div>
	<?php
						require 'config.php';
						$query = "SELECT * FROM `user_form` WHERE `user_type` like 'admin'" ;
						$query_run = mysqli_query($conn, $query);
						
						$row = mysqli_num_rows($query_run);
						
						echo'<h1>'.$row .'</h1>'

       ?>
						<span>Total Admins</span>
					</div>
				
				</div>
			
				<div class="val-box">
					<i class="fas fa-farm"></i>
					<div>
		<?php
						require 'config.php';
						$query = "SELECT * FROM `user_form` WHERE `user_type` like 'farmer' ";
						$query_run = mysqli_query($conn, $query);
						$row = mysqli_num_rows($query_run);
						
						  echo'<h1>'.$row .'</h1>';
					
						
						

       ?>
						<span>Total Farmers</span>
					</div>
				
				</div>
				
				<div class="val-box">
					<i class="fas fa-hand-holding-seedling"></i>
					<div>
		<?php
						require 'config.php';
						$query = "SELECT * FROM `user_form` where `user_type` like 'expert' " ;
						$query_run = mysqli_query($conn, $query);
						
						$row = mysqli_num_rows($query_run);
						
						echo'<h1>'.$row .'</h1>'

       ?>
						<span>Total Experts</span>
					</div>
				
				</div>
				
				</div>
	<h3 class="i-name"> 
		Sensor Live Data
			</h3>
	<div class="row">
		<div class="col-md-6 align-center font-size-40px">
			<div class="table-responsive">
				<table class="table table-border table-striped custom-table" style="text-align: center;
    margin: 20px;
    margin-left: 300px;
    font-size: 20px;
    width: 25%;" >
					<thead>
						<tr>
							<th style=" padding: 10px;">param</th>
                             <th >value</th>
						</tr>
					</thead>
					<tbody>
						<?php
                         include 'connection.php';
                          $selectquery = " select * from data ";
                          $query = mysqli_query($conn,$selectquery);
                          $nums = mysqli_num_rows($query);
                          while($res = mysqli_fetch_array($query))
						  {
                           ?>
						<tr>
							<td ><?php echo $res['param'];?></td>
                            <td s><?php echo $res['value'];?></td>
                          </tr>
						<?php
						  }
                           ?>
					</tbody>
			</body>
				</html>