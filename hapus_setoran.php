<?php
	require "koneksi.php";
	$koneksi->query("DELETE FROM tabungan WHERE id_tabungan='$_GET[id]'");
	
	?>
		<script type="text/javascript">
			alert ('Setoran telah dihapus');
			window.location="tabungan.php?url=lihat_tabungan";
		</script>
		<?php
?>