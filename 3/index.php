<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdboop';

$conn = new mysqli($serv, $user, $pass, $db);

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}

$sql = "CREATE TABLE TestTable(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName VARCHAR(30) NOT NULL,
  lastName VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql) === TRUE){
  echo 'Table created successfully';
}else{
  echo 'Error creating table: '.$conn->error;
}

$conn->close();

?>
