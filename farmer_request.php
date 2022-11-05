
<?php 
@include 'config.php';
if(session_id() == ''){
	session_start();
}
if(isset($_SESSION['admin_name'])){
	 
} else {
	echo "<script> location.href='login_form.php'</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>farmer_request</title>
	
	<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	
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
		<div class="col-sm-4">
			<?php 
				$query = "SELECT problem_id, farmername, problem, time, date FROM submit_problem Order by problem_id DESC";
				$result = mysqli_query($conn, $query);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo '<div class="card mt-4 mx-1">';
						 echo '<div class="card-header">';
						  echo 'Problem ID: '. $row['problem_id'];
					    echo '</div>';
					    echo '<div class="card-body">';
					     echo '<h5 class="card-title">Farmer Name: ' .$row['farmername'];
					     echo '</h5>';
						 echo '<p class="card-text">Problem: '.$row['problem'];
						 echo '</p>';
						echo '<p class="card-text">Request Date: ' .$row['date'];
						 echo '</p>';
						echo '<div class="float-right">';
						 echo '<form action="" method="POST">';
						 echo '<input type="hidden" name="id" value='.$row["problem_id"].'>';
						  
						echo '<input type="submit" class="btn btn-danger mr-3 " name="aprove" value="Aprove">';
						 echo '<input type="submit" class="btn btn-secondary" value="Close" name="close">';
						echo '</form>';
						echo '</div>';
					    echo '</div>';
					   echo '</div>';
					
					}
				}
				?>
			
	<?php
	if(isset($_REQUEST['aprove'])){
		if(($_REQUEST['problem_id'] == "") || ($_REQUEST['farmername'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['problem'] == "") || ($_REQUEST['fieldnumber'] == "") || ($_REQUEST['area'] == "") || ($_REQUEST['city'] == "") || ($_REQUEST['state'] == "") || ($_REQUEST['mobile'] == "") || ($_REQUEST['time'] == "") || ($_REQUEST['date'] == "")){
		$msg = "<div class= 'alert alert-warning col-sm-6 ml-3 mt-2'>Fill All Fields</div>";
	} else{
		$problem_id = $_REQUEST['problem_id'];
		$farmername = $_REQUEST['farmername'];
		$email = $_REQUEST['email'];
		$problem = $_REQUEST['problem'];
		$fieldnumber = $_REQUEST['fieldnumber'];
		$area = $_REQUEST['area'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$mobile = $_REQUEST['mobile'];
		$time = $_REQUEST['time'];
		$date = $_REQUEST['date'];
		
	$query = "INSERT INTO submit_problem(problem_id, farmername, email, problem,fieldnumber, area, city, state, mobile, time, date) VALUES('$problem_id', '$farmername', '$email', '$problem','$fieldnumber', '$area', '$city', '$state', '$mobile', '$time', '$date')";
			
			if(mysqli_query($conn, $query) == TRUE){
				$msg = '<div class="alert alert-success col-sm-4 ml-5 mt-5">Request Approved</div>';
			} else{
				$msg = '<div class="alert alert-danger col-sm-4 ml-8 mt-2">Unable to Approved Request</div>';
			}
		
		}
	}
	if(isset($_REQUEST['close'])){
		$query = "DELETE FROM submit_problem where problem_id ={$_REQUEST['id']}";
		if(mysqli_query($conn, $query) == TRUE){
			echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
		} else{
			echo "Unable to Delete";
		}
	}
	
	?>
		
				<?php if (isset($msg)){ echo $msg;} ?>
	
		
		</section>		
				
	
			
	
</body>
</html>
