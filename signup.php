<?php
session_start();
?>

<html>
	<title>sign up</title>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
	<body>

	<div class="signup-container">	
		<h2><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sign up</b></h2>
<form action="includes/signup.inc.php" method="POST">
	<label>First Name :</label>
	 <br> <input type="text" name="first" placeholder="Firstname"><br>
	<label>Last Name :</label>
	 <br><input type="text" name="last" placeholder="Lastname"><br>
	<label>Email :</label> 
	 <br><input type="text" name="email" placeholder="Email"><br>
	<label>Username :</label>
	 <br><input type="text" name="uid" placeholder="Username"><br>
	<label>Password:</label> 
	 <br><input type="password" name="pwd" placeholder="password"><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit">signup</button>

</form>

</div>





	</body>
</html>