<!DOCTYPE HTML>
<?php
require "C:/xampp/htdocs/Friend_Locator/Connect_Database.php";
ob_start();
session_start();
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Friend Locator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	
	<!-- Libraries CSS Files -->
	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	<link href="path/to/lightbox.css" rel="stylesheet">

	<link href="https://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/locator.png">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
	::-webkit-scrollbar { 
    display: none; 
}

#menu {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 31%;
    top: 65%;
    list-style: none;
    font-size: 200%;
}

@media screen and (max-width: 667px) {
#menu {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 33%;
    top: 70%;
	bottom:2%;
    list-style: none;
    font-size: 200%;
}
}

.menu-button {
    opacity: 0;
    z-index: -1;
}

.menu-button {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 50%;
    top: 50%;
    border-radius: 50%;
    background: #0013FF;;
    background-size: 100%;
    overflow: hidden;
    text-decoration: none;
    line-height: 0px;
	padding:8px;
    color: #fff;
	border:2px solid #FFB600;
}

@media screen and (max-width: 667px) {
	.menu-button {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 50%;
    top: 50%;
    border-radius: 50%;
    background: #0013FF;;
    background-size: 100%;
    overflow: hidden;
    text-decoration: none;
    line-height: 0px;
	padding:7px;
    color: #fff;
	border:2px solid #FFB600;
}
}

.menu-button:hover{
	color: #FFB600;
}

#menu:not(:target)>a:first-of-type,
#menu:target>a:last-of-type {
    opacity: 1;
    z-index: 1;
}

#menu:not(:target)>.icon-plus:before,
#menu:target>.icon-minus:before {
    opacity: 1;
}

.menu-item {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 50%;
    line-height: 0px;
    top: 50%;
    border-radius: 50%;
    background-color: #0013FF;
	border:2px solid #FFB600;
    transform: translate(0px, 0px);
    transition: transform 500ms;
    z-index: -2;
    transition: .5s;
}

.menu-item:hover{
opacity: 0.5;
  box-shadow: 0 5px 10px #0013FF;
}


.menu-item a {
     color: #FFB600;
    position: relative;
    top: 20%;
    left: 19%;
    text-decoration: none;
}

#menu:target>.menu-item:nth-child(6) {
    transform: rotate(60deg) translateY(-80px) rotate(300deg);
    transition-delay: 0s;
}

#menu:target>.menu-item:nth-child(5) {
    transform: rotate(20deg) translateY(-85px) rotate(-20deg);
    transition-delay: 0.1s;
}

#menu:target>.menu-item:nth-child(3) {
    transform: rotate(-20deg) translateY(-85px) rotate(20deg);
    transition-delay: 0.2s;
}

#menu:target>.menu-item:nth-child(4) {
    transform: rotate(-60deg) translateY(-80px) rotate(60deg);
    transition-delay: 0.3s;
}

.content{
  position: absolute;
  text-align: center;
  margin: -10px 0 0 -30px;
  top: 70%;
  left: 50%;
  font-size: 20px;
}

.locate {
	margin-left:490px;
	margin-right:490px;
}

@media screen and (max-width: 667px) {
	.locate {
		margin-left:110px;
		margin-right:110px;
	}
}

#logo {
	width:50%;
	margin-left:40px;
	margin-right:40px;
}

@media screen and (max-width: 667px) {
	#logo {
		width:50%;
		margin-left:43px;
		margin-right:43px;
	}
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.img {
  position: relative;
  text-align: center;
  color: white;
  margin-top:-26px;
  margin-left:105px;
}

#request {
	margin-bottom:0px;
	margin-top:-15px;
}

@media screen and (max-width: 667px) {
	#request {
	margin-bottom:0px;
	margin-top:-28px;
	font-size:15px;
}
}

#request_box {
	margin-top:10px;
	width:500px;
	height:105px;
}

