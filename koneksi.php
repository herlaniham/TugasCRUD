<?php

$conn = mysqli_connect("localhost", "root","", "db_hp");

if(!$conn){
	echo "Koneksi gagal";
	die ();
} else {
	echo "Koneksi berhasil";
}

?>