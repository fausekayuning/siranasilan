<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siransilan</title>
    <link rel="stylesheet" href="navv_style.css"/>
    <meta content="">
<body>
    <header>
    <nav class="navbar">
        <div class="container nav-wrapper">
            <a href="#" class="logo"><div class="logo-word">Siranasilan</div></a>
            <div class="menu-wrapper">
                <ul class="menu">
                    <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">Contact</a></li>
                    <li class="menu-item"><a href="#" class="menu-link">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<nav class="navbar">
    <div class="container nav-wrapper">
        <a href="#" class="logo"><div class="logo-word">Siranasilan</div></a>
        <div class="menu-wrapper">
            <ul class="menu">
                <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
                <li class="menu-item"><a href="#" class="menu-link">Contact</a></li>
                <li class="menu-item"><a href="#" class="menu-link">About</a></li>
            </ul>
        </div>
    </div>
</nav>
</header>
<div class="halaman">
    <div class="landing">
        <section id="home">
            <img src="images/home.png" title="logo petani"/>
        <div class="kolom">
              <p>Halo! Selamat Datang!</p>
              <h2>Temukan Informasi Daftar Pertanian Di Sini</h2>
               </div>
        </div>
        </section>
       <!--untuk login-->
        <section id="Login">
            <img src="images/Google.png" title="logo google"/>
            <img src="images/Instagram.png" title="logo instagram"/>
            <img src="images/Facebook.png" title="logo facebook"/>
            <div class="kolom">
            <div class="container">
        <form method="POST" action="login.php">
            <h2>Silakan Login</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit" name="login">Login</button>
        </form>
        </div>
</body>
</html>

</section>
<!--untuk beranda-->
        <section id="Beranda">
            <div class="background">
                <img src="images/baru.png"alt="background"/>
                <h3>Selamat Datang di Siranasilan</h3>
                <p class="deskripsi">siranasilan adalah suatu website bertemakan pertanian
                    yang memiliki fitur daftar aneka ragam buah, 
                    sayur,sortir, perkembangan hasil pertanian.</p>
            </div>
        </section>
