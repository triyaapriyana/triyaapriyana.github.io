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

    <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-dark">Data Tabungan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                    <?php 
                        require 'koneksi.php';
                        $nomor=1;
                        $ambil=$koneksi->query("SELECT * FROM kita");
                        while($pecah = $ambil->fetch_assoc()){ ?>
                  <tbody>
                    <tr>
                      <td><?php echo $nomor; ?></td>
                      <td><?php echo $pecah['nama']; ?></td>
                      <td>
                        <a href="?url=detail_tabungan&id=<?php echo $pecah['id_kita']; ?>" class="btn btn-success btn-sm btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-database"></i>
                            </span>
                            <span class="text">Lihat Tabungan</span>
                        </a>
                      </td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
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