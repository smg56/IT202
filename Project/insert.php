<?php
require('db.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
    $username =$_REQUEST['username'];
    $email = $_REQUEST['email'];
    $foodcontent = $_REQUEST['foodcontent'];
    $Pickupaddress = $_REQUEST['Pickupaddress'];
    $estimatednoofpeople = $_REQUEST['estimatednoofpeople'];
    $Phonenumber =$_REQUEST['Phonenumber'];

    $ins_query="insert into new_records
    (`trn_date`,`name`,`username`,`email`,`foodcontent`,`Pickupaddress`,`estimatednoofpeople`, `Phonenumber`)values
    ('$trn_date','$name','$username','$email','$foodcontent','$Pickupaddress','$estimatednoofpeople','$Phonenumber')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a>
| <a href="view.php">View Appointments</a>
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="username" placeholder="Enter username" required /></p>
<p><input type="email" name="email" placeholder="Enter email address" required /></p>
<p><input type="text" name="foodcontent" placeholder="Enter the food content" required /></p>
<p><input type="text" name="foodaddress" placeholder="Enter the Pickup address" required /></p>
<p><input type="text" name="estimatednoofpeople" placeholder="Enter no of people to eat" required /></p>
<p><input type="text" name="Phonenumber" placeholder="Enter Phonenumber" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
