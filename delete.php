<?php
require "C:/xampp/htdocs/Friend_Locator/Connect_Database.php";
ob_start();
session_start();

	if(isset($_GET['Ship'])) {
	$Friendship = $_GET['Ship'];}
	
			$sql = "DELETE from friends WHERE friendship_ID=$Friendship";
			if(!(mysqli_query($con,$sql))){
			header("Location: Error.php");
		}
			else { header("Location:friends.php"); }
?>
