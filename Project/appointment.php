
<?php
require('db.php');
include("auth.php");
session_start();
echo "Hello, your user name is: " . $_SESSION['username'];
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p>Welcome, this is Food Pickup Form.</p>
<p><a href="index.php">Home</a><p>
<p><a href="insert.php">Create a new appointment</a></p>
<p><a href="view.php">View Appointments</a><p>
<p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
