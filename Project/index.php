<?php
session_start();
echo "Hello, your user name is: " . $_SESSION['username'];
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Left4Good</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>Welcome to Left4Good</p>
<p>Your consistant support can save lives.</p>
<p><a href="appointment.php">Food Pickup Appointment</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
