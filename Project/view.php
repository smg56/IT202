
<?php
require('db.php');
include("auth.php");
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a>
| <a href="insert.php">Create New Appointment</a>
| <a href="logout.php">Logout</a></p>
<h2>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>Name</strong></th>
<th><strong>Username</strong></th>
<th><strong>Email</strong></th>
<th><strong>Food Content</strong></th>
<th><strong>Pick up address</strong></th>
<th><strong>Estimated No of People</th>
<th><strong>Phone Number</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT * from `Appointments` WHERE username = '{$_SESSION["username"]}' ";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["name"]; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["foodcontent"]; ?></td>
<td align="center"><?php echo $row["Pickupaddress"]; ?></td>
<td align="center"><?php echo $row["estimatednoofpeople"]; ?></td>
<td align="center"><?php echo $row["Phonenumber"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
