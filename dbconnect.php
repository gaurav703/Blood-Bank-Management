<?php
$servername="localhost";
$username="root";
$password="";
$dbname="blood_management_system";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
		die("Error while connecting...");

}
?>