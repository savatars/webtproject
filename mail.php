<?php

session_start();

$book_name=$_POST['bname'];
$aut=$_POST['auth'];
$year=$_POST['year'];
$edit=$_POST['edi'];


$email_form='mssaisrikar@yahoo.com';

$email_subject="Book request by user";

$email_body="Book name: $bname.\n".  "Author: $auth.\n".  "Year: $year.\n".  	"Edition: $edi.\n".

$to= "mssaisrikar@gmail.com";

$headers="Form: $email_form\r\n";


mail($to,$email_subject,$email_body,$headers);

if(mail($to, $email_subject, $email_body, $headers)){
	echo "<h1>Sent successfully";
}
else{
	echo("no send");
}

header("Location: index1.html")
?>