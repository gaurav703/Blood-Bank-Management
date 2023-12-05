<?php
$id=$_GET['id'];
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$add=$_GET['add'];
$contact=$_GET['contact'];
$gender=$_GET['gender'];
$blood=$_GET['blood'];
include 'dbconnect.php';
$qry="update blood set fname='$fname', lname='$lname', add='$add', contact='$contact', gender='$gender', blood_group='$blood' where id='$id'";
$result=mysqli_query($conn,$qry);
if($qry){
	echo "Data sucessfully updated";
	header('location:dashboard.php');
}
else{
	echo "Error";
}

?>