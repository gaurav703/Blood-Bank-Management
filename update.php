<?php
$id=$_GET['id'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$add=$_GET['address'];
$cont=$_GET['contact'];
$gen=$_GET['gender'];
$bld=$_GET['blood'];

include 'dbconnect.php';
$qry="update blood set fname='$fname', lname='$lname', address='$add', contact='$cont', gender='$gen', blood_group='$bld' where id='$id' ";
$result=mysqli_query($conn,$qry);
if($qry){
	echo "Data sucessfully updated";
	header('location:dashboard.php');
}
else{
	echo "Error";
}
?>