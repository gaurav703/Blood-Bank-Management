<?php

	if(isset($_POST['fname'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$gender=$_POST['gender'];
		$blood=$_POST['blood'];

		$servername="localhost";
		$username="root";
		$password="";
		$dbname="blood_management_system";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Error while connecting...");
	}
	
	$qry="insert into blood(fname,lname,address,contact,gender,blood_group) values ('$fname','$lname','$address','$contact','$gender','$blood')";
	$result=mysqli_query($conn,$qry);

	if($result){
		echo"Thanks for registering as a Donor";
	}
	else{
		echo"Error while inserting data";

	
	}

	}
	else{
		echo"Go back to registration page";
	}
?>