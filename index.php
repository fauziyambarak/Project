<?php
session_start();

?>
<HTML>
<title>log in page</title>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="login-container">
		<h2><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Log in</b></h2>
	 <form action="includes/login.inc.php" method="POST">
		<label>Username :</label>
		<br><input type="text" name="uid" placeholder="username/email"><br><br>
		<label>Password:</label> 
		<br><input type="password" name="pwd" placeholder="password"><br><br>
		<div class="loginbtn">
		<button type="submit" name="submit">Login</button>
</div>
		<div class="signupbtn">
		<button type="submit" name="submit"><a href="signup.php">Sign up</a></button>
</div>
	</form>
	
</div>



</body>
</HTML>