<?php 
include '../koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($host,"DELETE FROM pekerja WHERE id_petani = $hapus");
header("location:../index.php");
?>