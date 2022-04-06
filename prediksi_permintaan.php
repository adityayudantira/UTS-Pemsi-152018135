<!DOCTYPE html>
<html style="font-size: 16px;"><html>
	<head>
	<title>Simulasi Penjualan Velg dengan MonteCarlo</title>
    <link href="logo.png" rel="icon">
		
		<link rel="stylesheet" href="css/custom.css">
	  	<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="img/favicon.ico">
	  	<script src="js/jquery.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
		<link href="css/custom.css" rel="stylesheet">
			

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<meta name="keywords" content="​Mountain Retreat Resort">
		<meta name="description" content="">
		<meta name="page_type" content="np-template-header-footer-from-plugin">
		<title>Home 1</title>
		<link rel="stylesheet" href="nicepage.css" media="screen">
		<link rel="stylesheet" href="Home-1.css" media="screen">
		<script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
		<script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
		<meta name="generator" content="Nicepage 4.8.2, nicepage.com">
		<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
		<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme:400">
		
		
		<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
		}</script>
		<meta name="theme-color" content="#478ac9">
		<meta property="og:title" content="Home 1">
		<meta property="og:type" content="website">
	</head>

	<body class="u-body u-xl-mode">
	<section class="u-align-center u-clearfix u-image u-shading u-section-1" id="carousel_790c" data-image-width="1300" data-image-height="1023">

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
			</div>
		</div>
	</nav>

	<!-- Container -->
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">Keterangan</div>
				<div class="panel-body">
					<ul class="nav nav-tabs">
						   <li class="active"><a data-toggle="tab" href="#monte">Studi Kasus</a></li>
						</ul>
			  			 <div class="tab-content">
			  			 	  <div id="monte" class="tab-pane fade in active" style="padding-top: 20px;">
							    	<div style="color: black;">
							      		<p>Manajer HSR Wheel sedang memutuskan berapa jumlah velg dengan ukuran ring 17 yang harus dipesan setiap minggu. </p>
										<p>Salah satu pertimbangan utama dalam keputusan utama manajer tersebut adalah jumlah permintaan setiap minggunya. </p>
										<p> Ketentuan yang dibuat oleh manajer adalah :</p>
										<ul>
											<p> 
												Velg dengan ukuran ring 17 dijual dengan harga Rp 4.500.000,-. 
											</p>
											<p>
												Jumlah permintaan velg 	merupakan variable acak (dianggap sebagai X) yang berkisar mulai dari 1 pasang sampai 5 pasang setiap minggu.	
											</p>	
											<p>
												Dari catatan yang tersedia, manajer telah menetapkan frekuensi permintaan velg untuk 2 tahun atau 96 minggu terakhir dan data itu adalah sebagai berikut.
											</p>
										</ul>
							      	</div>
							    </div>
							</div>
		   			</div>
		   	</div>

		<div class="panel panel-primary">
					<div class="panel-heading">Input Data Permintaan Velg</div>
						<div class="panel-body">
							<?php if(empty($_POST)): ?>
							<div class="input-group">
								<form action="prediksi_permintaan.php" method="post">
									<table class="custom-padding-table">
										<tr>
											<td style="color: black;">Masukkan jumlah data permintaan</td>
											<td>:</td>
											<td><input type="number" min="0" name="jumlah" class="d-flex justify-content-between align-items-center container__create form-control" required="" oninvalid="this.setCustomValidity('Masukkan jumlah data untuk melanjutkan proses simulasi !')" oninput="setCustomValidity('')"></td>
											<div class="input-group-btn">
											<td><input type="submit" value="Ok" class="btn btn-success custom__btn__result"></td>
      										</div>
									</table>
								</form>
								
							</div>
							
							<?php else: ?>
								<?php $banyak = $_POST['jumlah'];?>
									<?php if(!empty($banyak)): ?>
									<div class="input-group" style="color: black;">
									<h1><center>Tahap 1</center></h1>
									<p><center>Silahkan masukan data permintaan</center></p>
									  <form action="proses_prediksi_permintaan.php" method="post">
									  	<div class="custom__table table-responsive">
										  <table class="table table-hover custom-table-header">
												  <tr>
													<th>Permintaan</th>
													<th>Frekuensi</th>
												  <tr>
											<?php for($i=0; $i<$banyak; $i++): ?>
												  <tr>
													  <td><input type=number min=0 name=demand[] placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap isi jumlah permintaan!')" oninput="setCustomValidity('')"></td>
													  <td><input type=number min=1 name=freq[] placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap isi jumlah frekuensi!')" oninput="setCustomValidity('')"></td>
												  </tr>
											<?php endfor; ?>
										  </table>
										  <table class="table table-hover custom-table-header">
												  <tr>
													<th>Biaya Produksi / Unit</th>
													<th>Harga Penjualan / Unit</th>
												  <tr>
												  <tr>
													  <td><input type=number min=1 name="biaya" placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
													  <td><input type=number min=1 name="penjualan" placeholder="0" class="form-control" required="" oninvalid="this.setCustomValidity('Harap di isi !')" oninput="setCustomValidity('')"></td>
												  </tr>
										  </table>
										  <div class="input-group-btn">
											<input type="hidden" name="jumlah" value="<?php echo $banyak; ?>">
											<center><input type="submit" value="Hitung" name="submit" class="btn btn-success" style="padding-left: 30px; padding-right: 30px;"></center>
										  </div>
										</div>
									  </form>
									</div>
									<?php endif; ?>
							<?php endif; ?>
									</div>
						</div>
					</div>
	</div>
	
	</body>

</html>
