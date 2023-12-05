<html>
<head>
	<style>
	body{
		font-family: 'Titillium Web', sans-serif;
	}
.title{
	margin-left: 6%;
	font-family: 'Titillium Web', sans-serif;
}
#customers {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 80%;
margin-top:100px;
margin-left:80px;
}

#customers td, #customers th {
border: 1px solid #ddd;
padding: 8px;
text-align:center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
padding-top: 12px;
padding-bottom: 12px;
text-align: center;
background-color: #ED1B1B;
color: white;
}
#customers th:hover{
 background-color: #D01010;  
}
</style>
</head>
<div class="title">
        <h2>List of the Campaigns with their details.</h2>
	</div>
<body>
<?php
include 'dbconnect.php';

$qry="Select * from campaign";
$result=mysqli_query($conn,$qry);

echo"<table border='1' id='customers'>
			<tr>
				<th>Campaign Name</th>
				<th>Oeganizer Name</th>
				<th>Date</th>
				<th>Time</th>
				<th>Location</th>
			</tr>";


while($row=mysqli_fetch_array($result)){
	echo "<tr>
				<td>".$row['cam_name']."</td>
				<td>".$row['org_name']."</td>
				<td>".$row['cam_date']."</td>
				<td>".$row['cam_time']."</td>
				<td>".$row['cam_location']."</td>

				
		</tr>";
	
}

?>
</body>
</html>

