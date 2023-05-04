<?php

require("connect.php"); 
//keresés 1pont
$kifejezes = (isset($_POST['kifejezes'])) ? $_POST['kifejezes'] : "";
//lekérdezés: 3 pont
$sql = "SELECT *
		FROM hajok
		WHERE (
			jarat LIKE '%{$kifejezes}%' 
            OR honnan LIKE '%{$kifejezes}%'
			OR hova LIKE '%{$kifejezes}%')"; 
$eredmeny = mysqli_query($conn, $sql);
//adatok összefűzése táblázatba: 3 pont
	$kimenet= "<table>
    <tr>
    <th>Járat</th>
    <th>Honnan</th>
    <th>Hová</th>
    <th>Indulás</th>
    <th>Érkezés</th>
    <th>Módosítás</th></tr>
    ";
    while ($sor = mysqli_fetch_assoc($eredmeny)) {
        $kimenet.= "<tr>
            <td>{$sor['jarat']}</td>
            <td>{$sor['honnan']}</td>
            <td>{$sor['hova']}</td>
            <td>{$sor['indul']}</td>
            <td>{$sor['erkezik']}<span> perc</span></td>
            <td> <a href=\"update.php?id={$sor['id']}\">Módosítás</a> </td>
        </tr>";
        
    }
    $kimenet.= "</table>";
 
?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menetrend</title>
<style>
th,td{
    border:1px solid black;
    padding:10px
}
tr:nth-child(even) {
  background-color: lightgrey;
}
</style>
</head>

<body>
<div class="container"> 
<h1>Hajók menetrendje</h1>
<form method="post" action="">
<label>Keresés a listában: </label><input type="search" id="kifejezes" name="kifejezes">
</form>

<?php print $kimenet; ?>

	
</form>

</div>
</body>
</html>
