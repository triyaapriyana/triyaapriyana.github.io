<?php 
	require 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$ambil = $koneksi->query("SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");
	$cek = mysqli_num_rows($ambil);
	if ($cek>0) {
		$data = mysqli_fetch_array($ambil);
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		header('location:tabungan.php');
	}
	else{
		?>
		<script type="text/javascript">
			alert ('Username atau Password anda tidak ditemukan!');
			window.location="index.php";
		</script>
		<?php
	}
 ?>