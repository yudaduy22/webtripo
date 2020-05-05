<?php
include "classes/class.phpmailer.php";

$nama = $_POST['nama'];

	$message = "
	Name  : " .$_POST['nama']. "
	<br>Email : " .$_POST['email']. "
	<br>Message: " .$_POST['message'];

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = "tripo3000.com"; //hostname masing-masing provider email
$mail->SMTPDebug = 2;
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "hello@tripo3000.com"; //user email
$mail->Password = "tripo3000"; //password email
$mail->SetFrom("hello@tripo3000.com"); //set email pengirim
$mail->Subject = $nama; //subyek email
$mail->AddAddress("yuda@terralogiq.com"); //tujuan email
$mail->MsgHTML($message);
if($mail->Send()) echo "Your message has been sent. Thank you!";
else echo "Failed to sending message";
?>