<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdboop';

$conn = new mysqli($serv, $user, $pass, $db);

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM testtable";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    echo 'id: '.$row["id"]." - Name: ".$row['firstname']." "
    .$row["lastname"]."<br><br>";
  }
}else{
  echo "0 result";
}

$conn->close();

?>
