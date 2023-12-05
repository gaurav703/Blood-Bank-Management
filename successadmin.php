<?php
session_start(); //to start a session which store info
include 'dbconnect.php';
$username=$_POST['uname'];
$password=$_POST['psw'];

$qry="select * from admin where uname='$username' && pass='$password' "; //select the uname and pass value from the database and check
$result=mysqli_query($conn,$qry);
$count=mysqli_num_rows($result);
if($count>0){
	echo "Successfully logged in";
	$_SESSION['key']=$username; //'key' is a varaible
	header('location:dashboard.php'); //redirect the user to the dashboard.php page after login success
}else{
	echo "Username/Password didnt match";
}

?>