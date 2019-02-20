<?php
require "C:/xampp/htdocs/Friend_Locator/Connect_Database.php";
ob_start();
session_start();

	if(isset($_GET['User_ID'])) {
	$user = $_GET['User_ID'];}
	
	if(isset($_GET['Friend_ID'])) {
	$friend = $_GET['Friend_ID'];}
	
	if(isset($_GET['request'])) {
	$x = $_GET['request'];}
	
			$sql = "DELETE from requests WHERE request_id=$x";
			if(!(mysqli_query($con,$sql))){
			header("Location: Error.php");
		}
			else { header("Location:requests.php"); }
?>
