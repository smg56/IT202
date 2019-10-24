<!DOCTYPE html>
<?php
function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
			echo "<br>Passwords Matched!<br>";
		}
		else{
			echo "<br>Password Didn't match<br>";
			return true;
		}
	}
}
?>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" />
<head>
<script>
function validate(){
	var form = document.forms[0];
	var password = form.password.value;
	var conf = form.confirm.value;
	console.log(password);
	console.log(conf);
	let pv = document.getElementById("validation.password");
	let succeeded = true;
	if(password == conf){
		
		pv.style.display = "none";
	
	}
	else{
		pv.style.display = "block";
		pv.innerText = "Passwords don't match";
		
		succeeded = false;
	}
}
</script>
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
       
	if(checkPasswords() === true ){
	echo "<div class='form'>
	<h3>You are not registered successfully.</h3>
	<br/>Click here to <a href='login.php'>Login</a></div>";
	}

        else{
	    $query = "INSERT into `users1` (username, password, email, trn_date)
        VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a>
<br/>
<br/>Enter your information below  to register
</div>";

        }
    }
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="password" name="confirm" placeholder="Re-Enter password"/>
<span style="display:none;" id="validation.password"></span>
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php ?>
</body>
</html>
