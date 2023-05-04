<?php
require("connect.php");

// Tábla létrehozása 2 pont
$sql = "CREATE TABLE hajok (
  id int(11) NOT NULL,
  jarat varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  honnan varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  hova varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  indul time NOT NULL,
  erkezik time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;";
  
  //ellenőrzése: 1 pont 
    if ($conn->query($sql) === TRUE) {
      echo "A hajók tábla sikeresen létrehozásra került";
    } else {
      echo "Hiba: " . $conn->error;
    }
    
      $conn->close();
      //összesen: 3 pont
?>