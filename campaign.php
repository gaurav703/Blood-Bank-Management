<?php

	if(isset($_POST['cname'])){
		$cname=$_POST['cname'];
		$oname=$_POST['oname'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$location=$_POST['location'];

		$servername="localhost";
		$username="root";
		$password="";
		$dbname="blood_management_system";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("Error while connecting...");
	}
	
	$qry="insert into campaign(cam_name,org_name,cam_date,cam_time,cam_location) values ('$cname','$oname','$date','$time','$location')";
	$result=mysqli_query($conn,$qry);

	if($result){
		echo"Campaign Successfully Created";
	}
	else{
		echo"Error while inserting data";

	
	}

	}
	else{
		echo"Go back to registration page";
	}
?>