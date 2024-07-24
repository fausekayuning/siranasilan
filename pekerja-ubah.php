<?php

include '../koneksi.php';
$id_petani = $_GET['ubah'];
$sql = "SELECT * FROM pekerja where id_petani = $id_petani";
$result = mysqli_query($host, $sql);
$row = mysqli_fetch_assoc($result);
$nama_petani = $row['nama_petani'];


if (isset($_POST['proses'])) {
    $nama_petani = $_POST['nama_petani'];
    $posisi_jabatan = $_POST['posisi_jabatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat_petani = $_POST['alamat_petani'];

    $sql = "update `pekerja` set id_petani=$id_petani,nama_petani='$nama_petani',posisi_jabatan='$posisi_jabatan',jenis_kelamin='$jenis_kelamin',alamat_petani='$alamat_petani' where id_petani=$id_petani ";
    $result = mysqli_query($host, $sql);
    if ($result) {
        header("location:../index.php");

    } else {
        die(mysqli_error($host));

    }
}
?>
<html>
    <head><h3>Datfar Pekerja</h3></head>
<body>
    <form action=" " method="post" name="form1">
        <table width="25%" border="0">
        <!-- <tr>
                <td>id_petani</td>
                <td><input type="text" name="id_petani" value=""></td>
            </tr> -->
            <tr>
                <td>nama_petani</td>
                <td><input type="text" name="nama_petani"  value="<?php echo $row['nama_petani'];?>"></td>
            </tr>
            <tr>
               <td>posisi_jabatan</td>
                <td><input type="text" name="posisi_jabatan"  value="<?php echo $row['posisi_jabatan'];?>"></td>
            </tr>
            <tr>
            <td>jenis_kelamin</td>
            <td>
            <select name="jenis_kelamin" id="">
            <option value="laki-laki" <?php if($row['jenis_kelamin'] == "laki-laki"){echo"selected";}?>>laki-laki</option>
            <option value="perempuan" <?php if($row['jenis_kelamin'] == "perempuan"){echo"selected";}?>>perempuan</option>
            </select>
            </td>
            </tr>
            <tr>
            <td>alamat_petani</td>
                <td><input type="text" name="alamat_petani"  value="<?php echo $row['alamat_petani'];?>"></td>
            </tr>
               <td><input type="submit" value="simpan" name="proses"></td>

</tr>
</table>

</form>
</body>
</html>