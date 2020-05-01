<?php
	ini_set( 'display_errors', 1 );
	error_reporting( E_ALL );

	$from = "hello@tripo3000.com";
	$to = "hello@tripo3000.com";
	
	$subject = "Contact me: " . $_POST['nama'];

	$message = "
	Nama  : " .$_POST['nama']. "
	Email : " .$_POST['email']. "
	Message: " .$_POST['message'];

	$headers = "From:" . $from;


	mail($to,$subject,$message);

	echo "OK";
?>