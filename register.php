<?php

	if(isset($_POST['uname'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
	
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="blood_management_system";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Error while connecting...");
	}
	
	$qry="insert into user(u_name,u_pass) values ('$uname','$pass')";
	$result=mysqli_query($conn,$qry);

	if($result){
		echo"Sucessfully registered as a User";
		header('location:registersuccess.html');
	}
	else{
		echo"Error while registering as a donor";

	
	}

	}
	else{
		echo"Go back to registration page";
	}
?>