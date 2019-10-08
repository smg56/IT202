<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getName(){
	if(isset($_POST['name'])){
		echo "<p>Hello, " . $_POST['name'] . "</p>";
	}
}
function checkPasswords(){
	if(isset($_POST['password']) && isset($_POST['confirm'])){
		if($_POST['password'] == $_POST['confirm']){
			echo "<br>Passwords Matched!<br>";
		}
		else{
			echo "<br>Passwords didn't match!<br>";
		}
	}
}
?>
<html>
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
<body><?php getName();?>
<form method="POST" action="#">
<input name="name" type="text" placeholder="Enter your name"/>
<input type="password" name="password" placeholder="Enter password"/>
<input type="password" name="confirm" placeholder="Re-Enter password"/>
<span style="display:none;" id="validation.password"></span>
<input type="submit" value="Try it"/>
</form>
</body>
</html>
<?php checkPasswords();?>
<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
}
?>
