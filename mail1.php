<?php

if(isset($_POST[submit]));
{
$book_name=$_POST['bname'];
$aut=$_POST['auth'];
$year=$_POST['year'];
$edit=$_POST['edi'];

$to= "mssaisrikar@gmail.com";

$email_form='mssaisrikar@yahoo.com';


$subject="Book request by user";

$message="Book name:" .$book_name.

$headers="From:" .$email_form;

if(mail($to, $subject, $message, $headers)){
	echo "<h1>Sent successfully";
}
else{
	echo("no send");
}
}
?>