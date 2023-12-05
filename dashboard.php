<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <title></title>
</head>
<style>
body{
    font-family: 'Titillium Web', sans-serif;
    margin: 0;
}

.wrapper{
    width: 100%;
    max-width: 1180px;
    padding: 0 10px;
    margin: 0 auto;
}
.wrapper:after{
    display: block;
    content: "";
    clear: both;
}
h1.logo{
    background-image: url(images/logo1.png);
    background-repeat: no-repeat;
    width: 100px;
    text-indent: -10000px;
    float: left;
}
header{
     background-color:#1B1961;
     top:0;
}

header nav{
    float: right;
}

header nav h2{
    text-indent: -10000px;
    height: 0;
    margin: 0;
}

header nav li{
    float: left;
    list-style-type: none;
    margin: 10px 20px;
}

header nav li a{
    text-decoration: none;
    color: #fff;
    font-size: 18px;
}
header nav li a:hover{
    color: #FDFCFC;
    transition: 0.2s ease-in;
}
.line{
    width: 100%;
    display: block;
     border-bottom: 2px solid #4F4A4A;
}
.line:after{
    display: block;
    content: "";
    clear: both;
}
#banner img{
    opacity: 1;
}
#banner img:hover{
    opacity: 0.5;
    transition: 0.3s ease-in;
}
.title{
    display: block;
}
.title:after{
    display: block;
}
.title ul li{
    font-size: 40px;
    list-style: none;
    text-align: center;
}
.title2{
    display: block;
    font-size: 20px;
    padding-left: 75px;
    text-align: center;
}
.title2:after{
    clear: both;
    content: "";
    display: block;
}
#customers {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 90%;
margin-top:100px;
margin-left:80px;
}

#customers td, #customers th {
border: 1px solid #E8ADAD;
padding: 8px;
text-align:center;
}
table:after{
    display: block;
    clear: both;
    content: "";
}
.title ul li{
    font-size: 30px;
    display: block;
    padding:5px;
    margin-left: 30px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}
#customers:after{
    clear: both;
    display: block;
    content: "";
}
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
footer{
     background: #3b3b3b;
      margin-top: 40%;
    padding: 30px 0;
    width: 100%;
    position: absolute;
}

footer:after{
    content: "";
    display: block;
    clear: both;
}
footer ul{
    list-style: none;
    color: white;
    text-align: center;
}
</style>
<body>
     <header>
            <div class="wrapper">
                <h1 class="logo">Resto</h1>
                <nav>
                    <h2>Main Navigation</h2>
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="campaign.html">Create Campaign</a></li>
                        <li><a href="about.html">About Blood Donation</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header>

        <div id="banner">
        <img src="images/header.jpg" style="margin-left: 20%;">
    </div>
    <div class="line"></div>
    <div class="title">
        <ul>
            <li>Welcome, Admin</li>
        </ul>
    </div>
    <div class="title2">
        <h4>Below are the list of the people who are registered as donors.</h4>
    </div>

<?php
include 'dbconnect.php';

$qry="Select * from blood";
$result=mysqli_query($conn,$qry);

echo"<table border='1' id='customers'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Blood Group</th>
                <th colspan=2>Operations</th>
            </tr>";


while($row=mysqli_fetch_array($result)){
    echo "<tr>
                <td>".$row['fname']."</td>
                <td>".$row['lname']."</td>
                <td>".$row['address']."</td>
                <td>".$row['contact']."</td>
                <td>".$row['gender']."</td>
                <td>".$row['blood_group']."</td>
                <td><a href='editform.php?id=".$row['id']."'>Edit</td>
                <td><a href='delete.php?id=".$row['id']."' >Delete</td>
                

                
        </tr>";
    
}
?>    

</body>
<footer>
     <div class="wrapper">
         <ul>
             <li>Blood Donors Management System</li>
                 <li>2018</li>
        </ul>
     </div>
</footer>
</html>