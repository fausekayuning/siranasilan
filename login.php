<?php
include_once('koneksi.php');


// Proses login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

	$uhuy = "SELECT * FROM pekerja WHERE nama_petani = '$username' and id_petani = $password";
	$result = mysqli_query($host,$uhuy);
	$data = mysqli_fetch_assoc($result);
	// $mamamia = $_post['']

    // Periksa kredensial pengguna
    if ($data) {
        // Login berhasil
        echo "
		<script>
			alert('Login berhasil. Selamat datang, $username!');
			window.location= 'index.php';
		</script>";
        // Lakukan aksi setelah login sukses, misalnya redirect ke halaman utama
        // header("Location: home.php");
    } else {
        // Login gagal
        echo "
		<script>
			alert('Login failed');
			window.location= 'index.php';
		</script>";
    }
}
?>
