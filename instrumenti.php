<?php
require "konekcija.php"; 

$id = $_POST['id'];
$naziv = $_POST['naziv'];
$vrsta = $_POST['vrsta'];
$proizvodjac = $_POST['proizvodjac'];
$cena = $_POST['cena'];

$sql = "INSERT INTO instrumenti (id, naziv, vrsta, proizvodjac, cena) VALUES (NULL, '$naziv', '$vrsta', '$proizvodjac', '$cena')";



if(mysqli_query($db,$sql)) {
	echo "komanda uspesna";
}else{
	echo "komanda neuspesna";
}



?>