<html>
    <head>
        <h1>Create Data Baru
</head>
<h3>Perkembangan_Hasil_Pertanian</h3>
    <form action="" method="post" name="form1">
        <table width="25%" border="0">
            <!-- <tr>
                <td>id_pemeriksaam</td>
                <td><input type="text" name="id_pemeriksaan"></td>
            </tr> -->
            <tr>
                <td>jenis</td>
                <td><input type="text" name="jenis"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>perkembangan</td>
                <td><input type="text" name="perkembangan"></td><tr>
            </tr>
            <tr>
               <td></td>
               <td><input type="submit" value="simpan" name="proses"></td>
</tr>
</table>
            <?php
include "../koneksi.php";
if(isset($_POST['proses'])){
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $perkembangan = $_POST['perkembangan'];
    $result = mysqli_query($host, "INSERT INTO `perkembangan_hasil_pertanian`(`id_pemeriksaan`, `jenis`, `nama`, `perkembangan`) VALUES (NULL,'$jenis','$nama','$perkembangan')");
    if($result){
        echo"Data perkembangan hasil pertanian baru telah tersimpan";
        header("location:../index.php");
    }else{
        die(mysqli_error($host));
    }
}
?>
</html>