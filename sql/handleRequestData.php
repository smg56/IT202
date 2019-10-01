<?php

echo "<pre>" . var_export($_GET,true) . "</pre>";
if(isset($_GET['name'])){
	echo "<br>Hello, " . $_GET['name'] . "<br>";
}

if(isset($_GET['number1'])){
	$number1 = $_GET['number1'];
	if (is_numeric($number1)){
	echo "<br>" . $number1 . " is a number...";
	}
        else{
        echo"<br>Not a number";
        }
}

if(isset($_GET['number2'])){
        $number2 = $_GET['number2'];
        if (is_numeric($number2)){
        echo "<br>" . $number2 . " is a number...";
        }
	else{
	echo "<br>Not a number";
	}
}

$a=is_numeric($number1);
$b=is_numeric($number2);

if (($a== TRUE) and ($b == TRUE)){
echo "<br>"  . "You can do sum ";
$sum = $number1 + $number2;
echo "<br> sum: " . $sum;
echo "<br>".$number1.$number2." After concatinating the numbers";
}
else {
echo "<br>" . " You can't do sum <br>";
echo "<br> You can not concatinate because it is not number";
}


echo "<br> Whhen i tried to use the same variable for different values, It took the last value on the link it ignored all the other valus of that same";
echo "<br> variable. and when i tried special characters as an input of the numbers it didn't take the value because it was not the number and i put the line which says that you can not do sum and concatinate. ";
?>