@media screen and (max-width: 667px) {
	#request_box {
	margin-top:10px;
	width:330px;
	height:105px;
}
}	
	</style>
	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" style="background-color:#F4F6F6;" role="complementary" class="border js-fullheight">
			<a href="index.html"><img id="logo" src="images/locator.png"/></a>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="Friend_Locator.php">Home</a></li>
					<li><a href="add.php">Add Tracker</a></li>
					<li><a href="spot.php">Spot Tracker</a></li>
					<li><a href="friends.php">Friends</a></li>
					<li class="colorlib-active"><a href="requests.php">Requests</a>
					<?php 
						$Email = ""; 
						if(isset($_SESSION['email'])) { 
						$Email = $_SESSION['email']; 
						$_SESSION['email'] = $Email; 
						}
						
						$query_fetch = "SELECT * FROM users WHERE email='$Email'";
						$result_fetch = $con->query($query_fetch);
						while($row = $result_fetch->fetch_assoc()) {
						$Tracker = $row['tracker_number'];}
						
						$query = "SELECT tracker_number FROM requests WHERE tracker_number=$Tracker";
						$result = mysqli_query($con,$query);
						if($result->num_rows>0) { ?>
					<div class="img">
						<img src="images/noti.png" style="width:40%;">
							<div class="centered"><?php echo $result->num_rows; ?></div>
					</div> 
					<?php } else {} ?>
					</li>
					<li><a href="profile.php">Edit Profile</a></li>
				</ul>
			</nav>
			
			<div class="container">
     <ul id="menu">
        <a class="menu-button" href="Logout.php" title="Sign Out"><span class="fas fa-power-off"></span></a>
     </ul>

</div>

			<div class="colorlib-footer">
				<p><small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to <font style="color:#A93226;font-weight:bold;">Friend Locator.</font> <br>Designed by <a href="portfolio.html">AK Creative.</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </span> <span>Demo Images: <a href="http://nothingtochance.co/" target="_blank">nothingtochance.co</a></span> --> </small></p>
				<!-- <ul>
					<li><a href="#"><i class="icon-facebook2"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
					<li><a href="#"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-linkedin2"></i></a></li>
				</ul> -->
			</div>

		</aside>

		<div id="colorlib-main">

			<div class="colorlib-contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<h2 class="colorlib-heading animate-box" data-animate-effect="fadeInLeft">Track Requests</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-pull-0">
						<?php 
						$Email = ""; 
						if(isset($_SESSION['email'])) { 
						$Email = $_SESSION['email']; 
						$_SESSION['email'] = $Email; 
						}
						
						$query_fetch = "SELECT * FROM users WHERE email='$Email'";
						$result_fetch = $con->query($query_fetch);
						while($row = $result_fetch->fetch_assoc()) {
						$Tracker = $row['tracker_number'];
						$user_ID = $row['user_id'];
						}
						
						$query = "SELECT tracker_number FROM requests WHERE tracker_number=$Tracker";
						$result = mysqli_query($con,$query);
						if($result->num_rows>0) {
						
						$array = array();
						$query_fetch = "SELECT request_by_user_id,relationship,request_id FROM requests WHERE tracker_number=$Tracker";
						$result_fetch = $con->query($query_fetch);
						while($row = $result_fetch->fetch_assoc()) {
						$Requester_ID = $row['request_by_user_id'];
						$Relationship = $row['relationship']; 
						$request_no = $row['request_id'];
						$array[] = $row;
						}
						
						for($x = 0 ; $x < count($array); $x++)
						{
							$y = $array[$x]['request_by_user_id'];
							$z = $array[$x]['relationship'];
						$query_fetch = "SELECT * FROM users WHERE user_id=$y";
						$result_fetch = $con->query($query_fetch);
						while($row = $result_fetch->fetch_assoc()) {
						$First_Name = $row['first_name']; 
						$Last_Name = $row['last_name'];
						$requester_phone = $row['phone'];
						?>
							<p class="animate-box" data-animate-effect="fadeInRight">You can Always change Permissions of Tracking in the "Friends" Section.</p>
							<div id="request_box" class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="colorlib-icon">
									<i class="fas fa-mobile"></i>
								</div>
								<div class="colorlib-text">
									<p id="request"><?php echo $First_Name." ".$Last_Name." | ".$array[$x]['relationship']." | Mobile No: ".$requester_phone."<br>"; ?>
									<a href="<?php echo "Accept.php?User_ID=$user_ID&Friend_ID=$y&request=$request_no&rel='$z'"; ?>" style="background-color:green;color:white;" class="btn">Accept</a><a href="<?php echo "Reject.php?User_ID=$user_ID&Friend_ID=$y&rel='$z'"; ?>" style="background-color:red;color:white;"class="btn">Reject</a></p>
								</div>
							</div> 
						<?php } } } else { ?> <p  class="animate-box" data-animate-effect="fadeInRight">There are no Pending Requests.</p> <?php } ?>
						</div>
					</div>
				</div>
			</div>

			<!-- <div id="map"></div> -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>

<script>
  window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}
</script>

</body>
</html>
