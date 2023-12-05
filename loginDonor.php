<?php
//session_start(); //start a new or resume a existing session
//unset($_SESSION['key]']); //session closed
?>
<html>
</head>
	<style>
		form {
			border: 3px solid #f1f1f1;
			width:30%;
			margin-left:450px;
			margin-top:40px;
		}

		/* Full-width inputs */
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}
		input[type=password]:hover{
			transition: 0.1s ease-in;
			background-color: #F7F7F7;
		}
		input[type=text]:hover{
			transition: 0.1s ease-in;
			background-color: #F7F7F7;
		}

		/* Set a style for all buttons */
		button {
			background-color: #13A818;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			font-size: 20px; 
		}

		/* Add a hover effect for buttons */
		button:hover {
			background-color:#06930B; 
			font-family: Helvetica;

		}
		input[type=register]{
			background-color: #2CDED2;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			font-size: 20px; 
		}

		/* Add a hover effect for buttons */
		input[type=register]:hover {
			background-color:#18B3A9; 
			font-family: Helvetica;
		}
		
		label{
			font-size: 15px;
			font-family: Helvetica;
		}

		/* Extra style for the cancel button (red) */
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		/* Center the avatar image inside this container */
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		/* Avatar image */
		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		/* Add padding to containers */
		.container {
			padding: 16px;
		}

		/* The "Forgot password" text */
		span.psw {
			float: right;
			padding-top: 16px;
		}

		/* Change styles for span and cancel button on extra small screens */
		@media screen and (max-width: 300px) {
			span.psw {
				display: block;
				float: none;
			}
			.cancelbtn {
				width: 100%;
			}
		}
	
	</style>

</head>
<body>
	
	<form action="successdonor.php" method="post">
	  <div class="imgcontainer">
		<img src="images/user.png" alt="Avatar" class="avatar">
	  </div>

	  <div class="container">
		<label for="uname">Enter your Username</label>
		<input type="text"  name="uname">

		<label for="psw">Enter your Password</label>
		<input type="password"  name="psw">

		<button type="submit">Login</button>
		<button type="submit" formaction="register.html">Register</button>
		
	</form>
	
	
</body>
</html>