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
$Pass=$_POST['phone'];
$Rpass=$_POST['msg'];

$sql = "INSERT INTO input (`name`,`email`,`phone`,`msg`) VALUES ('$user_name','$Email','$Pass','$Rpass')";

if(!mysqli_query($con,$sql))
{
	echo 'not regd';
}
else
{
	echo 'Successfully registeried';
}

header("refresh:2; url=login.html");

?>