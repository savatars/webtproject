<?php

session_start();

$$con = mysqli_connect('127.0.0.1','root','');


mysqli_select_db($con,'reg');

$name=$_POST['user'];
$pass=$_POST['pass'];

$s="select * from form where name= '$name' ";
$result=mysqli_master_query($con, $s);

$num=mysqli_num_rows($result);

if($num==1){
	echo "User taken";
}
else{
	$reg="insert into form(name,pass) values('$name','$pass')";
	mysqli_query($con,$reg);
	echo "success";
}
?>