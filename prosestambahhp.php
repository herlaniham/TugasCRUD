<?php
include_once("koneksi.php");
$merk = $_POST['merk'];
$warna= $_POST['warna'];
$ram= $_POST['ram'];
$rom= $_POST['rom'];

$query="INSERT INTO tb_hp
(merk,warna,ram,rom) VALUE
('$merk','$warna','$ram','$rom')";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "input data gagal";
}
?>