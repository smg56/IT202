<?php
require('config.php');
echo "Loaded host:" . $host;

try{

    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $db = new PDO($conn_string, $username, $password);
    echo "Connected";


$query="create table if not exists `TestUsers`(
	`id` int auto_increment not null,
	`username` varchar(30) not null unique,
	`pin` int default 0,
	PRIMARY KEY (`id`)
) CHARACTER SET utf8 COLLATE utf8_general_ci";

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$stmt = $db->prepare($query);

print_r($stmt->errorInfo());

$r = $stmt->execute();
echo "<br>" . ($r>0?"Created table or already exists":"Failed to create table") . "<br>";
unset($r);


$insert_query = "INSERT INTO `TestUsers`( `username`, `pin`) VALUES (:username, :pin)";
$stmt = $db->prepare($insert_query);
  $newUser = "Bobby";
  $newPin = 1234;
$r = $stmt->execute(array(":username"=> $newUser, ":pin"=>$newPin));
  print_r($stmt->errorInfo());

//TODO catch error from DB
echo "<br>" . ($r>0?"Insert successful":"Insert failed") . "<br>";

//TODO select query using bindable :username is where clause
//select * from TestUsers where username =
$select_query = "select * from `TestUsers` where username = :username";
//$stmt = $db->prepare($select_query);
}



catch(Exception $e){
            echo $e->getMessage();
            echo "Something went wrong";
}


