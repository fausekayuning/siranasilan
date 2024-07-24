<?php 
include '../koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM perkembangan_hasil_pertanian WHERE id_pemeriksaan = $hapus");
header("location:../index.php");
?>