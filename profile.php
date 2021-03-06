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

.logo {
	width:10%;
	margin-top:0px;"
}

@media screen and (max-width: 667px) {
	
.logo {
	width:20%;
	margin-top:10px;"
}

}

.button {
	margin-left:-285px;
	margin-right:-285px;
	margin-top:30px;
}

@media screen and (max-width: 667px) {
	.button {
	margin-left:120px;
	margin-right:120px;
}
}

.eye {
	cursor:pointer;
	width:5%;
	float:right;
	margin-right:10px;
	margin-top:-45px;
}

@media screen and (max-width: 667px) {
	
.eye {
	cursor:pointer;
	width:10%;
	float:right;
	margin-right:10px;
	margin-top:-45px;
}
}

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
	</style>
	</head>
	<body>
	<div id="colorlib-page">

			<div style="background-color:#A2D9CE;" class="colorlib-contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
						<?php
							if(isset($_SESSION['email']))
								{
									$Email = $_SESSION['email'];
									$_SESSION['email'] = $Email;
								}
	
							$query_fetch = "SELECT * FROM users WHERE email='$Email'";
							$result_fetch = $con->query($query_fetch);
							while($row = $result_fetch->fetch_assoc()) {
							$Fname = $row['first_name'];
							$Lname = $row['last_name'];
							$Mail = $row['email'];
							$Password = $row['password'];
							$phone = $row['phone'];
							$tracker = $row['tracker_number'];
							$city = $row['city'];
							$ID = $row['user_id'];
							}
						?>
							<center><h2 class="colorlib-heading animate-box" data-animate-effect="fadeInLeft"><?php echo $Fname." ".$Lname; ?></h2>
							<img src="images/contact.png" class="animate-box logo" data-animate-effect="fadeInRight">
						<p class="animate-box" data-animate-effect="fadeInLeft">Edit Profile<br></p></center>
						</div>
					</div>
					<div class="row">
					<form method="POST" action="profile.php">
						<div class="col-md-5 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
										<div style="border:1px solid black;" class="form-group">
											<input type="text" name="first_name" class="form-control" value="<?php echo $Fname; ?>" Required>
										</div>
										<div style="border:1px solid black;" class="form-group">
											<input type="email" name="email" class="form-control" value="<?php echo $Mail; ?>" Required>
										</div>
										<div style="border:1px solid black;" class="form-group">
											<input type="number" name="phone" class="form-control" value="<?php echo $phone; ?>" Required>
										</div>
										<div style="border:1px solid black;" class="form-group">
										<?php if($tracker=="") { ?>
											<input type="number" name="tracker" class="form-control" placeholder="Your Tracker Number (If you have one)">
										<?php } else { ?>
											<input type="number" name="tracker" class="form-control" value="<?php echo $tracker; ?>">
										<?php } ?>
										</div>
						</div>
						<div class="col-md-5 col-md-push-1 animate-box" data-animate-effect="fadeInLeft">
										<div style="border:1px solid black;" class="form-group">
											<input type="text" name="last_name" class="form-control" value="<?php echo $Lname; ?>" Required>
										</div>
										<div style="border:1px solid black;" class="form-group">
											<input id="pass" type="password" name="password" class="form-control" value="<?php echo $Password; ?>" Required><img src="images/eye.png" onclick="myFunction()" class="eye"></input>
										</div>
										<div style="border:1px solid black;" class="form-group">
											<input type="text" name="city" class="form-control" value="<?php echo $city; ?>" Required>
										</div>
											<p style="margin-top:30px;">You can always add your Tracker Number in the "Edit Profile" Section.</p>
						</div>
						<div class="col-md-5 col-md-push-3 animate-box" data-animate-effect="fadeInLeft">
						<div class="form-group button">
							<input type="submit" name="update" class="btn1 btn-primary btn-send-message" value="Update">
						</div>
						</div>
						<div class="col-md-6 col-md-push-3 animate-box" data-animate-effect="fadeInLeft">
						<center><p class="animate-box" data-animate-effect="fadeInRight"><a href="Friend_Locator.php">Go Back/Discard Changes <i class='fas fa-times-circle'></i></a></p></center>
						</div>
					</form>
					</div>
				</div>
			</div>
	</div>
	
	<?php
	
	if(isset($_POST['update'])){
	
	$First_Name = $_POST['first_name'];
	$Last_Name = $_POST['last_name'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	$Phone = $_POST['phone'];
	if(!empty($_POST['tracker']))
	{
		$Tracker = $_POST['tracker'];
	}
	else {
		$Tracker = "";
	}
	$City = $_POST['city'];
	
	echo $City;
	
	$sql1 = "UPDATE users SET first_name='$First_Name',last_name='$Last_Name',email='$Email',password='$Password',phone=$Phone,tracker_number=$Tracker,city='$City' WHERE user_id=$ID";
	mysqli_query($con,$sql);
	
		if(!(mysqli_query($con,$sql)))
		{
			header("Location: Error.php");
		}
		
		$_SESSION['first_name'] = $First_Name;
		$_SESSION['last_name'] = $Last_Name;
		header("Location: update_success.php");
}
	?>

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
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<script>
  window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}
</script>

</body>
</html>
