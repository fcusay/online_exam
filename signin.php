<html>
<head>
	<title>online exam</title>
</head>
<body>
		<center>
		<h3> Registration Form</h3>
		<form action = 'signinAuthen.php' method = "POST">
			
				
				First Name:&nbsp; <input id = 'fname' type = 'text' name = 'fname'><span id  = "mayor1"></span><br>
				Last Name:&nbsp; <input id = 'lname' type = 'text' name = 'lname'><span id  = "mayor2"></span><br>
				Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id = 'email' type = 'email' name = 'email'><span id  = "mayor3"></span><br>
				Password: &nbsp;&nbsp;&nbsp;<input id = 'password' type = 'password' name = 'password'><span id = 'mayor4'></span><br>
				Confirm Password: <input id = 'confirmpassword' type = 'password'><span id = 'mayor5'></span><br>
				<input id = "input" type = "submit" value = "submit">
				<input type = "reset" value = "Clear">
				
		</form>
			<a href="login.php">Log in</a>
			</center>

</body>
<script type="text/javascript" src = "jquery.1.10.2.js"></script>
<script type="text/javascript" src = validation.js></script>
</html>
