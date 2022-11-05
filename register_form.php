<?php

@include 'config.php';



if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
		  
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>
	<link rel="stylesheet" href="css/bootstrap-4.4.1.css">
   <link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<?php $page = 'Sign Up'; echo require_once("stickynav.php")?>
	<div id="section">
<div class="form-container">

   <form action="" method="post">
	   <div class="form-group">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input class="form-control" type="text" name="name" required placeholder="enter your name">
		   
			   
      <input class="form-control" type="email" name="email" required placeholder="enter your email" >
		   
      <input class="form-control" type="password" name="password" required placeholder="enter your password">
      <input class="form-control" type="password" name="cpassword" required placeholder="confirm your password">
      <select class="form-select form-control" name="user_type" required placeholder="Select User Type">
		  <option selected>Select User Type</option>
         <option value="farmer">farmer</option>
		  <option value="expert">expert</option>
		  
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
	   </div>
   </form>

</div>
		</div>
<?php include 'footer.php' ?>
</body>
</html>