<?php
session_start();

$con = mysqli_connect('127.0.0.1','root','');


mysqli_select_db($con,'ignosi');


$user_name=$_POST['name'];
$Pass=$_POST['pass'];

$s=" SELECT * FROM user WHERE `name`= '$user_name' && `pass`='$Pass' ";
$result=mysqli_query($con,$s);


$num=mysqli_num_rows($result);

if ($num==1){
	echo "right";
	header('location:index1.html');
}
else
{
	echo "wrong";
	header('location:login.html');
}



?> 