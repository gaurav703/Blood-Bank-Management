<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif; 
	
	 }
* {
	box-sizing: border-box;
	align:center;
	
}


input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
     background-color: #F3EFEE;

}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #670067;
}
.line1{
    width: 100%;
     border-top:  2px solid #D4C8C5;
}

.container {
    padding: 20px;
    display: block;
    margin-left: 50px;
    margin-right: auto;
    margin-top:60px;
    width: 60%;
    
    
}
.edit li{
    border-top: 2px solid red;
    font-size: 30px;
    list-style: none;
    font-family: 'Cairo', sans-serif;
    margin-top: 4%;
    margin-left: 2%;
}
</style>
</head>
<body>
<?php
if(isset($_GET['id'])){
   $id=$_GET['id']; 

include 'dbconnect.php';
$qry="select * from blood where id=$id";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
    
?>


<div class="edit">
    <li>
        You are now in the Edit section
    </li>
</div class="edit">

<div class="container">
  <form action="update.php" method="GET">
    <label >First Name</label>
    <input type="text"  name="fname" placeholder="Your name.." value="<?php echo $row['fname']; ?>"required>

    <label >Last Name</label>
    <input type="text"  name="lname" placeholder="Your last name.." value="<?php echo $row['lname']; ?>" required>

    <label >Address</label>
    <input type="text"  name="address" placeholder="Your current address.." value="<?php echo $row['address']; ?>" required>

    <label >Contact</label>
    <input type="text"  name="contact" placeholder="Your mobile number.." value="<?php echo $row['contact']; ?>" required>

     <label >Gender</label>
     <select name="gender" value="<?php echo $row['gender']; ?>" >
        <option value="volvo">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

     <label>Blood Group</label>
    <select name="blood" value="<?php echo $row['blood']; ?>" >
        <option value="select">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>

    <input type="hidden" name ="id" value="<?php echo $row['id']?>" >
    <input type="submit" value="Update">
    
  </form>
<?php
 } 
}
?>
  
  
</div>

</body>
</html>
