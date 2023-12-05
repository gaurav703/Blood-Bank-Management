<html>
<head>
	<style>
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
background-color: #4CAF50;
color: white;
}
</style>
</head>
<body>
<?php
include 'dbconnect.php';

$qry="Select * from user";
$result=mysqli_query($conn,$qry);

echo"<table border='1' id='customers'>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Comment</th>
				<th colspan='2'>Operations to be performed</th>
			</tr>";


while($row=mysqli_fetch_array($result)){
	echo "<tr>
				<td>".$row['fname']."</td>
				<td>".$row['lname']."</td>
				<td>".$row['address']."</td>
				<td>".$row['comment']."</td>
				<td><a href='editform.php?id=".$row['id']."'>Edit</td>
				<td><a href='delete.php?id=".$row['id']."'>Delete</td>
				

				
		</tr>";
	
}

?>
</body>
</html>

