<?php 
//5.feladat
require("connect.php");
// 1pont
	$sql = "SELECT * FROM hajok";
	$results = $conn->query($sql);
// 1 pont
	while($hajok = $results->fetch_assoc()){
		$menetrend[] = $hajok;
	}
// 1 pont	
	highlight_string("<?php " . var_export($menetrend, true) . ";?>");

	$encoded_data = json_encode($menetrend, JSON_PRETTY_PRINT);
// 1pont
    file_put_contents('hajok.json', $encoded_data);

//összesen:4 pont