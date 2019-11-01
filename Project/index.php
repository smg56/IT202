<?php
session_start();
echo "Hello, your user name is: " . $_SESSION['username'];
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<p>Welcome to Left4Good</p>
</html>
