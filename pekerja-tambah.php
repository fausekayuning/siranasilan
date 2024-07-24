
<html>
<head>
<h1>Form Data</h1>
</head>

<body>
    <h3>Daftar Pekerja</h3>
    <form action="" method="post" name="form1">
        <table width="25%" border="0">
             <!-- <tr>
                  <td>id_petani</td>
                  <td><input type="text" name="id_petani"></td>
             </tr> -->
             <tr>
                  <td>nama_petani</td>
                  <td><input type="text" name="nama_petani"></td>
             </tr>
             <tr>
                  <td>posisi_jabatam</td>
                  <td><input type="text" name="posisi_jabatan"></td>
             </tr>
             <tr>
               <td>jenis kelamin</td>
               <td>
               <select name="jenis_kelamin" id="">
     <option value="laki-laki">laki-laki</option>
     <option value="perempuan">perempuan</option>
</select>
               </td>

             </tr>
             <tr>
                 <td>alamat_petani</td>
                 <td><input type="text" name="alamat_petani"></td>
             </tr>
             <tr>
               <td></td>
          <td><input type="submit" value="simpan" name="submit"></td>
</tr>
</table>

<?php
//Check If form submitted, insert form data into users table.
if(isset($_POST['submit'])) {
     // $id_petanis= $_POST['id_petani'];
     $nama_petani= $_POST['nama_petani'];
     $posisi_jabatan= $_POST['posisi_jabatan'];
     $jenis_kelamin= $_POST['jenis_kelamin'];
     $alamat_petani= $_POST['alamat_petani'];
     // echo($judul);
     // include database connection file 
     include_once("../koneksi.php");

     // Insert user data into table
     $sql = "INSERT INTO `pekerja` (`id_petani`, `nama_petani`, `posisi_jabatan`, `jenis_kelamin`, `alamat_petani`) VALUES (NULL, '$nama_petani', '$posisi_jabatan', '$jenis_kelamin', '$alamat_petani')";
     $result = mysqli_query($host,$sql);

     if($result){
     echo"Data pekerja baru telah tersimpan";
     header("location:../index.php");
}else{
     die(mysqli_error($host));
}
     // die(mysqli_error($host));

     // Show massege when user added
   // echo "Data added successfull. <a href='index.php'>View Pekerja</>";
  

   }


?>
