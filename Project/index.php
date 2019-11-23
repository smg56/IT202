<?php
session_start();
echo "Hello, your user name is: " . $_SESSION['username'];
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }

?>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" />
<p>Welcome to Left4Good</p>
<a type="submit" href="login.php">
  
  <div type="logout">LOGOUT</div>

	</a>
</html>
