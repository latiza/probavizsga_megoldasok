<?php
require("connect.php");

// Ha az összes adat bekerül: 2pont

$sql = "INSERT INTO hajok (id, jarat, honnan, hova, indul, erkezik)
VALUES (1, 'A1', 'Siófok', 'Balatonalmádi', '09:30:00', '10:30:00');";
$sql .= "INSERT INTO hajok (id, jarat, honnan, hova, indul, erkezik)
VALUES (2, 'A2', 'Balatonalmádi', 'Alsóörs', '10:35:00', '11:10:00');";
$sql .= "INSERT INTO hajok (id, jarat, honnan, hova, indul, erkezik)
VALUES (3, 'A2', 'Alsóörs', 'Csopak', '11:10:00', '11:40:00');";
$sql .= "INSERT INTO hajok (id, jarat, honnan, hova, indul, erkezik)
VALUES (4, 'A2', 'Csopak', 'Siófok', '11:40:00', '12:20:00');";
$sql .= "INSERT INTO hajok (id, jarat, honnan, hova, indul, erkezik)
VALUES (5, 'A3', 'Siófok', 'Csopak', '16:00:00', '16:45:00')";



//ellenőrzés 1 pont
if ($conn->multi_query($sql) === TRUE) {
  echo "Az adatok beszúrásra kerültek";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//összesen : 3 pont
?>