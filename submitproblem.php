<?php 

@include 'config.php';
session_start();
if(isset($_SESSION['farmer_name'])){
	
} else {
	echo "<script> location.href='login_form.php'</script>";
}

if(isset($_REQUEST['submitrequest'])){
	if(($_REQUEST['farmername'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['problem'] == "") || ($_REQUEST['fieldnumber'] == "") || ($_REQUEST['area'] == "") || ($_REQUEST['city'] == "") || ($_REQUEST['state'] == "") || ($_REQUEST['mobile'] == "") || ($_REQUEST['time'] == "") || ($_REQUEST['date'] == "")){
		$msg = "<div class= 'alert alert-warning col-sm-6 ml-3 mt-2'>Fill All Fields</div>";
	} else{
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
		
	$query = "INSERT INTO submit_problem(farmername, email, problem, fieldnumber, area, city, state, mobile, time, date) VALUES('$farmername', '$email', '$problem', '$fieldnumber', '$area', '$city', '$state', '$mobile', '$time', '$date')";
			
		$run = mysqli_query($conn, $query) or die(mysqli_error());
		if($run){
			$genid = mysqli_insert_id($conn);
			$msg = "<div class= 'alert alert-success col-sm-6 ml-3 mt-2'>Submitted Successfully</div>";
			$_SESSION['myid'] = $genid;
			echo "<script> location.href='submit_successful.php'</script>";
		} else{
			$msg = "<div class= 'alert alert-danger col-sm-6 ml-3 mt-2'>Unable to Submit </div>";
		}
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Submit Problem</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
</head>

<body>
<?php include 'sidenavbar.php' ?>
	

<div class="col-sm-1 col-md-9  mt-4 p-10"><!---start service request form 2nd coulmn-->

<form  class="mx-55" action=""  method="post">
<div class ="form-group">
<label for="inputRequestInfo">Farmer Name</label>
<input type="text" class="form-control" id= "inputFarmerName" placeholder="Farmer Name"
  name="farmername" value="<?php echo $_SESSION['farmer_name'] ?>">
</div>
<div class="form-group">
<label for="inputEmail">Email</label>
<input type="email" class="form-control" id= "inputEmail" placeholder="Enter Your Email"
  name="email" value="<?php echo $_SESSION['farmer_email']  ?>">
</div>
<div class="form-group">
<label for="inputRequestDescription">Problem</label>
<input type="text" class="form-control" id= "inputProblem" placeholder="Write Problem"
  name="problem" >
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="imputAddres">Field Number</label>
<input type="number" class="form-control" id= "inputField Number" placeholder="Enter Field Number"
  name="fieldnumber">
</div>

<div class="form-group col-md-6">
<label for="imputAddres">Area (In Number)</label>
<input type="number" class="form-control" id= "inputArea" placeholder="Field Area"
  name="area">

</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputcity">City</label>
<input type="text" class="form-control" id= "inputcity"
  name="city">
</div>
<div class="form-group col-md-6">
<label for="inputState">State</label>
<input type="text" class="form-control" id= "inputState"
  name="state">
</div>

</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputMobile">Mobile</label>
<input type="text" class="form-control" id= "code"
  name="mobile">
</div>
<div class="form-group col-md-2">
<label for="inputMobile">Time</label>
<input type="time" class="form-control" id= "inputTime"
  name="time">
</div>
<div class="form-group col-md-2">
<label for="inputDate">Date</label>
<input type="date" class="form-control" id= "inputDate"
  name="date">
</div>
</div>
<button type="submit" class="btn btn-danger m-3"
  name="submitrequest"> Submit</button>
<button type="reset" class="btn btn-secondary"
  >Reset</button>
</form>
<?php if(isset($msg)){echo $msg;} ?>		
</div><!--End service request form 2nd column-->
<!-- only numbers for input fields -->

	</script>
</body>
</html>
