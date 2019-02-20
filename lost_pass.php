<?php

require "C:/xampp/htdocs/Friend_Locator/Connect_Database.php";
 
if(isset($_POST['faq'])){
    $to = $_POST['email']; // this is your Email address
	echo $to;
    $from = "support@friend_locator.com"; // this is the sender's Email address
    $name = "Friend Locator Support Team";
	
	$query_fetch = "SELECT * FROM users WHERE email='$to'";
	$result_fetch = $con->query($query_fetch);
	while($row = $result_fetch->fetch_assoc()) {
	$Password = $row['password'];
	}
			
    $subject = "Lost Password - Friend Locator";
    $message = "Dear User, Your Password is ".$Password."";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
	header("Location: email.php");
    }
?>
