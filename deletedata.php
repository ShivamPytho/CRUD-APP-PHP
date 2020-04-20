<?php
include 'connection.php';

if (isset($_POST['id'])) {
	$id = $_POST['id'];

	$sql = "DELETE FROM crudtable WHERE id=$id";
	$res = $conn->query($sql); 
if ($res) {
	echo 1;
}
else{
	echo 0;
}
}

?>