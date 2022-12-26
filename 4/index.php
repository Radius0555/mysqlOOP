<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdboop';

$conn = new mysqli($serv, $user, $pass, $db);

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO TestTable(firstName,  lastName,  email)
        VALUES ('Rad', 'Fol', 'radF@wp.pl');";
$sql .= "INSERT INTO TestTable(firstName,  lastName,  email)
        VALUES ('Aga', 'Gran', 'agaG@wp.pl');";
$sql .= "INSERT INTO TestTable(firstName,  lastName,  email)
        VALUES ('Raf', 'Gran', 'rafG@wp.pl');";
/*
multi_query = stosujemy gdy należy wykonać wiele instrukcji SQL.
W tym przykładzie trzy nowe rekordy.
*/
if($conn->multi_query($sql) === TRUE){
  echo 'New records successfully';
}else{
  echo 'Error: '.$sql."<br>".$conn->error;
}

$conn->close();

?>
