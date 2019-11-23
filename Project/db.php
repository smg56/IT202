<?php
$host="sql1.njit.edu";//your msql host [sql1, sql2, sql3]
$database="smg56";//ucid
$username="smg56";//ucid
$password="czcW2mym";//mysql password (not ucid password)


$con = mysqli_connect("sql1.njit.edu","smg56","czcW2mym","smg56");

// Check connection

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
