<?php
require_once('core/init.php');

$name = $_POST['name'];

$url = $_POST['url'];
$location = $_POST['location'];
$description = $_POST['description'];
$address = $_POST['address'];
$ahli_waqaf = $_POST['ahli_waqaf'];
$security = $_POST['security'];



$query = "INSERT INTO aset VALUES (  null, '', '$name', '$url' , '$location' , '$description' , '$address' , '$ahli_waqaf' , '$security')";

if (mysqli_query($link, $query) === TRUE) {
	echo "berhasil input data";
}else{
	echo "gagal input data";
}

?>