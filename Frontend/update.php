<?php
require("connect.php");

// Űrlap feldolgozása
if (isset($_POST['rendben'])) {

	// Változók tisztítása
	$jarat    = trim($_POST['jarat']);
	$honnan = $_POST['honnan'];
	$hova  = $_POST['hova'];
    $indul  =$_POST['indul'];
    $erkezik  = $_POST['erkezik'];
	

	// Változók vizsgálata
	if (empty($jarat))
		$hiba = "A járat mező nem lehet üres!";

	// Hibaüzenetet összeállítása (ez is lehet egy állandó kódod)
	if (isset($hibak)) {
			$kimenet= $hiba;
	}
	else {
		// Felvitel az adatbázisba
		$id = (int)$_POST['id'];
		$sql = "UPDATE menetrend
				SET jarat = '{$jarat}', honnan = '{$honnan}', hova = '{$hova}', indul = '{$indul}', erkezik = '{$erkezik}'
				WHERE id = {$id}";
		mysqli_query($conn, $sql);
		header("Location: menetrend.php");
	}
}

// Űrlap előzetes kitöltése
else {
	$id = (int)$_GET['id'];
	$sql = "SELECT *
			FROM hajok
			WHERE id = {$id}";
	$eredmeny = mysqli_query($conn, $sql);
	$sor = mysqli_fetch_assoc($eredmeny);

	$jarat    = $sor['jarat'];
	$honnan = $sor['honnan'];
	$hova  = $sor['hova'];
    $indul  = $sor['indul'];
    $erkezik  = $sor['erkezik'];

}
// Űrlap megjelenítése
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Filmek</title>
<link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
<h1>Menetrend módosítása</h1>
<form method="post" action="">
	<?php if (isset($kimenet)) print $kimenet; ?>

	<input type="hidden" id="id" name="id" value="<?php print $id; ?>">
	<p><label for="jarat">Járat:</label><br>

	<input type="text" id="jarat" name="jarat" value="<?php print $jarat; ?>"></p>
	<p><label for="honnan">Honnan:</label><br>
	<input type="text" id="honnan" name="honnan" value="<?php print $honnan; ?>"></p>
	<p><label for="hova">Hová:</label><br>
	<input type="text" id="hova" name="hova" value="<?php print $hova; ?>"></p>

    <p><label for="indul">Indulás:</label><br>
	<input type="time" id="indul" name="indul" value="<?php print $indul; ?>"></p>

    <p><label for="erkezik">Érkezik:</label><br>
	<input type="time" id="erkezik" name="erkezik" value="<?php print $erkezik; ?>"></p>
	
	<input type="submit" id="rendben" name="rendben" value="Rendben">
	<input type="reset" value="Mégse">
	<p><a href="menetrend.php">Vissza a menetrendhez</a></p>

    </div>
</form>
</body>
</html>