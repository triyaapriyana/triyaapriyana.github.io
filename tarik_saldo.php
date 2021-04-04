 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tabungan Kita</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

	<div class="card shadow">
		<div class="card-header">
			Tarik Saldo
		</div>
		<div class="card-body">
			<form action="tarik.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group cols-sm-6">
          <label>Tanggal Penarikan</label>
          <input type="text" name="tanggal" value="<?php echo date('Y-m-d'); ?>" class="form-control" readonly>
        </div>
				<div class="form-group cols-sm-6">
					<label>Nama</label>
					<select class="form-control" name="id_kita">
                                <?php 
                                	require "koneksi.php";
                                    $ambil=$koneksi->query("SELECT * FROM kita");
                                    while ($pecah = $ambil->fetch_assoc()) {
                                    	?>
                                    	<option value="<?php echo $pecah['id_kita']; ?>"><?php echo $pecah['nama']; ?></option>
                                    	<?php
                                    }
                                    
                                ?>
                            
                        </select>
				</div>
				<div class="form-group cols-sm-6">
					<label>Jumlah Penarikan</label>
					<input type="text" name="penarikan"  class="form-control">
				</div>
				<div class="form-group cols-sm-6">
					<input type="submit" value="Tarik" class="btn btn-success">
					<input type="reset" value="Kosongkan" class="btn btn-warning">
				</div>

			</form>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>