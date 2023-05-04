<?php
//  2.feladat
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "menetrend";

// Hozd létre a kapcsolatot 1 pont
$conn = new mysqli($servername, $username, $password, $dbname);

/*
Ellenőrizd le, majd kommentezd ki: 1 pont
if (!$conn) {
  die("Kapcsolat sikertelen: " . mysqli_connect_error());
}
echo "Kapcsolat sikeresen létrejött";

Összesen : 2 pont
*/
?>