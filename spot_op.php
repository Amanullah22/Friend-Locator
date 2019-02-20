<?php
require "C:/xampp/htdocs/Friend_Locator/Connect_Database.php";
ob_start();
session_start();

	if(isset($_GET['Track'])) {
	$Number = $_GET['Track'];}
	$Number = "92".$Number;
	
	if(isset($_GET['Phone'])) {
	$Number2 = $_GET['Phone'];}
	$Number2 = "0".$Number2;
	
	$username = "923480263118";///Your Username
	$password = "9714";///Your Password
	$mobile = $Number;///Recepient Mobile Number
	$sender = "Friend Locator";
	$message = "Spot";

	////sending sms

	$post = "sender=".urlencode($sender)."&mobile=".urlencode($mobile)."&message=".urlencode($message)."";
	$url = "https://bulksms.com.pk/api/sms.php?username=923480263118&password=***";
	$ch = curl_init();
	$timeout = 30; // set to zero for no timeout
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$result = curl_exec($ch); 
	/*Print Responce*/
	echo $result; 
	
	header("Location: message.php?Number=$Number&Number2=$Number2");
?>
