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
$mail->SMTPDebug = 0;
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "hello@tripo3000.com"; //user email
$mail->Password = "tripo3000"; //password email
$mail->SetFrom("info@tripo3000.com"); //set email pengirim
$mail->Subject = $nama; //subyek email
$mail->AddAddress("hello@tripo3000.com"); //tujuan email
$mail->MsgHTML($message);
if($mail->Send()) echo "OK";
else echo "Failed to sending message";
?>