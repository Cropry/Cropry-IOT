<?php 

@include 'config.php';
session_start();
if($_SESSION['farmer_name']){
	
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
<title>Problem Submitted</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
	<?php include 'sidenavbar.php' ?>
<?php
	$query = "SELECT * FROM submit_problem WHERE problem_id = {$_SESSION['myid']}";
$result = mysqli_query($conn, $query);
if($result->num_rows == 1){
	$row = $result->fetch_assoc();
	echo "<div class=' mt-5 ml-5'>
	<table class='table '>
	<tbody>
	<tr>
	<th> Problem ID:</th>
	<td>".$row['problem_id']."</td>
	</tr>
	
	<tr>
	<th> Farmer Name:</th>
	<td>".$row['farmername']."</td>
	</tr>
	<tr>
	<th> Email:</th>
	<td>".$row['email']."</td>
	</tr>
	<tr>
	<th> Problem:</th>
	<td>".$row['problem']."</td>
	</tr>
	<tr>
	<th> Time:</th>
	<td>".$row['time']."</td>
	</tr>
	<tr>
	<th> Date:</th>
	<td>".$row['date']."</td>
	</tr>
	</tr>
	</tbody>
	</table>
	</div>
	";
} else {
	echo "Failed";
}
	?>
</body>
</html>
