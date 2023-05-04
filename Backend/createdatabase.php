<?php
//1. feladat
$servername = "localhost";
$username = "root";
$password = "";

// Kapcsolat létrehozása 1 pont
$conn = mysqli_connect($servername, $username, $password);
// Kapcsolat ellenőrzése
if (!$conn) {
  die("Hiba: " . mysqli_connect_error());
}
// Adatbázis létrehozása 1 pont

$sql = "CREATE DATABASE menetrend";

//adatbázis létrehozásának ellenőrzése 1pont
if (mysqli_query($conn, $sql)) {
  echo "adatbázis sikeresen létrehozva";
} else {
  echo "Hiba az adatbázis létrehozásakor: " . mysqli_error($conn);
}
//összesen: 3 pont
?>