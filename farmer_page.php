<?php

@include 'config.php';

session_start();
if(isset($_SESSION["farmer_name"])){
	$farmer_name= $_SESSION["farmer_name"];
}
else{

	header('location:login_form.php');
}
if(isset($_REQUEST['nameupdate'])){
	$farmer_name = $_REQUEST['name'];
	if($_REQUEST['name'] == ""){
		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2 role="alert"">Fill All Fields </div>';
	} else{
		$name = $_REQUEST['name'];
		$query = "UPDATE user_form SET name = '$name' WHERE email='$_POST[email]'";
		if(mysqli_query($conn, $query) == TRUE){
			$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2 role="alert">Updated Successfully</div>';
		} else{
			$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2 role="alert">Unable To Update</div>';
		}
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- bootstrap css -->

<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="css/farmer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	
<title>Farmer profile</title>
</head>

<body>
	<?php include 'sidenavbar.php' 
	
	?> 
	
	<div class="col-sm-6 mt-5">
	<form action="" method="POST" class="mx-5">
		<div class="form-group">
		<label for="email">Email</label><input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['farmer_email']  ?>" readonly>
		</div>
		<div class="form-group">
		<label for="name">Name</label><input type="text" class="form-control" name="name" id="name" value="<?php echo $farmer_name? $farmer_name:"" ?>" >
		</div>
		<button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
		<?php if(isset($passmsg)) {echo $passmsg;} ?>
		</form>
	</div>
	
	</body>
	
</html>