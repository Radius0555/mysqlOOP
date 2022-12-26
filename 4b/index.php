<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdboop';

$conn = new mysqli($serv, $user, $pass, $db);

if($conn->connect_error){
  die("Connection failed: ".$conn->connect_error);
}

/*
Przygotowana instrukcja to funkcja używana do wielokrotnego wykonania
tych samych lub podobnych instrukcji SQL z wysoką wydajnością.

Przygotowane zestawienia działają w zasadzie tak:
1. tworzony jest szablon instrukcji SQL i wysyłany do bazy danych.
Niektóre wartości pozostają nieokreślone, nazywane parametrami "?".
Przykład INSERT INTO basatest VALUES (?,?,?)
2. Baza danych analizuje, komplikuje i przeprowadza optymalizację
zapytań w szablonie instrukcji SQL i przechowuje wynik bez jego wykonania
3. WYkonaj: w późniejszym czasiue aplikacja wiąże wartości z parametrami,
a baza danych wykonuje instrukcje.
Aplikacja może wykonać instrukcję tyle raz, ile chce z różnymi wartościami.
*/

$stmt = $conn->prepare("INSERT INTO TestTable(firstName,  lastName,  email)
        VALUES (?,?,?)");
$stmt->bind_param("sss",$firstname, $lastname, $email);
/*
Parametry i execute
*/

$firstname = "Ana";
$lastname = "Fol";
$email = "anafol@wp.pl";
$stmt->execute();

$firstname = "Woj";
$lastname = "Fol";
$email = "wojfol@wp.pl";
$stmt->execute();

$firstname = "Dan";
$lastname = "Sz";
$email = "dansz@wp.pl";
$stmt->execute();

echo 'New records successfully';

$stmt->close();
$conn->close();

?>
