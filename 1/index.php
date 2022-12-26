<?php

/*
Połączenie z bazą Mysqli OOP:
*/

$server = 'localhost';
$user = 'root';
$pass = 'Radek91!';

$conn = new mysqli($server, $user, $pass);

if($conn->connect_error){
  die('Połączenie nie udane: '.$conn->connect_error);
}

echo 'Połączenie sukces!<br><br>';

$conn->close();

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';

$conn = mysqli_connect($serv, $user, $pass);

if(!$conn){
  die('Połączenie nie udane: '.mysqli_connect_error());
}
echo 'Połączenie sukces nr. 2!<br><br>';
mysqli_close($conn);

?>
