<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>sticknav</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/owl.carousel.min.css">
	<style>
	.header{
	background: #34420D;
	font-family: poppins;
}
.logo{
	width: 60px;
}
.site-navbar {
  margin-bottom: 0px;
  z-index: 1999;
  position: fixed;
  top: 0;
  width: 100%;
  padding: 0px 20px;
  

}
  @media (max-width: 991.98px) {
    .site-navbar {
      padding-top: 3rem;
      padding-bottom: 3rem; } }
  .site-navbar .toggle-button {
    position: absolute;
    right: 0px; }
  .site-navbar .site-logo {
    margin: 0;
    padding: 0;
    font-size: 1rem; }
    .site-navbar .site-logo a {
      text-transform: full-width;
      color: #fff;
      font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; }
    a:hover {
    color: #0056b3;
     text-decoration: none; 
	
}
    @media (max-width: 991.98px) {
      .site-navbar .site-logo {
        float: left;
        position: relative; 
		} }
  .site-navbar .site-navigation.border-bottom {
    border-bottom: 1px solid white !important; }
  .site-navbar .site-navigation .site-menu {
    margin: 0;
    padding: 0;
    margin-bottom: 0;
	

}
    .site-navbar .site-navigation .site-menu .active {
      color: #eb4d55 !important; }
    .site-navbar .site-navigation .site-menu a {
      text-decoration: none !important;
      display: inline-block; }
    .site-navbar .site-navigation .site-menu > li {
      display: inline-block; }
      .site-navbar .site-navigation .site-menu > li > a {
        margin-left: 15px;
        margin-right: 15px;
        padding: 20px 0px;
        font-size: 15px;
        color: rgba(255, 255, 255, 0.7) !important;
        display: inline-block;
        text-decoration: none !important;
        position: relative; }
        .site-navbar .site-navigation .site-menu > li > a:before {
          content: "";
          width: 100%;
          position: absolute;
          bottom: 0;
          left: 0;
          height: 1px;
          -webkit-transform: scale(0);
          -ms-transform: scale(0);
          transform: scale(0);
          -webkit-transition: .3s transform ease;
          -o-transition: .3s transform ease;
          transition: .3s transform ease;
          background: #fff; }
        .site-navbar .site-navigation .site-menu > li > a:hover {
          color: #fff !important; }
          .site-navbar .site-navigation .site-menu > li > a:hover:before {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1); }
      .site-navbar .site-navigation .site-menu > li.active > a {
        color: #fff !important; }
        .site-navbar .site-navigation .site-menu > li.active > a:before {
          -webkit-transform: scale(1);
          -ms-transform: scale(1);
          transform: scale(1); }
    .site-navbar .site-navigation .site-menu .has-children {
      position: relative; }
      .site-navbar .site-navigation .site-menu .has-children > a {
        position: relative;
        padding-right: 20px; }
        .site-navbar .site-navigation .site-menu .has-children > a:before {
          position: absolute;
          content: "\e313";
          font-size: 16px;
          top: 50%;
          right: 0;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
          font-family: icomoon; }
      

.site-mobile-menu {
  width: 300px;
  position: fixed;
  right: 0;
  z-index: 2000;
  padding-top: 20px;
  background: #fff;
  height: calc(100vh);
  -webkit-transform: translateX(110%);
  -ms-transform: translateX(110%);
  transform: translateX(110%);
  -webkit-box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  box-shadow: -10px 0 20px -10px rgba(0, 0, 0, 0.1);
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .offcanvas-menu .site-mobile-menu {
    -webkit-transform: translateX(0%);
    -ms-transform: translateX(0%);
    transform: translateX(0%); }
  .site-mobile-menu .site-mobile-menu-header {
    width: 100%;
    float: left;
    padding-left: 20px;
    padding-right: 20px; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close {
      float: right;
      margin-top: 8px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span {
        font-size: 30px;
        display: inline-block;
        padding-left: 10px;
        padding-right: 0px;
        line-height: 1;
        cursor: pointer;
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-close span:hover {
          color: #ced4da; }
    .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo {
      float: left;
      margin-top: 10px;
      margin-left: 0px; }
      .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a {
        display: inline-block;
        text-transform: uppercase; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a img {
          max-width: 70px; }
        .site-mobile-menu .site-mobile-menu-header .site-mobile-menu-logo a:hover {
          text-decoration: none; }
  .site-mobile-menu .site-mobile-menu-body {
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
    position: relative;
    padding: 0 20px 20px 20px;
    height: calc(100vh - 52px);
    padding-bottom: 150px; }
  .site-mobile-menu .site-nav-wrap {
    padding: 0;
    margin: 0;
    list-style: none;
    position: relative; }
    .site-mobile-menu .site-nav-wrap a {
      padding: 10px 20px;
      display: block;
      position: relative;
      color: #212529; }
      .site-mobile-menu .site-nav-wrap a:hover {
        color: #eb4d55; }
    .site-mobile-menu .site-nav-wrap li {
      position: relative;
      display: block; }
      .site-mobile-menu .site-nav-wrap li .nav-link.active {
        color: #eb4d55; }
      .site-mobile-menu .site-nav-wrap li.active > a {
        color: #eb4d55; }
    .site-mobile-menu .site-nav-wrap .arrow-collapse {
      position: absolute;
      right: 0px;
      top: 10px;
      z-index: 20;
      width: 36px;
      height: 36px;
      text-align: center;
      cursor: pointer;
      border-radius: 50%; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:hover {
        background: #f8f9fa; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse:before {
        font-size: 12px;
        z-index: 20;
        font-family: "icomoon";
        content: "\f078";
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%) rotate(-180deg);
        -ms-transform: translate(-50%, -50%) rotate(-180deg);
        transform: translate(-50%, -50%) rotate(-180deg);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .site-mobile-menu .site-nav-wrap .arrow-collapse.collapsed:before {
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .site-mobile-menu .site-nav-wrap > li {
      display: block;
      position: relative;
      float: left;
      width: 100%; }
      .site-mobile-menu .site-nav-wrap > li > a {
        padding-left: 20px;
        font-size: 20px; }
      .site-mobile-menu .site-nav-wrap > li > ul {
        padding: 0;
        margin: 0;
        list-style: none; }
        .site-mobile-menu .site-nav-wrap > li > ul > li {
          display: block; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > a {
            padding-left: 40px;
            font-size: 16px; }
          .site-mobile-menu .site-nav-wrap > li > ul > li > ul {
            padding: 0;
            margin: 0; }
            .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li {
              display: block; }
              .site-mobile-menu .site-nav-wrap > li > ul > li > ul > li > a {
                font-size: 16px;
                padding-left: 60px; }
    .site-mobile-menu .site-nav-wrap[data-class="social"] {
      float: left;
      width: 100%;
      margin-top: 30px;
      padding-bottom: 5em; }
      .site-mobile-menu .site-nav-wrap[data-class="social"] > li {
        width: auto; }
        .site-mobile-menu .site-nav-wrap[data-class="social"] > li:first-child a {
          padding-left: 15px !important; }

.sticky-wrapper {
  position: relative;
  z-index: 100;
  width: 100%;
  top: 0; }
  .sticky-wrapper .site-navbar {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  .sticky-wrapper .site-navbar {
    background: #fff; }
    .sticky-wrapper .site-navbar ul li a {
      color: rgba(255, 255, 255, 0.7) !important; }
      .sticky-wrapper .site-navbar ul li a.active {
        color: #fff !important; }
  .sticky-wrapper.is-sticky .site-navbar {
    background: #fff;
    -webkit-box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2);
    box-shadow: 4px 0 20px -5px rgba(0, 0, 0, 0.2); }
    .sticky-wrapper.is-sticky .site-navbar .site-logo a {
      color: #eb4d55; }
    .sticky-wrapper.is-sticky .site-navbar ul li a {
      color: #000 !important; }
      .sticky-wrapper.is-sticky .site-navbar ul li a.active {
        color: #eb4d55 !important; }
  .sticky-wrapper .shrink {
    padding-top: 0px !important;
    padding-bottom: 0px !important; }
    @media (max-width: 991.98px) {
      .sticky-wrapper .shrink {
        padding-top: 30px !important;
        padding-bottom: 30px !important; } }

	
	</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<header class="site-navbar site-navbar-target header" role="banner">

          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href="index.php" class="font-weight-bold">
				  <img class="logo" src="images/lo.png" alt="" <h2>&nbsp;&nbsp;&nbsp;CropryIot</h2>
					
				  </a>
              </div>
            </div>

            <div class="col-9  text-right" >
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-white"></span></a></span>


              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation" >
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="<?php if($page=='Home'){echo 'active';}?>" ><a href="index.php" class="nav-link">Home</a></li>
					
                  <li class="<?php if($page=='services'){echo 'active';}?>"><a href="services.php" class="nav-link">Services</a></li>
					
                  <li class="<?php if($page==''){echo 'active';}?>"><a href="" class="nav-link">Ask Expert</a></li>
					
				  <li class="<?php if($page==''){echo 'active';}?>"><a href="" class="nav-link">Forum</a></li>
					
				  <li class="<?php if($page=='AboutUs'){echo 'active';}?>"><a href="about us.php" class="nav-link">About Us</a></li>
					
				  <li class="<?php if($page=='contactus'){echo 'active';}?>"><a href="contactus.php"s class="nav-link">Info Desk</a></li>
					
				  <li class="<?php if($page=='Sign Up'){echo 'active';}?>"><a href="register_form.php" class="nav-link">Sign Up</a></li>
					
				  <li class="<?php if($page=='Login'){echo 'active';}?>"><a href="login_form.php" class="nav-link">Login</a></li>
				  
                </ul>
				  
				
              </nav>
				
            </div>
	
	</div>
	
	
	
	

	
	 </header>
		
</body>
</html>
