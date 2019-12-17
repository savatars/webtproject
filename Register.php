<?php
session_start();

$con = mysqli_connect('127.0.0.1','root','');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,'ignosi');


$user_name=$_POST['name'];
$Email=$_POST['email'];
$Pass=$_POST['pass'];
$Rpass=$_POST['re_pass'];

$sql = "INSERT INTO user (`name`,`email`,`pass`,`rpass`) VALUES ('$user_name','$Email','$Pass','$Rpass')";

if(!mysqli_query($con,$sql))
{
	echo 'not regd';
}
else
{
	echo 'Successfully registeried';
}

header("refresh:2; url=up.html");








?>