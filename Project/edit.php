<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from Appointments where id='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a>
| <a href="insert.php">Create New Appointment</a>
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$username =$_REQUEST['username'];
$email =$_REQUEST['email'];
$foodcontent=$_REQUEST['foodcontent'];
$Pickupaddress =$_REQUEST['Pickupaddress'];
$estimatednoofpeople =$_REQUEST['estimatednoofpeople'];
$Phonenumber =$_REQUEST['Phonenumber'];

$update="update Appointments set trn_date='".$trn_date."',
name='".$name."',username='".$userame."', email='".$email."',foodcontent='".$foodcontent."',Pickupaddress='".$Pickupaddress."',
estimatednoofpeople='".$estimatednoofpeople."',Phonenumber='".$Phonenumber."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action="">
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="text" name="name" placeholder="Enter Name"
required value="<?php echo $row['name'];?>" /></p>

<p><input type="text" name="username" placeholder="Enter username"
required value="<?php echo $row['username'];?>" /></p>

<p><input type="email" name="email" placeholder="Enter Email"
required value="<?php echo $row['email'];?>" /></p>


<p><input type="text" name="foodcontent" placeholder="Enter food-content"
required value="<?php echo $row['foodcontent'];?>" /></p>

<p><input type="text" name="Pickupaddress" placeholder="Enter pickup address"
required value="<?php echo $row['Pickupaddress'];?>" /></p>

<p><input type="text" name="estimatednoofpeople" placeholder="Enter No. of people to eat"
required value="<?php echo $row['estimatednoofpeople'];?>" /></p>

<p><input type="text" name="Phonenumber" placeholder="Enter Phonenumber"
required value="<?php echo $row['Phonenumber'];?>" /></p>

<p><input name="submit" type="submit" value="Update" /></p>

</form>
<?php } ?>
</div>
</div>
</body>
</html>
