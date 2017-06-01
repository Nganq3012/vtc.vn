<html>
	<head>
		<link rel="stylesheet" type="text/css" href="login_style.css">
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="login_effect.js"></script>
	</head>
	   
	<body>
	
	<center>
	 <input type="button" id="show_login" value="Show Login">
	 <div id = "loginform">
		  <form method = "post" action = "dologin.php">
		   <p>Login Form</p>
		   <input type = "button" id = "close_login" value="Close Login">
		   <input type = "text" id = "login" placeholder = "User Id" name = "uid">
		   <p><?php echo $status;?></p>
		   <input type = "password" id = "password" name = "upass" placeholder = "***">
		   <input type = "submit" id = "dologin" value = "Login" ">
		  </form>
	 </div>
	</center>

	</body>
</html>