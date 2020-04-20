<?php
include 'connection.php';


extract($_POST);

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['number']))

$query ="INSERT INTO `crudtable` (`firstname`, `lastname`, `email`, `number`) VALUES ('$firstname', '$lastname', '$email', '$number')";
$insert = $conn->query($query); 
if ($insert) {
	echo 1;
}
else{
	echo 0;
}
?>