<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}
.notification .badge {
  position: absolute;
  top: -1px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}
</style>	
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="topnav">
    
  <a href="main.php">Home</a>
  <a href="company.php">Company</a>
  <a href="ratings.php">Rate Company</a>
  <a href="notification.php" class="notification"><span>Notification</span><span class="badge">3</span></a>
 <div class="logout"> <a href="index.php">Logout</a></div>
</div>
<!-- navigation-->
</body>
</html>