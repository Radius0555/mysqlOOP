<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';

$conn = new mysqli($serv, $user, $pass);

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}

$sql = 'CREATE DATABASE testDBoop';
if($conn->query($sql) === TRUE){
  echo 'Database created successfully';
}else{
  echo 'Error creating database: '.$conn->error;
}

$conn->close();

?>
