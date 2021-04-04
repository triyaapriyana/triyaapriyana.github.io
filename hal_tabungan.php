<?php 

	if (isset($_GET['url'])) {
		$url=$_GET['url'];
		switch ($url) {
			case 'setor':
				include "setor.php";
				break;

			case 'lihat_tabungan':
				include "lihat_tabungan.php";
				break;

			case 'detail_tabungan':
				include "detail_tabungan.php";
				break;

			case 'hapus_setoran':
				include "hapus_setoran.php";
				break;

			case 'tarik_saldo':
				include "tarik_saldo.php";
				break;


		}
	}
	else{
		?>
		<div class="col-md-12">
			<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20" behavior="alternate"><h1>SELAMAT DATANG DI TABUNGAN<b> KITA</b></h1></marquee>
		</div>
		<?php
			require "koneksi.php";
			$totalsaldo=$koneksi->query("SELECT SUM(setoran) AS saldo FROM tabungan");
			$totalpenarikan=$koneksi->query("SELECT SUM(penarikan) AS totalpenarikan FROM tabungan");
			if ($cek=mysqli_fetch_assoc($totalsaldo)) {	
		?>
		<!-- carousel -->
		<div id="carouselExampleControls" class="carousel slide mb-4" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="img/kita1.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/kita2.png" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="img/kita3.png" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<!-- card -->
		<div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  	<div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah tabungan kita : </div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">
	                      	Rp. <?php echo $cek['saldo']; ?>
	                      </div>
	                    </div>
	                     <div class="col-auto">
	                    	<i class="fa fa-university fa-4x text-gray-300"></i>
	                    </div>
                  	</div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php 
    	if ($cek1=mysqli_fetch_assoc($totalpenarikan)) {	
     ?>
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  	<div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pemakaian : </div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800">
	                      	Rp. <?php echo $cek1['totalpenarikan']; ?>
	                      </div>
	                    </div>
	                    <div class="col-auto">
	                    	<i class="fa fa-shopping-cart  fa-4x text-gray-300"></i>
	                    </div>
                  	</div>
                </div>
            </div>
        </div>
<?php
	} }
 ?>