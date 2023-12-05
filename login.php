<?php
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

		
		button:hover {
			background-color:#06930B; 
			font-family: Helvetica;

		}
		label{
			font-size: 15px;
			font-family: Helvetica;
		}

		
		.cancelbtn {
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		
		.imgcontainer {
			text-align: center;
			margin: 24px 0 12px 0;
		}

		
		img.avatar {
			width: 40%;
			border-radius: 50%;
		}

		
		.container {
			padding: 16px;
		}

		
		span.psw {
			float: right;
			padding-top: 16px;
		}

		
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
	
	<form action="successadmin.php" method="post">
	  <div class="imgcontainer">
		<img src="images/admin.png" alt="Avatar" class="avatar">
	  </div>

	  <div class="container">
		<label for="uname">Enter your Username</label>
		<input type="text"  name="uname" required>

		<label for="psw">Enter you Password</label>
		<input type="password"  name="psw" required>

		<button type="submit">Login</button>
		<label>
		  <input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
		<button type="button" class="cancelbtn">Cancel</button>
		<span class="psw">Forgot <a href="#">password?</a></span>
	  </div>
	</form>
	
</body>
</html>