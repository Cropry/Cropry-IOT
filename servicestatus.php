<?php 
@include 'config.php';
session_start();
if(isset($_SESSION['farmer_name'])){
	
	 
} else {
	echo "<script> location.href='login_form.php'</script>";
}


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Service Status</title>
	<link rel="stylesheet" href="css/bootstrap-4.4.1.css">
</head>

<body>
	
	<?php include 'sidenavbar.php' ?>
	<div class="col-sm-6 mt-5 mx-3">
		<form action="" method="post" class="form-inline ">
		<div class="form-group mr-3">
			<label for="checkid">Enter Request ID: &nbsp;&nbsp;  </label>
			<input type="number" class="form-control" name="checkid" id="checkid">
			</div>
		<button type="submit" class="btn btn-danger">Search</button>
			
		</form>
		<?php
	if(isset($_REQUEST['checkid'])){
		if($_REQUEST['checkid'] == ""){
			$msg = "<div class= 'alert alert-warning col-sm-6 ml-3 mt-4'>Fill All Fields</div>";
		} else{
			$query = "SELECT * FROM f_request_approval WHERE problem_id = {$_REQUEST['checkid']}";
		$result = mysqli_query($conn, $query);
		$row = $result->fetch_assoc();
	    if(isset($row['problem_id']) && $row['problem_id'] == $_REQUEST['checkid']){
			
		?>
		
		<h3 class="text-center mt-5">Problem Detail</h3>
		<table class="table table-bordered">
			<tbody>
				<tr>
				<td>Problem Id</td>
				<td><?php if(isset($row['problem_id'])){echo $row['problem_id'];} ?></td>
				</tr>
				<tr>
				<td>Farmer Name</td>
				<td><?php if(isset($row['farmername'])){echo $row['farmername'];} ?></td>
				</tr>
				<tr>
				<td>Email</td>
				<td><?php if(isset($row['email'])){echo $row['email'];} ?></td>
				</tr>
				<tr>
				<td>Problem</td>
				<td><?php if(isset($row['problem'])){echo $row['problem'];} ?></td>
				</tr>
				<tr>
				<td>Field Number</td>
				<td><?php if(isset($row['fieldnumber'])){echo $row['fieldnumber'];} ?></td>
				</tr>
				<tr>
				<td>Area</td>
				<td><?php if(isset($row['area'])){echo $row['area'];} ?></td>
				</tr>
				<tr>
				<td>City</td>
				<td><?php if(isset($row['city'])){echo $row['city'];} ?></td>
				</tr>
				<tr>
				<td>State</td>
				<td><?php if(isset($row['state'])){echo $row['state'];} ?></td>
				</tr>
				<tr>
				<td>Mobile</td>
				<td><?php if(isset($row['mobile'])){echo $row['mobile'];} ?></td>
				</tr>
				<tr>
				<td>Time</td>
				<td><?php if(isset($row['time'])){echo $row['time'];} ?></td>
				</tr>
				<tr>
				<td>Date</td>
				<td><?php if(isset($row['date'])){echo $row['date'];} ?></td>
				</tr>
			</tbody>
		</table>
		<?php } else{
		echo '<div class="alert alert-info mt-4">Your Request is Still Pending</div>';

		}
		
	}
			
	}?>
	<?php if(isset($msg)){echo $msg;} ?>
	</div>
	
</body>
	
</html>
