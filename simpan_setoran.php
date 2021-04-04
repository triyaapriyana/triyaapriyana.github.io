<?php 
	require 'koneksi.php';
	$tanggal = $_POST['tanggal'];
	$id_kita = $_POST['id_kita'];
	$tanggal = $_POST['tanggal'];
	$setoran = $_POST['setoran'];
	$totalsaldo=$koneksi->query("SELECT SUM(setoran) AS saldo FROM tabungan where id_kita='$id_kita'");
	$cek=mysqli_fetch_assoc($totalsaldo);
	$saldo = $cek['saldo']+$setoran;
	$tambah = $koneksi->query("INSERT INTO tabungan (id_kita, tanggal, setoran, penarikan, saldo) VALUES('$id_kita','$tanggal','$setoran','0','$saldo')");
	if ($tambah) {
		?>
		<script type="text/javascript">
			alert ('Setoran telah disimpan, Terimakasih!');
			window.location="tabungan.php?url=setor";
		</script>
		<?php
	}
 ?>