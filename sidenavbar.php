<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
	<link href="css/bootstrap-4.4.1.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<title>Sidenavbar</title>
	<style>
		*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'poppins';
}

body{
	width: 100;
	background: #E5E7EB;
	position: relative;
	display: flex;
	
	


}

#menu{
	background: #073247;
	width: 260px;
	height: 100%;
	
}

#menu .logo{
	display: flex;
	align-items: center;
	color: #fff;
	padding: 30px 0 0 30px;
}

#menu .logo img{
	width: 40px;
	margin-right: 15px
}



#menu .items{
	margin-top: 40px;
}

#menu .items li{
	list-style: none;
	padding: 15px 0;
	transition: 0.3s ease;
}

#menu .items li:hover{
	background: #4D8778;
	cursor: pointer;
}

#menu .items li:nth-child(1){
	border-left: 4px solid #fff;
}
#menu .items li:nth-child(2){
	border-left: 4px solid #fff;
}
#menu .items li:nth-child(3){
	border-left: 4px solid #fff;
}
#menu .items li:nth-child(4){
	border-left: 4px solid #fff;
}
#menu .items li:nth-child(5){
	border-left: 4px solid #fff;
}

#menu .items li i{
	color: rgba(105,160,217,1.00);
	width: 30px;
	height: 40px;
	line-height: 30px;
	text-align: center;
	font-size: 14px;
	margin: 0 10px 0 25px;
}

#menu .items li:hover i,
#menu .items li:hover a{
	color: #989898
}

#menu .items li a{
	text-decoration: none;
	color: rgba(105,160,217,1.00);
	font-weight: 300px;
	transition: 0.3s ease;
		
}
	</style>
</head>

<body>
	<section id="menu">
	<div clas="logo">
		<img src="images/lo.png" alt="" >
		<h2 style="color: aliceblue;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CropryIot </h2>
		
		</div>
	<div class="items">
		
		<li class="<?= $page == 'faremer_page.php'? 'active':'' ?>"><i class="far fa-user"></i><a href="farmer_page.php">Profile</a></li>
		<li><i class="fab fa-accessible-icon"></i><a href="submitproblem.php">Submit Problem</a></li>
		<li class="<?= $page == 'servicestatus.php'? 'active':'' ?>"><i class="far fa-align-center"></i><a href="servicestatus.php">Service Status</a></li>
		<li><i class="far fa-sign-out-alt"></i><a href="logout.php">Logout</a></li>
		</div>
	</section>
	
</body>
</html>
