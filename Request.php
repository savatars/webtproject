<?php
session_start();

$con = mysqli_connect('127.0.0.1','root','');

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,'ignosi');


$book_name=$_POST['bname'];
$aut=$_POST['auth'];
$year=$_POST['year'];
$edit=$_POST['edi'];

$sql = "INSERT INTO request (`bname`,`autor`,`year`,`edition`) VALUES ('$book_name','$aut','$year','$edit')";

if(!mysqli_query($con,$sql))
{
	echo 'not requested';
}
else
{
	echo 'Successfully requested';
}

header("refresh:2; url=poetry.html");

?>