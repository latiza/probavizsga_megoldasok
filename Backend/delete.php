<?php
//delete.php?id=1 törölje az 1 id-t, ha 
if (isset($_GET['id'])) {
	require("connect.php");
	$id = (int)$_GET['id'];
	$sql = "DELETE FROM hajok
			WHERE id = {$id}";
	mysqli_query($conn, $sql);
    echo "Törlés sikeres";
}else{
    echo "A termék nem létezik.";
}

?>