<h3>Daftar_Pekerja</h3>
    <table border="1" class="table">
        <tr>
            <!-- <th>id_petani</th> -->
            <th>nama_petani</th>
            <th>posisi_jabatan</th>
            <th>jenis_kelamin</th>
            <th>alamat_petani</th>
            <th>aksi</th>
        </tr>
        <button><a href="pekerja/pekerja-tambah.php">Tambah</a><br/><br/></button>
        <?php
        //Select Tabel Pekerja dari database
        include "koneksi.php";
        $query_mysql= mysqli_query($host,"SELECT*FROM pekerja") or die(mysql_eror());
        while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $data['nama_petani']; ?></td>
                <td><?php echo $data['posisi_jabatan']; ?></td>
                <td><?php echo $data['jenis_kelamin']; ?></td>
                <td><?php echo $data['alamat_petani']; ?></td>
                <td>
                <button><a href="pekerja/pekerja-ubah.php?ubah=<?php echo$data['id_petani'];?>">Ubah</a></button>
                <button><a href="pekerja/pekerja-hapus.php?hapus=<?php echo$data['id_petani'];?>">Hapus</a></button>
                </td>
            </tr>
            <?php } ?>
            </table>
        
            <h3>Daftar_Buah</h3>
    <table border="1" class="table">
        <tr>
            <th>id_buah</th>
            <th>nama_buah</th>
            <th>Aksi</th>
        </tr>
        <button><a href="daftar-buah/daftarbuah-tambah.php">Tambah</a><br/><br/></button>
        <?php
        //Select Tabel Pekerja dari database
        include "koneksi.php";
        $query_mysql= mysqli_query($host,"SELECT*FROM daftar_buah LIMIT 50") or die(mysql_eror());
        while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $data['id_buah']; ?></td>
                <td><?php echo $data['nama_buah']; ?></td>
                <td>
                <button><a href="daftar-buah/adddaftarbuah-ubah.php?ubah=<?php echo$data['id_buah'];?>">Ubah</a></button>
                <button><a href="daftar-buah/adddaftarbuah-hapus.php?hapus=<?php echo$data['id_buah'];?>">Hapus</a></button>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                </td>

            </tr>
        <?php } ?>
        </table>

        <h3>Daftar_Sayur</h3>
    <table border="1" class="table">
        <tr>
            <th>id_sayur</th>
            <th>nama_sayur</th>
            <th>aksi</th>
        </tr>
        <button><a href="daftar-sayur/daftarsayur-tambah.php">Add New User</a><br/><br/></button>
        <?php
        //Select Tabel Pekerja dari database
        include "koneksi.php";
        $query_mysql= mysqli_query($host,"SELECT*FROM daftar_sayur") or die(mysql_eror());
        while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $data['id_sayur']; ?></td>
                <td><?php echo $data['nama_sayur']; ?></td>
                <td>
                <button><a href="daftar-sayur/daftarsayur-ubah.php?ubah=<?php echo$data['id_sayur'];?>">Ubah</a></button>
                <button><a href="daftar-sayur/daftarsayur-hapus.php?hapus=<?php echo$data['id_sayur'];?>">Hapus</a></button>
                </td>
            </tr>
        <?php } ?>
        </table>

        <h3>Perkembangan_hasil_pertanian</h3>
    <table border="1" class="table">
        <tr>
            <th>id_pemeriksaan</th>
            <th>jenis</th>
            <th>nama</th>
            <th>perkembangan</th>
            <th>aksi</th>

        </tr>
        <button><a href="perkembangan-hasil/perkembangan-tambah.php">tambah</a><br/><br/></button>
        <?php
        //Select Tabel Pekerja dari database
        include "koneksi.php";
        $query_mysql= mysqli_query($host,"SELECT*FROM perkembangan_hasil_pertanian") or die(mysql_eror());
        while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $data['id_pemeriksaan']; ?></td>
                <td><?php echo $data['jenis']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['perkembangan']; ?></td>
                <td>
                <button><a href="perkembangan-hasil/perkembangan-ubah.php?ubah=<?php echo$data['id_pemeriksaan'];?>">Ubah</a></button>
                <button><a href='perkembangan-hasil/perkembangan-hapus.php?hapus=<?php echo $data['id_pemeriksaan'];?>'> Hapus </a></button>
        </td>
            </tr>
        <?php } ?>
        </table>

        <h3>Sortir</h3>
    <table border="1" class="table">
        <tr>
            <th>id_petani</th>
            <th>id_pemeriksaan</th>
            <th>id_sortit</th>
            <th>jenis</th>
            <th>nama</th>
            <th>kerusakan</th>
            <th>jenis_pergantian</th>
            <th>tanggal_pergantian</th>
            <th>aksi</th>
        </tr>
        <button><a href="sortir/sortir-tambah.php">Add New User</a><br/><br/></button>
        <?php
        //Select Tabel Pekerja dari database
        include "koneksi.php";
        $query_mysql= mysqli_query($host,"SELECT*FROM sortir") or die(mysql_eror());
        while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $data['id_petani']; ?></td>
                <td><?php echo $data['id_pemeriksaan']; ?></td>
                <td><?php echo $data['id_sortir']; ?></td>
                <td><?php echo $data['jenis']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['kerusakan']; ?></td>
                <td><?php echo $data['jenis_pergantian']; ?></td>
                <td><?php echo $data['tanggal_pergantian']; ?></td>
                <td>
                <button><a href='sortir/sortir-ubah.php?ubah=<?php echo $data['id_sortir'];?>'> Ubah </a></button>
                <button><a href='sortir/sortir-hapus.php?hapus=<?php echo $data['id_sortir'];?>'> Hapus </a></button>
        </td>
            </tr>
        <?php } ?>

        </table>
  
    </body>
</html>