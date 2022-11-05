<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   
	
   $email = mysqli_real_escape_string($conn, $_POST['email']);
	
   $pass = md5($_POST['password']);
	
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
		  
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'farmer'){

         $_SESSION['farmer_name'] = $row['name'];
		 $_SESSION['farmer_email'] = $row['email'];
		  
		  
         header('location:farmer_page.php');

      }
	   elseif($row['user_type'] == 'expert'){

         $_SESSION['expert_name'] = $row['name'];
		 $_SESSION['expert_email'] = $row['email'];
		  
         header('location:expert_page.php');

      }
     
   }else{
	   
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
	<link rel="stylesheet" href="css/bootstrap-4.4.1.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
 <?php $page = 'Login'; echo require_once("stickynav.php")?> 
	<div id="section">
<div class="form-container">

   <form action="" method="post">
	   <div class="form-group">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input class="form-control" type="email" name="email" required placeholder="enter your email">
      <input class="form-control" type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="Login" class="form-btn">
      <p>Don't have an account? <a href="register_form.php">Register Now</a></p>
	   </div>
   </form>

</div>
		</div>
	<?php include 'footer.php' ?>
</body>
</html>