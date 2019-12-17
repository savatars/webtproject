<?php

$con = mysqli_connect('127.0.0.1','root','');

if(!$con)
{
	echo 'Not connected';
}

if(!mysql_select_db($con,'ignosi'))
{
	echo 'db not selected'
}

$user_name=$_POST['name'];
$Email=$_POST['email'];
$Pass=$_POST['pass'];
$Rpass=$_POST['re_pass'];

$sql = "INSERT INTO user (name,email,pass,rpass) VALUES ('$user_name','$Email','$Pass','$Rpass')";

if(!mysqli_query($con,$sql))
{
	echo 'not regd';
}
else
{
	echo 'regd';
}

header("refresh:2; url=index1.html");

?>