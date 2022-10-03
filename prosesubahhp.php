<?php
include_once("koneksi.php");

$merk = $_POST['merk'];
$warna= $_POST['warna'];
$ram= $_POST['ram'];
$rom= $_POST['rom'];
$query = "UPDATE tb_hp SET rom='$rom',warna='$warna',ram='$ram' WHERE merk='$merk'";
$hasil=mysqli_query($conn,$query);

if ($hasil) {
header('location:index.php');
} else {
echo "Update data gagal";
}
?>