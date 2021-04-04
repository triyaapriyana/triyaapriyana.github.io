<?php 
	require 'koneksi.php';
	$id_kita = $_POST['id_kita'];
	$penarikan = $_POST['penarikan'];
	$tanggal = $_POST['tanggal'];
	$setoran = "0";

	$jumlahsaldo=$koneksi->query("SELECT * FROM tabungan where id_kita='$id_kita' ORDER BY id_tabungan DESC");
	$cek=mysqli_fetch_assoc($jumlahsaldo);

	$totalsaldo = $cek['saldo']-$penarikan;
	$tarik = $koneksi->query("INSERT INTO tabungan (id_kita, tanggal, setoran, penarikan, saldo) VALUES('$id_kita','$tanggal','$setoran','$penarikan','$totalsaldo')");
	if ($tarik) {
		?>
		<script type="text/javascript">
			alert ('Saldo telah ditarik, Terimakasih!');
			window.location="tabungan.php?url=setor";
		</script>
		<?php
	}
 ?>