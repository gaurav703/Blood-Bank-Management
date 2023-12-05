<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
include 'dbconnect.php';

$qry="delete from registration where id=$id";
$result=mysqli_query($conn,$qry);
if($result){
	echo "Sucessfully Deleted";
	header('location:donorhome.html');
}
else{
	echo "Error..";
}
}

?>